<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderingCriterionPropertyType
 *
 * ABIE
 *  Tendering Criterion Property. Details
 *  A class to describe the criterion properties.
 *  Tendering Criterion Property
 * XSD Type: TenderingCriterionPropertyType
 */
class TenderingCriterionPropertyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueDataTypeCode $valueDataTypeCode
     */
    private $valueDataTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueUnitCode $valueUnitCode
     */
    private $valueUnitCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueCurrencyCode $valueCurrencyCode
     */
    private $valueCurrencyCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedAmount $expectedAmount
     */
    private $expectedAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedID $expectedID
     */
    private $expectedID = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Indicator. Indicator
     *  The expected indicator (true or false) that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $expectedIndicator
     */
    private $expectedIndicator = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedCode $expectedCode
     */
    private $expectedCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedValueNumeric $expectedValueNumeric
     */
    private $expectedValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedDescription $expectedDescription
     */
    private $expectedDescription = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Expected_ URI. Identifier
     *  The expected URL that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedURI $expectedURI
     */
    private $expectedURI = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAmount $maximumAmount
     */
    private $maximumAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumAmount $minimumAmount
     */
    private $minimumAmount = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumValueNumeric $maximumValueNumeric
     */
    private $maximumValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumValueNumeric $minimumValueNumeric
     */
    private $minimumValueNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Maximum_ Quantity. Quantity
     *  The maximum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Minimum_ Quantity. Quantity
     *  The minimum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TranslationTypeCode $translationTypeCode
     */
    private $translationTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificationLevelDescription[] $certificationLevelDescription
     */
    private $certificationLevelDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CopyQualityTypeCode $copyQualityTypeCode
     */
    private $copyQualityTypeCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod[] $applicablePeriod
     */
    private $applicablePeriod = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TemplateEvidence[] $templateEvidence
     */
    private $templateEvidence = [
        
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
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Identifier
     *  An identifier to refer to the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     * Gets as name
     *
     * BBIE
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Name
     *  The name of the criterion property.
     *  0..1
     *  Tendering Criterion Property
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
     * Adds as description
     *
     * BBIE
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     *  Tendering Criterion Property. Description. Text
     *  A description of the criterion property.
     *  0..n
     *  Tendering Criterion Property
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
     * Gets as typeCode
     *
     * BBIE
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * BBIE
     *  Tendering Criterion Property. Type Code. Code
     *  A mutually agreed code signifying the type of the property.
     *  0..1
     *  Tendering Criterion Property
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     * @return self
     */
    public function setTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode = null)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Gets as valueDataTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueDataTypeCode
     */
    public function getValueDataTypeCode()
    {
        return $this->valueDataTypeCode;
    }

    /**
     * Sets a new valueDataTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Data Type Code. Code
     *  The data type of the numeric value and any constraints on the data type metadata.
     *  0..1
     *  Tendering Criterion Property
     *  Value Data Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueDataTypeCode $valueDataTypeCode
     * @return self
     */
    public function setValueDataTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueDataTypeCode $valueDataTypeCode = null)
    {
        $this->valueDataTypeCode = $valueDataTypeCode;
        return $this;
    }

    /**
     * Gets as valueUnitCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueUnitCode
     */
    public function getValueUnitCode()
    {
        return $this->valueUnitCode;
    }

    /**
     * Sets a new valueUnitCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Unit Code. Code
     *  The unit of measure of the numeric value as a quantity or measure.
     *  0..1
     *  Tendering Criterion Property
     *  Value Unit Code
     *  Code
     *  Unit Of Measure
     *  Unit Of Measure_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueUnitCode $valueUnitCode
     * @return self
     */
    public function setValueUnitCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueUnitCode $valueUnitCode = null)
    {
        $this->valueUnitCode = $valueUnitCode;
        return $this;
    }

    /**
     * Gets as valueCurrencyCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueCurrencyCode
     */
    public function getValueCurrencyCode()
    {
        return $this->valueCurrencyCode;
    }

    /**
     * Sets a new valueCurrencyCode
     *
     * BBIE
     *  Tendering Criterion Property. Value Currency Code. Code
     *  The currency of the numeric value as an amount.
     *  0..1
     *  Tendering Criterion Property
     *  Value Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueCurrencyCode $valueCurrencyCode
     * @return self
     */
    public function setValueCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueCurrencyCode $valueCurrencyCode = null)
    {
        $this->valueCurrencyCode = $valueCurrencyCode;
        return $this;
    }

    /**
     * Gets as expectedAmount
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedAmount
     */
    public function getExpectedAmount()
    {
        return $this->expectedAmount;
    }

    /**
     * Sets a new expectedAmount
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Amount. Amount
     *  The expected amount that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedAmount $expectedAmount
     * @return self
     */
    public function setExpectedAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedAmount $expectedAmount = null)
    {
        $this->expectedAmount = $expectedAmount;
        return $this;
    }

    /**
     * Gets as expectedID
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedID
     */
    public function getExpectedID()
    {
        return $this->expectedID;
    }

    /**
     * Sets a new expectedID
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Identifier. Identifier
     *  The expected identifier that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedID $expectedID
     * @return self
     */
    public function setExpectedID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedID $expectedID = null)
    {
        $this->expectedID = $expectedID;
        return $this;
    }

    /**
     * Gets as expectedIndicator
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Indicator. Indicator
     *  The expected indicator (true or false) that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getExpectedIndicator()
    {
        return $this->expectedIndicator;
    }

    /**
     * Sets a new expectedIndicator
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Indicator. Indicator
     *  The expected indicator (true or false) that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $expectedIndicator
     * @return self
     */
    public function setExpectedIndicator($expectedIndicator)
    {
        $this->expectedIndicator = $expectedIndicator;
        return $this;
    }

    /**
     * Gets as expectedCode
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedCode
     */
    public function getExpectedCode()
    {
        return $this->expectedCode;
    }

    /**
     * Sets a new expectedCode
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Code. Code
     *  The expected code that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedCode $expectedCode
     * @return self
     */
    public function setExpectedCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedCode $expectedCode = null)
    {
        $this->expectedCode = $expectedCode;
        return $this;
    }

    /**
     * Gets as expectedValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedValueNumeric
     */
    public function getExpectedValueNumeric()
    {
        return $this->expectedValueNumeric;
    }

    /**
     * Sets a new expectedValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Value. Numeric
     *  The expected value that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedValueNumeric $expectedValueNumeric
     * @return self
     */
    public function setExpectedValueNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedValueNumeric $expectedValueNumeric = null)
    {
        $this->expectedValueNumeric = $expectedValueNumeric;
        return $this;
    }

    /**
     * Gets as expectedDescription
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedDescription
     */
    public function getExpectedDescription()
    {
        return $this->expectedDescription;
    }

    /**
     * Sets a new expectedDescription
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ Description. Text
     *  The description of the of the expected 
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedDescription $expectedDescription
     * @return self
     */
    public function setExpectedDescription(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedDescription $expectedDescription = null)
    {
        $this->expectedDescription = $expectedDescription;
        return $this;
    }

    /**
     * Gets as expectedURI
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ URI. Identifier
     *  The expected URL that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedURI
     */
    public function getExpectedURI()
    {
        return $this->expectedURI;
    }

    /**
     * Sets a new expectedURI
     *
     * BBIE
     *  Tendering Criterion Property. Expected_ URI. Identifier
     *  The expected URL that the responder has to provide in the criterion response.
     *  0..1
     *  Tendering Criterion Property
     *  Expected
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedURI $expectedURI
     * @return self
     */
    public function setExpectedURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExpectedURI $expectedURI = null)
    {
        $this->expectedURI = $expectedURI;
        return $this;
    }

    /**
     * Gets as maximumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAmount
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * Sets a new maximumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Amount. Amount
     *  The maximum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAmount $maximumAmount
     * @return self
     */
    public function setMaximumAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumAmount $maximumAmount = null)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * Gets as minimumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumAmount
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * Sets a new minimumAmount
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Amount. Amount
     *  The minimum amount the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumAmount $minimumAmount
     * @return self
     */
    public function setMinimumAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumAmount $minimumAmount = null)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * Gets as maximumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumValueNumeric
     */
    public function getMaximumValueNumeric()
    {
        return $this->maximumValueNumeric;
    }

    /**
     * Sets a new maximumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Value. Numeric
     *  The maximum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumValueNumeric $maximumValueNumeric
     * @return self
     */
    public function setMaximumValueNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumValueNumeric $maximumValueNumeric = null)
    {
        $this->maximumValueNumeric = $maximumValueNumeric;
        return $this;
    }

    /**
     * Gets as minimumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumValueNumeric
     */
    public function getMinimumValueNumeric()
    {
        return $this->minimumValueNumeric;
    }

    /**
     * Sets a new minimumValueNumeric
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Value. Numeric
     *  The minimum value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Value
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumValueNumeric $minimumValueNumeric
     * @return self
     */
    public function setMinimumValueNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumValueNumeric $minimumValueNumeric = null)
    {
        $this->minimumValueNumeric = $minimumValueNumeric;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Quantity. Quantity
     *  The maximum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Tendering Criterion Property. Maximum_ Quantity. Quantity
     *  The maximum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumQuantity $maximumQuantity = null)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Quantity. Quantity
     *  The minimum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Tendering Criterion Property. Minimum_ Quantity. Quantity
     *  The minimum quantity value the response must have.
     *  0..1
     *  Tendering Criterion Property
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumQuantity $minimumQuantity = null)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as translationTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TranslationTypeCode
     */
    public function getTranslationTypeCode()
    {
        return $this->translationTypeCode;
    }

    /**
     * Sets a new translationTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Translation Type Code. Code
     *  The type of Transation that the requirement shall be translated for example certified translation
     *  0..1
     *  Tendering Criterion Property
     *  Translation Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TranslationTypeCode $translationTypeCode
     * @return self
     */
    public function setTranslationTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TranslationTypeCode $translationTypeCode = null)
    {
        $this->translationTypeCode = $translationTypeCode;
        return $this;
    }

    /**
     * Adds as certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificationLevelDescription $certificationLevelDescription
     */
    public function addToCertificationLevelDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificationLevelDescription $certificationLevelDescription)
    {
        $this->certificationLevelDescription[] = $certificationLevelDescription;
        return $this;
    }

    /**
     * isset certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificationLevelDescription($index)
    {
        return isset($this->certificationLevelDescription[$index]);
    }

    /**
     * unset certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificationLevelDescription($index)
    {
        unset($this->certificationLevelDescription[$index]);
    }

    /**
     * Gets as certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificationLevelDescription[]
     */
    public function getCertificationLevelDescription()
    {
        return $this->certificationLevelDescription;
    }

    /**
     * Sets a new certificationLevelDescription
     *
     * BBIE
     *  Tendering Criterion Property. Certification Level Description. Text
     *  The description of the level of the expected certification
     *  0..n
     *  Tendering Criterion Property
     *  Certification Level Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificationLevelDescription[] $certificationLevelDescription
     * @return self
     */
    public function setCertificationLevelDescription(?array $certificationLevelDescription = null)
    {
        $this->certificationLevelDescription = $certificationLevelDescription;
        return $this;
    }

    /**
     * Gets as copyQualityTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CopyQualityTypeCode
     */
    public function getCopyQualityTypeCode()
    {
        return $this->copyQualityTypeCode;
    }

    /**
     * Sets a new copyQualityTypeCode
     *
     * BBIE
     *  Tendering Criterion Property. Copy Quality Type Code. Code
     *  The type of Copy quality, expressed as a code.
     *  0..1
     *  Tendering Criterion Property
     *  Copy Quality Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CopyQualityTypeCode $copyQualityTypeCode
     * @return self
     */
    public function setCopyQualityTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CopyQualityTypeCode $copyQualityTypeCode = null)
    {
        $this->copyQualityTypeCode = $copyQualityTypeCode;
        return $this;
    }

    /**
     * Adds as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod $applicablePeriod
     */
    public function addToApplicablePeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod $applicablePeriod)
    {
        $this->applicablePeriod[] = $applicablePeriod;
        return $this;
    }

    /**
     * isset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicablePeriod($index)
    {
        return isset($this->applicablePeriod[$index]);
    }

    /**
     * unset applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicablePeriod($index)
    {
        unset($this->applicablePeriod[$index]);
    }

    /**
     * Gets as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod[]
     */
    public function getApplicablePeriod()
    {
        return $this->applicablePeriod;
    }

    /**
     * Sets a new applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Property. Applicable_ Period. Period
     *  The period to which this criterion property shall apply.
     *  0..n
     *  Tendering Criterion Property
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod[] $applicablePeriod
     * @return self
     */
    public function setApplicablePeriod(?array $applicablePeriod = null)
    {
        $this->applicablePeriod = $applicablePeriod;
        return $this;
    }

    /**
     * Adds as templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TemplateEvidence $templateEvidence
     */
    public function addToTemplateEvidence(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TemplateEvidence $templateEvidence)
    {
        $this->templateEvidence[] = $templateEvidence;
        return $this;
    }

    /**
     * isset templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemplateEvidence($index)
    {
        return isset($this->templateEvidence[$index]);
    }

    /**
     * unset templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemplateEvidence($index)
    {
        unset($this->templateEvidence[$index]);
    }

    /**
     * Gets as templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TemplateEvidence[]
     */
    public function getTemplateEvidence()
    {
        return $this->templateEvidence;
    }

    /**
     * Sets a new templateEvidence
     *
     * ASBIE
     *  Tendering Criterion Property. Template_ Evidence. Evidence
     *  An evidence that can be used to meet this criterion property.
     *  0..n
     *  Tendering Criterion Property
     *  Template
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TemplateEvidence[] $templateEvidence
     * @return self
     */
    public function setTemplateEvidence(?array $templateEvidence = null)
    {
        $this->templateEvidence = $templateEvidence;
        return $this;
    }
}

