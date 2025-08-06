<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\Order;

/**
 * Class representing OrderType
 *
 * ABIE
 *  Order. Details
 *  A document used to order goods and services.
 *  Order
 *  Purchase Order
 * XSD Type: OrderType
 */
class OrderType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order
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
     *  Order. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order
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
     *  Order. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order
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
     *  Order. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order
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
     *  Order. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Number, Order Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, assigned by the seller.
     *  0..1
     *  Order
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order
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
     *  Order. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order
     *  Issue Date
     *  Date
     *  Date. Type
     *  Order Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order. Order Type Code. Code
     *  A code signifying the type of Order.
     *  0..1
     *  Order
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OrderTypeCode $orderTypeCode
     */
    private $orderTypeCode = null;

    /**
     * BBIE
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     *  Order. Requested Invoice_ Currency Code. Code
     *  A code signifying the currency requested for amount totals in Invoices related to this Order.
     *  0..1
     *  Order
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode
     */
    private $requestedInvoiceCurrencyCode = null;

    /**
     * BBIE
     *  Order. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order
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
     *  Order. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Order.
     *  0..1
     *  Order
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
     *  Order. Tax_ Currency Code. Code
     *  A code signifying the currency requested for tax amounts in Invoices related to this Order.
     *  0..1
     *  Order
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * BBIE
     *  Order. Customer_ Reference. Text
     *  A supplementary reference for the Order.
     *  0..1
     *  Order
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Order as a whole.
     *  0..1
     *  Order
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Order. Accounting Cost. Text
     *  The buyer's accounting cost centre, applied to the Order as a whole, expressed as text.
     *  0..1
     *  Order
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Order. Line Count. Numeric
     *  The number of Order Lines in the document.
     *  0..1
     *  Order
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Order. Quotation_ Document Reference. Document Reference
     *  A reference to a Quotation.
     *  0..1
     *  Order
     *  Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationDocumentReference $quotationDocumentReference
     */
    private $quotationDocumentReference = null;

    /**
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderDocumentReference[] $orderDocumentReference
     */
    private $orderDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Order. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    private $originatorDocumentReference = null;

    /**
     * ASBIE
     *  Order. Catalogue Reference
     *  A reference to the Catalogue on which this Order is based.
     *  0..1
     *  Order
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueReference $catalogueReference
     */
    private $catalogueReference = null;

    /**
     * ASBIE
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProjectReference[] $projectReference
     */
    private $projectReference = [
        
    ];

    /**
     * ASBIE
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     *  Order. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order
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
     *  Order. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order
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
     *  Order. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order
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
     *  Order. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Carrier
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Order. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Order. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *  Sales condition, procurement condition
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransactionConditions $transactionConditions
     */
    private $transactionConditions = null;

    /**
     * ASBIE
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     *  Order. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Order. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Order. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Order. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     *  Order. Anticipated_ Monetary Total. Monetary Total
     *  The total amount for the Order anticipated by the buyer.
     *  0..1
     *  Order
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal
     */
    private $anticipatedMonetaryTotal = null;

    /**
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderLine[] $orderLine
     */
    private $orderLine = [
        
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
     *  Order. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order
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
     *  Order. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order
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
     *  Order. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order
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
     *  Order. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Order
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
     *  Order. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order
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
     *  Order. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order
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
     *  Order. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order
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
     *  Order. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order
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
     *  Order. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Number, Order Number
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
     *  Order. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Number, Order Number
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, assigned by the seller.
     *  0..1
     *  Order
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Order. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, assigned by the seller.
     *  0..1
     *  Order
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SalesOrderID $salesOrderID = null)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Order. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order
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
     *  Order. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order
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
     *  Order. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order
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
     *  Order. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order
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
     *  Order. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order
     *  Issue Date
     *  Date
     *  Date. Type
     *  Order Date
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
     *  Order. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order
     *  Issue Date
     *  Date
     *  Date. Type
     *  Order Date
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
     *  Order. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order
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
     *  Order. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order
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
     * Gets as orderTypeCode
     *
     * BBIE
     *  Order. Order Type Code. Code
     *  A code signifying the type of Order.
     *  0..1
     *  Order
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OrderTypeCode
     */
    public function getOrderTypeCode()
    {
        return $this->orderTypeCode;
    }

    /**
     * Sets a new orderTypeCode
     *
     * BBIE
     *  Order. Order Type Code. Code
     *  A code signifying the type of Order.
     *  0..1
     *  Order
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OrderTypeCode $orderTypeCode
     * @return self
     */
    public function setOrderTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OrderTypeCode $orderTypeCode = null)
    {
        $this->orderTypeCode = $orderTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     *  Order. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order
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
     * Gets as requestedInvoiceCurrencyCode
     *
     * BBIE
     *  Order. Requested Invoice_ Currency Code. Code
     *  A code signifying the currency requested for amount totals in Invoices related to this Order.
     *  0..1
     *  Order
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RequestedInvoiceCurrencyCode
     */
    public function getRequestedInvoiceCurrencyCode()
    {
        return $this->requestedInvoiceCurrencyCode;
    }

    /**
     * Sets a new requestedInvoiceCurrencyCode
     *
     * BBIE
     *  Order. Requested Invoice_ Currency Code. Code
     *  A code signifying the currency requested for amount totals in Invoices related to this Order.
     *  0..1
     *  Order
     *  Requested Invoice
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode
     * @return self
     */
    public function setRequestedInvoiceCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RequestedInvoiceCurrencyCode $requestedInvoiceCurrencyCode = null)
    {
        $this->requestedInvoiceCurrencyCode = $requestedInvoiceCurrencyCode;
        return $this;
    }

    /**
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Order. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order
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
     *  Order. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentCurrencyCode $documentCurrencyCode = null)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Order. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Order.
     *  0..1
     *  Order
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
     *  Order. Pricing_ Currency Code. Code
     *  A code signifying the currency used for all prices in the Order.
     *  0..1
     *  Order
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
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Order. Tax_ Currency Code. Code
     *  A code signifying the currency requested for tax amounts in Invoices related to this Order.
     *  0..1
     *  Order
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TaxCurrencyCode
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * BBIE
     *  Order. Tax_ Currency Code. Code
     *  A code signifying the currency requested for tax amounts in Invoices related to this Order.
     *  0..1
     *  Order
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode = null)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order. Customer_ Reference. Text
     *  A supplementary reference for the Order.
     *  0..1
     *  Order
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomerReference
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * BBIE
     *  Order. Customer_ Reference. Text
     *  A supplementary reference for the Order.
     *  0..1
     *  Order
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomerReference $customerReference
     * @return self
     */
    public function setCustomerReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomerReference $customerReference = null)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Order. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Order as a whole.
     *  0..1
     *  Order
     *  Accounting Cost Code
     *  Code
     *  Code. Type
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
     *  Order. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Order as a whole.
     *  0..1
     *  Order
     *  Accounting Cost Code
     *  Code
     *  Code. Type
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
     *  Order. Accounting Cost. Text
     *  The buyer's accounting cost centre, applied to the Order as a whole, expressed as text.
     *  0..1
     *  Order
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
     *  Order. Accounting Cost. Text
     *  The buyer's accounting cost centre, applied to the Order as a whole, expressed as text.
     *  0..1
     *  Order
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
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Order. Line Count. Numeric
     *  The number of Order Lines in the document.
     *  0..1
     *  Order
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
     *  Order. Line Count. Numeric
     *  The number of Order Lines in the document.
     *  0..1
     *  Order
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
     * Adds as validityPeriod
     *
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Order. Validity_ Period. Period
     *  The period for which the Order is valid.
     *  0..n
     *  Order
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as quotationDocumentReference
     *
     * ASBIE
     *  Order. Quotation_ Document Reference. Document Reference
     *  A reference to a Quotation.
     *  0..1
     *  Order
     *  Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationDocumentReference
     */
    public function getQuotationDocumentReference()
    {
        return $this->quotationDocumentReference;
    }

    /**
     * Sets a new quotationDocumentReference
     *
     * ASBIE
     *  Order. Quotation_ Document Reference. Document Reference
     *  A reference to a Quotation.
     *  0..1
     *  Order
     *  Quotation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationDocumentReference $quotationDocumentReference
     * @return self
     */
    public function setQuotationDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\QuotationDocumentReference $quotationDocumentReference = null)
    {
        $this->quotationDocumentReference = $quotationDocumentReference;
        return $this;
    }

    /**
     * Adds as orderDocumentReference
     *
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderDocumentReference $orderDocumentReference
     */
    public function addToOrderDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderDocumentReference $orderDocumentReference)
    {
        $this->orderDocumentReference[] = $orderDocumentReference;
        return $this;
    }

    /**
     * isset orderDocumentReference
     *
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderDocumentReference($index)
    {
        return isset($this->orderDocumentReference[$index]);
    }

    /**
     * unset orderDocumentReference
     *
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderDocumentReference($index)
    {
        unset($this->orderDocumentReference[$index]);
    }

    /**
     * Gets as orderDocumentReference
     *
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderDocumentReference[]
     */
    public function getOrderDocumentReference()
    {
        return $this->orderDocumentReference;
    }

    /**
     * Sets a new orderDocumentReference
     *
     * ASBIE
     *  Order. Order_ Document Reference. Document Reference
     *  A reference to another Order.
     *  0..n
     *  Order
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderDocumentReference[] $orderDocumentReference
     * @return self
     */
    public function setOrderDocumentReference(?array $orderDocumentReference = null)
    {
        $this->orderDocumentReference = $orderDocumentReference;
        return $this;
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Order. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Order. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference = null)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Gets as catalogueReference
     *
     * ASBIE
     *  Order. Catalogue Reference
     *  A reference to the Catalogue on which this Order is based.
     *  0..1
     *  Order
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueReference
     */
    public function getCatalogueReference()
    {
        return $this->catalogueReference;
    }

    /**
     * Sets a new catalogueReference
     *
     * ASBIE
     *  Order. Catalogue Reference
     *  A reference to the Catalogue on which this Order is based.
     *  0..1
     *  Order
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueReference $catalogueReference
     * @return self
     */
    public function setCatalogueReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueReference $catalogueReference = null)
    {
        $this->catalogueReference = $catalogueReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     *  Order. Contract
     *  A contracts associated with this Order.
     *  0..n
     *  Order
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
     * Adds as projectReference
     *
     * ASBIE
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProjectReference $projectReference
     */
    public function addToProjectReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProjectReference $projectReference)
    {
        $this->projectReference[] = $projectReference;
        return $this;
    }

    /**
     * isset projectReference
     *
     * ASBIE
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectReference($index)
    {
        return isset($this->projectReference[$index]);
    }

    /**
     * unset projectReference
     *
     * ASBIE
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectReference($index)
    {
        unset($this->projectReference[$index]);
    }

    /**
     * Gets as projectReference
     *
     * ASBIE
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProjectReference[]
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * ASBIE
     *  Order. Project Reference
     *  A project with which this Order is associated.
     *  0..n
     *  Order
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProjectReference[] $projectReference
     * @return self
     */
    public function setProjectReference(?array $projectReference = null)
    {
        $this->projectReference = $projectReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     *  Order. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order
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
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Order. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order
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
     *  Order. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Order. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order
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
     *  Order. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order
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
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Order. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order
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
     *  Order. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order
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
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Order. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Carrier
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Order. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Carrier
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty = null)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Order. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Order. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty = null)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     *  Order. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order
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
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Order. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Order
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Order. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(?array $paymentMeans = null)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Order. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Order. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *  Sales condition, procurement condition
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
     *  Order. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *  Sales condition, procurement condition
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
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     *  Order. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order
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
     * Gets as taxExchangeRate
     *
     * ASBIE
     *  Order. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxExchangeRate
     */
    public function getTaxExchangeRate()
    {
        return $this->taxExchangeRate;
    }

    /**
     * Sets a new taxExchangeRate
     *
     * ASBIE
     *  Order. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate
     * @return self
     */
    public function setTaxExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate = null)
    {
        $this->taxExchangeRate = $taxExchangeRate;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Order. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Order. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate = null)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentExchangeRate
     *
     * ASBIE
     *  Order. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentExchangeRate
     */
    public function getPaymentExchangeRate()
    {
        return $this->paymentExchangeRate;
    }

    /**
     * Sets a new paymentExchangeRate
     *
     * ASBIE
     *  Order. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate
     * @return self
     */
    public function setPaymentExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate = null)
    {
        $this->paymentExchangeRate = $paymentExchangeRate;
        return $this;
    }

    /**
     * Gets as destinationCountry
     *
     * ASBIE
     *  Order. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order
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
     *  Order. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     *  Order. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Order
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
     * Gets as anticipatedMonetaryTotal
     *
     * ASBIE
     *  Order. Anticipated_ Monetary Total. Monetary Total
     *  The total amount for the Order anticipated by the buyer.
     *  0..1
     *  Order
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AnticipatedMonetaryTotal
     */
    public function getAnticipatedMonetaryTotal()
    {
        return $this->anticipatedMonetaryTotal;
    }

    /**
     * Sets a new anticipatedMonetaryTotal
     *
     * ASBIE
     *  Order. Anticipated_ Monetary Total. Monetary Total
     *  The total amount for the Order anticipated by the buyer.
     *  0..1
     *  Order
     *  Anticipated
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal
     * @return self
     */
    public function setAnticipatedMonetaryTotal(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AnticipatedMonetaryTotal $anticipatedMonetaryTotal = null)
    {
        $this->anticipatedMonetaryTotal = $anticipatedMonetaryTotal;
        return $this;
    }

    /**
     * Adds as orderLine
     *
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderLine $orderLine
     */
    public function addToOrderLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderLine $orderLine)
    {
        $this->orderLine[] = $orderLine;
        return $this;
    }

    /**
     * isset orderLine
     *
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLine($index)
    {
        return isset($this->orderLine[$index]);
    }

    /**
     * unset orderLine
     *
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLine($index)
    {
        unset($this->orderLine[$index]);
    }

    /**
     * Gets as orderLine
     *
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderLine[]
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * Sets a new orderLine
     *
     * ASBIE
     *  Order. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  1..n
     *  Order
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderLine[] $orderLine
     * @return self
     */
    public function setOrderLine(array $orderLine)
    {
        $this->orderLine = $orderLine;
        return $this;
    }
}

