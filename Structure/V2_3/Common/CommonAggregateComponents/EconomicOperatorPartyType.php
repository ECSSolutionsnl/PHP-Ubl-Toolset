<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EconomicOperatorPartyType
 *
 * ABIE
 *  Economic Operator Party. Details
 *  A class to describe a potential contractor, supplier and service provider responding to a tender.
 *  Economic Operator Party
 * XSD Type: EconomicOperatorPartyType
 */
class EconomicOperatorPartyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualifyingParty[] $qualifyingParty
     */
    private $qualifyingParty = [
        
    ];

    /**
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     */
    private $party = null;

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
     * Adds as qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualifyingParty $qualifyingParty
     */
    public function addToQualifyingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualifyingParty $qualifyingParty)
    {
        $this->qualifyingParty[] = $qualifyingParty;
        return $this;
    }

    /**
     * isset qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifyingParty($index)
    {
        return isset($this->qualifyingParty[$index]);
    }

    /**
     * unset qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifyingParty($index)
    {
        unset($this->qualifyingParty[$index]);
    }

    /**
     * Gets as qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualifyingParty[]
     */
    public function getQualifyingParty()
    {
        return $this->qualifyingParty;
    }

    /**
     * Sets a new qualifyingParty
     *
     * ASBIE
     *  Economic Operator Party. Qualifying Party
     *  The party qualifying this economic operator.
     *  0..n
     *  Economic Operator Party
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\QualifyingParty[] $qualifyingParty
     * @return self
     */
    public function setQualifyingParty(?array $qualifyingParty = null)
    {
        $this->qualifyingParty = $qualifyingParty;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Economic Operator Party. Economic Operator Role
     *  The role of the party in a tender consortium.
     *  0..1
     *  Economic Operator Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorRole $economicOperatorRole = null)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Economic Operator Party. Party
     *  The party information about the economic operator in a tender.
     *  1
     *  Economic Operator Party
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }
}

