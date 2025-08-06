<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CriterionItemType
 *
 * ABIE
 *  Criterion Item. Details
 *  A class describing a criteria
 *  Criterion Item
 * XSD Type: CriterionItemType
 */
class CriterionItemType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Criterion Item. Identifier
     *  An identifier for this criteria
     *  0..1
     *  Criterion Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Criterion Item. Type Code. Code
     *  A code describing the type of criteria
     *  0..1
     *  Criterion Item
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionDescription[] $criterionDescription
     */
    private $criterionDescription = [
        
    ];

    /**
     * ASBIE
     *  Criterion Item. Declared Property_ Item. Item
     *  The item associated with this criteria
     *  1
     *  Criterion Item
     *  Declared Property
     *  Item
     *  Item
     *  Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeclaredPropertyItem $declaredPropertyItem
     */
    private $declaredPropertyItem = null;

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
     *  Criterion Item. Identifier
     *  An identifier for this criteria
     *  0..1
     *  Criterion Item
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
     *  Criterion Item. Identifier
     *  An identifier for this criteria
     *  0..1
     *  Criterion Item
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
     * Gets as typeCode
     *
     * BBIE
     *  Criterion Item. Type Code. Code
     *  A code describing the type of criteria
     *  0..1
     *  Criterion Item
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
     *  Criterion Item. Type Code. Code
     *  A code describing the type of criteria
     *  0..1
     *  Criterion Item
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
     * Adds as criterionDescription
     *
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionDescription $criterionDescription
     */
    public function addToCriterionDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionDescription $criterionDescription)
    {
        $this->criterionDescription[] = $criterionDescription;
        return $this;
    }

    /**
     * isset criterionDescription
     *
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriterionDescription($index)
    {
        return isset($this->criterionDescription[$index]);
    }

    /**
     * unset criterionDescription
     *
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriterionDescription($index)
    {
        unset($this->criterionDescription[$index]);
    }

    /**
     * Gets as criterionDescription
     *
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionDescription[]
     */
    public function getCriterionDescription()
    {
        return $this->criterionDescription;
    }

    /**
     * Sets a new criterionDescription
     *
     * BBIE
     *  Criterion Item. Criterion Description. Text
     *  The criteria for this item, expressed as a text
     *  1..n
     *  Criterion Item
     *  Criterion Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionDescription[] $criterionDescription
     * @return self
     */
    public function setCriterionDescription(array $criterionDescription)
    {
        $this->criterionDescription = $criterionDescription;
        return $this;
    }

    /**
     * Gets as declaredPropertyItem
     *
     * ASBIE
     *  Criterion Item. Declared Property_ Item. Item
     *  The item associated with this criteria
     *  1
     *  Criterion Item
     *  Declared Property
     *  Item
     *  Item
     *  Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeclaredPropertyItem
     */
    public function getDeclaredPropertyItem()
    {
        return $this->declaredPropertyItem;
    }

    /**
     * Sets a new declaredPropertyItem
     *
     * ASBIE
     *  Criterion Item. Declared Property_ Item. Item
     *  The item associated with this criteria
     *  1
     *  Criterion Item
     *  Declared Property
     *  Item
     *  Item
     *  Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeclaredPropertyItem $declaredPropertyItem
     * @return self
     */
    public function setDeclaredPropertyItem(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeclaredPropertyItem $declaredPropertyItem)
    {
        $this->declaredPropertyItem = $declaredPropertyItem;
        return $this;
    }
}

