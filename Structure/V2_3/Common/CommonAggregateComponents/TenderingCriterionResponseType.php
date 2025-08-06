<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderingCriterionResponseType
 *
 * ABIE
 *  Tendering Criterion Response. Details
 *  A class to describe a response to a criterion property.
 *  Tendering Criterion Response
 * XSD Type: TenderingCriterionResponseType
 */
class TenderingCriterionResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatedCriterionPropertyID $validatedCriterionPropertyID
     */
    private $validatedCriterionPropertyID = null;

    /**
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode
     */
    private $confidentialityLevelCode = null;

    /**
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponseValue[] $responseValue
     */
    private $responseValue = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * ASBIE
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
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
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Identifier
     *  An identifier for this criterion property response.
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Name
     *  The name of the criterion property response
     *  0..1
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Description. Text
     *  A description of the criterion response
     *  0..n
     *  Tendering Criterion Response
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
     * Gets as validatedCriterionPropertyID
     *
     * BBIE
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatedCriterionPropertyID
     */
    public function getValidatedCriterionPropertyID()
    {
        return $this->validatedCriterionPropertyID;
    }

    /**
     * Sets a new validatedCriterionPropertyID
     *
     * BBIE
     *  Tendering Criterion Response. Validated Criterion Property Identifier. Identifier
     *  An identifier for this item of criterion support.
     *  0..1
     *  Tendering Criterion Response
     *  Validated Criterion Property Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatedCriterionPropertyID $validatedCriterionPropertyID
     * @return self
     */
    public function setValidatedCriterionPropertyID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatedCriterionPropertyID $validatedCriterionPropertyID = null)
    {
        $this->validatedCriterionPropertyID = $validatedCriterionPropertyID;
        return $this;
    }

    /**
     * Gets as confidentialityLevelCode
     *
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode
     */
    public function getConfidentialityLevelCode()
    {
        return $this->confidentialityLevelCode;
    }

    /**
     * Sets a new confidentialityLevelCode
     *
     * BBIE
     *  Tendering Criterion Response. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of the response to this criterion.
     *  0..1
     *  Tendering Criterion Response
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode
     * @return self
     */
    public function setConfidentialityLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode = null)
    {
        $this->confidentialityLevelCode = $confidentialityLevelCode;
        return $this;
    }

    /**
     * Adds as responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponseValue $responseValue
     */
    public function addToResponseValue(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponseValue $responseValue)
    {
        $this->responseValue[] = $responseValue;
        return $this;
    }

    /**
     * isset responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponseValue($index)
    {
        return isset($this->responseValue[$index]);
    }

    /**
     * unset responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponseValue($index)
    {
        unset($this->responseValue[$index]);
    }

    /**
     * Gets as responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponseValue[]
     */
    public function getResponseValue()
    {
        return $this->responseValue;
    }

    /**
     * Sets a new responseValue
     *
     * ASBIE
     *  Tendering Criterion Response. Response Value
     *  The criterion requirement property values.
     *  0..n
     *  Tendering Criterion Response
     *  Response Value
     *  Response Value
     *  Response Value
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponseValue[] $responseValue
     * @return self
     */
    public function setResponseValue(?array $responseValue = null)
    {
        $this->responseValue = $responseValue;
        return $this;
    }

    /**
     * Adds as applicablePeriod
     *
     * ASBIE
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Applicable_ Period. Period
     *  The period to which this criterion property response applies.
     *  0..n
     *  Tendering Criterion Response
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
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Tendering Criterion Response. Evidence Supplied
     *  A reference to the evidence supporting this criterion property response.
     *  0..n
     *  Tendering Criterion Response
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(?array $evidenceSupplied = null)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Adds as procurementProjectLotReference
     *
     * ASBIE
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Procurement Project Lot Reference
     *  One or more lots to which the criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
     *  Tendering Criterion Response. Commodity Classification
     *  One or more classification to which this criterion response applies
     *  0..n
     *  Tendering Criterion Response
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
}

