<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing ShareholderPartyType
 *
 * ABIE
 *  Shareholder Party. Details
 *  A class to describe a shareholder party.
 *  Shareholder Party
 * XSD Type: ShareholderPartyType
 */
class ShareholderPartyType
{
    /**
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent
     */
    private $partecipationPercent = null;

    /**
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as partecipationPercent
     *
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartecipationPercent
     */
    public function getPartecipationPercent()
    {
        return $this->partecipationPercent;
    }

    /**
     * Sets a new partecipationPercent
     *
     * BBIE
     *  Shareholder Party. Partecipation. Percent
     *  The shareholder participation, expressed as a percentage.
     *  0..1
     *  Shareholder Party
     *  Partecipation
     *  Percent
     *  Percent. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent
     * @return self
     */
    public function setPartecipationPercent(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent = null)
    {
        $this->partecipationPercent = $partecipationPercent;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }
}

