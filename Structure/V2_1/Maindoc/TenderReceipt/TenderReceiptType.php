<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\TenderReceipt;

/**
 * Class representing TenderReceiptType
 *
 * ABIE
 *  Tender Receipt. Details
 *  A document sent by a contracting party to an economic operator acknowledging receipt of a Tender.
 *  Tender Receipt
 * XSD Type: TenderReceiptType
 */
class TenderReceiptType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Tender Receipt. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Receipt
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Tender Receipt. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Receipt
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Tender Receipt. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Receipt
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Tender Receipt. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Receipt
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Tender Receipt. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Receipt
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender Receipt. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Receipt
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Tender Receipt. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender Receipt
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Tender Receipt. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Receipt
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Tender Receipt. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Receipt
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractName[] $contractName
     */
    private $contractName = [
        
    ];

    /**
     * BBIE
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Registered Date. Date
     *  The date, assigned by the sender, on which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $registeredDate
     */
    private $registeredDate = null;

    /**
     * BBIE
     *  Tender Receipt. Registered Time. Time
     *  The time, assigned by the sender, at which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $registeredTime
     */
    private $registeredTime = null;

    /**
     * ASBIE
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderDocumentReference[] $tenderDocumentReference
     */
    private $tenderDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Tender Receipt
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * ASBIE
     *  Tender Receipt. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Tender Receipt
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     */
    private $receiverParty = null;

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
     *  Tender Receipt. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Receipt
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
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
     *  Tender Receipt. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Tender Receipt
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
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
     *  Tender Receipt. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Receipt
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
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
     *  Tender Receipt. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Tender Receipt
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
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
     *  Tender Receipt. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Receipt
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
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
     *  Tender Receipt. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Tender Receipt
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
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
     *  Tender Receipt. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Receipt
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
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
     *  Tender Receipt. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Tender Receipt
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
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
     *  Tender Receipt. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender Receipt
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
     *  Tender Receipt. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Tender Receipt
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
     *  Tender Receipt. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Receipt
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
     *  Tender Receipt. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Tender Receipt
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
     *  Tender Receipt. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Tender Receipt
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
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractName $contractName
     */
    public function addToContractName(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractName $contractName)
    {
        $this->contractName[] = $contractName;
        return $this;
    }

    /**
     * isset contractName
     *
     * BBIE
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
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
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
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
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractName[]
     */
    public function getContractName()
    {
        return $this->contractName;
    }

    /**
     * Sets a new contractName
     *
     * BBIE
     *  Tender Receipt. Contract Name. Text
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Tender Receipt
     *  Contract Name
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ContractName[] $contractName
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
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Receipt
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
     * Gets as registeredDate
     *
     * BBIE
     *  Tender Receipt. Registered Date. Date
     *  The date, assigned by the sender, on which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRegisteredDate()
    {
        return $this->registeredDate;
    }

    /**
     * Sets a new registeredDate
     *
     * BBIE
     *  Tender Receipt. Registered Date. Date
     *  The date, assigned by the sender, on which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $registeredDate
     * @return self
     */
    public function setRegisteredDate(\DateTime $registeredDate)
    {
        $this->registeredDate = $registeredDate;
        return $this;
    }

    /**
     * Gets as registeredTime
     *
     * BBIE
     *  Tender Receipt. Registered Time. Time
     *  The time, assigned by the sender, at which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRegisteredTime()
    {
        return $this->registeredTime;
    }

    /**
     * Sets a new registeredTime
     *
     * BBIE
     *  Tender Receipt. Registered Time. Time
     *  The time, assigned by the sender, at which the Tender Receipt was created.
     *  1
     *  Tender Receipt
     *  Registered Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $registeredTime
     * @return self
     */
    public function setRegisteredTime(\DateTime $registeredTime)
    {
        $this->registeredTime = $registeredTime;
        return $this;
    }

    /**
     * Adds as tenderDocumentReference
     *
     * ASBIE
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderDocumentReference $tenderDocumentReference
     */
    public function addToTenderDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderDocumentReference $tenderDocumentReference)
    {
        $this->tenderDocumentReference[] = $tenderDocumentReference;
        return $this;
    }

    /**
     * isset tenderDocumentReference
     *
     * ASBIE
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderDocumentReference[]
     */
    public function getTenderDocumentReference()
    {
        return $this->tenderDocumentReference;
    }

    /**
     * Sets a new tenderDocumentReference
     *
     * ASBIE
     *  Tender Receipt. Tender_ Document Reference. Document Reference
     *  A reference to a received Tender.
     *  0..n
     *  Tender Receipt
     *  Tender
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TenderDocumentReference[] $tenderDocumentReference
     * @return self
     */
    public function setTenderDocumentReference(?array $tenderDocumentReference = null)
    {
        $this->tenderDocumentReference = $tenderDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     *  Tender Receipt. Signature
     *  A signature applied to this document.
     *  0..n
     *  Tender Receipt
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
     * Gets as senderParty
     *
     * ASBIE
     *  Tender Receipt. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Tender Receipt
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * ASBIE
     *  Tender Receipt. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Tender Receipt
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Tender Receipt. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Tender Receipt
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
     *  Tender Receipt. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Tender Receipt
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }
}

