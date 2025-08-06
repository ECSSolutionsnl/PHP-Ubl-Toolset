<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\Quotation;

/**
 * Class representing QuotationType
 *
 * ABIE
 *  Quotation. Details
 *  A document used to quote for the provision of goods and services.
 *  Quotation
 *  Purchase Order
 * XSD Type: QuotationType
 */
class QuotationType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Quotation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Quotation
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
     *  Quotation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Quotation
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Quotation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Quotation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Quotation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Quotation
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
     *  Quotation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Quotation
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Quotation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Quotation
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Quotation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Quotation
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     *  Quotation. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Quotation.
     *  0..1
     *  Quotation
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode
     */
    private $pricingCurrencyCode = null;

    /**
     * BBIE
     *  Quotation. Line Count. Numeric
     *  The number of Quotation Lines in this document.
     *  0..1
     *  Quotation
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Quotation. Validity_ Period. Period
     *  The period for which the Quotation is valid.
     *  0..1
     *  Quotation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Quotation. Request For Quotation_ Document Reference. Document Reference
     *  A reference to the Request for Quotation associated with this Quotation.
     *  0..1
     *  Quotation
     *  Request For Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RequestForQuotationDocumentReference $requestForQuotationDocumentReference
     */
    private $requestForQuotationDocumentReference = null;

    /**
     * ASBIE
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract[] $contract
     */
    private $contract = [
        
    ];

    /**
     * ASBIE
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Quotation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Quotation. Buyer_ Customer Party. Customer Party
     *  Association to the Buyer.
     *  0..1
     *  Quotation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Quotation. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Quotation
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
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Quotation. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Quotation
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Quotation. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Quotation
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Quotation. Transaction Conditions
     *  A specification of purchasing, sales, or payment conditions applying to Orders related to this Quotation.
     *  0..1
     *  Quotation
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransactionConditions $transactionConditions
     */
    private $transactionConditions = null;

    /**
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Quotation. Destination_ Country. Country
     *  The country of destination of potential orders (for customs purposes).
     *  0..1
     *  Quotation
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DestinationCountry $destinationCountry
     */
    private $destinationCountry = null;

    /**
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Quotation. Quoted_ Monetary Total. Monetary Total
     *  The total amount of the Quotation.
     *  1
     *  Quotation
     *  Quoted
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotedMonetaryTotal $quotedMonetaryTotal
     */
    private $quotedMonetaryTotal = null;

    /**
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationLine[] $quotationLine
     */
    private $quotationLine = [
        
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
     *  Quotation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Quotation
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
     *  Quotation. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Quotation
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
     *  Quotation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Quotation
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
     *  Quotation. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Quotation
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
     *  Quotation. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Quotation
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
     *  Quotation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Quotation
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
     *  Quotation. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Quotation
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
     *  Quotation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Quotation
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
     *  Quotation. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Quotation
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
     *  Quotation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Quotation
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
     *  Quotation. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Quotation
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
     * Gets as issueDate
     *
     * BBIE
     *  Quotation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Quotation
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
     *  Quotation. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Quotation
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
     *  Quotation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Quotation
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
     *  Quotation. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Quotation
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
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     *  Quotation. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation
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
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Quotation. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Quotation.
     *  0..1
     *  Quotation
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PricingCurrencyCode
     */
    public function getPricingCurrencyCode()
    {
        return $this->pricingCurrencyCode;
    }

    /**
     * Sets a new pricingCurrencyCode
     *
     * BBIE
     *  Quotation. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Quotation.
     *  0..1
     *  Quotation
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode
     * @return self
     */
    public function setPricingCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode = null)
    {
        $this->pricingCurrencyCode = $pricingCurrencyCode;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Quotation. Line Count. Numeric
     *  The number of Quotation Lines in this document.
     *  0..1
     *  Quotation
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Quotation. Line Count. Numeric
     *  The number of Quotation Lines in this document.
     *  0..1
     *  Quotation
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric = null)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Quotation. Validity_ Period. Period
     *  The period for which the Quotation is valid.
     *  0..1
     *  Quotation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Quotation. Validity_ Period. Period
     *  The period for which the Quotation is valid.
     *  0..1
     *  Quotation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as requestForQuotationDocumentReference
     *
     * ASBIE
     *  Quotation. Request For Quotation_ Document Reference. Document Reference
     *  A reference to the Request for Quotation associated with this Quotation.
     *  0..1
     *  Quotation
     *  Request For Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RequestForQuotationDocumentReference
     */
    public function getRequestForQuotationDocumentReference()
    {
        return $this->requestForQuotationDocumentReference;
    }

    /**
     * Sets a new requestForQuotationDocumentReference
     *
     * ASBIE
     *  Quotation. Request For Quotation_ Document Reference. Document Reference
     *  A reference to the Request for Quotation associated with this Quotation.
     *  0..1
     *  Quotation
     *  Request For Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RequestForQuotationDocumentReference $requestForQuotationDocumentReference
     * @return self
     */
    public function setRequestForQuotationDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RequestForQuotationDocumentReference $requestForQuotationDocumentReference = null)
    {
        $this->requestForQuotationDocumentReference = $requestForQuotationDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Quotation
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
     * Adds as contract
     *
     * ASBIE
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
     *  Contract
     *  Contract
     *  Contract
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract $contract
     */
    public function addToContract(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract $contract)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * isset contract
     *
     * ASBIE
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
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
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
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
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Quotation. Contract
     *  A contract associated with this Quotation.
     *  0..n
     *  Quotation
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract[] $contract
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
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     *  Quotation. Signature
     *  A signature applied to this document.
     *  0..n
     *  Quotation
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Quotation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Quotation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Quotation. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Quotation
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Quotation. Buyer_ Customer Party. Customer Party
     *  Association to the Buyer.
     *  0..1
     *  Quotation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Quotation. Buyer_ Customer Party. Customer Party
     *  Association to the Buyer.
     *  0..1
     *  Quotation
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Quotation. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Quotation
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
     *  Quotation. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Quotation
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
     * Adds as delivery
     *
     * ASBIE
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Quotation. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Quotation
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(?array $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Quotation. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Quotation
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Quotation. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Quotation
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Quotation. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Quotation
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Quotation. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Quotation
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     * @return self
     */
    public function setPaymentMeans(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans $paymentMeans = null)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Quotation. Transaction Conditions
     *  A specification of purchasing, sales, or payment conditions applying to Orders related to this Quotation.
     *  0..1
     *  Quotation
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransactionConditions
     */
    public function getTransactionConditions()
    {
        return $this->transactionConditions;
    }

    /**
     * Sets a new transactionConditions
     *
     * ASBIE
     *  Quotation. Transaction Conditions
     *  A specification of purchasing, sales, or payment conditions applying to Orders related to this Quotation.
     *  0..1
     *  Quotation
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransactionConditions $transactionConditions
     * @return self
     */
    public function setTransactionConditions(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransactionConditions $transactionConditions = null)
    {
        $this->transactionConditions = $transactionConditions;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Quotation. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Quotation
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as destinationCountry
     *
     * ASBIE
     *  Quotation. Destination_ Country. Country
     *  The country of destination of potential orders (for customs purposes).
     *  0..1
     *  Quotation
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DestinationCountry
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }

    /**
     * Sets a new destinationCountry
     *
     * ASBIE
     *  Quotation. Destination_ Country. Country
     *  The country of destination of potential orders (for customs purposes).
     *  0..1
     *  Quotation
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DestinationCountry $destinationCountry
     * @return self
     */
    public function setDestinationCountry(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DestinationCountry $destinationCountry = null)
    {
        $this->destinationCountry = $destinationCountry;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Quotation. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Quotation
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as quotedMonetaryTotal
     *
     * ASBIE
     *  Quotation. Quoted_ Monetary Total. Monetary Total
     *  The total amount of the Quotation.
     *  1
     *  Quotation
     *  Quoted
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotedMonetaryTotal
     */
    public function getQuotedMonetaryTotal()
    {
        return $this->quotedMonetaryTotal;
    }

    /**
     * Sets a new quotedMonetaryTotal
     *
     * ASBIE
     *  Quotation. Quoted_ Monetary Total. Monetary Total
     *  The total amount of the Quotation.
     *  1
     *  Quotation
     *  Quoted
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotedMonetaryTotal $quotedMonetaryTotal
     * @return self
     */
    public function setQuotedMonetaryTotal(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotedMonetaryTotal $quotedMonetaryTotal)
    {
        $this->quotedMonetaryTotal = $quotedMonetaryTotal;
        return $this;
    }

    /**
     * Adds as quotationLine
     *
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationLine $quotationLine
     */
    public function addToQuotationLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationLine $quotationLine)
    {
        $this->quotationLine[] = $quotationLine;
        return $this;
    }

    /**
     * isset quotationLine
     *
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuotationLine($index)
    {
        return isset($this->quotationLine[$index]);
    }

    /**
     * unset quotationLine
     *
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuotationLine($index)
    {
        unset($this->quotationLine[$index]);
    }

    /**
     * Gets as quotationLine
     *
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationLine[]
     */
    public function getQuotationLine()
    {
        return $this->quotationLine;
    }

    /**
     * Sets a new quotationLine
     *
     * ASBIE
     *  Quotation. Quotation Line
     *  A line quoting a cost for one kind of item.
     *  1..n
     *  Quotation
     *  Quotation Line
     *  Quotation Line
     *  Quotation Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationLine[] $quotationLine
     * @return self
     */
    public function setQuotationLine(array $quotationLine)
    {
        $this->quotationLine = $quotationLine;
        return $this;
    }
}

