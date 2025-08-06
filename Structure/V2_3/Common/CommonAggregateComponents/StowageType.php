<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing StowageType
 *
 * ABIE
 *  Stowage. Details
 *  A class to describe a location on board a means of transport where specified goods or transport equipment have been stowed or are to be stowed.
 *  Stowage
 * XSD Type: StowageType
 */
class StowageType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LocationID $locationID
     */
    private $locationID = null;

    /**
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Location[] $location
     */
    private $location = [
        
    ];

    /**
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
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
     * Gets as locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LocationID
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LocationID $locationID
     * @return self
     */
    public function setLocationID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LocationID $locationID = null)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Adds as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Location $location
     */
    public function addToLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Location[] $location
     * @return self
     */
    public function setLocation(?array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(?array $measurementDimension = null)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }
}

