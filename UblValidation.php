<?php

namespace ECSSolutions\UblToolset;

use RuntimeException;

/**
 * UblValidation Functionality
 */
class UblValidation{

    public const SI_UBL_2_0 = "DataValidation/XSL/si-ubl-2.0.xsl";

    /**
     * Verify if XML is valid according to XSD schema
     */
    public static function validateSchema(mixed $input)
    {
        if (!is_string($input))
        {
            return;
        }

        $xml = file_exists($input) ? file_get_contents($input) : $input;

        [$type, $version] = UblParser::detectTypeAndVersionFromXml($xml);

        $dom = new \DOMDocument();
        $dom->loadXML($xml);

        $xsd = __DIR__ . "/Structure/{$version}/XSD/maindoc/{$type}.xsd";

        if (!$dom->schemaValidate($xsd))
        {
            // Foutdetails ophalen
            libxml_use_internal_errors(true);
            $errors = libxml_get_errors();
            foreach ($errors as $error) {
                if( $error->level === LIBXML_ERR_ERROR || $error->level === LIBXML_ERR_FATAL)
                {
                    libxml_clear_errors();
                    throw new \DOMException($error->message, $error->code);
                }
            }
        }
    }

    /**
     * Verify if XML is valid according to schematron file
     */
    public static function validateData(mixed $input, string $xsl)
    {
        exec('java --version 2>&1', $output, $exitCode);
        if( $exitCode !== 0 ){
            throw new \RuntimeException('Java runtime is required for data validation.');
        }
        
        $xsl = file_exists($xsl) ? $xsl : __DIR__ . "/" . $xsl;

        if (!file_exists($xsl))
        {
            throw new \Exception('XSL File was not found.');
        }
        
        if (!is_string($input))
        {
            $input = self::createTempFile(UblParser::parseToXml($input));
        }
        else if (!file_exists($input))
        {
            $input = self::createTempFile($input);
        }
        
        $output = self::createTempFile();
        $cmd = "java -jar " . __DIR__ . "/DataValidation/saxon.jar -s:" . escapeshellarg($input) . " -xsl:" . escapeshellarg($xsl) . " -o:" . escapeshellarg($output);
        exec($cmd, $outputLines, $exitCode);
        if ($exitCode === 0 && file_exists($output))
        {
            return file_get_contents($output);
        }
        throw new \RuntimeException('Data validation has failed due to error running Saxon.');
    }

    /**
     * Function for creating temporary file
     */
    private static function createTempFile(string $content = '', string $prefix = 'tmp_', string $extension = '.xml'): string {
        // Maak een tijdelijke bestandsnaam
        $tempFile = tempnam(sys_get_temp_dir(), $prefix);

        // Hernoem met juiste extensie
        $newTempFile = $tempFile . $extension;
        rename($tempFile, $newTempFile);

        // Schrijf de inhoud
        file_put_contents($newTempFile, $content);

        // Registreer cleanup bij script-exit
        register_shutdown_function(function () use ($newTempFile) {
            if (file_exists($newTempFile)) {
                unlink($newTempFile);
            }
        });

        return $newTempFile;
    }

}