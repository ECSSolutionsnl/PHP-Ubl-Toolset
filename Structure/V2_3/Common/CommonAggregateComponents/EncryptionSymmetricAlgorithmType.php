<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EncryptionSymmetricAlgorithmType
 *
 * ABIE
 *  Encryption Symmetric Algorithm. Details
 *  Details of a symmetric algorithm used in encryption.
 *  Encryption Symmetric Algorithm
 * XSD Type: EncryptionSymmetricAlgorithmType
 */
class EncryptionSymmetricAlgorithmType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OID $oID
     */
    private $oID = null;

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
     * Gets as iD
     *
     * BBIE
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Encryption Symmetric Algorithm. Identifier
     *  A human-readable identifier the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  AES-256 Rijndael CBC
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as oID
     *
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OID
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * Sets a new oID
     *
     * BBIE
     *  Encryption Symmetric Algorithm. OID. Identifier
     *  The object identifier for the algorithm.
     *  0..1
     *  Encryption Symmetric Algorithm
     *  OID
     *  Identifier
     *  Identifier. Type
     *  2.16.840.1.101.3.4.1.42
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OID $oID
     * @return self
     */
    public function setOID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OID $oID = null)
    {
        $this->oID = $oID;
        return $this;
    }
}

