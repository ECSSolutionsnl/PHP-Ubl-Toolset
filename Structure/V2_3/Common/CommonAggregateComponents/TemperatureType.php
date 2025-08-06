<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TemperatureType
 *
 * ABIE
 *  Temperature. Details
 *  A class to describe a measurement of temperature.
 *  Temperature
 * XSD Type: TemperatureType
 */
class TemperatureType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  0..1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  0..1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Temperature. Measure Code. Code
     *  A code describing the temperature, when not expressed as a measure.
     *  0..1
     *  Temperature
     *  Measure Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MeasureCode $measureCode
     */
    private $measureCode = null;

    /**
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
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
     * Gets as attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  0..1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  0..1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID = null)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  0..1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  0..1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Measure $measure
     * @return self
     */
    public function setMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Measure $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as measureCode
     *
     * BBIE
     *  Temperature. Measure Code. Code
     *  A code describing the temperature, when not expressed as a measure.
     *  0..1
     *  Temperature
     *  Measure Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MeasureCode
     */
    public function getMeasureCode()
    {
        return $this->measureCode;
    }

    /**
     * Sets a new measureCode
     *
     * BBIE
     *  Temperature. Measure Code. Code
     *  A code describing the temperature, when not expressed as a measure.
     *  0..1
     *  Temperature
     *  Measure Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MeasureCode $measureCode
     * @return self
     */
    public function setMeasureCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MeasureCode $measureCode = null)
    {
        $this->measureCode = $measureCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
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
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

