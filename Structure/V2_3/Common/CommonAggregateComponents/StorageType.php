<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing StorageType
 *
 * ABIE
 *  Storage. Details
 *  A class to describe a storage and storage requirements
 *  Storage
 * XSD Type: StorageType
 */
class StorageType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Storage. Identifier
     *  An identifier for this storage.
     *  1
     *  Storage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Storage. Name
     *  The common name this storage
     *  0..1
     *  Storage
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Storage. Gate Identifier. Identifier
     *  An identifier for the agreed gate to enter, deliver or pick up at this storage
     *  0..1
     *  Storage
     *  Gate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GateID $gateID
     */
    private $gateID = null;

    /**
     * BBIE
     *  Storage. Air Flow Percent. Percent
     *  The percent of the airflow within this storage.
     *  0..1
     *  Storage
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AirFlowPercent $airFlowPercent
     */
    private $airFlowPercent = null;

    /**
     * BBIE
     *  Storage. Humidity Percent. Percent
     *  The percent humidity within this storage.
     *  0..1
     *  Storage
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HumidityPercent $humidityPercent
     */
    private $humidityPercent = null;

    /**
     * BBIE
     *  Storage. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for animal food (true) or not (false).
     *  0..1
     *  Storage
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $animalFoodApprovedIndicator
     */
    private $animalFoodApprovedIndicator = null;

    /**
     * BBIE
     *  Storage. Human Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for human food (true) or not (false).
     *  0..1
     *  Storage
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $humanFoodApprovedIndicator
     */
    private $humanFoodApprovedIndicator = null;

    /**
     * BBIE
     *  Storage. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this stroage is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Storage
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $dangerousGoodsApprovedIndicator
     */
    private $dangerousGoodsApprovedIndicator = null;

    /**
     * BBIE
     *  Storage. Refrigerated_ Indicator. Indicator
     *  An indicator that storage is refrigerated (true) or not (false).
     *  0..1
     *  Storage
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $refrigeratedIndicator
     */
    private $refrigeratedIndicator = null;

    /**
     * BBIE
     *  Storage. Power. Indicator
     *  An indicator that this storage can supply power (true) or not (false).
     *  0..1
     *  Storage
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $powerIndicator
     */
    private $powerIndicator = null;

    /**
     * ASBIE
     *  Storage. Minimum_ Temperature. Temperature
     *  The minimum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * ASBIE
     *  Storage. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[] $certificate
     */
    private $certificate = [
        
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
     *  Storage. Identifier
     *  An identifier for this storage.
     *  1
     *  Storage
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
     *  Storage. Identifier
     *  An identifier for this storage.
     *  1
     *  Storage
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as name
     *
     * BBIE
     *  Storage. Name
     *  The common name this storage
     *  0..1
     *  Storage
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Storage. Name
     *  The common name this storage
     *  0..1
     *  Storage
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as gateID
     *
     * BBIE
     *  Storage. Gate Identifier. Identifier
     *  An identifier for the agreed gate to enter, deliver or pick up at this storage
     *  0..1
     *  Storage
     *  Gate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GateID
     */
    public function getGateID()
    {
        return $this->gateID;
    }

    /**
     * Sets a new gateID
     *
     * BBIE
     *  Storage. Gate Identifier. Identifier
     *  An identifier for the agreed gate to enter, deliver or pick up at this storage
     *  0..1
     *  Storage
     *  Gate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GateID $gateID
     * @return self
     */
    public function setGateID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GateID $gateID = null)
    {
        $this->gateID = $gateID;
        return $this;
    }

    /**
     * Gets as airFlowPercent
     *
     * BBIE
     *  Storage. Air Flow Percent. Percent
     *  The percent of the airflow within this storage.
     *  0..1
     *  Storage
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AirFlowPercent
     */
    public function getAirFlowPercent()
    {
        return $this->airFlowPercent;
    }

    /**
     * Sets a new airFlowPercent
     *
     * BBIE
     *  Storage. Air Flow Percent. Percent
     *  The percent of the airflow within this storage.
     *  0..1
     *  Storage
     *  Air Flow Percent
     *  Percent
     *  Percent. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AirFlowPercent $airFlowPercent
     * @return self
     */
    public function setAirFlowPercent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AirFlowPercent $airFlowPercent = null)
    {
        $this->airFlowPercent = $airFlowPercent;
        return $this;
    }

    /**
     * Gets as humidityPercent
     *
     * BBIE
     *  Storage. Humidity Percent. Percent
     *  The percent humidity within this storage.
     *  0..1
     *  Storage
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HumidityPercent
     */
    public function getHumidityPercent()
    {
        return $this->humidityPercent;
    }

    /**
     * Sets a new humidityPercent
     *
     * BBIE
     *  Storage. Humidity Percent. Percent
     *  The percent humidity within this storage.
     *  0..1
     *  Storage
     *  Humidity Percent
     *  Percent
     *  Percent. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HumidityPercent $humidityPercent
     * @return self
     */
    public function setHumidityPercent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HumidityPercent $humidityPercent = null)
    {
        $this->humidityPercent = $humidityPercent;
        return $this;
    }

    /**
     * Gets as animalFoodApprovedIndicator
     *
     * BBIE
     *  Storage. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for animal food (true) or not (false).
     *  0..1
     *  Storage
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAnimalFoodApprovedIndicator()
    {
        return $this->animalFoodApprovedIndicator;
    }

    /**
     * Sets a new animalFoodApprovedIndicator
     *
     * BBIE
     *  Storage. Animal Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for animal food (true) or not (false).
     *  0..1
     *  Storage
     *  Animal Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $animalFoodApprovedIndicator
     * @return self
     */
    public function setAnimalFoodApprovedIndicator($animalFoodApprovedIndicator)
    {
        $this->animalFoodApprovedIndicator = $animalFoodApprovedIndicator;
        return $this;
    }

    /**
     * Gets as humanFoodApprovedIndicator
     *
     * BBIE
     *  Storage. Human Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for human food (true) or not (false).
     *  0..1
     *  Storage
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getHumanFoodApprovedIndicator()
    {
        return $this->humanFoodApprovedIndicator;
    }

    /**
     * Sets a new humanFoodApprovedIndicator
     *
     * BBIE
     *  Storage. Human Food_ Approved Indicator. Indicator
     *  An indicator that this storage is approved for human food (true) or not (false).
     *  0..1
     *  Storage
     *  Human Food
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $humanFoodApprovedIndicator
     * @return self
     */
    public function setHumanFoodApprovedIndicator($humanFoodApprovedIndicator)
    {
        $this->humanFoodApprovedIndicator = $humanFoodApprovedIndicator;
        return $this;
    }

    /**
     * Gets as dangerousGoodsApprovedIndicator
     *
     * BBIE
     *  Storage. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this stroage is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Storage
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getDangerousGoodsApprovedIndicator()
    {
        return $this->dangerousGoodsApprovedIndicator;
    }

    /**
     * Sets a new dangerousGoodsApprovedIndicator
     *
     * BBIE
     *  Storage. Dangerous Goods_ Approved Indicator. Indicator
     *  An indicator that this stroage is approved for dangerous goods (true) or not (false).
     *  0..1
     *  Storage
     *  Dangerous Goods
     *  Approved Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $dangerousGoodsApprovedIndicator
     * @return self
     */
    public function setDangerousGoodsApprovedIndicator($dangerousGoodsApprovedIndicator)
    {
        $this->dangerousGoodsApprovedIndicator = $dangerousGoodsApprovedIndicator;
        return $this;
    }

    /**
     * Gets as refrigeratedIndicator
     *
     * BBIE
     *  Storage. Refrigerated_ Indicator. Indicator
     *  An indicator that storage is refrigerated (true) or not (false).
     *  0..1
     *  Storage
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRefrigeratedIndicator()
    {
        return $this->refrigeratedIndicator;
    }

    /**
     * Sets a new refrigeratedIndicator
     *
     * BBIE
     *  Storage. Refrigerated_ Indicator. Indicator
     *  An indicator that storage is refrigerated (true) or not (false).
     *  0..1
     *  Storage
     *  Refrigerated
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $refrigeratedIndicator
     * @return self
     */
    public function setRefrigeratedIndicator($refrigeratedIndicator)
    {
        $this->refrigeratedIndicator = $refrigeratedIndicator;
        return $this;
    }

    /**
     * Gets as powerIndicator
     *
     * BBIE
     *  Storage. Power. Indicator
     *  An indicator that this storage can supply power (true) or not (false).
     *  0..1
     *  Storage
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPowerIndicator()
    {
        return $this->powerIndicator;
    }

    /**
     * Sets a new powerIndicator
     *
     * BBIE
     *  Storage. Power. Indicator
     *  An indicator that this storage can supply power (true) or not (false).
     *  0..1
     *  Storage
     *  Power
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $powerIndicator
     * @return self
     */
    public function setPowerIndicator($powerIndicator)
    {
        $this->powerIndicator = $powerIndicator;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Storage. Minimum_ Temperature. Temperature
     *  The minimum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Storage. Minimum_ Temperature. Temperature
     *  The minimum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Minimum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MinimumTemperature $minimumTemperature = null)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Storage. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Storage. Maximum_ Temperature. Temperature
     *  The maximum allowable operating temperature for this refriguated storage.
     *  0..1
     *  Storage
     *  Maximum
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MaximumTemperature $maximumTemperature = null)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Adds as certificate
     *
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate $certificate
     */
    public function addToCertificate(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate $certificate)
    {
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * isset certificate
     *
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificate($index)
    {
        return isset($this->certificate[$index]);
    }

    /**
     * unset certificate
     *
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificate($index)
    {
        unset($this->certificate[$index]);
    }

    /**
     * Gets as certificate
     *
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Sets a new certificate
     *
     * ASBIE
     *  Storage. Certificate
     *  A certificate associated with this storage
     *  0..n
     *  Storage
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[] $certificate
     * @return self
     */
    public function setCertificate(?array $certificate = null)
    {
        $this->certificate = $certificate;
        return $this;
    }
}

