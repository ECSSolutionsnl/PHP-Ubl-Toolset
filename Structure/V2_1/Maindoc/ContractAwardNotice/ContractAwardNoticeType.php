<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\ContractAwardNotice;

/**
 * Class representing ContractAwardNoticeType
 *
 * ABIE
 *  Contract Award Notice. Details
 *  A document published by a Contracting Party to announce the awarding of a procurement project.
 *  Contract Award Notice
 * XSD Type: ContractAwardNoticeType
 */
class ContractAwardNoticeType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contract Award Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Award Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Contract Award Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Award Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Contract Award Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Award Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Contract Award Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Award Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Contract Award Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Award Notice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contract Award Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Award Notice
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
     *  Contract Award Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Award Notice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Contract Award Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Award Notice
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Contract Award Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Contract Award Notice
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Contract Award Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Award Notice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RegulatoryDomain[] $regulatoryDomain
     */
    private $regulatoryDomain = [
        
    ];

    /**
     * BBIE
     *  Contract Award Notice. Publish Award Indicator. Indicator
     *  An indicator specifying if the notice is published for service contracts within certain service categories (true) or not (false).
     *  0..1
     *  Contract Award Notice
     *  Publish Award Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $publishAwardIndicator
     */
    private $publishAwardIndicator = null;

    /**
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PreviousDocumentReference[] $previousDocumentReference
     */
    private $previousDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MinutesDocumentReference[] $minutesDocumentReference
     */
    private $minutesDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Contract Award Notice. Contracting Party
     *  The contracting party.
     *  1
     *  Contract Award Notice
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractingParty $contractingParty
     */
    private $contractingParty = null;

    /**
     * ASBIE
     *  Contract Award Notice. Originator_ Customer Party. Customer Party
     *  The party who originated Order.
     *  0..1
     *  Contract Award Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Contract Award Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Award Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * ASBIE
     *  Contract Award Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Award Notice
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms
     */
    private $tenderingTerms = null;

    /**
     * ASBIE
     *  Contract Award Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Award Notice
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess
     */
    private $tenderingProcess = null;

    /**
     * ASBIE
     *  Contract Award Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Contract Award Notice
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * ASBIE
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderResult[] $tenderResult
     */
    private $tenderResult = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for all extensions present in the document.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for all extensions present in the document.
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
     * A container for all extensions present in the document.
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
     * A container for all extensions present in the document.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
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
     *  Contract Award Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Award Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Contract Award Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Award Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID = null)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Contract Award Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Award Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Contract Award Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Award Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID = null)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Contract Award Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Award Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Contract Award Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Award Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID = null)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as profileExecutionID
     *
     * BBIE
     *  Contract Award Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Award Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID
     */
    public function getProfileExecutionID()
    {
        return $this->profileExecutionID;
    }

    /**
     * Sets a new profileExecutionID
     *
     * BBIE
     *  Contract Award Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Award Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     * @return self
     */
    public function setProfileExecutionID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID = null)
    {
        $this->profileExecutionID = $profileExecutionID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Contract Award Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Award Notice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Contract Award Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Award Notice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Contract Award Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Award Notice
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
     *  Contract Award Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Award Notice
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
     *  Contract Award Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Award Notice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Contract Award Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Award Notice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as contractFolderID
     *
     * BBIE
     *  Contract Award Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Award Notice
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractFolderID
     */
    public function getContractFolderID()
    {
        return $this->contractFolderID;
    }

    /**
     * Sets a new contractFolderID
     *
     * BBIE
     *  Contract Award Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Award Notice
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     * @return self
     */
    public function setContractFolderID(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractFolderID $contractFolderID)
    {
        $this->contractFolderID = $contractFolderID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Contract Award Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Contract Award Notice
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
     *  Contract Award Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Contract Award Notice
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
     *  Contract Award Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Award Notice
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
     *  Contract Award Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Award Notice
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
     * Adds as note
     *
     * BBIE
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Contract Award Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Award Notice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as regulatoryDomain
     *
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RegulatoryDomain $regulatoryDomain
     */
    public function addToRegulatoryDomain(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RegulatoryDomain $regulatoryDomain)
    {
        $this->regulatoryDomain[] = $regulatoryDomain;
        return $this;
    }

    /**
     * isset regulatoryDomain
     *
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegulatoryDomain($index)
    {
        return isset($this->regulatoryDomain[$index]);
    }

    /**
     * unset regulatoryDomain
     *
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegulatoryDomain($index)
    {
        unset($this->regulatoryDomain[$index]);
    }

    /**
     * Gets as regulatoryDomain
     *
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RegulatoryDomain[]
     */
    public function getRegulatoryDomain()
    {
        return $this->regulatoryDomain;
    }

    /**
     * Sets a new regulatoryDomain
     *
     * BBIE
     *  Contract Award Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Award Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RegulatoryDomain[] $regulatoryDomain
     * @return self
     */
    public function setRegulatoryDomain(?array $regulatoryDomain = null)
    {
        $this->regulatoryDomain = $regulatoryDomain;
        return $this;
    }

    /**
     * Gets as publishAwardIndicator
     *
     * BBIE
     *  Contract Award Notice. Publish Award Indicator. Indicator
     *  An indicator specifying if the notice is published for service contracts within certain service categories (true) or not (false).
     *  0..1
     *  Contract Award Notice
     *  Publish Award Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPublishAwardIndicator()
    {
        return $this->publishAwardIndicator;
    }

    /**
     * Sets a new publishAwardIndicator
     *
     * BBIE
     *  Contract Award Notice. Publish Award Indicator. Indicator
     *  An indicator specifying if the notice is published for service contracts within certain service categories (true) or not (false).
     *  0..1
     *  Contract Award Notice
     *  Publish Award Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $publishAwardIndicator
     * @return self
     */
    public function setPublishAwardIndicator($publishAwardIndicator)
    {
        $this->publishAwardIndicator = $publishAwardIndicator;
        return $this;
    }

    /**
     * Adds as previousDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PreviousDocumentReference $previousDocumentReference
     */
    public function addToPreviousDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PreviousDocumentReference $previousDocumentReference)
    {
        $this->previousDocumentReference[] = $previousDocumentReference;
        return $this;
    }

    /**
     * isset previousDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreviousDocumentReference($index)
    {
        return isset($this->previousDocumentReference[$index]);
    }

    /**
     * unset previousDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreviousDocumentReference($index)
    {
        unset($this->previousDocumentReference[$index]);
    }

    /**
     * Gets as previousDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PreviousDocumentReference[]
     */
    public function getPreviousDocumentReference()
    {
        return $this->previousDocumentReference;
    }

    /**
     * Sets a new previousDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Previous_ Document Reference. Document Reference
     *  A reference to a previously sent document.
     *  0..n
     *  Contract Award Notice
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PreviousDocumentReference[] $previousDocumentReference
     * @return self
     */
    public function setPreviousDocumentReference(?array $previousDocumentReference = null)
    {
        $this->previousDocumentReference = $previousDocumentReference;
        return $this;
    }

    /**
     * Adds as minutesDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MinutesDocumentReference $minutesDocumentReference
     */
    public function addToMinutesDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MinutesDocumentReference $minutesDocumentReference)
    {
        $this->minutesDocumentReference[] = $minutesDocumentReference;
        return $this;
    }

    /**
     * isset minutesDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMinutesDocumentReference($index)
    {
        return isset($this->minutesDocumentReference[$index]);
    }

    /**
     * unset minutesDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMinutesDocumentReference($index)
    {
        unset($this->minutesDocumentReference[$index]);
    }

    /**
     * Gets as minutesDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MinutesDocumentReference[]
     */
    public function getMinutesDocumentReference()
    {
        return $this->minutesDocumentReference;
    }

    /**
     * Sets a new minutesDocumentReference
     *
     * ASBIE
     *  Contract Award Notice. Minutes_ Document Reference. Document Reference
     *  A reference to a set of minutes.
     *  0..n
     *  Contract Award Notice
     *  Minutes
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MinutesDocumentReference[] $minutesDocumentReference
     * @return self
     */
    public function setMinutesDocumentReference(?array $minutesDocumentReference = null)
    {
        $this->minutesDocumentReference = $minutesDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Contract Award Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Award Notice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(?array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as contractingParty
     *
     * ASBIE
     *  Contract Award Notice. Contracting Party
     *  The contracting party.
     *  1
     *  Contract Award Notice
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractingParty
     */
    public function getContractingParty()
    {
        return $this->contractingParty;
    }

    /**
     * Sets a new contractingParty
     *
     * ASBIE
     *  Contract Award Notice. Contracting Party
     *  The contracting party.
     *  1
     *  Contract Award Notice
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractingParty $contractingParty
     * @return self
     */
    public function setContractingParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractingParty $contractingParty)
    {
        $this->contractingParty = $contractingParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Contract Award Notice. Originator_ Customer Party. Customer Party
     *  The party who originated Order.
     *  0..1
     *  Contract Award Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Contract Award Notice. Originator_ Customer Party. Customer Party
     *  The party who originated Order.
     *  0..1
     *  Contract Award Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty = null)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Contract Award Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Award Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty
     */
    public function getReceiverParty()
    {
        return $this->receiverParty;
    }

    /**
     * Sets a new receiverParty
     *
     * ASBIE
     *  Contract Award Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Award Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty = null)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Gets as tenderingTerms
     *
     * ASBIE
     *  Contract Award Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Award Notice
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingTerms
     */
    public function getTenderingTerms()
    {
        return $this->tenderingTerms;
    }

    /**
     * Sets a new tenderingTerms
     *
     * ASBIE
     *  Contract Award Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Award Notice
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms
     * @return self
     */
    public function setTenderingTerms(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms = null)
    {
        $this->tenderingTerms = $tenderingTerms;
        return $this;
    }

    /**
     * Gets as tenderingProcess
     *
     * ASBIE
     *  Contract Award Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Award Notice
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingProcess
     */
    public function getTenderingProcess()
    {
        return $this->tenderingProcess;
    }

    /**
     * Sets a new tenderingProcess
     *
     * ASBIE
     *  Contract Award Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Award Notice
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess
     * @return self
     */
    public function setTenderingProcess(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess = null)
    {
        $this->tenderingProcess = $tenderingProcess;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * ASBIE
     *  Contract Award Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Contract Award Notice
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProject
     */
    public function getProcurementProject()
    {
        return $this->procurementProject;
    }

    /**
     * Sets a new procurementProject
     *
     * ASBIE
     *  Contract Award Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Contract Award Notice
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProject $procurementProject = null)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * ASBIE
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
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
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Contract Award Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Award Notice
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as tenderResult
     *
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderResult $tenderResult
     */
    public function addToTenderResult(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderResult $tenderResult)
    {
        $this->tenderResult[] = $tenderResult;
        return $this;
    }

    /**
     * isset tenderResult
     *
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderResult($index)
    {
        return isset($this->tenderResult[$index]);
    }

    /**
     * unset tenderResult
     *
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderResult($index)
    {
        unset($this->tenderResult[$index]);
    }

    /**
     * Gets as tenderResult
     *
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderResult[]
     */
    public function getTenderResult()
    {
        return $this->tenderResult;
    }

    /**
     * Sets a new tenderResult
     *
     * ASBIE
     *  Contract Award Notice. Tender Result
     *  A result of the bid opening in the tendering process.
     *  1..n
     *  Contract Award Notice
     *  Tender Result
     *  Tender Result
     *  Tender Result
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderResult[] $tenderResult
     * @return self
     */
    public function setTenderResult(array $tenderResult)
    {
        $this->tenderResult = $tenderResult;
        return $this;
    }
}

