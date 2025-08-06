<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing MaritimeWasteType
 *
 * ABIE
 *  Maritime Waste. Details
 *  A class to describe a transaction of maritime waste.
 *  Maritime Waste
 * XSD Type: MaritimeWasteType
 */
class MaritimeWasteType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Maritime Waste. Identifier
     *  An identifier for this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Maritime Waste. Waste Type Code. Code
     *  A code specifying the type of waste in this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Waste Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WasteTypeCode $wasteTypeCode
     */
    private $wasteTypeCode = null;

    /**
     * BBIE
     *  Maritime Waste. To Be Delivered. Measure
     *  The messure of waste to be delivered.
     *  0..1
     *  Maritime Waste
     *  To Be Delivered
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ToBeDeliveredMeasure $toBeDeliveredMeasure
     */
    private $toBeDeliveredMeasure = null;

    /**
     * BBIE
     *  Maritime Waste. Retained On Board. Measure
     *  The meassure of waste retained on board.
     *  0..1
     *  Maritime Waste
     *  Retained On Board
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetainedOnBoardMeasure $retainedOnBoardMeasure
     */
    private $retainedOnBoardMeasure = null;

    /**
     * BBIE
     *  Maritime Waste. Max Dedicated Storage Capacity. Measure
     *  The messure for the maximum dedicated storage capacity.
     *  0..1
     *  Maritime Waste
     *  Max Dedicated Storage Capacity
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaxDedicatedStorageCapacityMeasure $maxDedicatedStorageCapacityMeasure
     */
    private $maxDedicatedStorageCapacityMeasure = null;

    /**
     * BBIE
     *  Maritime Waste. Estimated Generated Until Next Port. Measure
     *  The messure of waste generated until the next port.
     *  0..1
     *  Maritime Waste
     *  Estimated Generated Until Next Port
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedGeneratedUntilNextPortMeasure $estimatedGeneratedUntilNextPortMeasure
     */
    private $estimatedGeneratedUntilNextPortMeasure = null;

    /**
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemainingWasteDeliveryPortLocation[] $remainingWasteDeliveryPortLocation
     */
    private $remainingWasteDeliveryPortLocation = [
        
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
     * Gets as iD
     *
     * BBIE
     *  Maritime Waste. Identifier
     *  An identifier for this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Maritime Waste. Identifier
     *  An identifier for this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Maritime Waste. Description. Text
     *  A text descriping this maritime waste transaction.
     *  0..n
     *  Maritime Waste
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as wasteTypeCode
     *
     * BBIE
     *  Maritime Waste. Waste Type Code. Code
     *  A code specifying the type of waste in this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Waste Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WasteTypeCode
     */
    public function getWasteTypeCode()
    {
        return $this->wasteTypeCode;
    }

    /**
     * Sets a new wasteTypeCode
     *
     * BBIE
     *  Maritime Waste. Waste Type Code. Code
     *  A code specifying the type of waste in this maritime waste transaction.
     *  0..1
     *  Maritime Waste
     *  Waste Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WasteTypeCode $wasteTypeCode
     * @return self
     */
    public function setWasteTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WasteTypeCode $wasteTypeCode = null)
    {
        $this->wasteTypeCode = $wasteTypeCode;
        return $this;
    }

    /**
     * Gets as toBeDeliveredMeasure
     *
     * BBIE
     *  Maritime Waste. To Be Delivered. Measure
     *  The messure of waste to be delivered.
     *  0..1
     *  Maritime Waste
     *  To Be Delivered
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ToBeDeliveredMeasure
     */
    public function getToBeDeliveredMeasure()
    {
        return $this->toBeDeliveredMeasure;
    }

    /**
     * Sets a new toBeDeliveredMeasure
     *
     * BBIE
     *  Maritime Waste. To Be Delivered. Measure
     *  The messure of waste to be delivered.
     *  0..1
     *  Maritime Waste
     *  To Be Delivered
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ToBeDeliveredMeasure $toBeDeliveredMeasure
     * @return self
     */
    public function setToBeDeliveredMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ToBeDeliveredMeasure $toBeDeliveredMeasure = null)
    {
        $this->toBeDeliveredMeasure = $toBeDeliveredMeasure;
        return $this;
    }

    /**
     * Gets as retainedOnBoardMeasure
     *
     * BBIE
     *  Maritime Waste. Retained On Board. Measure
     *  The meassure of waste retained on board.
     *  0..1
     *  Maritime Waste
     *  Retained On Board
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetainedOnBoardMeasure
     */
    public function getRetainedOnBoardMeasure()
    {
        return $this->retainedOnBoardMeasure;
    }

    /**
     * Sets a new retainedOnBoardMeasure
     *
     * BBIE
     *  Maritime Waste. Retained On Board. Measure
     *  The meassure of waste retained on board.
     *  0..1
     *  Maritime Waste
     *  Retained On Board
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetainedOnBoardMeasure $retainedOnBoardMeasure
     * @return self
     */
    public function setRetainedOnBoardMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetainedOnBoardMeasure $retainedOnBoardMeasure = null)
    {
        $this->retainedOnBoardMeasure = $retainedOnBoardMeasure;
        return $this;
    }

    /**
     * Gets as maxDedicatedStorageCapacityMeasure
     *
     * BBIE
     *  Maritime Waste. Max Dedicated Storage Capacity. Measure
     *  The messure for the maximum dedicated storage capacity.
     *  0..1
     *  Maritime Waste
     *  Max Dedicated Storage Capacity
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaxDedicatedStorageCapacityMeasure
     */
    public function getMaxDedicatedStorageCapacityMeasure()
    {
        return $this->maxDedicatedStorageCapacityMeasure;
    }

    /**
     * Sets a new maxDedicatedStorageCapacityMeasure
     *
     * BBIE
     *  Maritime Waste. Max Dedicated Storage Capacity. Measure
     *  The messure for the maximum dedicated storage capacity.
     *  0..1
     *  Maritime Waste
     *  Max Dedicated Storage Capacity
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaxDedicatedStorageCapacityMeasure $maxDedicatedStorageCapacityMeasure
     * @return self
     */
    public function setMaxDedicatedStorageCapacityMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaxDedicatedStorageCapacityMeasure $maxDedicatedStorageCapacityMeasure = null)
    {
        $this->maxDedicatedStorageCapacityMeasure = $maxDedicatedStorageCapacityMeasure;
        return $this;
    }

    /**
     * Gets as estimatedGeneratedUntilNextPortMeasure
     *
     * BBIE
     *  Maritime Waste. Estimated Generated Until Next Port. Measure
     *  The messure of waste generated until the next port.
     *  0..1
     *  Maritime Waste
     *  Estimated Generated Until Next Port
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedGeneratedUntilNextPortMeasure
     */
    public function getEstimatedGeneratedUntilNextPortMeasure()
    {
        return $this->estimatedGeneratedUntilNextPortMeasure;
    }

    /**
     * Sets a new estimatedGeneratedUntilNextPortMeasure
     *
     * BBIE
     *  Maritime Waste. Estimated Generated Until Next Port. Measure
     *  The messure of waste generated until the next port.
     *  0..1
     *  Maritime Waste
     *  Estimated Generated Until Next Port
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedGeneratedUntilNextPortMeasure $estimatedGeneratedUntilNextPortMeasure
     * @return self
     */
    public function setEstimatedGeneratedUntilNextPortMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedGeneratedUntilNextPortMeasure $estimatedGeneratedUntilNextPortMeasure = null)
    {
        $this->estimatedGeneratedUntilNextPortMeasure = $estimatedGeneratedUntilNextPortMeasure;
        return $this;
    }

    /**
     * Adds as remainingWasteDeliveryPortLocation
     *
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemainingWasteDeliveryPortLocation $remainingWasteDeliveryPortLocation
     */
    public function addToRemainingWasteDeliveryPortLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemainingWasteDeliveryPortLocation $remainingWasteDeliveryPortLocation)
    {
        $this->remainingWasteDeliveryPortLocation[] = $remainingWasteDeliveryPortLocation;
        return $this;
    }

    /**
     * isset remainingWasteDeliveryPortLocation
     *
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemainingWasteDeliveryPortLocation($index)
    {
        return isset($this->remainingWasteDeliveryPortLocation[$index]);
    }

    /**
     * unset remainingWasteDeliveryPortLocation
     *
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemainingWasteDeliveryPortLocation($index)
    {
        unset($this->remainingWasteDeliveryPortLocation[$index]);
    }

    /**
     * Gets as remainingWasteDeliveryPortLocation
     *
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemainingWasteDeliveryPortLocation[]
     */
    public function getRemainingWasteDeliveryPortLocation()
    {
        return $this->remainingWasteDeliveryPortLocation;
    }

    /**
     * Sets a new remainingWasteDeliveryPortLocation
     *
     * ASBIE
     *  Maritime Waste. Remaining Waste Delivery Port_ Location. Location
     *  The location of the port where the remaining waste is delivered.
     *  0..n
     *  Maritime Waste
     *  Remaining Waste Delivery Port
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemainingWasteDeliveryPortLocation[] $remainingWasteDeliveryPortLocation
     * @return self
     */
    public function setRemainingWasteDeliveryPortLocation(?array $remainingWasteDeliveryPortLocation = null)
    {
        $this->remainingWasteDeliveryPortLocation = $remainingWasteDeliveryPortLocation;
        return $this;
    }
}

