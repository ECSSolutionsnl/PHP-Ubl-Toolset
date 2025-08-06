<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing MeterPropertyType
 *
 * ABIE
 *  Meter Property. Details
 *  The name of this meter property.
 *  Meter Property
 * XSD Type: MeterPropertyType
 */
class MeterPropertyType
{
    /**
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Meter Property. Name
     *  The name of this meter property, expressed as a code.
     *  0..1
     *  Meter Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Meter Property. Name Code. Code
     *  The value of this meter property, expressed as text.
     *  0..1
     *  Meter Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\NameCode $nameCode
     * @return self
     */
    public function setNameCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\NameCode $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Meter Property. Value. Text
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Value $value
     * @return self
     */
    public function setValue(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Meter Property. Value_ Quantity. Quantity
     *  The value of this meter property, expressed as a quantity.
     *  0..1
     *  Meter Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQuantity $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Meter Property. Value Qualifier. Text
     *  An additional value to qualify the value of the meter
     *  0..n
     *  Meter Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(?array $valueQualifier = null)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }
}

