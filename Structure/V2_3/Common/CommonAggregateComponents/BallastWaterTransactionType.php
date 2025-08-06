<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing BallastWaterTransactionType
 *
 * ABIE
 *  Ballast Water Transaction. Details
 *  A class to define a ballast water transaction, such as the uptake, exchange or discharge of ballast water.
 *  Ballast Water Transaction
 * XSD Type: BallastWaterTransactionType
 */
class BallastWaterTransactionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Tank Identifier. Identifier
     *  An identifier for the ballast water tank being used in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankID $tankID
     */
    private $tankID = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Tank Type Code. Code
     *  A code for the type of ballast water tank being used in the ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankTypeCode $tankTypeCode
     */
    private $tankTypeCode = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Exchange_ Method Code. Code
     *  A code expressing how ballast water is being filled into or discharged from the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Exchange
     *  Method Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMethodCode $exchangeMethodCode
     */
    private $exchangeMethodCode = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Exchanged Percent. Percent
     *  The percentage of the ballast water in the tank being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Exchanged Percent
     *  Percent
     *  Percent. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangedPercent $exchangedPercent
     */
    private $exchangedPercent = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Volume Measure. Measure
     *  The volume of ballast water being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Volume Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VolumeMeasure $volumeMeasure
     */
    private $volumeMeasure = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Sea Height Measure. Measure
     *  A measure of the sea height at the time of the transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Sea Height Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SeaHeightMeasure $seaHeightMeasure
     */
    private $seaHeightMeasure = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Salinity Measure. Measure
     *  A measure for the salinity of the water in the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Salinity Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalinityMeasure $salinityMeasure
     */
    private $salinityMeasure = null;

    /**
     * BBIE
     *  Ballast Water Transaction. Transaction Date. Date
     *  The date when this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Transaction Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $transactionDate
     */
    private $transactionDate = null;

    /**
     * ASBIE
     *  Ballast Water Transaction. Location
     *  The location where this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location
     */
    private $location = null;

    /**
     * ASBIE
     *  Ballast Water Transaction. Ballast Water_ Temperature. Temperature
     *  The temperature of the ballast water at time of transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Ballast Water
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BallastWaterTemperature $ballastWaterTemperature
     */
    private $ballastWaterTemperature = null;

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
     * Gets as tankID
     *
     * BBIE
     *  Ballast Water Transaction. Tank Identifier. Identifier
     *  An identifier for the ballast water tank being used in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankID
     */
    public function getTankID()
    {
        return $this->tankID;
    }

    /**
     * Sets a new tankID
     *
     * BBIE
     *  Ballast Water Transaction. Tank Identifier. Identifier
     *  An identifier for the ballast water tank being used in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankID $tankID
     * @return self
     */
    public function setTankID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankID $tankID = null)
    {
        $this->tankID = $tankID;
        return $this;
    }

    /**
     * Gets as tankTypeCode
     *
     * BBIE
     *  Ballast Water Transaction. Tank Type Code. Code
     *  A code for the type of ballast water tank being used in the ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankTypeCode
     */
    public function getTankTypeCode()
    {
        return $this->tankTypeCode;
    }

    /**
     * Sets a new tankTypeCode
     *
     * BBIE
     *  Ballast Water Transaction. Tank Type Code. Code
     *  A code for the type of ballast water tank being used in the ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Tank Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankTypeCode $tankTypeCode
     * @return self
     */
    public function setTankTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TankTypeCode $tankTypeCode = null)
    {
        $this->tankTypeCode = $tankTypeCode;
        return $this;
    }

    /**
     * Gets as exchangeMethodCode
     *
     * BBIE
     *  Ballast Water Transaction. Exchange_ Method Code. Code
     *  A code expressing how ballast water is being filled into or discharged from the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Exchange
     *  Method Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMethodCode
     */
    public function getExchangeMethodCode()
    {
        return $this->exchangeMethodCode;
    }

    /**
     * Sets a new exchangeMethodCode
     *
     * BBIE
     *  Ballast Water Transaction. Exchange_ Method Code. Code
     *  A code expressing how ballast water is being filled into or discharged from the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Exchange
     *  Method Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMethodCode $exchangeMethodCode
     * @return self
     */
    public function setExchangeMethodCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMethodCode $exchangeMethodCode = null)
    {
        $this->exchangeMethodCode = $exchangeMethodCode;
        return $this;
    }

    /**
     * Gets as exchangedPercent
     *
     * BBIE
     *  Ballast Water Transaction. Exchanged Percent. Percent
     *  The percentage of the ballast water in the tank being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Exchanged Percent
     *  Percent
     *  Percent. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangedPercent
     */
    public function getExchangedPercent()
    {
        return $this->exchangedPercent;
    }

    /**
     * Sets a new exchangedPercent
     *
     * BBIE
     *  Ballast Water Transaction. Exchanged Percent. Percent
     *  The percentage of the ballast water in the tank being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Exchanged Percent
     *  Percent
     *  Percent. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangedPercent $exchangedPercent
     * @return self
     */
    public function setExchangedPercent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangedPercent $exchangedPercent = null)
    {
        $this->exchangedPercent = $exchangedPercent;
        return $this;
    }

    /**
     * Gets as volumeMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Volume Measure. Measure
     *  The volume of ballast water being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Volume Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VolumeMeasure
     */
    public function getVolumeMeasure()
    {
        return $this->volumeMeasure;
    }

    /**
     * Sets a new volumeMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Volume Measure. Measure
     *  The volume of ballast water being exchanged in this ballast water transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Volume Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VolumeMeasure $volumeMeasure
     * @return self
     */
    public function setVolumeMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VolumeMeasure $volumeMeasure = null)
    {
        $this->volumeMeasure = $volumeMeasure;
        return $this;
    }

    /**
     * Gets as seaHeightMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Sea Height Measure. Measure
     *  A measure of the sea height at the time of the transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Sea Height Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SeaHeightMeasure
     */
    public function getSeaHeightMeasure()
    {
        return $this->seaHeightMeasure;
    }

    /**
     * Sets a new seaHeightMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Sea Height Measure. Measure
     *  A measure of the sea height at the time of the transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Sea Height Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SeaHeightMeasure $seaHeightMeasure
     * @return self
     */
    public function setSeaHeightMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SeaHeightMeasure $seaHeightMeasure = null)
    {
        $this->seaHeightMeasure = $seaHeightMeasure;
        return $this;
    }

    /**
     * Gets as salinityMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Salinity Measure. Measure
     *  A measure for the salinity of the water in the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Salinity Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalinityMeasure
     */
    public function getSalinityMeasure()
    {
        return $this->salinityMeasure;
    }

    /**
     * Sets a new salinityMeasure
     *
     * BBIE
     *  Ballast Water Transaction. Salinity Measure. Measure
     *  A measure for the salinity of the water in the tank.
     *  0..1
     *  Ballast Water Transaction
     *  Salinity Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalinityMeasure $salinityMeasure
     * @return self
     */
    public function setSalinityMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalinityMeasure $salinityMeasure = null)
    {
        $this->salinityMeasure = $salinityMeasure;
        return $this;
    }

    /**
     * Gets as transactionDate
     *
     * BBIE
     *  Ballast Water Transaction. Transaction Date. Date
     *  The date when this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Transaction Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Sets a new transactionDate
     *
     * BBIE
     *  Ballast Water Transaction. Transaction Date. Date
     *  The date when this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Transaction Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $transactionDate
     * @return self
     */
    public function setTransactionDate(?\DateTime $transactionDate = null)
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * Gets as location
     *
     * ASBIE
     *  Ballast Water Transaction. Location
     *  The location where this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * ASBIE
     *  Ballast Water Transaction. Location
     *  The location where this ballast water transaction takes place.
     *  0..1
     *  Ballast Water Transaction
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location
     * @return self
     */
    public function setLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as ballastWaterTemperature
     *
     * ASBIE
     *  Ballast Water Transaction. Ballast Water_ Temperature. Temperature
     *  The temperature of the ballast water at time of transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Ballast Water
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BallastWaterTemperature
     */
    public function getBallastWaterTemperature()
    {
        return $this->ballastWaterTemperature;
    }

    /**
     * Sets a new ballastWaterTemperature
     *
     * ASBIE
     *  Ballast Water Transaction. Ballast Water_ Temperature. Temperature
     *  The temperature of the ballast water at time of transaction.
     *  0..1
     *  Ballast Water Transaction
     *  Ballast Water
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BallastWaterTemperature $ballastWaterTemperature
     * @return self
     */
    public function setBallastWaterTemperature(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BallastWaterTemperature $ballastWaterTemperature = null)
    {
        $this->ballastWaterTemperature = $ballastWaterTemperature;
        return $this;
    }
}

