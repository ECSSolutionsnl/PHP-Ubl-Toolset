<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing AttestationLineType
 *
 * ABIE
 *  Attestation Line. Details
 *  A class describing an attestation line
 *  Attestation Line
 * XSD Type: AttestationLineType
 */
class AttestationLineType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Attestation Line. Identifier
     *  An identifier for this attestation line
     *  0..1
     *  Attestation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Attestation Line. Type_ Code. Code
     *  A code describing the type of attestation line or statement
     *  0..1
     *  Attestation Line
     *  Type
     *  Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CriterionItem[] $criterionItem
     */
    private $criterionItem = [
        
    ];

    /**
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubAttestationLine[] $subAttestationLine
     */
    private $subAttestationLine = [
        
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
     *  Attestation Line. Identifier
     *  An identifier for this attestation line
     *  0..1
     *  Attestation Line
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
     *  Attestation Line. Identifier
     *  An identifier for this attestation line
     *  0..1
     *  Attestation Line
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
     *  Attestation Line. Type_ Code. Code
     *  A code describing the type of attestation line or statement
     *  0..1
     *  Attestation Line
     *  Type
     *  Code
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
     *  Attestation Line. Type_ Code. Code
     *  A code describing the type of attestation line or statement
     *  0..1
     *  Attestation Line
     *  Type
     *  Code
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
     * Adds as description
     *
     * BBIE
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
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
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
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
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
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
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
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
     *  Attestation Line. Description. Text
     *  A textual description of this attestation line
     *  0..n
     *  Attestation Line
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
     * Adds as criterionItem
     *
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CriterionItem $criterionItem
     */
    public function addToCriterionItem(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CriterionItem $criterionItem)
    {
        $this->criterionItem[] = $criterionItem;
        return $this;
    }

    /**
     * isset criterionItem
     *
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriterionItem($index)
    {
        return isset($this->criterionItem[$index]);
    }

    /**
     * unset criterionItem
     *
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriterionItem($index)
    {
        unset($this->criterionItem[$index]);
    }

    /**
     * Gets as criterionItem
     *
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CriterionItem[]
     */
    public function getCriterionItem()
    {
        return $this->criterionItem;
    }

    /**
     * Sets a new criterionItem
     *
     * ASBIE
     *  Attestation Line. Criterion Item
     *  Criterion items associated with this attestation line
     *  0..n
     *  Attestation Line
     *  Criterion Item
     *  Criterion Item
     *  Criterion Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CriterionItem[] $criterionItem
     * @return self
     */
    public function setCriterionItem(?array $criterionItem = null)
    {
        $this->criterionItem = $criterionItem;
        return $this;
    }

    /**
     * Adds as subAttestationLine
     *
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubAttestationLine $subAttestationLine
     */
    public function addToSubAttestationLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubAttestationLine $subAttestationLine)
    {
        $this->subAttestationLine[] = $subAttestationLine;
        return $this;
    }

    /**
     * isset subAttestationLine
     *
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubAttestationLine($index)
    {
        return isset($this->subAttestationLine[$index]);
    }

    /**
     * unset subAttestationLine
     *
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubAttestationLine($index)
    {
        unset($this->subAttestationLine[$index]);
    }

    /**
     * Gets as subAttestationLine
     *
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubAttestationLine[]
     */
    public function getSubAttestationLine()
    {
        return $this->subAttestationLine;
    }

    /**
     * Sets a new subAttestationLine
     *
     * ASBIE
     *  Attestation Line. Sub_ Attestation Line. Attestation Line
     *  An attestation line subsidiary to this attestation line
     *  0..n
     *  Attestation Line
     *  Sub
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubAttestationLine[] $subAttestationLine
     * @return self
     */
    public function setSubAttestationLine(?array $subAttestationLine = null)
    {
        $this->subAttestationLine = $subAttestationLine;
        return $this;
    }
}

