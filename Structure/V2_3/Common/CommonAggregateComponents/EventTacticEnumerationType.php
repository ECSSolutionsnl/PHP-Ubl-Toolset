<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EventTacticEnumerationType
 *
 * ABIE
 *  Event Tactic Enumeration. Details
 *  A class to define a set of codes that describes a retail tactic.
 *  Event Tactic Enumeration
 * XSD Type: EventTacticEnumerationType
 */
class EventTacticEnumerationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     */
    private $consumerIncentiveTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DisplayTacticTypeCode $displayTacticTypeCode
     */
    private $displayTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeatureTacticTypeCode $featureTacticTypeCode
     */
    private $featureTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     */
    private $tradeItemPackingLabelingTypeCode = null;

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
     * Gets as consumerIncentiveTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumerIncentiveTacticTypeCode
     */
    public function getConsumerIncentiveTacticTypeCode()
    {
        return $this->consumerIncentiveTacticTypeCode;
    }

    /**
     * Sets a new consumerIncentiveTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     * @return self
     */
    public function setConsumerIncentiveTacticTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode = null)
    {
        $this->consumerIncentiveTacticTypeCode = $consumerIncentiveTacticTypeCode;
        return $this;
    }

    /**
     * Gets as displayTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DisplayTacticTypeCode
     */
    public function getDisplayTacticTypeCode()
    {
        return $this->displayTacticTypeCode;
    }

    /**
     * Sets a new displayTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DisplayTacticTypeCode $displayTacticTypeCode
     * @return self
     */
    public function setDisplayTacticTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DisplayTacticTypeCode $displayTacticTypeCode = null)
    {
        $this->displayTacticTypeCode = $displayTacticTypeCode;
        return $this;
    }

    /**
     * Gets as featureTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeatureTacticTypeCode
     */
    public function getFeatureTacticTypeCode()
    {
        return $this->featureTacticTypeCode;
    }

    /**
     * Sets a new featureTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeatureTacticTypeCode $featureTacticTypeCode
     * @return self
     */
    public function setFeatureTacticTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeatureTacticTypeCode $featureTacticTypeCode = null)
    {
        $this->featureTacticTypeCode = $featureTacticTypeCode;
        return $this;
    }

    /**
     * Gets as tradeItemPackingLabelingTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TradeItemPackingLabelingTypeCode
     */
    public function getTradeItemPackingLabelingTypeCode()
    {
        return $this->tradeItemPackingLabelingTypeCode;
    }

    /**
     * Sets a new tradeItemPackingLabelingTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     * @return self
     */
    public function setTradeItemPackingLabelingTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode = null)
    {
        $this->tradeItemPackingLabelingTypeCode = $tradeItemPackingLabelingTypeCode;
        return $this;
    }
}

