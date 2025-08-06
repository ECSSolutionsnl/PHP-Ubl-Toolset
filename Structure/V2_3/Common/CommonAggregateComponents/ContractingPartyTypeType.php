<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractingPartyTypeType
 *
 * ABIE
 *  Contracting Party Type. Details
 *  The type of contracting party that is independent of its role.
 *  Contracting Party Type
 * XSD Type: ContractingPartyTypeType
 */
class ContractingPartyTypeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode
     */
    private $partyTypeCode = null;

    /**
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyType[] $partyType
     */
    private $partyType = [
        
    ];

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
     * Gets as partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyTypeCode
     */
    public function getPartyTypeCode()
    {
        return $this->partyTypeCode;
    }

    /**
     * Sets a new partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode
     * @return self
     */
    public function setPartyTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode = null)
    {
        $this->partyTypeCode = $partyTypeCode;
        return $this;
    }

    /**
     * Adds as partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyType $partyType
     */
    public function addToPartyType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyType $partyType)
    {
        $this->partyType[] = $partyType;
        return $this;
    }

    /**
     * isset partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyType($index)
    {
        return isset($this->partyType[$index]);
    }

    /**
     * unset partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyType($index)
    {
        unset($this->partyType[$index]);
    }

    /**
     * Gets as partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyType[]
     */
    public function getPartyType()
    {
        return $this->partyType;
    }

    /**
     * Sets a new partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..n
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartyType[] $partyType
     * @return self
     */
    public function setPartyType(?array $partyType = null)
    {
        $this->partyType = $partyType;
        return $this;
    }
}

