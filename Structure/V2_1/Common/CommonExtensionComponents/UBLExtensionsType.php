<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents;

/**
 * Class representing UBLExtensionsType
 *
 * A container for all extensions present in the document.
 * XSD Type: UBLExtensionsType
 */
class UBLExtensionsType
{
    /**
     * A single extension for private use.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtension
     */
    private $uBLExtension = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A single extension for private use.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtension(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtension[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtension($index)
    {
        return isset($this->uBLExtension[$index]);
    }

    /**
     * unset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtension($index)
    {
        unset($this->uBLExtension[$index]);
    }

    /**
     * Gets as uBLExtension
     *
     * A single extension for private use.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtension()
    {
        return $this->uBLExtension;
    }

    /**
     * Sets a new uBLExtension
     *
     * A single extension for private use.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtension
     * @return self
     */
    public function setUBLExtension(array $uBLExtension)
    {
        $this->uBLExtension = $uBLExtension;
        return $this;
    }
}

