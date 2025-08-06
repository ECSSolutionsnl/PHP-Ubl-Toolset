<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ContractNotice;

/**
 * Class representing ContractNoticeType
 *
 * ABIE
 *  Contract Notice. Details
 *  A document used by a Contracting party to announce a project to buy goods, services, or works.
 *  Contract Notice
 * XSD Type: ContractNoticeType
 */
class ContractNoticeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contract Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Contract Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Contract Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Contract Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Contract Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Notice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contract Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Notice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Contract Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Notice
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Contract Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Contract Notice
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Contract Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Notice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Version Identifier. Identifier
     *  An identifier of the current version of the Contract Notice.
     *  0..1
     *  Contract Notice
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Contract Notice. Previous_ Version Identifier. Identifier
     *  An identifier of the previous version of the Contract Notice which is superceded by this version.
     *  0..1
     *  Contract Notice
     *  Previous
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * BBIE
     *  Contract Notice. Requested_ Publication Date. Date
     *  The requested publication date for this Contract Notice.
     *  0..1
     *  Contract Notice
     *  Requested
     *  Publication Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requestedPublicationDate
     */
    private $requestedPublicationDate = null;

    /**
     * BBIE
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegulatoryDomain[] $regulatoryDomain
     */
    private $regulatoryDomain = [
        
    ];

    /**
     * BBIE
     *  Contract Notice. Notice Type Code. Code
     *  The type of notice (PIN, Qualification, Reduce time...)
     *  0..1
     *  Contract Notice
     *  Notice Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeTypeCode $noticeTypeCode
     */
    private $noticeTypeCode = null;

    /**
     * BBIE
     *  Contract Notice. Notice_ Language Code. Code
     *  The language used for this contract notice.
     *  0..1
     *  Contract Notice
     *  Notice
     *  Language Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeLanguageCode $noticeLanguageCode
     */
    private $noticeLanguageCode = null;

    /**
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalNoticeLanguage[] $additionalNoticeLanguage
     */
    private $additionalNoticeLanguage = [
        
    ];

    /**
     * ASBIE
     *  Contract Notice. Frequency_ Period. Period
     *  The estimated frequency of future notices.
     *  0..1
     *  Contract Notice
     *  Frequency
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FrequencyPeriod $frequencyPeriod
     */
    private $frequencyPeriod = null;

    /**
     * ASBIE
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
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
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty[] $originatorCustomerParty
     */
    private $originatorCustomerParty = [
        
    ];

    /**
     * ASBIE
     *  Contract Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

    /**
     * ASBIE
     *  Contract Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Notice
     *  Tendering Terms
     *  Tendering Terms
     *  Tendering Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingTerms $tenderingTerms
     */
    private $tenderingTerms = null;

    /**
     * ASBIE
     *  Contract Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Notice
     *  Tendering Process
     *  Tendering Process
     *  Tendering Process
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingProcess $tenderingProcess
     */
    private $tenderingProcess = null;

    /**
     * ASBIE
     *  Contract Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  1
     *  Contract Notice
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * ASBIE
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
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
     *  Contract Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Contract Notice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Contract Notice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Contract Notice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Contract Notice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Contract Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Contract Notice
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Contract Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Contract Notice
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
     * Gets as contractFolderID
     *
     * BBIE
     *  Contract Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Notice
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
     *  Contract Notice. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Contract Notice
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
     *  Contract Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Contract Notice
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Contract Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract Notice
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
     * Gets as versionID
     *
     * BBIE
     *  Contract Notice. Version Identifier. Identifier
     *  An identifier of the current version of the Contract Notice.
     *  0..1
     *  Contract Notice
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Contract Notice. Version Identifier. Identifier
     *  An identifier of the current version of the Contract Notice.
     *  0..1
     *  Contract Notice
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as previousVersionID
     *
     * BBIE
     *  Contract Notice. Previous_ Version Identifier. Identifier
     *  An identifier of the previous version of the Contract Notice which is superceded by this version.
     *  0..1
     *  Contract Notice
     *  Previous
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * BBIE
     *  Contract Notice. Previous_ Version Identifier. Identifier
     *  An identifier of the previous version of the Contract Notice which is superceded by this version.
     *  0..1
     *  Contract Notice
     *  Previous
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID = null)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }

    /**
     * Gets as requestedPublicationDate
     *
     * BBIE
     *  Contract Notice. Requested_ Publication Date. Date
     *  The requested publication date for this Contract Notice.
     *  0..1
     *  Contract Notice
     *  Requested
     *  Publication Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequestedPublicationDate()
    {
        return $this->requestedPublicationDate;
    }

    /**
     * Sets a new requestedPublicationDate
     *
     * BBIE
     *  Contract Notice. Requested_ Publication Date. Date
     *  The requested publication date for this Contract Notice.
     *  0..1
     *  Contract Notice
     *  Requested
     *  Publication Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requestedPublicationDate
     * @return self
     */
    public function setRequestedPublicationDate(?\DateTime $requestedPublicationDate = null)
    {
        $this->requestedPublicationDate = $requestedPublicationDate;
        return $this;
    }

    /**
     * Adds as regulatoryDomain
     *
     * BBIE
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegulatoryDomain $regulatoryDomain
     */
    public function addToRegulatoryDomain(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegulatoryDomain $regulatoryDomain)
    {
        $this->regulatoryDomain[] = $regulatoryDomain;
        return $this;
    }

    /**
     * isset regulatoryDomain
     *
     * BBIE
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegulatoryDomain[]
     */
    public function getRegulatoryDomain()
    {
        return $this->regulatoryDomain;
    }

    /**
     * Sets a new regulatoryDomain
     *
     * BBIE
     *  Contract Notice. Regulatory Domain. Text
     *  Information about the law that defines the regulatory domain.
     *  0..n
     *  Contract Notice
     *  Regulatory Domain
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegulatoryDomain[] $regulatoryDomain
     * @return self
     */
    public function setRegulatoryDomain(?array $regulatoryDomain = null)
    {
        $this->regulatoryDomain = $regulatoryDomain;
        return $this;
    }

    /**
     * Gets as noticeTypeCode
     *
     * BBIE
     *  Contract Notice. Notice Type Code. Code
     *  The type of notice (PIN, Qualification, Reduce time...)
     *  0..1
     *  Contract Notice
     *  Notice Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeTypeCode
     */
    public function getNoticeTypeCode()
    {
        return $this->noticeTypeCode;
    }

    /**
     * Sets a new noticeTypeCode
     *
     * BBIE
     *  Contract Notice. Notice Type Code. Code
     *  The type of notice (PIN, Qualification, Reduce time...)
     *  0..1
     *  Contract Notice
     *  Notice Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeTypeCode $noticeTypeCode
     * @return self
     */
    public function setNoticeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeTypeCode $noticeTypeCode = null)
    {
        $this->noticeTypeCode = $noticeTypeCode;
        return $this;
    }

    /**
     * Gets as noticeLanguageCode
     *
     * BBIE
     *  Contract Notice. Notice_ Language Code. Code
     *  The language used for this contract notice.
     *  0..1
     *  Contract Notice
     *  Notice
     *  Language Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeLanguageCode
     */
    public function getNoticeLanguageCode()
    {
        return $this->noticeLanguageCode;
    }

    /**
     * Sets a new noticeLanguageCode
     *
     * BBIE
     *  Contract Notice. Notice_ Language Code. Code
     *  The language used for this contract notice.
     *  0..1
     *  Contract Notice
     *  Notice
     *  Language Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeLanguageCode $noticeLanguageCode
     * @return self
     */
    public function setNoticeLanguageCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoticeLanguageCode $noticeLanguageCode = null)
    {
        $this->noticeLanguageCode = $noticeLanguageCode;
        return $this;
    }

    /**
     * Adds as additionalNoticeLanguage
     *
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalNoticeLanguage $additionalNoticeLanguage
     */
    public function addToAdditionalNoticeLanguage(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalNoticeLanguage $additionalNoticeLanguage)
    {
        $this->additionalNoticeLanguage[] = $additionalNoticeLanguage;
        return $this;
    }

    /**
     * isset additionalNoticeLanguage
     *
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalNoticeLanguage($index)
    {
        return isset($this->additionalNoticeLanguage[$index]);
    }

    /**
     * unset additionalNoticeLanguage
     *
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalNoticeLanguage($index)
    {
        unset($this->additionalNoticeLanguage[$index]);
    }

    /**
     * Gets as additionalNoticeLanguage
     *
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalNoticeLanguage[]
     */
    public function getAdditionalNoticeLanguage()
    {
        return $this->additionalNoticeLanguage;
    }

    /**
     * Sets a new additionalNoticeLanguage
     *
     * ASBIE
     *  Contract Notice. Additional Notice_ Language. Language
     *  An additional official language used in this contract notice.
     *  0..n
     *  Contract Notice
     *  Additional Notice
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalNoticeLanguage[] $additionalNoticeLanguage
     * @return self
     */
    public function setAdditionalNoticeLanguage(?array $additionalNoticeLanguage = null)
    {
        $this->additionalNoticeLanguage = $additionalNoticeLanguage;
        return $this;
    }

    /**
     * Gets as frequencyPeriod
     *
     * ASBIE
     *  Contract Notice. Frequency_ Period. Period
     *  The estimated frequency of future notices.
     *  0..1
     *  Contract Notice
     *  Frequency
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FrequencyPeriod
     */
    public function getFrequencyPeriod()
    {
        return $this->frequencyPeriod;
    }

    /**
     * Sets a new frequencyPeriod
     *
     * ASBIE
     *  Contract Notice. Frequency_ Period. Period
     *  The estimated frequency of future notices.
     *  0..1
     *  Contract Notice
     *  Frequency
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FrequencyPeriod $frequencyPeriod
     * @return self
     */
    public function setFrequencyPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FrequencyPeriod $frequencyPeriod = null)
    {
        $this->frequencyPeriod = $frequencyPeriod;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Contract Notice
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
     * Adds as contractingParty
     *
     * ASBIE
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
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
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
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
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
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
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
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
     *  Contract Notice. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Contract Notice
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[] $contractingParty
     * @return self
     */
    public function setContractingParty(array $contractingParty)
    {
        $this->contractingParty = $contractingParty;
        return $this;
    }

    /**
     * Adds as originatorCustomerParty
     *
     * ASBIE
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    public function addToOriginatorCustomerParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty)
    {
        $this->originatorCustomerParty[] = $originatorCustomerParty;
        return $this;
    }

    /**
     * isset originatorCustomerParty
     *
     * ASBIE
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginatorCustomerParty($index)
    {
        return isset($this->originatorCustomerParty[$index]);
    }

    /**
     * unset originatorCustomerParty
     *
     * ASBIE
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginatorCustomerParty($index)
    {
        unset($this->originatorCustomerParty[$index]);
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty[]
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Contract Notice. Originator_ Customer Party. Customer Party
     *  A party who originally requested the tender.
     *  0..n
     *  Contract Notice
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty[] $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(?array $originatorCustomerParty = null)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Contract Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty
     */
    public function getReceiverParty()
    {
        return $this->receiverParty;
    }

    /**
     * Sets a new receiverParty
     *
     * ASBIE
     *  Contract Notice. Receiver_ Party. Party
     *  The party receiving this document.
     *  0..1
     *  Contract Notice
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty = null)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Gets as tenderingTerms
     *
     * ASBIE
     *  Contract Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Tendering Terms
     *  The tendering terms associated with this tendering process.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Tendering Process
     *  A description of the tendering process itself.
     *  0..1
     *  Contract Notice
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
     *  Contract Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  1
     *  Contract Notice
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
     *  Contract Notice. Procurement Project
     *  An overall definition of this procurement project.
     *  1
     *  Contract Notice
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }

    /**
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
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
     *  Contract Notice. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Contract Notice
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
}

