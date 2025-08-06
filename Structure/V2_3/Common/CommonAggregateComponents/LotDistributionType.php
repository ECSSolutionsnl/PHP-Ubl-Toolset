<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing LotDistributionType
 *
 * ABIE
 *  Lot Distribution. Details
 *  A class defining how to treat different lots in a single procurement.
 *  Lot Distribution
 * XSD Type: LotDistributionType
 */
class LotDistributionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric
     */
    private $maximumLotsAwardedNumeric = null;

    /**
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric
     */
    private $maximumLotsSubmittedNumeric = null;

    /**
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GroupingLots[] $groupingLots
     */
    private $groupingLots = [
        
    ];

    /**
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotsGroup[] $lotsGroup
     */
    private $lotsGroup = [
        
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
     * Gets as maximumLotsAwardedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsAwardedNumeric
     */
    public function getMaximumLotsAwardedNumeric()
    {
        return $this->maximumLotsAwardedNumeric;
    }

    /**
     * Sets a new maximumLotsAwardedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Awarded. Numeric
     *  The maximum number of lots that can be awarded to a single tenderer.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Awarded
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric
     * @return self
     */
    public function setMaximumLotsAwardedNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsAwardedNumeric $maximumLotsAwardedNumeric = null)
    {
        $this->maximumLotsAwardedNumeric = $maximumLotsAwardedNumeric;
        return $this;
    }

    /**
     * Gets as maximumLotsSubmittedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsSubmittedNumeric
     */
    public function getMaximumLotsSubmittedNumeric()
    {
        return $this->maximumLotsSubmittedNumeric;
    }

    /**
     * Sets a new maximumLotsSubmittedNumeric
     *
     * BBIE
     *  Lot Distribution. Maximum Lots Submitted. Numeric
     *  The maximum number of lots to which a tenderer can submit an offer to.
     *  0..1
     *  Lot Distribution
     *  Maximum Lots Submitted
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric
     * @return self
     */
    public function setMaximumLotsSubmittedNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumLotsSubmittedNumeric $maximumLotsSubmittedNumeric = null)
    {
        $this->maximumLotsSubmittedNumeric = $maximumLotsSubmittedNumeric;
        return $this;
    }

    /**
     * Adds as groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GroupingLots $groupingLots
     */
    public function addToGroupingLots(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GroupingLots $groupingLots)
    {
        $this->groupingLots[] = $groupingLots;
        return $this;
    }

    /**
     * isset groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupingLots($index)
    {
        return isset($this->groupingLots[$index]);
    }

    /**
     * unset groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupingLots($index)
    {
        unset($this->groupingLots[$index]);
    }

    /**
     * Gets as groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GroupingLots[]
     */
    public function getGroupingLots()
    {
        return $this->groupingLots;
    }

    /**
     * Sets a new groupingLots
     *
     * BBIE
     *  Lot Distribution. Grouping Lots. Text
     *  Description on how to combine lots when submitting a tender.
     *  0..n
     *  Lot Distribution
     *  Grouping Lots
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GroupingLots[] $groupingLots
     * @return self
     */
    public function setGroupingLots(?array $groupingLots = null)
    {
        $this->groupingLots = $groupingLots;
        return $this;
    }

    /**
     * Adds as lotsGroup
     *
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotsGroup $lotsGroup
     */
    public function addToLotsGroup(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotsGroup $lotsGroup)
    {
        $this->lotsGroup[] = $lotsGroup;
        return $this;
    }

    /**
     * isset lotsGroup
     *
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLotsGroup($index)
    {
        return isset($this->lotsGroup[$index]);
    }

    /**
     * unset lotsGroup
     *
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLotsGroup($index)
    {
        unset($this->lotsGroup[$index]);
    }

    /**
     * Gets as lotsGroup
     *
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotsGroup[]
     */
    public function getLotsGroup()
    {
        return $this->lotsGroup;
    }

    /**
     * Sets a new lotsGroup
     *
     * ASBIE
     *  Lot Distribution. Lots Group
     *  A combination of lots used when evaluating a tender.
     *  0..n
     *  Lot Distribution
     *  Lots Group
     *  Lots Group
     *  Lots Group
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LotsGroup[] $lotsGroup
     * @return self
     */
    public function setLotsGroup(?array $lotsGroup = null)
    {
        $this->lotsGroup = $lotsGroup;
        return $this;
    }
}

