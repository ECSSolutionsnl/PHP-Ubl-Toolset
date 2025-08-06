<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ProductActivity;

/**
 * Class representing ProductActivityType
 *
 * ABIE
 *  Product Activity. Details
 *  A document reporting the movement of goods at specified retail locations for inventory tracking purposes.
 *  Product Activity
 * XSD Type: ProductActivityType
 */
class ProductActivityType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Product Activity. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Product Activity
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Product Acvtivity Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Product Activity. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Product Activity
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
     *  Product Activity. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Product Activity
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Product Activity. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Product Activity
     *  Issue Date
     *  Date
     *  Date. Type
     *  Activity Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Product Activity. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Product Activity
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Product Activity
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode
     */
    private $documentCurrencyCode = null;

    /**
     * ASBIE
     *  Product Activity. Activity_ Period. Period
     *  The period covered by this Product Activity report.
     *  1
     *  Product Activity
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     */
    private $activityPeriod = null;

    /**
     * ASBIE
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Sender_ Party. Party
     *  The sender of the Product Activity.
     *  1
     *  Product Activity
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
     *  Product Activity. Receiver_ Party. Party
     *  The receiver of the Product Activity.
     *  1
     *  Product Activity
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
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyChainActivityDataLine[] $supplyChainActivityDataLine
     */
    private $supplyChainActivityDataLine = [
        
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
     *  Product Activity. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Product Activity
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
     *  Product Activity. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Product Activity
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Product Acvtivity Number
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
     *  Product Activity. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Product Activity
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Product Acvtivity Number
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
     *  Product Activity. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Product Activity
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
     *  Product Activity. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Product Activity
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
     *  Product Activity. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Product Activity
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
     *  Product Activity. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Product Activity
     *  Issue Date
     *  Date
     *  Date. Type
     *  Activity Date
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
     *  Product Activity. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Product Activity
     *  Issue Date
     *  Date
     *  Date. Type
     *  Activity Date
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
     *  Product Activity. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Product Activity
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
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Product Activity
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
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Product Activity. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Product Activity
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentCurrencyCode
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * Sets a new documentCurrencyCode
     *
     * BBIE
     *  Product Activity. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Product Activity
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode = null)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as activityPeriod
     *
     * ASBIE
     *  Product Activity. Activity_ Period. Period
     *  The period covered by this Product Activity report.
     *  1
     *  Product Activity
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod
     */
    public function getActivityPeriod()
    {
        return $this->activityPeriod;
    }

    /**
     * Sets a new activityPeriod
     *
     * ASBIE
     *  Product Activity. Activity_ Period. Period
     *  The period covered by this Product Activity report.
     *  1
     *  Product Activity
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     * @return self
     */
    public function setActivityPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod)
    {
        $this->activityPeriod = $activityPeriod;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Signature
     *  A signature applied to this document.
     *  0..n
     *  Product Activity
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
     *  Product Activity. Sender_ Party. Party
     *  The sender of the Product Activity.
     *  1
     *  Product Activity
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
     *  Product Activity. Sender_ Party. Party
     *  The sender of the Product Activity.
     *  1
     *  Product Activity
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
     *  Product Activity. Receiver_ Party. Party
     *  The receiver of the Product Activity.
     *  1
     *  Product Activity
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
     *  Product Activity. Receiver_ Party. Party
     *  The receiver of the Product Activity.
     *  1
     *  Product Activity
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
     * Adds as supplyChainActivityDataLine
     *
     * ASBIE
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyChainActivityDataLine $supplyChainActivityDataLine
     */
    public function addToSupplyChainActivityDataLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyChainActivityDataLine $supplyChainActivityDataLine)
    {
        $this->supplyChainActivityDataLine[] = $supplyChainActivityDataLine;
        return $this;
    }

    /**
     * isset supplyChainActivityDataLine
     *
     * ASBIE
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplyChainActivityDataLine($index)
    {
        return isset($this->supplyChainActivityDataLine[$index]);
    }

    /**
     * unset supplyChainActivityDataLine
     *
     * ASBIE
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplyChainActivityDataLine($index)
    {
        unset($this->supplyChainActivityDataLine[$index]);
    }

    /**
     * Gets as supplyChainActivityDataLine
     *
     * ASBIE
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyChainActivityDataLine[]
     */
    public function getSupplyChainActivityDataLine()
    {
        return $this->supplyChainActivityDataLine;
    }

    /**
     * Sets a new supplyChainActivityDataLine
     *
     * ASBIE
     *  Product Activity. Supply Chain_ Activity Data Line. Activity Data Line
     *  A line describing the movement of goods to a specific location.
     *  1..n
     *  Product Activity
     *  Supply Chain
     *  Activity Data Line
     *  Activity Data Line
     *  Activity Data Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplyChainActivityDataLine[] $supplyChainActivityDataLine
     * @return self
     */
    public function setSupplyChainActivityDataLine(array $supplyChainActivityDataLine)
    {
        $this->supplyChainActivityDataLine = $supplyChainActivityDataLine;
        return $this;
    }
}

