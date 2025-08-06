<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ProcurementProjectLotType
 *
 * ABIE
 *  Procurement Project Lot. Details
 *  A class to describe one of the parts of a procurement project that is being subdivided to allow the contracting party to award different lots to different economic operators under different contracts.
 *  Procurement Project Lot
 * XSD Type: ProcurementProjectLotType
 */
class ProcurementProjectLotType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalDocumentReference[] $legalDocumentReference
     */
    private $legalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalDocumentReference[] $technicalDocumentReference
     */
    private $technicalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredDocumentReference[] $requiredDocumentReference
     */
    private $requiredDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProvidedDocumentReference[] $providedDocumentReference
     */
    private $providedDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms
     */
    private $tenderingTerms = null;

    /**
     * ASBIE
     *  Procurement Project Lot. Tendering Process
     *  Tendering process for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess
     */
    private $tenderingProcess = null;

    /**
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

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
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
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
     *  Procurement Project Lot. Identifier
     *  An identifier for this procurement project lot.
     *  1
     *  Procurement Project Lot
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as legalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalDocumentReference $legalDocumentReference
     */
    public function addToLegalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalDocumentReference $legalDocumentReference)
    {
        $this->legalDocumentReference[] = $legalDocumentReference;
        return $this;
    }

    /**
     * isset legalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegalDocumentReference($index)
    {
        return isset($this->legalDocumentReference[$index]);
    }

    /**
     * unset legalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegalDocumentReference($index)
    {
        unset($this->legalDocumentReference[$index]);
    }

    /**
     * Gets as legalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalDocumentReference[]
     */
    public function getLegalDocumentReference()
    {
        return $this->legalDocumentReference;
    }

    /**
     * Sets a new legalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Legal_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Procurement Project Lot
     *  Legal
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalDocumentReference[] $legalDocumentReference
     * @return self
     */
    public function setLegalDocumentReference(?array $legalDocumentReference = null)
    {
        $this->legalDocumentReference = $legalDocumentReference;
        return $this;
    }

    /**
     * Adds as technicalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalDocumentReference $technicalDocumentReference
     */
    public function addToTechnicalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalDocumentReference $technicalDocumentReference)
    {
        $this->technicalDocumentReference[] = $technicalDocumentReference;
        return $this;
    }

    /**
     * isset technicalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalDocumentReference($index)
    {
        return isset($this->technicalDocumentReference[$index]);
    }

    /**
     * unset technicalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalDocumentReference($index)
    {
        unset($this->technicalDocumentReference[$index]);
    }

    /**
     * Gets as technicalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalDocumentReference[]
     */
    public function getTechnicalDocumentReference()
    {
        return $this->technicalDocumentReference;
    }

    /**
     * Sets a new technicalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Technical_ Document Reference. Document Reference
     *  A reference to a technical document.
     *  0..n
     *  Procurement Project Lot
     *  Technical
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalDocumentReference[] $technicalDocumentReference
     * @return self
     */
    public function setTechnicalDocumentReference(?array $technicalDocumentReference = null)
    {
        $this->technicalDocumentReference = $technicalDocumentReference;
        return $this;
    }

    /**
     * Adds as requiredDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredDocumentReference $requiredDocumentReference
     */
    public function addToRequiredDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredDocumentReference $requiredDocumentReference)
    {
        $this->requiredDocumentReference[] = $requiredDocumentReference;
        return $this;
    }

    /**
     * isset requiredDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredDocumentReference($index)
    {
        return isset($this->requiredDocumentReference[$index]);
    }

    /**
     * unset requiredDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredDocumentReference($index)
    {
        unset($this->requiredDocumentReference[$index]);
    }

    /**
     * Gets as requiredDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredDocumentReference[]
     */
    public function getRequiredDocumentReference()
    {
        return $this->requiredDocumentReference;
    }

    /**
     * Sets a new requiredDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Required_ Document Reference. Document Reference
     *  A reference to a required document.
     *  0..n
     *  Procurement Project Lot
     *  Required
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredDocumentReference[] $requiredDocumentReference
     * @return self
     */
    public function setRequiredDocumentReference(?array $requiredDocumentReference = null)
    {
        $this->requiredDocumentReference = $requiredDocumentReference;
        return $this;
    }

    /**
     * Adds as providedDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProvidedDocumentReference $providedDocumentReference
     */
    public function addToProvidedDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProvidedDocumentReference $providedDocumentReference)
    {
        $this->providedDocumentReference[] = $providedDocumentReference;
        return $this;
    }

    /**
     * isset providedDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProvidedDocumentReference($index)
    {
        return isset($this->providedDocumentReference[$index]);
    }

    /**
     * unset providedDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProvidedDocumentReference($index)
    {
        unset($this->providedDocumentReference[$index]);
    }

    /**
     * Gets as providedDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProvidedDocumentReference[]
     */
    public function getProvidedDocumentReference()
    {
        return $this->providedDocumentReference;
    }

    /**
     * Sets a new providedDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Provided_ Document Reference. Document Reference
     *  A reference to a provided document.
     *  0..n
     *  Procurement Project Lot
     *  Provided
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProvidedDocumentReference[] $providedDocumentReference
     * @return self
     */
    public function setProvidedDocumentReference(?array $providedDocumentReference = null)
    {
        $this->providedDocumentReference = $providedDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Procurement Project Lot. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Procurement Project Lot
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Gets as tenderingTerms
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingTerms
     */
    public function getTenderingTerms()
    {
        return $this->tenderingTerms;
    }

    /**
     * Sets a new tenderingTerms
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Terms
     *  Tendering terms for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms
     * @return self
     */
    public function setTenderingTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms = null)
    {
        $this->tenderingTerms = $tenderingTerms;
        return $this;
    }

    /**
     * Gets as tenderingProcess
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Process
     *  Tendering process for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingProcess
     */
    public function getTenderingProcess()
    {
        return $this->tenderingProcess;
    }

    /**
     * Sets a new tenderingProcess
     *
     * ASBIE
     *  Procurement Project Lot. Tendering Process
     *  Tendering process for this procurement project lot.
     *  0..1
     *  Procurement Project Lot
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess
     * @return self
     */
    public function setTenderingProcess(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess = null)
    {
        $this->tenderingProcess = $tenderingProcess;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject
     */
    public function getProcurementProject()
    {
        return $this->procurementProject;
    }

    /**
     * Sets a new procurementProject
     *
     * ASBIE
     *  Procurement Project Lot. Procurement Project
     *  A description of the procurement project to be divided.
     *  0..1
     *  Procurement Project Lot
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject = null)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }
}

