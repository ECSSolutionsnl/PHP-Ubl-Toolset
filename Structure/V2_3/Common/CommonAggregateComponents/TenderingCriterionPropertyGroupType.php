<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderingCriterionPropertyGroupType
 *
 * ABIE
 *  Tendering Criterion Property Group. Details
 *  A class to describe a group of tendering criteria
 *  Tendering Criterion Property Group
 * XSD Type: TenderingCriterionPropertyGroupType
 */
class TenderingCriterionPropertyGroupType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PropertyGroupTypeCode $propertyGroupTypeCode
     */
    private $propertyGroupTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fulfilmentIndicator
     */
    private $fulfilmentIndicator = null;

    /**
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     */
    private $fulfilmentIndicatorTypeCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionProperty[] $tenderingCriterionProperty
     */
    private $tenderingCriterionProperty = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubsidiaryTenderingCriterionPropertyGroup[] $subsidiaryTenderingCriterionPropertyGroup
     */
    private $subsidiaryTenderingCriterionPropertyGroup = [
        
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
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Identifier
     *  An identifier for the group of criteria.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Name
     *  The name of the group.
     *  0..1
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     *  Tendering Criterion Property Group. Description. Text
     *  The textual description for this group.
     *  0..n
     *  Tendering Criterion Property Group
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
     * Gets as propertyGroupTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PropertyGroupTypeCode
     */
    public function getPropertyGroupTypeCode()
    {
        return $this->propertyGroupTypeCode;
    }

    /**
     * Sets a new propertyGroupTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Property Group Type Code. Code
     *  A code signifying the type of the property group
     *  0..1
     *  Tendering Criterion Property Group
     *  Property Group Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PropertyGroupTypeCode $propertyGroupTypeCode
     * @return self
     */
    public function setPropertyGroupTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PropertyGroupTypeCode $propertyGroupTypeCode = null)
    {
        $this->propertyGroupTypeCode = $propertyGroupTypeCode;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFulfilmentIndicator()
    {
        return $this->fulfilmentIndicator;
    }

    /**
     * Sets a new fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator. Indicator
     *  An indication that this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $fulfilmentIndicator
     * @return self
     */
    public function setFulfilmentIndicator($fulfilmentIndicator)
    {
        $this->fulfilmentIndicator = $fulfilmentIndicator;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicatorTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FulfilmentIndicatorTypeCode
     */
    public function getFulfilmentIndicatorTypeCode()
    {
        return $this->fulfilmentIndicatorTypeCode;
    }

    /**
     * Sets a new fulfilmentIndicatorTypeCode
     *
     * BBIE
     *  Tendering Criterion Property Group. Fulfilment Indicator Type Code. Code
     *  A code signifying how this group of criteria have been fulfilled.
     *  0..1
     *  Tendering Criterion Property Group
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     * @return self
     */
    public function setFulfilmentIndicatorTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode = null)
    {
        $this->fulfilmentIndicatorTypeCode = $fulfilmentIndicatorTypeCode;
        return $this;
    }

    /**
     * Adds as tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionProperty $tenderingCriterionProperty
     */
    public function addToTenderingCriterionProperty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionProperty $tenderingCriterionProperty)
    {
        $this->tenderingCriterionProperty[] = $tenderingCriterionProperty;
        return $this;
    }

    /**
     * isset tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderingCriterionProperty($index)
    {
        return isset($this->tenderingCriterionProperty[$index]);
    }

    /**
     * unset tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderingCriterionProperty($index)
    {
        unset($this->tenderingCriterionProperty[$index]);
    }

    /**
     * Gets as tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionProperty[]
     */
    public function getTenderingCriterionProperty()
    {
        return $this->tenderingCriterionProperty;
    }

    /**
     * Sets a new tenderingCriterionProperty
     *
     * ASBIE
     *  Tendering Criterion Property Group. Tendering Criterion Property
     *  All the criteria properties comprising the tendering criterion.
     *  1..n
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *  Tendering Criterion Property
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionProperty[] $tenderingCriterionProperty
     * @return self
     */
    public function setTenderingCriterionProperty(array $tenderingCriterionProperty)
    {
        $this->tenderingCriterionProperty = $tenderingCriterionProperty;
        return $this;
    }

    /**
     * Adds as subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubsidiaryTenderingCriterionPropertyGroup $subsidiaryTenderingCriterionPropertyGroup
     */
    public function addToSubsidiaryTenderingCriterionPropertyGroup(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubsidiaryTenderingCriterionPropertyGroup $subsidiaryTenderingCriterionPropertyGroup)
    {
        $this->subsidiaryTenderingCriterionPropertyGroup[] = $subsidiaryTenderingCriterionPropertyGroup;
        return $this;
    }

    /**
     * isset subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsidiaryTenderingCriterionPropertyGroup($index)
    {
        return isset($this->subsidiaryTenderingCriterionPropertyGroup[$index]);
    }

    /**
     * unset subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsidiaryTenderingCriterionPropertyGroup($index)
    {
        unset($this->subsidiaryTenderingCriterionPropertyGroup[$index]);
    }

    /**
     * Gets as subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubsidiaryTenderingCriterionPropertyGroup[]
     */
    public function getSubsidiaryTenderingCriterionPropertyGroup()
    {
        return $this->subsidiaryTenderingCriterionPropertyGroup;
    }

    /**
     * Sets a new subsidiaryTenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion Property Group. Subsidiary_ Tendering Criterion Property Group. Tendering Criterion Property Group
     *  Subsidiary tendering criteria groups comprising this tendering criterion.
     *  0..n
     *  Tendering Criterion Property Group
     *  Subsidiary
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubsidiaryTenderingCriterionPropertyGroup[] $subsidiaryTenderingCriterionPropertyGroup
     * @return self
     */
    public function setSubsidiaryTenderingCriterionPropertyGroup(?array $subsidiaryTenderingCriterionPropertyGroup = null)
    {
        $this->subsidiaryTenderingCriterionPropertyGroup = $subsidiaryTenderingCriterionPropertyGroup;
        return $this;
    }
}

