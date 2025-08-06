<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ConsumptionReportType
 *
 * ABIE
 *  Consumption Report. Details
 *  A class to describe utility consumption, including details of the environment in which consumption takes place.
 *  Consumption Report
 * XSD Type: ConsumptionReportType
 */
class ConsumptionReportType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
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
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BasicConsumedQuantity $basicConsumedQuantity
     */
    private $basicConsumedQuantity = null;

    /**
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric
     */
    private $residentOccupantsNumeric = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     */
    private $consumersEnergyLevelCode = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevel $consumersEnergyLevel
     */
    private $consumersEnergyLevel = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceType $residenceType
     */
    private $residenceType = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceTypeCode $residenceTypeCode
     */
    private $residenceTypeCode = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingType $heatingType
     */
    private $heatingType = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingTypeCode $heatingTypeCode
     */
    private $heatingTypeCode = null;

    /**
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     */
    private $guidanceDocumentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     */
    private $consumptionReportReference = [
        
    ];

    /**
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionHistory[] $consumptionHistory
     */
    private $consumptionHistory = [
        
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
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
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
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     * Adds as description
     *
     * BBIE
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalConsumedQuantity $totalConsumedQuantity = null)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BasicConsumedQuantity
     */
    public function getBasicConsumedQuantity()
    {
        return $this->basicConsumedQuantity;
    }

    /**
     * Sets a new basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BasicConsumedQuantity $basicConsumedQuantity
     * @return self
     */
    public function setBasicConsumedQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BasicConsumedQuantity $basicConsumedQuantity = null)
    {
        $this->basicConsumedQuantity = $basicConsumedQuantity;
        return $this;
    }

    /**
     * Gets as residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidentOccupantsNumeric
     */
    public function getResidentOccupantsNumeric()
    {
        return $this->residentOccupantsNumeric;
    }

    /**
     * Sets a new residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric
     * @return self
     */
    public function setResidentOccupantsNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidentOccupantsNumeric $residentOccupantsNumeric = null)
    {
        $this->residentOccupantsNumeric = $residentOccupantsNumeric;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevelCode
     */
    public function getConsumersEnergyLevelCode()
    {
        return $this->consumersEnergyLevelCode;
    }

    /**
     * Sets a new consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     * @return self
     */
    public function setConsumersEnergyLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevelCode $consumersEnergyLevelCode = null)
    {
        $this->consumersEnergyLevelCode = $consumersEnergyLevelCode;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevel
     */
    public function getConsumersEnergyLevel()
    {
        return $this->consumersEnergyLevel;
    }

    /**
     * Sets a new consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevel $consumersEnergyLevel
     * @return self
     */
    public function setConsumersEnergyLevel(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumersEnergyLevel $consumersEnergyLevel = null)
    {
        $this->consumersEnergyLevel = $consumersEnergyLevel;
        return $this;
    }

    /**
     * Gets as residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceType
     */
    public function getResidenceType()
    {
        return $this->residenceType;
    }

    /**
     * Sets a new residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceType $residenceType
     * @return self
     */
    public function setResidenceType(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceType $residenceType = null)
    {
        $this->residenceType = $residenceType;
        return $this;
    }

    /**
     * Gets as residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceTypeCode
     */
    public function getResidenceTypeCode()
    {
        return $this->residenceTypeCode;
    }

    /**
     * Sets a new residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceTypeCode $residenceTypeCode
     * @return self
     */
    public function setResidenceTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResidenceTypeCode $residenceTypeCode = null)
    {
        $this->residenceTypeCode = $residenceTypeCode;
        return $this;
    }

    /**
     * Gets as heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingType
     */
    public function getHeatingType()
    {
        return $this->heatingType;
    }

    /**
     * Sets a new heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingType $heatingType
     * @return self
     */
    public function setHeatingType(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingType $heatingType = null)
    {
        $this->heatingType = $heatingType;
        return $this;
    }

    /**
     * Gets as heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingTypeCode
     */
    public function getHeatingTypeCode()
    {
        return $this->heatingTypeCode;
    }

    /**
     * Sets a new heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingTypeCode $heatingTypeCode
     * @return self
     */
    public function setHeatingTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HeatingTypeCode $heatingTypeCode = null)
    {
        $this->heatingTypeCode = $heatingTypeCode;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuidanceDocumentReference
     */
    public function getGuidanceDocumentReference()
    {
        return $this->guidanceDocumentReference;
    }

    /**
     * Sets a new guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     * @return self
     */
    public function setGuidanceDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference = null)
    {
        $this->guidanceDocumentReference = $guidanceDocumentReference;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionReportReference $consumptionReportReference
     */
    public function addToConsumptionReportReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionReportReference $consumptionReportReference)
    {
        $this->consumptionReportReference[] = $consumptionReportReference;
        return $this;
    }

    /**
     * isset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReportReference($index)
    {
        return isset($this->consumptionReportReference[$index]);
    }

    /**
     * unset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReportReference($index)
    {
        unset($this->consumptionReportReference[$index]);
    }

    /**
     * Gets as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionReportReference[]
     */
    public function getConsumptionReportReference()
    {
        return $this->consumptionReportReference;
    }

    /**
     * Sets a new consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     * @return self
     */
    public function setConsumptionReportReference(?array $consumptionReportReference = null)
    {
        $this->consumptionReportReference = $consumptionReportReference;
        return $this;
    }

    /**
     * Adds as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionHistory $consumptionHistory
     */
    public function addToConsumptionHistory(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionHistory $consumptionHistory)
    {
        $this->consumptionHistory[] = $consumptionHistory;
        return $this;
    }

    /**
     * isset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionHistory($index)
    {
        return isset($this->consumptionHistory[$index]);
    }

    /**
     * unset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionHistory($index)
    {
        unset($this->consumptionHistory[$index]);
    }

    /**
     * Gets as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionHistory[]
     */
    public function getConsumptionHistory()
    {
        return $this->consumptionHistory;
    }

    /**
     * Sets a new consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsumptionHistory[] $consumptionHistory
     * @return self
     */
    public function setConsumptionHistory(?array $consumptionHistory = null)
    {
        $this->consumptionHistory = $consumptionHistory;
        return $this;
    }
}

