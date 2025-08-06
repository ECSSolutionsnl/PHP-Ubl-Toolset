<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderingCriterionType
 *
 * ABIE
 *  Tendering Criterion. Details
 *  A class to describe an item of criterion support for representations of capabilities or the ability to meet tendering requirements, which an economic operator must provide for acceptance into a tendering process.
 *  Tendering Criterion
 * XSD Type: TenderingCriterionType
 */
class TenderingCriterionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionTypeCode $criterionTypeCode
     */
    private $criterionTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightNumeric $weightNumeric
     */
    private $weightNumeric = null;

    /**
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
     *
     * @var bool $fulfilmentIndicator
     */
    private $fulfilmentIndicator = null;

    /**
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FulfilmentIndicatorTypeCode $fulfilmentIndicatorTypeCode
     */
    private $fulfilmentIndicatorTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvaluationMethodTypeCode $evaluationMethodTypeCode
     */
    private $evaluationMethodTypeCode = null;

    /**
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingConsiderationDescription[] $weightingConsiderationDescription
     */
    private $weightingConsiderationDescription = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[] $procurementProjectLotReference
     */
    private $procurementProjectLotReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubTenderingCriterion[] $subTenderingCriterion
     */
    private $subTenderingCriterion = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Legislation[] $legislation
     */
    private $legislation = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionPropertyGroup[] $tenderingCriterionPropertyGroup
     */
    private $tenderingCriterionPropertyGroup = [
        
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
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
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
     *  Tendering Criterion. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion
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
     * Gets as criterionTypeCode
     *
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionTypeCode
     */
    public function getCriterionTypeCode()
    {
        return $this->criterionTypeCode;
    }

    /**
     * Sets a new criterionTypeCode
     *
     * BBIE
     *  Tendering Criterion. Criterion Type Code. Code
     *  A code signifying the type of criterion.
     *  0..1
     *  Tendering Criterion
     *  Criterion Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionTypeCode $criterionTypeCode
     * @return self
     */
    public function setCriterionTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CriterionTypeCode $criterionTypeCode = null)
    {
        $this->criterionTypeCode = $criterionTypeCode;
        return $this;
    }

    /**
     * Adds as name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    public function addToName(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tendering Criterion. Name
     *  The name of the criterion.
     *  0..n
     *  Tendering Criterion
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[] $name
     * @return self
     */
    public function setName(?array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     *  Tendering Criterion. Description. Text
     *  The textual description for this criterion.
     *  0..n
     *  Tendering Criterion
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
     * Gets as weightNumeric
     *
     * BBIE
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightNumeric
     */
    public function getWeightNumeric()
    {
        return $this->weightNumeric;
    }

    /**
     * Sets a new weightNumeric
     *
     * BBIE
     *  Tendering Criterion. Weight Numeric. Numeric
     *  A weighting to provide for automatic scoring of the criterion.
     *  0..1
     *  Tendering Criterion
     *  Weight Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightNumeric $weightNumeric
     * @return self
     */
    public function setWeightNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightNumeric $weightNumeric = null)
    {
        $this->weightNumeric = $weightNumeric;
        return $this;
    }

    /**
     * Gets as fulfilmentIndicator
     *
     * BBIE
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
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
     *  Tendering Criterion. Fulfilment Indicator. Indicator
     *  An indication that this criterion has been fulfilled.
     *  0..1
     *  Tendering Criterion
     *  Fulfilment Indicator
     *  Indicator
     *  Indicator. Type
     *  TRUE means fulfilled, FALSE means not fulfilled
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
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
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
     *  Tendering Criterion. Fulfilment Indicator Type Code. Code
     *  A code signifying how this criterion has been fulfilled.
     *
     *  0..1
     *  Tendering Criterion
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
     * Gets as evaluationMethodTypeCode
     *
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvaluationMethodTypeCode
     */
    public function getEvaluationMethodTypeCode()
    {
        return $this->evaluationMethodTypeCode;
    }

    /**
     * Sets a new evaluationMethodTypeCode
     *
     * BBIE
     *  Tendering Criterion. Evaluation Method Type Code. Code
     *  A code signifying the type of Evaluation.
     *  0..1
     *  Tendering Criterion
     *  Evaluation Method Type Code
     *  Code
     *  Code. Type
     *  Weight
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvaluationMethodTypeCode $evaluationMethodTypeCode
     * @return self
     */
    public function setEvaluationMethodTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvaluationMethodTypeCode $evaluationMethodTypeCode = null)
    {
        $this->evaluationMethodTypeCode = $evaluationMethodTypeCode;
        return $this;
    }

    /**
     * Adds as weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingConsiderationDescription $weightingConsiderationDescription
     */
    public function addToWeightingConsiderationDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingConsiderationDescription $weightingConsiderationDescription)
    {
        $this->weightingConsiderationDescription[] = $weightingConsiderationDescription;
        return $this;
    }

    /**
     * isset weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeightingConsiderationDescription($index)
    {
        return isset($this->weightingConsiderationDescription[$index]);
    }

    /**
     * unset weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeightingConsiderationDescription($index)
    {
        unset($this->weightingConsiderationDescription[$index]);
    }

    /**
     * Gets as weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingConsiderationDescription[]
     */
    public function getWeightingConsiderationDescription()
    {
        return $this->weightingConsiderationDescription;
    }

    /**
     * Sets a new weightingConsiderationDescription
     *
     * BBIE
     *  Tendering Criterion. Weighting Consideration Description. Text
     *  The textual description of the Weighting Description
     *  0..n
     *  Tendering Criterion
     *  Weighting Consideration Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingConsiderationDescription[] $weightingConsiderationDescription
     * @return self
     */
    public function setWeightingConsiderationDescription(?array $weightingConsiderationDescription = null)
    {
        $this->weightingConsiderationDescription = $weightingConsiderationDescription;
        return $this;
    }

    /**
     * Adds as procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference $procurementProjectLotReference
     */
    public function addToProcurementProjectLotReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference $procurementProjectLotReference)
    {
        $this->procurementProjectLotReference[] = $procurementProjectLotReference;
        return $this;
    }

    /**
     * isset procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLotReference($index)
    {
        return isset($this->procurementProjectLotReference[$index]);
    }

    /**
     * unset procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLotReference($index)
    {
        unset($this->procurementProjectLotReference[$index]);
    }

    /**
     * Gets as procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[]
     */
    public function getProcurementProjectLotReference()
    {
        return $this->procurementProjectLotReference;
    }

    /**
     * Sets a new procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion. Procurement Project Lot Reference
     *  One or more lots to which the tendering criterion applies
     *  0..n
     *  Tendering Criterion
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[] $procurementProjectLotReference
     * @return self
     */
    public function setProcurementProjectLotReference(?array $procurementProjectLotReference = null)
    {
        $this->procurementProjectLotReference = $procurementProjectLotReference;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * ASBIE
     *  Tendering Criterion. Commodity Classification
     *  One or more classification to which this criterion applies
     *  0..n
     *  Tendering Criterion
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(?array $commodityClassification = null)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubTenderingCriterion $subTenderingCriterion
     */
    public function addToSubTenderingCriterion(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubTenderingCriterion $subTenderingCriterion)
    {
        $this->subTenderingCriterion[] = $subTenderingCriterion;
        return $this;
    }

    /**
     * isset subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderingCriterion($index)
    {
        return isset($this->subTenderingCriterion[$index]);
    }

    /**
     * unset subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderingCriterion($index)
    {
        unset($this->subTenderingCriterion[$index]);
    }

    /**
     * Gets as subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubTenderingCriterion[]
     */
    public function getSubTenderingCriterion()
    {
        return $this->subTenderingCriterion;
    }

    /**
     * Sets a new subTenderingCriterion
     *
     * ASBIE
     *  Tendering Criterion. Sub_ Tendering Criterion. Tendering Criterion
     *  One or more tendering subcriteria.
     *  0..n
     *  Tendering Criterion
     *  Sub
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubTenderingCriterion[] $subTenderingCriterion
     * @return self
     */
    public function setSubTenderingCriterion(?array $subTenderingCriterion = null)
    {
        $this->subTenderingCriterion = $subTenderingCriterion;
        return $this;
    }

    /**
     * Adds as legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Legislation $legislation
     */
    public function addToLegislation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Legislation $legislation)
    {
        $this->legislation[] = $legislation;
        return $this;
    }

    /**
     * isset legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegislation($index)
    {
        return isset($this->legislation[$index]);
    }

    /**
     * unset legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegislation($index)
    {
        unset($this->legislation[$index]);
    }

    /**
     * Gets as legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Legislation[]
     */
    public function getLegislation()
    {
        return $this->legislation;
    }

    /**
     * Sets a new legislation
     *
     * ASBIE
     *  Tendering Criterion. Legislation
     *  The legislation reference for the criterion.
     *  0..n
     *  Tendering Criterion
     *  Legislation
     *  Legislation
     *  Legislation
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Legislation[] $legislation
     * @return self
     */
    public function setLegislation(?array $legislation = null)
    {
        $this->legislation = $legislation;
        return $this;
    }

    /**
     * Adds as tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionPropertyGroup $tenderingCriterionPropertyGroup
     */
    public function addToTenderingCriterionPropertyGroup(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionPropertyGroup $tenderingCriterionPropertyGroup)
    {
        $this->tenderingCriterionPropertyGroup[] = $tenderingCriterionPropertyGroup;
        return $this;
    }

    /**
     * isset tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderingCriterionPropertyGroup($index)
    {
        return isset($this->tenderingCriterionPropertyGroup[$index]);
    }

    /**
     * unset tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderingCriterionPropertyGroup($index)
    {
        unset($this->tenderingCriterionPropertyGroup[$index]);
    }

    /**
     * Gets as tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionPropertyGroup[]
     */
    public function getTenderingCriterionPropertyGroup()
    {
        return $this->tenderingCriterionPropertyGroup;
    }

    /**
     * Sets a new tenderingCriterionPropertyGroup
     *
     * ASBIE
     *  Tendering Criterion. Tendering Criterion Property Group
     *  The sets of properties that can be used to fulfil the tendering criterion.
     *  0..n
     *  Tendering Criterion
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *  Tendering Criterion Property Group
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterionPropertyGroup[] $tenderingCriterionPropertyGroup
     * @return self
     */
    public function setTenderingCriterionPropertyGroup(?array $tenderingCriterionPropertyGroup = null)
    {
        $this->tenderingCriterionPropertyGroup = $tenderingCriterionPropertyGroup;
        return $this;
    }
}

