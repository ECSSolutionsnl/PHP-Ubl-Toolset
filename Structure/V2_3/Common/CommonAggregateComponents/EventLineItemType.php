<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EventLineItemType
 *
 * ABIE
 *  Event Line Item. Details
 *  A class to define a line item describing the expected impacts associated with a retail event involving a specific product at a specific location.
 *  Event Line Item
 * XSD Type: EventLineItemType
 */
class EventLineItemType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineNumberNumeric $lineNumberNumeric
     */
    private $lineNumberNumeric = null;

    /**
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation
     */
    private $participatingLocationsLocation = null;

    /**
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RetailPlannedImpact[] $retailPlannedImpact
     */
    private $retailPlannedImpact = [
        
    ];

    /**
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyItem $supplyItem
     */
    private $supplyItem = null;

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
     * Gets as lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineNumberNumeric
     */
    public function getLineNumberNumeric()
    {
        return $this->lineNumberNumeric;
    }

    /**
     * Sets a new lineNumberNumeric
     *
     * BBIE
     *  Event Line Item. Line Number. Numeric
     *  The number of this event line item.
     *  0..1
     *  Event Line Item
     *  Line Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineNumberNumeric $lineNumberNumeric
     * @return self
     */
    public function setLineNumberNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineNumberNumeric $lineNumberNumeric = null)
    {
        $this->lineNumberNumeric = $lineNumberNumeric;
        return $this;
    }

    /**
     * Gets as participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipatingLocationsLocation
     */
    public function getParticipatingLocationsLocation()
    {
        return $this->participatingLocationsLocation;
    }

    /**
     * Sets a new participatingLocationsLocation
     *
     * ASBIE
     *  Event Line Item. Participating Locations_ Location. Location
     *  The location of the stores involved in the event described in this line item.
     *  0..1
     *  Event Line Item
     *  Participating Locations
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation
     * @return self
     */
    public function setParticipatingLocationsLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipatingLocationsLocation $participatingLocationsLocation = null)
    {
        $this->participatingLocationsLocation = $participatingLocationsLocation;
        return $this;
    }

    /**
     * Adds as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RetailPlannedImpact $retailPlannedImpact
     */
    public function addToRetailPlannedImpact(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RetailPlannedImpact $retailPlannedImpact)
    {
        $this->retailPlannedImpact[] = $retailPlannedImpact;
        return $this;
    }

    /**
     * isset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetailPlannedImpact($index)
    {
        return isset($this->retailPlannedImpact[$index]);
    }

    /**
     * unset retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetailPlannedImpact($index)
    {
        unset($this->retailPlannedImpact[$index]);
    }

    /**
     * Gets as retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RetailPlannedImpact[]
     */
    public function getRetailPlannedImpact()
    {
        return $this->retailPlannedImpact;
    }

    /**
     * Sets a new retailPlannedImpact
     *
     * ASBIE
     *  Event Line Item. Retail Planned Impact
     *  A planned impact of the event described in this line item.
     *  0..n
     *  Event Line Item
     *  Retail Planned Impact
     *  Retail Planned Impact
     *  Retail Planned Impact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RetailPlannedImpact[] $retailPlannedImpact
     * @return self
     */
    public function setRetailPlannedImpact(?array $retailPlannedImpact = null)
    {
        $this->retailPlannedImpact = $retailPlannedImpact;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * ASBIE
     *  Event Line Item. Supply_ Item. Item
     *  The product with which the event is associated.
     *  1
     *  Event Line Item
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }
}

