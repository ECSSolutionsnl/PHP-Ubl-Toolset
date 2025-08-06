<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\FulfilmentCancellation;

/**
 * Class representing FulfilmentCancellationType
 *
 * ABIE
 *  Fulfilment Cancellation. Details
 *  A document used to cancel an entire fulfilment document (Despatch Advice or Receipt Advice).
 *  Fulfilment Cancellation
 * XSD Type: FulfilmentCancellationType
 */
class FulfilmentCancellationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Fulfilment Cancellation
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Fulfilment Cancellation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Fulfilment Cancellation
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Fulfilment Cancellation
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Fulfilment Cancellation
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CancellationNote[] $cancellationNote
     */
    private $cancellationNote = [
        
    ];

    /**
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
     */
    private $despatchDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     */
    private $receiptDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference[] $orderReference
     */
    private $orderReference = [
        
    ];

    /**
     * ASBIE
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contract[] $contract
     */
    private $contract = [
        
    ];

    /**
     * ASBIE
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Fulfilment Cancellation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Fulfilment Cancellation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Fulfilment Cancellation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Fulfilment Cancellation. Delivery_ Customer Party. Customer Party
     *  The delivery party.
     *  0..1
     *  Fulfilment Cancellation
     *  Delivery
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryCustomerParty $deliveryCustomerParty
     */
    private $deliveryCustomerParty = null;

    /**
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Supplier Party. Supplier Party
     *  The despatch party.
     *  0..1
     *  Fulfilment Cancellation
     *  Despatch
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchSupplierParty $despatchSupplierParty
     */
    private $despatchSupplierParty = null;

    /**
     * ASBIE
     *  Fulfilment Cancellation. Originator_ Customer Party. Customer Party
     *  The originator party
     *  0..1
     *  Fulfilment Cancellation
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

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
     *  Fulfilment Cancellation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Fulfilment Cancellation
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
     * Gets as issueDate
     *
     * BBIE
     *  Fulfilment Cancellation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Fulfilment Cancellation
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
     * Adds as cancellationNote
     *
     * BBIE
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CancellationNote $cancellationNote
     */
    public function addToCancellationNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CancellationNote $cancellationNote)
    {
        $this->cancellationNote[] = $cancellationNote;
        return $this;
    }

    /**
     * isset cancellationNote
     *
     * BBIE
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationNote($index)
    {
        return isset($this->cancellationNote[$index]);
    }

    /**
     * unset cancellationNote
     *
     * BBIE
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationNote($index)
    {
        unset($this->cancellationNote[$index]);
    }

    /**
     * Gets as cancellationNote
     *
     * BBIE
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CancellationNote[]
     */
    public function getCancellationNote()
    {
        return $this->cancellationNote;
    }

    /**
     * Sets a new cancellationNote
     *
     * BBIE
     *  Fulfilment Cancellation. Cancellation_ Note. Text
     *  The reason for cancellation of the referenced document.
     *  1..n
     *  Fulfilment Cancellation
     *  Cancellation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CancellationNote[] $cancellationNote
     * @return self
     */
    public function setCancellationNote(array $cancellationNote)
    {
        $this->cancellationNote = $cancellationNote;
        return $this;
    }

    /**
     * Adds as despatchDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchDocumentReference $despatchDocumentReference
     */
    public function addToDespatchDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference[] = $despatchDocumentReference;
        return $this;
    }

    /**
     * isset despatchDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchDocumentReference($index)
    {
        return isset($this->despatchDocumentReference[$index]);
    }

    /**
     * unset despatchDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchDocumentReference($index)
    {
        unset($this->despatchDocumentReference[$index]);
    }

    /**
     * Gets as despatchDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchDocumentReference[]
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
     * @return self
     */
    public function setDespatchDocumentReference(?array $despatchDocumentReference = null)
    {
        $this->despatchDocumentReference = $despatchDocumentReference;
        return $this;
    }

    /**
     * Adds as receiptDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiptDocumentReference $receiptDocumentReference
     */
    public function addToReceiptDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiptDocumentReference $receiptDocumentReference)
    {
        $this->receiptDocumentReference[] = $receiptDocumentReference;
        return $this;
    }

    /**
     * isset receiptDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptDocumentReference($index)
    {
        return isset($this->receiptDocumentReference[$index]);
    }

    /**
     * unset receiptDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptDocumentReference($index)
    {
        unset($this->receiptDocumentReference[$index]);
    }

    /**
     * Gets as receiptDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiptDocumentReference[]
     */
    public function getReceiptDocumentReference()
    {
        return $this->receiptDocumentReference;
    }

    /**
     * Sets a new receiptDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Fulfilment Cancellation
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     * @return self
     */
    public function setReceiptDocumentReference(?array $receiptDocumentReference = null)
    {
        $this->receiptDocumentReference = $receiptDocumentReference;
        return $this;
    }

    /**
     * Adds as orderReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference $orderReference
     */
    public function addToOrderReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference $orderReference)
    {
        $this->orderReference[] = $orderReference;
        return $this;
    }

    /**
     * isset orderReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderReference($index)
    {
        return isset($this->orderReference[$index]);
    }

    /**
     * unset orderReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderReference($index)
    {
        unset($this->orderReference[$index]);
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference[]
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Order Reference
     *  A reference to an Order document associated with the referenced Despatch or Receipt Advice(s).
     *  0..n
     *  Fulfilment Cancellation
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference[] $orderReference
     * @return self
     */
    public function setOrderReference(?array $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Fulfilment Cancellation
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
     * Adds as contract
     *
     * ASBIE
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contract $contract
     */
    public function addToContract(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contract $contract)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * isset contract
     *
     * ASBIE
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract
     *
     * ASBIE
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContract($index)
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contract[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Fulfilment Cancellation. Contract
     *  The contracts or framework agreements with which the referenced fulfilment document is associated.
     *  0..n
     *  Fulfilment Cancellation
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contract[] $contract
     * @return self
     */
    public function setContract(?array $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Fulfilment Cancellation
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
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Fulfilment Cancellation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Fulfilment Cancellation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Fulfilment Cancellation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Fulfilment Cancellation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as deliveryCustomerParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Delivery_ Customer Party. Customer Party
     *  The delivery party.
     *  0..1
     *  Fulfilment Cancellation
     *  Delivery
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryCustomerParty
     */
    public function getDeliveryCustomerParty()
    {
        return $this->deliveryCustomerParty;
    }

    /**
     * Sets a new deliveryCustomerParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Delivery_ Customer Party. Customer Party
     *  The delivery party.
     *  0..1
     *  Fulfilment Cancellation
     *  Delivery
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryCustomerParty $deliveryCustomerParty
     * @return self
     */
    public function setDeliveryCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryCustomerParty $deliveryCustomerParty = null)
    {
        $this->deliveryCustomerParty = $deliveryCustomerParty;
        return $this;
    }

    /**
     * Gets as despatchSupplierParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Supplier Party. Supplier Party
     *  The despatch party.
     *  0..1
     *  Fulfilment Cancellation
     *  Despatch
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchSupplierParty
     */
    public function getDespatchSupplierParty()
    {
        return $this->despatchSupplierParty;
    }

    /**
     * Sets a new despatchSupplierParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Despatch_ Supplier Party. Supplier Party
     *  The despatch party.
     *  0..1
     *  Fulfilment Cancellation
     *  Despatch
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchSupplierParty $despatchSupplierParty
     * @return self
     */
    public function setDespatchSupplierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DespatchSupplierParty $despatchSupplierParty = null)
    {
        $this->despatchSupplierParty = $despatchSupplierParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Fulfilment Cancellation. Originator_ Customer Party. Customer Party
     *  The originator party
     *  0..1
     *  Fulfilment Cancellation
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
     *  Fulfilment Cancellation. Originator_ Customer Party. Customer Party
     *  The originator party
     *  0..1
     *  Fulfilment Cancellation
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
}

