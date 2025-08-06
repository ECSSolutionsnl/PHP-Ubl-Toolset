<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EncryptionCertificatePathChainType
 *
 * ABIE
 *  Encryption Certificate Path Chain. Details
 *  Details of a certificate path chain used in encryption.
 *  Encryption Certificate Path Chain
 * XSD Type: EncryptionCertificatePathChainType
 */
class EncryptionCertificatePathChainType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * Adds as uBLExtension
     *
     * A container for extensions foreign to the document.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(?array $uBLExtensions = null)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Encryption Certificate Path Chain. Value. Text
     *  The path chain value manifest in the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value
     * @return self
     */
    public function setValue(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Encryption Certificate Path Chain. URI. Identifier
     *  The path chain value references external to the instance.
     *  0..1
     *  Encryption Certificate Path Chain
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }
}

