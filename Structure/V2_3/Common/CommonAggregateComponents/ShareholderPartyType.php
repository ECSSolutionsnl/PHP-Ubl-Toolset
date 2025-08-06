<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

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
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

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
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent
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
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartecipationPercent
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
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent
     * @return self
     */
    public function setPartecipationPercent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PartecipationPercent $partecipationPercent = null)
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
     *  Shareholder Party. Party
     *  The shareholder party.
     *  0..1
     *  Shareholder Party
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }
}

