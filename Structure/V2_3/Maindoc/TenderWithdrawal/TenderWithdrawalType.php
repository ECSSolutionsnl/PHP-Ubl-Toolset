<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\TenderWithdrawal;

/**
 * Class representing TenderWithdrawalType
 *
 * ABIE
 *  Tender Withdrawal. Details
 *  A document sent by an Economic Operator to a Contracting Party with the intention of withdrawing a previously sent Tender document.
 *  Tender Withdrawal
 * XSD Type: TenderWithdrawalType
 */
class TenderWithdrawalType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tender Withdrawal. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Withdrawal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender Withdrawal. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Withdrawal
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Tender Withdrawal. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Tender Withdrawal
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Tender Withdrawal. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Withdrawal
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Tender Withdrawal. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Withdrawal
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Withdraw Offer. Indicator
     *  Indicates whether the referred tender has to be withdrawn (true) or not (false).
     *  0..1
     *  Tender Withdrawal
     *  Withdraw Offer
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $withdrawOfferIndicator
     */
    private $withdrawOfferIndicator = null;

    /**
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderDocumentReference[] $tenderDocumentReference
     */
    private $tenderDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderNotificationDocumentReference[] $tenderNotificationDocumentReference
     */
    private $tenderNotificationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Tenderer_ Party. Party
     *  The economic operator or the main tenderer in case of a consortium that is withdrawing the tender.
     *  1
     *  Tender Withdrawal
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty $tendererParty
     */
    private $tendererParty = null;

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
     *  Tender Withdrawal. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Tender Withdrawal
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     * @return self
     */
    public function setContractFolderID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID = null)
    {
        $this->contractFolderID = $contractFolderID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Tender Withdrawal. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Withdrawal
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
     * Gets as withdrawOfferIndicator
     *
     * BBIE
     *  Tender Withdrawal. Withdraw Offer. Indicator
     *  Indicates whether the referred tender has to be withdrawn (true) or not (false).
     *  0..1
     *  Tender Withdrawal
     *  Withdraw Offer
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getWithdrawOfferIndicator()
    {
        return $this->withdrawOfferIndicator;
    }

    /**
     * Sets a new withdrawOfferIndicator
     *
     * BBIE
     *  Tender Withdrawal. Withdraw Offer. Indicator
     *  Indicates whether the referred tender has to be withdrawn (true) or not (false).
     *  0..1
     *  Tender Withdrawal
     *  Withdraw Offer
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $withdrawOfferIndicator
     * @return self
     */
    public function setWithdrawOfferIndicator($withdrawOfferIndicator)
    {
        $this->withdrawOfferIndicator = $withdrawOfferIndicator;
        return $this;
    }

    /**
     * Adds as tenderDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderDocumentReference $tenderDocumentReference
     */
    public function addToTenderDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderDocumentReference $tenderDocumentReference)
    {
        $this->tenderDocumentReference[] = $tenderDocumentReference;
        return $this;
    }

    /**
     * isset tenderDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderDocumentReference($index)
    {
        return isset($this->tenderDocumentReference[$index]);
    }

    /**
     * unset tenderDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderDocumentReference($index)
    {
        unset($this->tenderDocumentReference[$index]);
    }

    /**
     * Gets as tenderDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderDocumentReference[]
     */
    public function getTenderDocumentReference()
    {
        return $this->tenderDocumentReference;
    }

    /**
     * Sets a new tenderDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Withdrawal
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderDocumentReference[] $tenderDocumentReference
     * @return self
     */
    public function setTenderDocumentReference(?array $tenderDocumentReference = null)
    {
        $this->tenderDocumentReference = $tenderDocumentReference;
        return $this;
    }

    /**
     * Adds as tenderNotificationDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderNotificationDocumentReference $tenderNotificationDocumentReference
     */
    public function addToTenderNotificationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderNotificationDocumentReference $tenderNotificationDocumentReference)
    {
        $this->tenderNotificationDocumentReference[] = $tenderNotificationDocumentReference;
        return $this;
    }

    /**
     * isset tenderNotificationDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderNotificationDocumentReference($index)
    {
        return isset($this->tenderNotificationDocumentReference[$index]);
    }

    /**
     * unset tenderNotificationDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderNotificationDocumentReference($index)
    {
        unset($this->tenderNotificationDocumentReference[$index]);
    }

    /**
     * Gets as tenderNotificationDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderNotificationDocumentReference[]
     */
    public function getTenderNotificationDocumentReference()
    {
        return $this->tenderNotificationDocumentReference;
    }

    /**
     * Sets a new tenderNotificationDocumentReference
     *
     * ASBIE
     *  Tender Withdrawal. Tender Notification_ Document Reference. Document Reference
     *  A reference to the Tender Receipt Notification.
     *  0..n
     *  Tender Withdrawal
     *  Tender Notification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderNotificationDocumentReference[] $tenderNotificationDocumentReference
     * @return self
     */
    public function setTenderNotificationDocumentReference(?array $tenderNotificationDocumentReference = null)
    {
        $this->tenderNotificationDocumentReference = $tenderNotificationDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     *  Tender Withdrawal. Contracting Party
     *  The Contracting Party or parties in case of joint procurement.
     *  1..n
     *  Tender Withdrawal
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
     * Gets as tendererParty
     *
     * ASBIE
     *  Tender Withdrawal. Tenderer_ Party. Party
     *  The economic operator or the main tenderer in case of a consortium that is withdrawing the tender.
     *  1
     *  Tender Withdrawal
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty
     */
    public function getTendererParty()
    {
        return $this->tendererParty;
    }

    /**
     * Sets a new tendererParty
     *
     * ASBIE
     *  Tender Withdrawal. Tenderer_ Party. Party
     *  The economic operator or the main tenderer in case of a consortium that is withdrawing the tender.
     *  1
     *  Tender Withdrawal
     *  Tenderer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty $tendererParty
     * @return self
     */
    public function setTendererParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TendererParty $tendererParty)
    {
        $this->tendererParty = $tendererParty;
        return $this;
    }
}

