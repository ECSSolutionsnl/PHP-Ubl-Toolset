<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing GoodsProcessingType
 *
 * ABIE
 *  Goods Processing. Details
 *  A class to describe the processing of goods and products
 *  Goods Processing
 * XSD Type: GoodsProcessingType
 */
class GoodsProcessingType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Goods Processing. Identifier
     *  An identifier for this goods processing.
     *  0..1
     *  Goods Processing
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Processing. Type. Code
     *  A type code for this goods processing.
     *  0..1
     *  Goods Processing
     *  Type
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Goods Processing. Period
     *  The period within this goods processing was performed
     *  0..1
     *  Goods Processing
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Goods Processing. Processing_ Party. Party
     *  The party processing the goods
     *  0..1
     *  Goods Processing
     *  Processing
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcessingParty $processingParty
     */
    private $processingParty = null;

    /**
     * ASBIE
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubGoodsProcessing[] $subGoodsProcessing
     */
    private $subGoodsProcessing = [
        
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
     *  Goods Processing. Identifier
     *  An identifier for this goods processing.
     *  0..1
     *  Goods Processing
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
     *  Goods Processing. Identifier
     *  An identifier for this goods processing.
     *  0..1
     *  Goods Processing
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
     *  Goods Processing. Type. Code
     *  A type code for this goods processing.
     *  0..1
     *  Goods Processing
     *  Type
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
     *  Goods Processing. Type. Code
     *  A type code for this goods processing.
     *  0..1
     *  Goods Processing
     *  Type
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
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Description. Text
     *  A description for this goods processing expressed in one or more languages
     *  0..n
     *  Goods Processing
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
     * Adds as note
     *
     * BBIE
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Goods Processing. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Processing
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Goods Processing. Period
     *  The period within this goods processing was performed
     *  0..1
     *  Goods Processing
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Goods Processing. Period
     *  The period within this goods processing was performed
     *  0..1
     *  Goods Processing
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as processingParty
     *
     * ASBIE
     *  Goods Processing. Processing_ Party. Party
     *  The party processing the goods
     *  0..1
     *  Goods Processing
     *  Processing
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcessingParty
     */
    public function getProcessingParty()
    {
        return $this->processingParty;
    }

    /**
     * Sets a new processingParty
     *
     * ASBIE
     *  Goods Processing. Processing_ Party. Party
     *  The party processing the goods
     *  0..1
     *  Goods Processing
     *  Processing
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcessingParty $processingParty
     * @return self
     */
    public function setProcessingParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcessingParty $processingParty = null)
    {
        $this->processingParty = $processingParty;
        return $this;
    }

    /**
     * Adds as criterionItem
     *
     * ASBIE
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     *  Goods Processing. Criterion Item
     *  A reference to a criterion item that applies to this goods processing
     *  0..n
     *  Goods Processing
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
     * Adds as subGoodsProcessing
     *
     * ASBIE
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubGoodsProcessing $subGoodsProcessing
     */
    public function addToSubGoodsProcessing(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubGoodsProcessing $subGoodsProcessing)
    {
        $this->subGoodsProcessing[] = $subGoodsProcessing;
        return $this;
    }

    /**
     * isset subGoodsProcessing
     *
     * ASBIE
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubGoodsProcessing($index)
    {
        return isset($this->subGoodsProcessing[$index]);
    }

    /**
     * unset subGoodsProcessing
     *
     * ASBIE
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubGoodsProcessing($index)
    {
        unset($this->subGoodsProcessing[$index]);
    }

    /**
     * Gets as subGoodsProcessing
     *
     * ASBIE
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubGoodsProcessing[]
     */
    public function getSubGoodsProcessing()
    {
        return $this->subGoodsProcessing;
    }

    /**
     * Sets a new subGoodsProcessing
     *
     * ASBIE
     *  Goods Processing. Sub_ Goods Processing. Goods Processing
     *  A subordinate processing to this goods processing
     *  0..n
     *  Goods Processing
     *  Sub
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubGoodsProcessing[] $subGoodsProcessing
     * @return self
     */
    public function setSubGoodsProcessing(?array $subGoodsProcessing = null)
    {
        $this->subGoodsProcessing = $subGoodsProcessing;
        return $this;
    }
}

