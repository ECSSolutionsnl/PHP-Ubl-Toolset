<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\UtilityStatement;

/**
 * Class representing UtilityStatementType
 *
 * ABIE
 *  Utility Statement. Details
 *  A supplement to an Invoice or Credit Note, containing information on the consumption of services provided by utility suppliers to private and public customers, including electricity, gas, water, and telephone services.
 *  Utility Statement
 * XSD Type: UtilityStatementType
 */
class UtilityStatementType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Utility Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Utility Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Utility Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Utility Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  OIOUBL-2.02
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Utility Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Utility Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  Reference-Utility-1.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Utility Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Utility Statement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  61014906x-1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Utility Statement. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Utility Statement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *  9756b4d0-8815-1029-857a-e388fe63f499
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Utility Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Utility Statement
     *  Issue Date
     *  Date
     *  Date. Type
     *  2007-12-12
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Utility Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Utility Statement
     *  Issue Time
     *  Time
     *  Time. Type
     *  12:32:56
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Utility Statement. Utility Statement Type Code. Code
     *  A code signifying the type of Utility Statement.
     *  1
     *  Utility Statement
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     */
    private $utilityStatementTypeCode = null;

    /**
     * BBIE
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Utility Statement. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Utility Statement
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode
     */
    private $documentCurrencyCode = null;

    /**
     * BBIE
     *  Utility Statement. Accounting Cost Code. Code
     *  The buyer's accounting cost code, applied to the UtilityStatement.
     *  0..1
     *  Utility Statement
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *  5050.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Utility Statement. Accounting Cost. Text
     *  The buyer's accounting cost code, applied to the UtilityStatement, expressed as text.
     *  0..1
     *  Utility Statement
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Utility Statement. Parent_ Document Reference. Document Reference
     *  A reference to the parent Invoice or Credit Note.
     *  1
     *  Utility Statement
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference
     */
    private $parentDocumentReference = null;

    /**
     * ASBIE
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Utility Statement
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
     *  Utility Statement. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Utility Statement
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
     *  Utility Statement. Customer Party
     *  The buyer, if different from the receiver of the document.
     *  0..1
     *  Utility Statement
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CustomerParty $customerParty
     */
    private $customerParty = null;

    /**
     * ASBIE
     *  Utility Statement. Subscriber_ Party. Party
     *  The subscriber (user or receiver of the service), if different from the buyer and from the party receiving this document.
     *  0..1
     *  Utility Statement
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberParty $subscriberParty
     */
    private $subscriberParty = null;

    /**
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainOnAccountPayment[] $mainOnAccountPayment
     */
    private $mainOnAccountPayment = [
        
    ];

    /**
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberConsumption[] $subscriberConsumption
     */
    private $subscriberConsumption = [
        
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
     *  Utility Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Utility Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0
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
     *  Utility Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Utility Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0
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
     *  Utility Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Utility Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  OIOUBL-2.02
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
     *  Utility Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Utility Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  OIOUBL-2.02
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
     *  Utility Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Utility Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  Reference-Utility-1.0
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
     *  Utility Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Utility Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  Reference-Utility-1.0
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
     *  Utility Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Utility Statement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  61014906x-1
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
     *  Utility Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Utility Statement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  61014906x-1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Utility Statement. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Utility Statement
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
     *  Utility Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Utility Statement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *  9756b4d0-8815-1029-857a-e388fe63f499
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
     *  Utility Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Utility Statement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *  9756b4d0-8815-1029-857a-e388fe63f499
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
     * Gets as issueDate
     *
     * BBIE
     *  Utility Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Utility Statement
     *  Issue Date
     *  Date
     *  Date. Type
     *  2007-12-12
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
     *  Utility Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Utility Statement
     *  Issue Date
     *  Date
     *  Date. Type
     *  2007-12-12
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
     *  Utility Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Utility Statement
     *  Issue Time
     *  Time
     *  Time. Type
     *  12:32:56
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
     *  Utility Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Utility Statement
     *  Issue Time
     *  Time
     *  Time. Type
     *  12:32:56
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
     * Gets as utilityStatementTypeCode
     *
     * BBIE
     *  Utility Statement. Utility Statement Type Code. Code
     *  A code signifying the type of Utility Statement.
     *  1
     *  Utility Statement
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode
     */
    public function getUtilityStatementTypeCode()
    {
        return $this->utilityStatementTypeCode;
    }

    /**
     * Sets a new utilityStatementTypeCode
     *
     * BBIE
     *  Utility Statement. Utility Statement Type Code. Code
     *  A code signifying the type of Utility Statement.
     *  1
     *  Utility Statement
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     * @return self
     */
    public function setUtilityStatementTypeCode(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode)
    {
        $this->utilityStatementTypeCode = $utilityStatementTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
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
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
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
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
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
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
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
     *  Utility Statement. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Utility Statement
     *  Note
     *  Text
     *  Text. Type
     *  Concerning account remark
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
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Utility Statement. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Utility Statement
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * Sets a new documentCurrencyCode
     *
     * BBIE
     *  Utility Statement. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Utility Statement
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Utility Statement. Accounting Cost Code. Code
     *  The buyer's accounting cost code, applied to the UtilityStatement.
     *  0..1
     *  Utility Statement
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *  5050.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Utility Statement. Accounting Cost Code. Code
     *  The buyer's accounting cost code, applied to the UtilityStatement.
     *  0..1
     *  Utility Statement
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *  5050.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Utility Statement. Accounting Cost. Text
     *  The buyer's accounting cost code, applied to the UtilityStatement, expressed as text.
     *  0..1
     *  Utility Statement
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Utility Statement. Accounting Cost. Text
     *  The buyer's accounting cost code, applied to the UtilityStatement, expressed as text.
     *  0..1
     *  Utility Statement
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as parentDocumentReference
     *
     * ASBIE
     *  Utility Statement. Parent_ Document Reference. Document Reference
     *  A reference to the parent Invoice or Credit Note.
     *  1
     *  Utility Statement
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ParentDocumentReference
     */
    public function getParentDocumentReference()
    {
        return $this->parentDocumentReference;
    }

    /**
     * Sets a new parentDocumentReference
     *
     * ASBIE
     *  Utility Statement. Parent_ Document Reference. Document Reference
     *  A reference to the parent Invoice or Credit Note.
     *  1
     *  Utility Statement
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference
     * @return self
     */
    public function setParentDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference)
    {
        $this->parentDocumentReference = $parentDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Utility Statement. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Utility Statement
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Utility Statement
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
     *  Utility Statement. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Utility Statement
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
     *  Utility Statement. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Utility Statement
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
     *  Utility Statement. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Utility Statement
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
     *  Utility Statement. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Utility Statement
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

    /**
     * Gets as customerParty
     *
     * ASBIE
     *  Utility Statement. Customer Party
     *  The buyer, if different from the receiver of the document.
     *  0..1
     *  Utility Statement
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CustomerParty
     */
    public function getCustomerParty()
    {
        return $this->customerParty;
    }

    /**
     * Sets a new customerParty
     *
     * ASBIE
     *  Utility Statement. Customer Party
     *  The buyer, if different from the receiver of the document.
     *  0..1
     *  Utility Statement
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CustomerParty $customerParty
     * @return self
     */
    public function setCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CustomerParty $customerParty = null)
    {
        $this->customerParty = $customerParty;
        return $this;
    }

    /**
     * Gets as subscriberParty
     *
     * ASBIE
     *  Utility Statement. Subscriber_ Party. Party
     *  The subscriber (user or receiver of the service), if different from the buyer and from the party receiving this document.
     *  0..1
     *  Utility Statement
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberParty
     */
    public function getSubscriberParty()
    {
        return $this->subscriberParty;
    }

    /**
     * Sets a new subscriberParty
     *
     * ASBIE
     *  Utility Statement. Subscriber_ Party. Party
     *  The subscriber (user or receiver of the service), if different from the buyer and from the party receiving this document.
     *  0..1
     *  Utility Statement
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberParty $subscriberParty
     * @return self
     */
    public function setSubscriberParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberParty $subscriberParty = null)
    {
        $this->subscriberParty = $subscriberParty;
        return $this;
    }

    /**
     * Adds as mainOnAccountPayment
     *
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainOnAccountPayment $mainOnAccountPayment
     */
    public function addToMainOnAccountPayment(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainOnAccountPayment $mainOnAccountPayment)
    {
        $this->mainOnAccountPayment[] = $mainOnAccountPayment;
        return $this;
    }

    /**
     * isset mainOnAccountPayment
     *
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainOnAccountPayment($index)
    {
        return isset($this->mainOnAccountPayment[$index]);
    }

    /**
     * unset mainOnAccountPayment
     *
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainOnAccountPayment($index)
    {
        unset($this->mainOnAccountPayment[$index]);
    }

    /**
     * Gets as mainOnAccountPayment
     *
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainOnAccountPayment[]
     */
    public function getMainOnAccountPayment()
    {
        return $this->mainOnAccountPayment;
    }

    /**
     * Sets a new mainOnAccountPayment
     *
     * ASBIE
     *  Utility Statement. Main_ On Account Payment. On Account Payment
     *  A payment on an account.
     *  0..n
     *  Utility Statement
     *  Main
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainOnAccountPayment[] $mainOnAccountPayment
     * @return self
     */
    public function setMainOnAccountPayment(?array $mainOnAccountPayment = null)
    {
        $this->mainOnAccountPayment = $mainOnAccountPayment;
        return $this;
    }

    /**
     * Adds as subscriberConsumption
     *
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberConsumption $subscriberConsumption
     */
    public function addToSubscriberConsumption(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberConsumption $subscriberConsumption)
    {
        $this->subscriberConsumption[] = $subscriberConsumption;
        return $this;
    }

    /**
     * isset subscriberConsumption
     *
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubscriberConsumption($index)
    {
        return isset($this->subscriberConsumption[$index]);
    }

    /**
     * unset subscriberConsumption
     *
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubscriberConsumption($index)
    {
        unset($this->subscriberConsumption[$index]);
    }

    /**
     * Gets as subscriberConsumption
     *
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberConsumption[]
     */
    public function getSubscriberConsumption()
    {
        return $this->subscriberConsumption;
    }

    /**
     * Sets a new subscriberConsumption
     *
     * ASBIE
     *  Utility Statement. Subscriber Consumption
     *  A utility statement for a particular consumption point.
     *  0..n
     *  Utility Statement
     *  Subscriber Consumption
     *  Subscriber Consumption
     *  Subscriber Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SubscriberConsumption[] $subscriberConsumption
     * @return self
     */
    public function setSubscriberConsumption(?array $subscriberConsumption = null)
    {
        $this->subscriberConsumption = $subscriberConsumption;
        return $this;
    }
}

