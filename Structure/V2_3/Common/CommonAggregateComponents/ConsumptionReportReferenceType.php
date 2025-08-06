<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ConsumptionReportReferenceType
 *
 * ABIE
 *  Consumption Report Reference. Details
 *  A class to define a reference to an earlier consumption report (e.g., last year's consumption).
 *  Consumption Report Reference
 * XSD Type: ConsumptionReportReferenceType
 */
class ConsumptionReportReferenceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionReportID $consumptionReportID
     */
    private $consumptionReportID = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

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
     * Gets as consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionReportID
     */
    public function getConsumptionReportID()
    {
        return $this->consumptionReportID;
    }

    /**
     * Sets a new consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionReportID $consumptionReportID
     * @return self
     */
    public function setConsumptionReportID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionReportID $consumptionReportID)
    {
        $this->consumptionReportID = $consumptionReportID;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity $totalConsumedQuantity)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period)
    {
        $this->period = $period;
        return $this;
    }
}

