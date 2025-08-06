<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TenderedProjectType
 *
 * ABIE
 *  Tendered Project. Details
 *  A class to describe a tendered project or project lot.
 *  Tendered Project
 * XSD Type: TenderedProjectType
 */
class TenderedProjectType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantID $variantID
     */
    private $variantID = null;

    /**
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount
     */
    private $feeAmount = null;

    /**
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalFee[] $additionalFee
     */
    private $additionalFee = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     */
    private $evidenceDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderLine[] $tenderLine
     */
    private $tenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     */
    private $awardingCriterionResponse = [
        
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
     * Gets as variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantID
     */
    public function getVariantID()
    {
        return $this->variantID;
    }

    /**
     * Sets a new variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantID $variantID
     * @return self
     */
    public function setVariantID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VariantID $variantID = null)
    {
        $this->variantID = $variantID;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount
     * @return self
     */
    public function setFeeAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
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
     * Gets as tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeID $tenderEnvelopeID = null)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Adds as additionalFee
     *
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalFee $additionalFee
     */
    public function addToAdditionalFee(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalFee $additionalFee)
    {
        $this->additionalFee[] = $additionalFee;
        return $this;
    }

    /**
     * isset additionalFee
     *
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalFee($index)
    {
        return isset($this->additionalFee[$index]);
    }

    /**
     * unset additionalFee
     *
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalFee($index)
    {
        unset($this->additionalFee[$index]);
    }

    /**
     * Gets as additionalFee
     *
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalFee[]
     */
    public function getAdditionalFee()
    {
        return $this->additionalFee;
    }

    /**
     * Sets a new additionalFee
     *
     * ASBIE
     *  Tendered Project. Additional_ Fee. Fee
     *  An additional fee for this tendered project.
     *  0..n
     *  Tendered Project
     *  Additional
     *  Fee
     *  Fee
     *  Fee
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalFee[] $additionalFee
     * @return self
     */
    public function setAdditionalFee(?array $additionalFee = null)
    {
        $this->additionalFee = $additionalFee;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLot($index)
    {
        return isset($this->procurementProjectLot[$index]);
    }

    /**
     * unset procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLot($index)
    {
        unset($this->procurementProjectLot[$index]);
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..n
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceDocumentReference $evidenceDocumentReference
     */
    public function addToEvidenceDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceDocumentReference $evidenceDocumentReference)
    {
        $this->evidenceDocumentReference[] = $evidenceDocumentReference;
        return $this;
    }

    /**
     * isset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceDocumentReference($index)
    {
        return isset($this->evidenceDocumentReference[$index]);
    }

    /**
     * unset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceDocumentReference($index)
    {
        unset($this->evidenceDocumentReference[$index]);
    }

    /**
     * Gets as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceDocumentReference[]
     */
    public function getEvidenceDocumentReference()
    {
        return $this->evidenceDocumentReference;
    }

    /**
     * Sets a new evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     * @return self
     */
    public function setEvidenceDocumentReference(?array $evidenceDocumentReference = null)
    {
        $this->evidenceDocumentReference = $evidenceDocumentReference;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal = null)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderLine $tenderLine
     */
    public function addToTenderLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderLine $tenderLine)
    {
        $this->tenderLine[] = $tenderLine;
        return $this;
    }

    /**
     * isset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderLine($index)
    {
        return isset($this->tenderLine[$index]);
    }

    /**
     * unset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderLine($index)
    {
        unset($this->tenderLine[$index]);
    }

    /**
     * Gets as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderLine[]
     */
    public function getTenderLine()
    {
        return $this->tenderLine;
    }

    /**
     * Sets a new tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderLine[] $tenderLine
     * @return self
     */
    public function setTenderLine(?array $tenderLine = null)
    {
        $this->tenderLine = $tenderLine;
        return $this;
    }

    /**
     * Adds as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingCriterionResponse $awardingCriterionResponse
     */
    public function addToAwardingCriterionResponse(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingCriterionResponse $awardingCriterionResponse)
    {
        $this->awardingCriterionResponse[] = $awardingCriterionResponse;
        return $this;
    }

    /**
     * isset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterionResponse($index)
    {
        return isset($this->awardingCriterionResponse[$index]);
    }

    /**
     * unset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterionResponse($index)
    {
        unset($this->awardingCriterionResponse[$index]);
    }

    /**
     * Gets as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingCriterionResponse[]
     */
    public function getAwardingCriterionResponse()
    {
        return $this->awardingCriterionResponse;
    }

    /**
     * Sets a new awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     * @return self
     */
    public function setAwardingCriterionResponse(?array $awardingCriterionResponse = null)
    {
        $this->awardingCriterionResponse = $awardingCriterionResponse;
        return $this;
    }
}

