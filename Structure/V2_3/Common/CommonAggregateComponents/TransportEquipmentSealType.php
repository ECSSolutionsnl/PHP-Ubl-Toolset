<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TransportEquipmentSealType
 *
 * ABIE
 *  Transport Equipment Seal. Details
 *  A class to describe a device (a transport equipment seal) for securing the doors of a shipping container.
 *  Transport Equipment Seal
 *  Container Seal
 * XSD Type: TransportEquipmentSealType
 */
class TransportEquipmentSealType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     */
    private $sealIssuerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Condition $condition
     */
    private $condition = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealStatusCode $sealStatusCode
     */
    private $sealStatusCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealingPartyType $sealingPartyType
     */
    private $sealingPartyType = null;

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
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
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
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealIssuerTypeCode
     */
    public function getSealIssuerTypeCode()
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * Sets a new sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealIssuerTypeCode $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealIssuerTypeCode $sealIssuerTypeCode = null)
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;
        return $this;
    }

    /**
     * Gets as condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Condition $condition
     * @return self
     */
    public function setCondition(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Condition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealStatusCode
     */
    public function getSealStatusCode()
    {
        return $this->sealStatusCode;
    }

    /**
     * Sets a new sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealStatusCode $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealStatusCode $sealStatusCode = null)
    {
        $this->sealStatusCode = $sealStatusCode;
        return $this;
    }

    /**
     * Gets as sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealingPartyType
     */
    public function getSealingPartyType()
    {
        return $this->sealingPartyType;
    }

    /**
     * Sets a new sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealingPartyType $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SealingPartyType $sealingPartyType = null)
    {
        $this->sealingPartyType = $sealingPartyType;
        return $this;
    }
}

