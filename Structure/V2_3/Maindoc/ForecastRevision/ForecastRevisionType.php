<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ForecastRevision;

/**
 * Class representing ForecastRevisionType
 *
 * ABIE
 *  Forecast Revision. Details
 *  A document used to revise a Forecast.
 *  Forecast Revision
 *  Forecast Revision
 * XSD Type: ForecastRevisionType
 */
class ForecastRevisionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Forecast Revision. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forecast Revision
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Forecast Revision Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Forecast Revision. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forecast Revision
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Forecast Revision. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Forecast Revision
     *  Issue Date
     *  Date
     *  Date. Type
     *  Forecast Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Forecast Revision. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forecast Revision
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Sequence Number. Identifier
     *  A sequence number, to ensure the proper sequencing of revisions.
     *  1
     *  Forecast Revision
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumberID $sequenceNumberID
     */
    private $sequenceNumberID = null;

    /**
     * BBIE
     *  Forecast Revision. Revision_ Status Code. Code
     *  Indicates the revision status of this Forecast Revision.
     *  0..1
     *  Forecast Revision
     *  Revision
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RevisionStatusCode $revisionStatusCode
     */
    private $revisionStatusCode = null;

    /**
     * BBIE
     *  Forecast Revision. Purpose Code. Code
     *  Indicates the purpose of the revision.
     *  0..1
     *  Forecast Revision
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode
     */
    private $purposeCode = null;

    /**
     * ASBIE
     *  Forecast Revision. Forecast_ Period. Period
     *  The period to which the Forecast applies.
     *  1
     *  Forecast Revision
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastPeriod $forecastPeriod
     */
    private $forecastPeriod = null;

    /**
     * ASBIE
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastRevisionLine[] $forecastRevisionLine
     */
    private $forecastRevisionLine = [
        
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
     *  Forecast Revision. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forecast Revision
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Forecast Revision Number
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
     *  Forecast Revision. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forecast Revision
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Forecast Revision Number
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
     *  Forecast Revision. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Forecast Revision
     *  Issue Date
     *  Date
     *  Date. Type
     *  Forecast Date
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
     *  Forecast Revision. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Forecast Revision
     *  Issue Date
     *  Date
     *  Date. Type
     *  Forecast Date
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
     *  Forecast Revision. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision
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
     * Gets as sequenceNumberID
     *
     * BBIE
     *  Forecast Revision. Sequence Number. Identifier
     *  A sequence number, to ensure the proper sequencing of revisions.
     *  1
     *  Forecast Revision
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumberID
     */
    public function getSequenceNumberID()
    {
        return $this->sequenceNumberID;
    }

    /**
     * Sets a new sequenceNumberID
     *
     * BBIE
     *  Forecast Revision. Sequence Number. Identifier
     *  A sequence number, to ensure the proper sequencing of revisions.
     *  1
     *  Forecast Revision
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumberID $sequenceNumberID
     * @return self
     */
    public function setSequenceNumberID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumberID $sequenceNumberID)
    {
        $this->sequenceNumberID = $sequenceNumberID;
        return $this;
    }

    /**
     * Gets as revisionStatusCode
     *
     * BBIE
     *  Forecast Revision. Revision_ Status Code. Code
     *  Indicates the revision status of this Forecast Revision.
     *  0..1
     *  Forecast Revision
     *  Revision
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RevisionStatusCode
     */
    public function getRevisionStatusCode()
    {
        return $this->revisionStatusCode;
    }

    /**
     * Sets a new revisionStatusCode
     *
     * BBIE
     *  Forecast Revision. Revision_ Status Code. Code
     *  Indicates the revision status of this Forecast Revision.
     *  0..1
     *  Forecast Revision
     *  Revision
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RevisionStatusCode $revisionStatusCode
     * @return self
     */
    public function setRevisionStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RevisionStatusCode $revisionStatusCode = null)
    {
        $this->revisionStatusCode = $revisionStatusCode;
        return $this;
    }

    /**
     * Gets as purposeCode
     *
     * BBIE
     *  Forecast Revision. Purpose Code. Code
     *  Indicates the purpose of the revision.
     *  0..1
     *  Forecast Revision
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode
     */
    public function getPurposeCode()
    {
        return $this->purposeCode;
    }

    /**
     * Sets a new purposeCode
     *
     * BBIE
     *  Forecast Revision. Purpose Code. Code
     *  Indicates the purpose of the revision.
     *  0..1
     *  Forecast Revision
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode
     * @return self
     */
    public function setPurposeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode = null)
    {
        $this->purposeCode = $purposeCode;
        return $this;
    }

    /**
     * Gets as forecastPeriod
     *
     * ASBIE
     *  Forecast Revision. Forecast_ Period. Period
     *  The period to which the Forecast applies.
     *  1
     *  Forecast Revision
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastPeriod
     */
    public function getForecastPeriod()
    {
        return $this->forecastPeriod;
    }

    /**
     * Sets a new forecastPeriod
     *
     * ASBIE
     *  Forecast Revision. Forecast_ Period. Period
     *  The period to which the Forecast applies.
     *  1
     *  Forecast Revision
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastPeriod $forecastPeriod)
    {
        $this->forecastPeriod = $forecastPeriod;
        return $this;
    }

    /**
     * Adds as originalDocumentReference
     *
     * ASBIE
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Original_ Document Reference. Document Reference
     *  The Forecast document being revised.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forecast Revision
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
     *  Forecast Revision. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Forecast Revision
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
     *  Forecast Revision. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Forecast Revision
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
     *  Forecast Revision. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Forecast Revision
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
     * Adds as forecastRevisionLine
     *
     * ASBIE
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastRevisionLine $forecastRevisionLine
     */
    public function addToForecastRevisionLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastRevisionLine $forecastRevisionLine)
    {
        $this->forecastRevisionLine[] = $forecastRevisionLine;
        return $this;
    }

    /**
     * isset forecastRevisionLine
     *
     * ASBIE
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetForecastRevisionLine($index)
    {
        return isset($this->forecastRevisionLine[$index]);
    }

    /**
     * unset forecastRevisionLine
     *
     * ASBIE
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetForecastRevisionLine($index)
    {
        unset($this->forecastRevisionLine[$index]);
    }

    /**
     * Gets as forecastRevisionLine
     *
     * ASBIE
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastRevisionLine[]
     */
    public function getForecastRevisionLine()
    {
        return $this->forecastRevisionLine;
    }

    /**
     * Sets a new forecastRevisionLine
     *
     * ASBIE
     *  Forecast Revision. Forecast Revision Line
     *  A line that revises a line in the Forecast.
     *  1..n
     *  Forecast Revision
     *  Forecast Revision Line
     *  Forecast Revision Line
     *  Forecast Revision Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForecastRevisionLine[] $forecastRevisionLine
     * @return self
     */
    public function setForecastRevisionLine(array $forecastRevisionLine)
    {
        $this->forecastRevisionLine = $forecastRevisionLine;
        return $this;
    }
}

