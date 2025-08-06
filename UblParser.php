<?php

namespace ECSSolutions\UblToolset;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Handler\HandlerRegistryInterface;

/**
 * UblParser Functionality
 */
class UblParser
{
    
    /**
     * @var array
     */
    protected static array $serializerCache = [];

    /**
     * @var string
     */
    protected static $timezone = 'UTC';

    /**
     * Set timezone for date conversions
     */
    public static function setTimezone($timezone){
        self::$timezone = $timezone;
    }

    /**
     * Parse an XML string or file path into a UBL object
     */
    public static function parseFromXml(string $input): object
    {
        $xml = file_exists($input) ? file_get_contents($input) : $input;

        [$type, $version] = self::detectTypeAndVersionFromXml($xml);
        $serializer = self::getSerializer($version);

        $fqcn = "ECSSolutions\\UblToolset\\Structure\\{$version}\\Maindoc\\{$type}\\{$type}";

        return $serializer->deserialize($xml, $fqcn, 'xml');
    }

    /**
     * Serialize a UBL object to XML
     */
    public static function parseToXml(object $object): string
    {
        $class = get_class($object);

        if (!preg_match('#Structure\\\\(?P<version>V[0-9_]+)\\\\Maindoc\\\\(?P<type>[a-zA-Z0-9]+)\\\\#', $class, $matches)) {
            throw new \RuntimeException("Could not extract version/type from class: $class");
        }

        $version = $matches['version'];
  
        $serializer = self::getSerializer($version);
        return $serializer->serialize($object, 'xml');
    }

    /**
     * Automatically load the correct serializer based on version
     */
    protected static function getSerializer(string $version): SerializerInterface
    {
        if (!isset(self::$serializerCache[$version])) {
            $path = __DIR__ . "/Structure/{$version}/Metadata";

            if (!is_dir($path)) {
                throw new \RuntimeException("Metadata directory not found: {$path}");
            }

            $ublFactory = new UblSerializationFactory(array(
                'urn:oasis:names:specification:ubl:schema:xsd:QualifiedDataTypes-2' => 'qdt',
                'urn:oasis:names:specification:bdndr:schema:xsd:UnqualifiedDataTypes-1' => 'udt',
                'http://www.w3.org/2001/XMLSchema' => 'xsd',
                'urn:un:unece:uncefact:documentation:2' => 'ccts',
                'urn:oasis:names:specification:ubl:schema:xsd:SignatureAggregateComponents-2' => 'sac',
                'urn:oasis:names:specification:ubl:schema:xsd:SignatureBasicComponents-2' => 'sbc',
                'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2' => 'cbc',
                'http://www.w3.org/2000/09/xmldsig#' => 'ds',
                'http://uri.etsi.org/01903/v1.3.2#' => 'xades',
                'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2' => 'cac',
                'urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2' => 'ext',
                'urn:un:unece:uncefact:data:specification:CoreComponentTypeSchemaModule:2' => 'ccts-cct',
                'http://www.w3.org/2009/xmldsig11#' => 'dsig11',
                'urn:oasis:names:specification:ubl:schema:xsd:UnqualifiedDataTypes-2' => 'udt',
            ), self::$timezone);

            $builder = SerializerBuilder::create();
            $builder->addMetadataDir($path, "ECSSolutions\\UblToolset");
            $builder->setSerializationVisitor('xml', $ublFactory);
            $builder->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy());
            $builder->configureHandlers(function (HandlerRegistryInterface $handler) use ($builder, $ublFactory){
                $builder->addDefaultHandlers();
                $handler->registerSubscribingHandler($ublFactory);
            });

            self::$serializerCache[$version] = $builder->build();

        }

        return self::$serializerCache[$version];
    }

    /**
     * Detect the class and version from XML root + cbc:UBLVersionID
     */
    public static function detectTypeAndVersionFromXml(string $xml): array
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $root = $dom->documentElement;

        $type = $root->localName;

        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');
        $versionNode = $xpath->query('//cbc:UBLVersionID')->item(0);
        $version = $versionNode ? $versionNode->nodeValue : '2.1';
        $versionConst = 'V' . str_replace('.', '_', $version);

        return [$type, $versionConst];
    }
}
?>