<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing WinningPartyType
 *
 * ABIE
 *  Winning Party. Details
 *  A party that is identified as the awarded by a tender result.
 *  Winning Party
 * XSD Type: WinningPartyType
 */
class WinningPartyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Rank $rank
     */
    private $rank = null;

    /**
     * ASBIE
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
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
     * Gets as rank
     *
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Rank
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Rank $rank
     * @return self
     */
    public function setRank(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Rank $rank = null)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
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
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
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

