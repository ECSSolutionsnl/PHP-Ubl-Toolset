<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PhysicalAttributeType
 *
 * ABIE
 *  Physical Attribute. Details
 *  A class to describe a physical attribute.
 *  Physical Attribute
 * XSD Type: PhysicalAttributeType
 */
class PhysicalAttributeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionCode $positionCode
     */
    private $positionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DescriptionCode $descriptionCode
     */
    private $descriptionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
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
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
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
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionCode
     */
    public function getPositionCode()
    {
        return $this->positionCode;
    }

    /**
     * Sets a new positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionCode $positionCode
     * @return self
     */
    public function setPositionCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionCode $positionCode = null)
    {
        $this->positionCode = $positionCode;
        return $this;
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DescriptionCode
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DescriptionCode $descriptionCode
     * @return self
     */
    public function setDescriptionCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DescriptionCode $descriptionCode = null)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
}

