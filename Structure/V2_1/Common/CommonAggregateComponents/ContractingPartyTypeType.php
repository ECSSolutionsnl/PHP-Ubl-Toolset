<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

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
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode
     */
    private $partyTypeCode = null;

    /**
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyType $partyType
     */
    private $partyType = null;

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
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyTypeCode
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
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode
     * @return self
     */
    public function setPartyTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyTypeCode $partyTypeCode = null)
    {
        $this->partyTypeCode = $partyTypeCode;
        return $this;
    }

    /**
     * Gets as partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyType
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
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyType $partyType
     * @return self
     */
    public function setPartyType(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartyType $partyType = null)
    {
        $this->partyType = $partyType;
        return $this;
    }
}

