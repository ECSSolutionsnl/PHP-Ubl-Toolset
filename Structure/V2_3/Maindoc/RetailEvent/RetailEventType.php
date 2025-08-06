<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\RetailEvent;

/**
 * Class representing RetailEventType
 *
 * ABIE
 *  Retail Event. Details
 *  A document used to specify basic information about retail events (such as promotions, product introductions, and community or environmental events) that affect supply or demand.
 *  Retail Event
 *  Event
 * XSD Type: RetailEventType
 */
class RetailEventType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Retail Event. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Retail Event
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Retail Event Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Retail Event. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Retail Event
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
     *  Retail Event. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Retail Event
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Retail Event. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Retail Event
     *  Issue Date
     *  Date
     *  Date. Type
     *  Retail Event Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Retail Event. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Retail Event
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Retail Event Name. Name
     *  A title, theme, slogan, or other identifier for the event for use by trading partners.
     *  0..1
     *  Retail Event
     *  Retail Event Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventName $retailEventName
     */
    private $retailEventName = null;

    /**
     * BBIE
     *  Retail Event. Retail Event Status Code. Code
     *  Describes the logical state of the discrete activity affecting supply or demand in the supply chain
     *  1
     *  Retail Event
     *  Retail Event Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventStatusCode $retailEventStatusCode
     */
    private $retailEventStatusCode = null;

    /**
     * BBIE
     *  Retail Event. Seller Event Identifier. Identifier
     *  An event tracking identifier assigned by the seller.
     *  0..1
     *  Retail Event
     *  Seller Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SellerEventID $sellerEventID
     */
    private $sellerEventID = null;

    /**
     * BBIE
     *  Retail Event. Buyer Event Identifier. Identifier
     *  An event tracking identifier assigned by the buyer.
     *  0..1
     *  Retail Event
     *  Buyer Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BuyerEventID $buyerEventID
     */
    private $buyerEventID = null;

    /**
     * BBIE
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Retail Event. Period
     *  The period during which the event takes place.
     *  1
     *  Retail Event
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference[] $originalDocumentReference
     */
    private $originalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Retail Event
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * ASBIE
     *  Retail Event. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Retail Event
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
     *  Retail Event. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EventComment[] $eventComment
     */
    private $eventComment = [
        
    ];

    /**
     * ASBIE
     *  Retail Event. Promotional Event
     *  The description of a promotional event associated with this event.
     *  0..1
     *  Retail Event
     *  Promotional Event
     *  Promotional Event
     *  Promotional Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PromotionalEvent $promotionalEvent
     */
    private $promotionalEvent = null;

    /**
     * ASBIE
     *  Retail Event. Miscellaneous Event
     *  A miscellaneous event associated with this event.
     *  0..1
     *  Retail Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MiscellaneousEvent $miscellaneousEvent
     */
    private $miscellaneousEvent = null;

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
     *  Retail Event. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Retail Event
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
     *  Retail Event. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Retail Event
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Retail Event Number
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
     *  Retail Event. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Retail Event
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Retail Event Number
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
     *  Retail Event. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Retail Event
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
     *  Retail Event. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Retail Event
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
     *  Retail Event. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Retail Event
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
     *  Retail Event. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Retail Event
     *  Issue Date
     *  Date
     *  Date. Type
     *  Retail Event Date
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
     *  Retail Event. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Retail Event
     *  Issue Date
     *  Date
     *  Date. Type
     *  Retail Event Date
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
     *  Retail Event. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Retail Event
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
     * Gets as retailEventName
     *
     * BBIE
     *  Retail Event. Retail Event Name. Name
     *  A title, theme, slogan, or other identifier for the event for use by trading partners.
     *  0..1
     *  Retail Event
     *  Retail Event Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventName
     */
    public function getRetailEventName()
    {
        return $this->retailEventName;
    }

    /**
     * Sets a new retailEventName
     *
     * BBIE
     *  Retail Event. Retail Event Name. Name
     *  A title, theme, slogan, or other identifier for the event for use by trading partners.
     *  0..1
     *  Retail Event
     *  Retail Event Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventName $retailEventName
     * @return self
     */
    public function setRetailEventName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventName $retailEventName = null)
    {
        $this->retailEventName = $retailEventName;
        return $this;
    }

    /**
     * Gets as retailEventStatusCode
     *
     * BBIE
     *  Retail Event. Retail Event Status Code. Code
     *  Describes the logical state of the discrete activity affecting supply or demand in the supply chain
     *  1
     *  Retail Event
     *  Retail Event Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventStatusCode
     */
    public function getRetailEventStatusCode()
    {
        return $this->retailEventStatusCode;
    }

    /**
     * Sets a new retailEventStatusCode
     *
     * BBIE
     *  Retail Event. Retail Event Status Code. Code
     *  Describes the logical state of the discrete activity affecting supply or demand in the supply chain
     *  1
     *  Retail Event
     *  Retail Event Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventStatusCode $retailEventStatusCode
     * @return self
     */
    public function setRetailEventStatusCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RetailEventStatusCode $retailEventStatusCode)
    {
        $this->retailEventStatusCode = $retailEventStatusCode;
        return $this;
    }

    /**
     * Gets as sellerEventID
     *
     * BBIE
     *  Retail Event. Seller Event Identifier. Identifier
     *  An event tracking identifier assigned by the seller.
     *  0..1
     *  Retail Event
     *  Seller Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SellerEventID
     */
    public function getSellerEventID()
    {
        return $this->sellerEventID;
    }

    /**
     * Sets a new sellerEventID
     *
     * BBIE
     *  Retail Event. Seller Event Identifier. Identifier
     *  An event tracking identifier assigned by the seller.
     *  0..1
     *  Retail Event
     *  Seller Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SellerEventID $sellerEventID
     * @return self
     */
    public function setSellerEventID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SellerEventID $sellerEventID = null)
    {
        $this->sellerEventID = $sellerEventID;
        return $this;
    }

    /**
     * Gets as buyerEventID
     *
     * BBIE
     *  Retail Event. Buyer Event Identifier. Identifier
     *  An event tracking identifier assigned by the buyer.
     *  0..1
     *  Retail Event
     *  Buyer Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BuyerEventID
     */
    public function getBuyerEventID()
    {
        return $this->buyerEventID;
    }

    /**
     * Sets a new buyerEventID
     *
     * BBIE
     *  Retail Event. Buyer Event Identifier. Identifier
     *  An event tracking identifier assigned by the buyer.
     *  0..1
     *  Retail Event
     *  Buyer Event Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BuyerEventID $buyerEventID
     * @return self
     */
    public function setBuyerEventID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BuyerEventID $buyerEventID = null)
    {
        $this->buyerEventID = $buyerEventID;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
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
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
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
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
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
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
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
     *  Retail Event. Description. Text
     *  Definition of the discrete activity affecting supply or demand in the supply chain
     *  0..n
     *  Retail Event
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
     * Gets as period
     *
     * ASBIE
     *  Retail Event. Period
     *  The period during which the event takes place.
     *  1
     *  Retail Event
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Retail Event. Period
     *  The period during which the event takes place.
     *  1
     *  Retail Event
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as originalDocumentReference
     *
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     */
    public function addToOriginalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference)
    {
        $this->originalDocumentReference[] = $originalDocumentReference;
        return $this;
    }

    /**
     * isset originalDocumentReference
     *
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginalDocumentReference($index)
    {
        return isset($this->originalDocumentReference[$index]);
    }

    /**
     * unset originalDocumentReference
     *
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginalDocumentReference($index)
    {
        unset($this->originalDocumentReference[$index]);
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference[]
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Retail Event. Original_ Document Reference. Document Reference
     *  A reference to a Forecast document associated with this event.
     *  0..n
     *  Retail Event
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference[] $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(?array $originalDocumentReference = null)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     *  Retail Event. Signature
     *  A signature applied to this document.
     *  0..n
     *  Retail Event
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
     * Gets as senderParty
     *
     * ASBIE
     *  Retail Event. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Retail Event
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * ASBIE
     *  Retail Event. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Retail Event
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Retail Event. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Retail Event
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
     *  Retail Event. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Retail Event
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Retail Event. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Retail Event
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
     *  Retail Event. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Retail Event
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
     * Adds as eventComment
     *
     * ASBIE
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EventComment $eventComment
     */
    public function addToEventComment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EventComment $eventComment)
    {
        $this->eventComment[] = $eventComment;
        return $this;
    }

    /**
     * isset eventComment
     *
     * ASBIE
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventComment($index)
    {
        return isset($this->eventComment[$index]);
    }

    /**
     * unset eventComment
     *
     * ASBIE
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventComment($index)
    {
        unset($this->eventComment[$index]);
    }

    /**
     * Gets as eventComment
     *
     * ASBIE
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EventComment[]
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Sets a new eventComment
     *
     * ASBIE
     *  Retail Event. Event Comment
     *  A comment regarding the event.
     *  0..n
     *  Retail Event
     *  Event Comment
     *  Event Comment
     *  Event Comment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EventComment[] $eventComment
     * @return self
     */
    public function setEventComment(?array $eventComment = null)
    {
        $this->eventComment = $eventComment;
        return $this;
    }

    /**
     * Gets as promotionalEvent
     *
     * ASBIE
     *  Retail Event. Promotional Event
     *  The description of a promotional event associated with this event.
     *  0..1
     *  Retail Event
     *  Promotional Event
     *  Promotional Event
     *  Promotional Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PromotionalEvent
     */
    public function getPromotionalEvent()
    {
        return $this->promotionalEvent;
    }

    /**
     * Sets a new promotionalEvent
     *
     * ASBIE
     *  Retail Event. Promotional Event
     *  The description of a promotional event associated with this event.
     *  0..1
     *  Retail Event
     *  Promotional Event
     *  Promotional Event
     *  Promotional Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PromotionalEvent $promotionalEvent
     * @return self
     */
    public function setPromotionalEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PromotionalEvent $promotionalEvent = null)
    {
        $this->promotionalEvent = $promotionalEvent;
        return $this;
    }

    /**
     * Gets as miscellaneousEvent
     *
     * ASBIE
     *  Retail Event. Miscellaneous Event
     *  A miscellaneous event associated with this event.
     *  0..1
     *  Retail Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MiscellaneousEvent
     */
    public function getMiscellaneousEvent()
    {
        return $this->miscellaneousEvent;
    }

    /**
     * Sets a new miscellaneousEvent
     *
     * ASBIE
     *  Retail Event. Miscellaneous Event
     *  A miscellaneous event associated with this event.
     *  0..1
     *  Retail Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *  Miscellaneous Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MiscellaneousEvent $miscellaneousEvent
     * @return self
     */
    public function setMiscellaneousEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MiscellaneousEvent $miscellaneousEvent = null)
    {
        $this->miscellaneousEvent = $miscellaneousEvent;
        return $this;
    }
}

