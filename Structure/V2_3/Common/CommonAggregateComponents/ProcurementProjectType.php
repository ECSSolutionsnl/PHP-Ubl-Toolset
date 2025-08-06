<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ProcurementProjectType
 *
 * ABIE
 *  Procurement Project. Details
 *  A class to describe a project to procure goods, works, or services.
 *  Procurement Project
 * XSD Type: ProcurementProjectType
 */
class ProcurementProjectType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode
     */
    private $procurementTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementSubTypeCode $procurementSubTypeCode
     */
    private $procurementSubTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualityControlCode $qualityControlCode
     */
    private $qualityControlCode = null;

    /**
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredFeeAmount $requiredFeeAmount
     */
    private $requiredFeeAmount = null;

    /**
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requestedDeliveryDate
     */
    private $requestedDeliveryDate = null;

    /**
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     */
    private $estimatedOverallContractQuantity = null;

    /**
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. SME Suitable. Indicator
     *  Suitable for Small- and Medium-sized Enterprises. This element specifies that the buyer accepts the risks associated of contracting with SMEs.
     *  0..1
     *  Procurement Project
     *  SME Suitable
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sMESuitableIndicator
     */
    private $sMESuitableIndicator = null;

    /**
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementAdditionalType[] $procurementAdditionalType
     */
    private $procurementAdditionalType = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal
     */
    private $requestedTenderTotal = null;

    /**
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainCommodityClassification[] $mainCommodityClassification
     */
    private $mainCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     */
    private $additionalCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RealizedLocation[] $realizedLocation
     */
    private $realizedLocation = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedPeriod $plannedPeriod
     */
    private $plannedPeriod = null;

    /**
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExtension $contractExtension
     */
    private $contractExtension = null;

    /**
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestForTenderLine[] $requestForTenderLine
     */
    private $requestForTenderLine = [
        
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
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     * Adds as name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
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
     * Gets as procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode
     */
    public function getProcurementTypeCode()
    {
        return $this->procurementTypeCode;
    }

    /**
     * Sets a new procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode = null)
    {
        $this->procurementTypeCode = $procurementTypeCode;
        return $this;
    }

    /**
     * Gets as procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCode()
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * Sets a new procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementSubTypeCode $procurementSubTypeCode
     * @return self
     */
    public function setProcurementSubTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementSubTypeCode $procurementSubTypeCode = null)
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;
        return $this;
    }

    /**
     * Gets as qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualityControlCode
     */
    public function getQualityControlCode()
    {
        return $this->qualityControlCode;
    }

    /**
     * Sets a new qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualityControlCode $qualityControlCode
     * @return self
     */
    public function setQualityControlCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualityControlCode $qualityControlCode = null)
    {
        $this->qualityControlCode = $qualityControlCode;
        return $this;
    }

    /**
     * Gets as requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredFeeAmount
     */
    public function getRequiredFeeAmount()
    {
        return $this->requiredFeeAmount;
    }

    /**
     * Sets a new requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredFeeAmount $requiredFeeAmount
     * @return self
     */
    public function setRequiredFeeAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredFeeAmount $requiredFeeAmount = null)
    {
        $this->requiredFeeAmount = $requiredFeeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * Sets a new requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requestedDeliveryDate
     * @return self
     */
    public function setRequestedDeliveryDate(?\DateTime $requestedDeliveryDate = null)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantity()
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * Sets a new estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     * @return self
     */
    public function setEstimatedOverallContractQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EstimatedOverallContractQuantity $estimatedOverallContractQuantity = null)
    {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     * Gets as sMESuitableIndicator
     *
     * BBIE
     *  Procurement Project. SME Suitable. Indicator
     *  Suitable for Small- and Medium-sized Enterprises. This element specifies that the buyer accepts the risks associated of contracting with SMEs.
     *  0..1
     *  Procurement Project
     *  SME Suitable
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSMESuitableIndicator()
    {
        return $this->sMESuitableIndicator;
    }

    /**
     * Sets a new sMESuitableIndicator
     *
     * BBIE
     *  Procurement Project. SME Suitable. Indicator
     *  Suitable for Small- and Medium-sized Enterprises. This element specifies that the buyer accepts the risks associated of contracting with SMEs.
     *  0..1
     *  Procurement Project
     *  SME Suitable
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sMESuitableIndicator
     * @return self
     */
    public function setSMESuitableIndicator($sMESuitableIndicator)
    {
        $this->sMESuitableIndicator = $sMESuitableIndicator;
        return $this;
    }

    /**
     * Adds as procurementAdditionalType
     *
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementAdditionalType $procurementAdditionalType
     */
    public function addToProcurementAdditionalType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementAdditionalType $procurementAdditionalType)
    {
        $this->procurementAdditionalType[] = $procurementAdditionalType;
        return $this;
    }

    /**
     * isset procurementAdditionalType
     *
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementAdditionalType($index)
    {
        return isset($this->procurementAdditionalType[$index]);
    }

    /**
     * unset procurementAdditionalType
     *
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementAdditionalType($index)
    {
        unset($this->procurementAdditionalType[$index]);
    }

    /**
     * Gets as procurementAdditionalType
     *
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementAdditionalType[]
     */
    public function getProcurementAdditionalType()
    {
        return $this->procurementAdditionalType;
    }

    /**
     * Sets a new procurementAdditionalType
     *
     * ASBIE
     *  Procurement Project. Procurement Additional Type
     *  An association to additional procurement type.
     *  0..n
     *  Procurement Project
     *  Procurement Additional Type
     *  Procurement Additional Type
     *  Procurement Additional Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementAdditionalType[] $procurementAdditionalType
     * @return self
     */
    public function setProcurementAdditionalType(?array $procurementAdditionalType = null)
    {
        $this->procurementAdditionalType = $procurementAdditionalType;
        return $this;
    }

    /**
     * Gets as requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedTenderTotal
     */
    public function getRequestedTenderTotal()
    {
        return $this->requestedTenderTotal;
    }

    /**
     * Sets a new requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal
     * @return self
     */
    public function setRequestedTenderTotal(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal = null)
    {
        $this->requestedTenderTotal = $requestedTenderTotal;
        return $this;
    }

    /**
     * Adds as mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainCommodityClassification $mainCommodityClassification
     */
    public function addToMainCommodityClassification(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainCommodityClassification $mainCommodityClassification)
    {
        $this->mainCommodityClassification[] = $mainCommodityClassification;
        return $this;
    }

    /**
     * isset mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainCommodityClassification($index)
    {
        return isset($this->mainCommodityClassification[$index]);
    }

    /**
     * unset mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainCommodityClassification($index)
    {
        unset($this->mainCommodityClassification[$index]);
    }

    /**
     * Gets as mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainCommodityClassification[]
     */
    public function getMainCommodityClassification()
    {
        return $this->mainCommodityClassification;
    }

    /**
     * Sets a new mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainCommodityClassification[] $mainCommodityClassification
     * @return self
     */
    public function setMainCommodityClassification(?array $mainCommodityClassification = null)
    {
        $this->mainCommodityClassification = $mainCommodityClassification;
        return $this;
    }

    /**
     * Adds as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification
     */
    public function addToAdditionalCommodityClassification(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification)
    {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;
        return $this;
    }

    /**
     * isset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCommodityClassification($index)
    {
        return isset($this->additionalCommodityClassification[$index]);
    }

    /**
     * unset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCommodityClassification($index)
    {
        unset($this->additionalCommodityClassification[$index]);
    }

    /**
     * Gets as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalCommodityClassification[]
     */
    public function getAdditionalCommodityClassification()
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * Sets a new additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     * @return self
     */
    public function setAdditionalCommodityClassification(?array $additionalCommodityClassification = null)
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;
        return $this;
    }

    /**
     * Adds as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RealizedLocation $realizedLocation
     */
    public function addToRealizedLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RealizedLocation $realizedLocation)
    {
        $this->realizedLocation[] = $realizedLocation;
        return $this;
    }

    /**
     * isset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRealizedLocation($index)
    {
        return isset($this->realizedLocation[$index]);
    }

    /**
     * unset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRealizedLocation($index)
    {
        unset($this->realizedLocation[$index]);
    }

    /**
     * Gets as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RealizedLocation[]
     */
    public function getRealizedLocation()
    {
        return $this->realizedLocation;
    }

    /**
     * Sets a new realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RealizedLocation[] $realizedLocation
     * @return self
     */
    public function setRealizedLocation(?array $realizedLocation = null)
    {
        $this->realizedLocation = $realizedLocation;
        return $this;
    }

    /**
     * Gets as plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedPeriod
     */
    public function getPlannedPeriod()
    {
        return $this->plannedPeriod;
    }

    /**
     * Sets a new plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedPeriod $plannedPeriod
     * @return self
     */
    public function setPlannedPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedPeriod $plannedPeriod = null)
    {
        $this->plannedPeriod = $plannedPeriod;
        return $this;
    }

    /**
     * Gets as contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExtension
     */
    public function getContractExtension()
    {
        return $this->contractExtension;
    }

    /**
     * Sets a new contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExtension $contractExtension
     * @return self
     */
    public function setContractExtension(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractExtension $contractExtension = null)
    {
        $this->contractExtension = $contractExtension;
        return $this;
    }

    /**
     * Adds as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestForTenderLine $requestForTenderLine
     */
    public function addToRequestForTenderLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestForTenderLine $requestForTenderLine)
    {
        $this->requestForTenderLine[] = $requestForTenderLine;
        return $this;
    }

    /**
     * isset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestForTenderLine($index)
    {
        return isset($this->requestForTenderLine[$index]);
    }

    /**
     * unset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestForTenderLine($index)
    {
        unset($this->requestForTenderLine[$index]);
    }

    /**
     * Gets as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestForTenderLine[]
     */
    public function getRequestForTenderLine()
    {
        return $this->requestForTenderLine;
    }

    /**
     * Sets a new requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestForTenderLine[] $requestForTenderLine
     * @return self
     */
    public function setRequestForTenderLine(?array $requestForTenderLine = null)
    {
        $this->requestForTenderLine = $requestForTenderLine;
        return $this;
    }
}

