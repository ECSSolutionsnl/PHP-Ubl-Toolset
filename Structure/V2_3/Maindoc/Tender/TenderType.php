<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\Tender;

/**
 * Class representing TenderType
 *
 * ABIE
 *  Tender. Details
 *  A document whereby an economic operator (the tenderer) makes a formal offer (the tender) to a contracting authority to execute an order for the supply or purchase of goods, or for the execution of work, according to the terms of a proposed contract.
 *  Tender
 * XSD Type: TenderType
 */
class TenderType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tender. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Tender. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Tender. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Tender. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Tender. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Tender
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Tender. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Tender. Tender Type Code. Code
     *  A code to specify the type of tender (economical or objective criteria versus technical or subjective criteria)
     *  0..1
     *  Tender
     *  Tender Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderTypeCode $tenderTypeCode
     */
    private $tenderTypeCode = null;

    /**
     * BBIE
     *  Tender. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Tender. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Tender. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[] $contractName
     */
    private $contractName = [
        
    ];

    /**
     * BBIE
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     *  Tender. Validity_ Period. Period
     *  The period for which the Tender is valid.
     *  0..1
     *  Tender
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Tender. Call For Tender_ Document Reference. Document Reference
     *  A reference to the call for tender document of which this tender result of.
     *  0..1
     *  Tender
     *  Call For Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTenderDocumentReference $callForTenderDocumentReference
     */
    private $callForTenderDocumentReference = null;

    /**
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty[] $tendererParty
     */
    private $tendererParty = [
        
    ];

    /**
     * ASBIE
     *  Tender. Tenderer Qualification_ Document Reference. Document Reference
     *  A reference to the tenderer qualification document that has been used to qualify the tenderer.
     *  0..1
     *  Tender
     *  Tenderer Qualification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationDocumentReference $tendererQualificationDocumentReference
     */
    private $tendererQualificationDocumentReference = null;

    /**
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubcontractorParty[] $subcontractorParty
     */
    private $subcontractorParty = [
        
    ];

    /**
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[] $contractingParty
     */
    private $contractingParty = [
        
    ];

    /**
     * ASBIE
     *  Tender. Originator_ Customer Party. Customer Party
     *  The party originating the Tender.
     *  0..1
     *  Tender
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderedProject[] $tenderedProject
     */
    private $tenderedProject = [
        
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
     * Gets as uBLVersionID
     *
     * BBIE
     *  Tender. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Tender. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID = null)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Tender. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Tender. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID = null)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Tender. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Tender. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID = null)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as profileExecutionID
     *
     * BBIE
     *  Tender. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID
     */
    public function getProfileExecutionID()
    {
        return $this->profileExecutionID;
    }

    /**
     * Sets a new profileExecutionID
     *
     * BBIE
     *  Tender. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     * @return self
     */
    public function setProfileExecutionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID = null)
    {
        $this->profileExecutionID = $profileExecutionID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Tender. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Tender
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
     *  Tender. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Tender
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Tender. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Tender. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Tender. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Tender. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as tenderTypeCode
     *
     * BBIE
     *  Tender. Tender Type Code. Code
     *  A code to specify the type of tender (economical or objective criteria versus technical or subjective criteria)
     *  0..1
     *  Tender
     *  Tender Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderTypeCode
     */
    public function getTenderTypeCode()
    {
        return $this->tenderTypeCode;
    }

    /**
     * Sets a new tenderTypeCode
     *
     * BBIE
     *  Tender. Tender Type Code. Code
     *  A code to specify the type of tender (economical or objective criteria versus technical or subjective criteria)
     *  0..1
     *  Tender
     *  Tender Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderTypeCode $tenderTypeCode
     * @return self
     */
    public function setTenderTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderTypeCode $tenderTypeCode = null)
    {
        $this->tenderTypeCode = $tenderTypeCode;
        return $this;
    }

    /**
     * Gets as contractFolderID
     *
     * BBIE
     *  Tender. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID
     */
    public function getContractFolderID()
    {
        return $this->contractFolderID;
    }

    /**
     * Sets a new contractFolderID
     *
     * BBIE
     *  Tender. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     * @return self
     */
    public function setContractFolderID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID)
    {
        $this->contractFolderID = $contractFolderID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Tender. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Tender. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Tender. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Tender. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Adds as contractName
     *
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName $contractName
     */
    public function addToContractName(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName $contractName)
    {
        $this->contractName[] = $contractName;
        return $this;
    }

    /**
     * isset contractName
     *
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractName($index)
    {
        return isset($this->contractName[$index]);
    }

    /**
     * unset contractName
     *
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractName($index)
    {
        unset($this->contractName[$index]);
    }

    /**
     * Gets as contractName
     *
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[]
     */
    public function getContractName()
    {
        return $this->contractName;
    }

    /**
     * Sets a new contractName
     *
     * BBIE
     *  Tender. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[] $contractName
     * @return self
     */
    public function setContractName(?array $contractName = null)
    {
        $this->contractName = $contractName;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     *  Tender. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender
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
     * Gets as validityPeriod
     *
     * ASBIE
     *  Tender. Validity_ Period. Period
     *  The period for which the Tender is valid.
     *  0..1
     *  Tender
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Tender. Validity_ Period. Period
     *  The period for which the Tender is valid.
     *  0..1
     *  Tender
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as callForTenderDocumentReference
     *
     * ASBIE
     *  Tender. Call For Tender_ Document Reference. Document Reference
     *  A reference to the call for tender document of which this tender result of.
     *  0..1
     *  Tender
     *  Call For Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTenderDocumentReference
     */
    public function getCallForTenderDocumentReference()
    {
        return $this->callForTenderDocumentReference;
    }

    /**
     * Sets a new callForTenderDocumentReference
     *
     * ASBIE
     *  Tender. Call For Tender_ Document Reference. Document Reference
     *  A reference to the call for tender document of which this tender result of.
     *  0..1
     *  Tender
     *  Call For Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTenderDocumentReference $callForTenderDocumentReference
     * @return self
     */
    public function setCallForTenderDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CallForTenderDocumentReference $callForTenderDocumentReference = null)
    {
        $this->callForTenderDocumentReference = $callForTenderDocumentReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Tender. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Tender. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(?array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Adds as tendererParty
     *
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty $tendererParty
     */
    public function addToTendererParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty $tendererParty)
    {
        $this->tendererParty[] = $tendererParty;
        return $this;
    }

    /**
     * isset tendererParty
     *
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTendererParty($index)
    {
        return isset($this->tendererParty[$index]);
    }

    /**
     * unset tendererParty
     *
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTendererParty($index)
    {
        unset($this->tendererParty[$index]);
    }

    /**
     * Gets as tendererParty
     *
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty[]
     */
    public function getTendererParty()
    {
        return $this->tendererParty;
    }

    /**
     * Sets a new tendererParty
     *
     * ASBIE
     *  Tender. Tenderer_ Party. Party
     *  The primary tenderer.
     *  1..n
     *  Tender
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty[] $tendererParty
     * @return self
     */
    public function setTendererParty(array $tendererParty)
    {
        $this->tendererParty = $tendererParty;
        return $this;
    }

    /**
     * Gets as tendererQualificationDocumentReference
     *
     * ASBIE
     *  Tender. Tenderer Qualification_ Document Reference. Document Reference
     *  A reference to the tenderer qualification document that has been used to qualify the tenderer.
     *  0..1
     *  Tender
     *  Tenderer Qualification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationDocumentReference
     */
    public function getTendererQualificationDocumentReference()
    {
        return $this->tendererQualificationDocumentReference;
    }

    /**
     * Sets a new tendererQualificationDocumentReference
     *
     * ASBIE
     *  Tender. Tenderer Qualification_ Document Reference. Document Reference
     *  A reference to the tenderer qualification document that has been used to qualify the tenderer.
     *  0..1
     *  Tender
     *  Tenderer Qualification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationDocumentReference $tendererQualificationDocumentReference
     * @return self
     */
    public function setTendererQualificationDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererQualificationDocumentReference $tendererQualificationDocumentReference = null)
    {
        $this->tendererQualificationDocumentReference = $tendererQualificationDocumentReference;
        return $this;
    }

    /**
     * Adds as subcontractorParty
     *
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubcontractorParty $subcontractorParty
     */
    public function addToSubcontractorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubcontractorParty $subcontractorParty)
    {
        $this->subcontractorParty[] = $subcontractorParty;
        return $this;
    }

    /**
     * isset subcontractorParty
     *
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubcontractorParty($index)
    {
        return isset($this->subcontractorParty[$index]);
    }

    /**
     * unset subcontractorParty
     *
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubcontractorParty($index)
    {
        unset($this->subcontractorParty[$index]);
    }

    /**
     * Gets as subcontractorParty
     *
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubcontractorParty[]
     */
    public function getSubcontractorParty()
    {
        return $this->subcontractorParty;
    }

    /**
     * Sets a new subcontractorParty
     *
     * ASBIE
     *  Tender. Subcontractor_ Party. Party
     *  A subcontractor or other tenderer participating in the same Tender.
     *  0..n
     *  Tender
     *  Subcontractor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubcontractorParty[] $subcontractorParty
     * @return self
     */
    public function setSubcontractorParty(?array $subcontractorParty = null)
    {
        $this->subcontractorParty = $subcontractorParty;
        return $this;
    }

    /**
     * Adds as contractingParty
     *
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty
     */
    public function addToContractingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty)
    {
        $this->contractingParty[] = $contractingParty;
        return $this;
    }

    /**
     * isset contractingParty
     *
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractingParty($index)
    {
        return isset($this->contractingParty[$index]);
    }

    /**
     * unset contractingParty
     *
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractingParty($index)
    {
        unset($this->contractingParty[$index]);
    }

    /**
     * Gets as contractingParty
     *
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[]
     */
    public function getContractingParty()
    {
        return $this->contractingParty;
    }

    /**
     * Sets a new contractingParty
     *
     * ASBIE
     *  Tender. Contracting Party
     *  The contracting party.
     *  0..n
     *  Tender
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[] $contractingParty
     * @return self
     */
    public function setContractingParty(?array $contractingParty = null)
    {
        $this->contractingParty = $contractingParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Tender. Originator_ Customer Party. Customer Party
     *  The party originating the Tender.
     *  0..1
     *  Tender
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Tender. Originator_ Customer Party. Customer Party
     *  The party originating the Tender.
     *  0..1
     *  Tender
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty = null)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Adds as tenderedProject
     *
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderedProject $tenderedProject
     */
    public function addToTenderedProject(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderedProject $tenderedProject)
    {
        $this->tenderedProject[] = $tenderedProject;
        return $this;
    }

    /**
     * isset tenderedProject
     *
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderedProject($index)
    {
        return isset($this->tenderedProject[$index]);
    }

    /**
     * unset tenderedProject
     *
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderedProject($index)
    {
        unset($this->tenderedProject[$index]);
    }

    /**
     * Gets as tenderedProject
     *
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderedProject[]
     */
    public function getTenderedProject()
    {
        return $this->tenderedProject;
    }

    /**
     * Sets a new tenderedProject
     *
     * ASBIE
     *  Tender. Tendered Project
     *  A project with which this Tender is associated. A single Tender can be used to bid for one project, multiple projects, or the global project.
     *  1..n
     *  Tender
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderedProject[] $tenderedProject
     * @return self
     */
    public function setTenderedProject(array $tenderedProject)
    {
        $this->tenderedProject = $tenderedProject;
        return $this;
    }
}

