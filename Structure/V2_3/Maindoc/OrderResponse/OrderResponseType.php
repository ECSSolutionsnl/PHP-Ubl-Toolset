<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\OrderResponse;

/**
 * Class representing OrderResponseType
 *
 * ABIE
 *  Order Response. Details
 *  A document used to indicate detailed acceptance or rejection of an Order or to make a counter-offer.
 *  Order Response
 *  Order Acknowledgement, PO Response
 * XSD Type: OrderResponseType
 */
class OrderResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order Response
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
     *  Order Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Response. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, issued by the Seller.
     *  0..1
     *  Order Response
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Response. Order Response Code. Code
     *  A code signifying the type of response for this Order.
     *  0..1
     *  Order Response
     *  Order Response Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OrderResponseCode $orderResponseCode
     */
    private $orderResponseCode = null;

    /**
     * BBIE
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order Response
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
     * BBIE
     *  Order Response. Pricing_ Currency Code. Code
     *  A code signifying the currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode
     */
    private $pricingCurrencyCode = null;

    /**
     * BBIE
     *  Order Response. Tax_ Currency Code. Code
     *  A code signifying the currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * BBIE
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPackagesQuantity $totalPackagesQuantity
     */
    private $totalPackagesQuantity = null;

    /**
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Order Response. Customer_ Reference. Text
     *  A supplementary reference assigned by the buyer, e.g., the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Order Response. Line Count. Numeric
     *  The number of Order Lines in this document.
     *  0..1
     *  Order Response
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
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
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderDocumentReference[] $orderDocumentReference
     */
    private $orderDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderChangeDocumentReference[] $orderChangeDocumentReference
     */
    private $orderChangeDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order Response
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    private $originatorDocumentReference = null;

    /**
     * ASBIE
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order Response
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
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order Response
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
     *  Order Response. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order Response
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Order Response. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order Response
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Order Response
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order Response
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransactionConditions $transactionConditions
     */
    private $transactionConditions = null;

    /**
     * ASBIE
     *  Order Response. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order Response
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Order Response. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order Response
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Order Response. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order Response
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Order Response. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order Response
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DestinationCountry $destinationCountry
     */
    private $destinationCountry = null;

    /**
     * ASBIE
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  The total amount of the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderLine[] $orderLine
     */
    private $orderLine = [
        
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
     *  Order Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order Response
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
     *  Order Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Order Response
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
     *  Order Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
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
     *  Order Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Order Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Purchase Order Response Number, Acknowledgement of Order Number
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Response. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, issued by the Seller.
     *  0..1
     *  Order Response
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Order Response. Sales_ Order Identifier. Identifier
     *  An identifier for the Order, issued by the Seller.
     *  0..1
     *  Order Response
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderID $salesOrderID = null)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order Response
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
     *  Order Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Order Response
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
     *  Order Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order Response
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
     *  Order Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Order Response
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
     *  Order Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order Response
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
     *  Order Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Order Response
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
     * Gets as orderResponseCode
     *
     * BBIE
     *  Order Response. Order Response Code. Code
     *  A code signifying the type of response for this Order.
     *  0..1
     *  Order Response
     *  Order Response Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OrderResponseCode
     */
    public function getOrderResponseCode()
    {
        return $this->orderResponseCode;
    }

    /**
     * Sets a new orderResponseCode
     *
     * BBIE
     *  Order Response. Order Response Code. Code
     *  A code signifying the type of response for this Order.
     *  0..1
     *  Order Response
     *  Order Response Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OrderResponseCode $orderResponseCode
     * @return self
     */
    public function setOrderResponseCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OrderResponseCode $orderResponseCode = null)
    {
        $this->orderResponseCode = $orderResponseCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Response
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
     *  Order Response. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order Response
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
     *  Order Response. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Order Response
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
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Order Response. Pricing_ Currency Code. Code
     *  A code signifying the currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PricingCurrencyCode
     */
    public function getPricingCurrencyCode()
    {
        return $this->pricingCurrencyCode;
    }

    /**
     * Sets a new pricingCurrencyCode
     *
     * BBIE
     *  Order Response. Pricing_ Currency Code. Code
     *  A code signifying the currency that is used for all prices in the Order Response.
     *  0..1
     *  Order Response
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode
     * @return self
     */
    public function setPricingCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PricingCurrencyCode $pricingCurrencyCode = null)
    {
        $this->pricingCurrencyCode = $pricingCurrencyCode;
        return $this;
    }

    /**
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Order Response. Tax_ Currency Code. Code
     *  A code signifying the currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxCurrencyCode
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * BBIE
     *  Order Response. Tax_ Currency Code. Code
     *  A code signifying the currency that is used for all tax amounts in the Order Response.
     *  0..1
     *  Order Response
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxCurrencyCode $taxCurrencyCode = null)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as totalPackagesQuantity
     *
     * BBIE
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPackagesQuantity
     */
    public function getTotalPackagesQuantity()
    {
        return $this->totalPackagesQuantity;
    }

    /**
     * Sets a new totalPackagesQuantity
     *
     * BBIE
     *  Order Response. Total_ Packages Quantity. Quantity
     *  The total number of packages contained in the Order Response.
     *  0..1
     *  Order Response
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPackagesQuantity $totalPackagesQuantity
     * @return self
     */
    public function setTotalPackagesQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPackagesQuantity $totalPackagesQuantity = null)
    {
        $this->totalPackagesQuantity = $totalPackagesQuantity;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Order Response. Gross_ Weight. Measure
     *  The total gross weight for the Order Response (goods + packaging + transport equipment).
     *  0..1
     *  Order Response
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossWeightMeasure $grossWeightMeasure = null)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Order Response. Net_ Weight. Measure
     *  The total net weight for the Order Response (goods + packaging).
     *  0..1
     *  Order Response
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetWeightMeasure $netWeightMeasure = null)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Order Response. Net Net_ Weight. Measure
     *  The total net weight of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetNetWeightMeasure $netNetWeightMeasure = null)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Order Response. Gross_ Volume. Measure
     *  The total volume of the goods in the Order Response including packaging.
     *  0..1
     *  Order Response
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GrossVolumeMeasure $grossVolumeMeasure = null)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Order Response. Net_ Volume. Measure
     *  The total volume of the goods in the Order Response excluding packaging.
     *  0..1
     *  Order Response
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetVolumeMeasure $netVolumeMeasure = null)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Response. Customer_ Reference. Text
     *  A supplementary reference assigned by the buyer, e.g., the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomerReference
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * BBIE
     *  Order Response. Customer_ Reference. Text
     *  A supplementary reference assigned by the buyer, e.g., the CRI in a purchasing card transaction.
     *  0..1
     *  Order Response
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomerReference $customerReference
     * @return self
     */
    public function setCustomerReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomerReference $customerReference = null)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Order Response. Accounting Cost Code. Code
     *  An accounting cost code applied to the order as a whole.
     *  0..1
     *  Order Response
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Order Response. Accounting Cost. Text
     *  An accounting cost code applied to the order as a whole, expressed as text.
     *  0..1
     *  Order Response
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Order Response. Line Count. Numeric
     *  The number of Order Lines in this document.
     *  0..1
     *  Order Response
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Order Response. Line Count. Numeric
     *  The number of Order Lines in this document.
     *  0..1
     *  Order Response
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric = null)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
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
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Order Response. Validity_ Period. Period
     *  The period for which the Order Response is valid.
     *  0..n
     *  Order Response
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as orderReference
     *
     * ASBIE
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
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
     *  Order Response. Order Reference
     *  A reference to the Order being responded to.
     *  1..n
     *  Order Response
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference[] $orderReference
     * @return self
     */
    public function setOrderReference(array $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Adds as orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderDocumentReference $orderDocumentReference
     */
    public function addToOrderDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderDocumentReference $orderDocumentReference)
    {
        $this->orderDocumentReference[] = $orderDocumentReference;
        return $this;
    }

    /**
     * isset orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderDocumentReference[]
     */
    public function getOrderDocumentReference()
    {
        return $this->orderDocumentReference;
    }

    /**
     * Sets a new orderDocumentReference
     *
     * ASBIE
     *  Order Response. Order_ Document Reference. Document Reference
     *  A reference to an Order other than the one being responded to.
     *  0..n
     *  Order Response
     *  Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderDocumentReference[] $orderDocumentReference
     * @return self
     */
    public function setOrderDocumentReference(?array $orderDocumentReference = null)
    {
        $this->orderDocumentReference = $orderDocumentReference;
        return $this;
    }

    /**
     * Adds as orderChangeDocumentReference
     *
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderChangeDocumentReference $orderChangeDocumentReference
     */
    public function addToOrderChangeDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderChangeDocumentReference $orderChangeDocumentReference)
    {
        $this->orderChangeDocumentReference[] = $orderChangeDocumentReference;
        return $this;
    }

    /**
     * isset orderChangeDocumentReference
     *
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderChangeDocumentReference($index)
    {
        return isset($this->orderChangeDocumentReference[$index]);
    }

    /**
     * unset orderChangeDocumentReference
     *
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderChangeDocumentReference($index)
    {
        unset($this->orderChangeDocumentReference[$index]);
    }

    /**
     * Gets as orderChangeDocumentReference
     *
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderChangeDocumentReference[]
     */
    public function getOrderChangeDocumentReference()
    {
        return $this->orderChangeDocumentReference;
    }

    /**
     * Sets a new orderChangeDocumentReference
     *
     * ASBIE
     *  Order Response. Order Change_ Document Reference. Document Reference
     *  A reference to an Order Change being responded to.
     *  0..n
     *  Order Response
     *  Order Change
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderChangeDocumentReference[] $orderChangeDocumentReference
     * @return self
     */
    public function setOrderChangeDocumentReference(?array $orderChangeDocumentReference = null)
    {
        $this->orderChangeDocumentReference = $orderChangeDocumentReference;
        return $this;
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Order Response. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order Response
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorDocumentReference
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Order Response. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..1
     *  Order Response
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference = null)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Contract
     *  A contract associated with the Order being responded to.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Order Response
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order Response
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
     *  Order Response. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  1
     *  Order Response
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order Response
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
     *  Order Response. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  1
     *  Order Response
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Order Response. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order Response
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
     *  Order Response. Originator_ Customer Party. Customer Party
     *  The originator.
     *  0..1
     *  Order Response
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

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Order Response. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order Response
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Order Response. Freight Forwarder_ Party. Party
     *  A freight forwarder or carrier.
     *  0..1
     *  Order Response
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty = null)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Order Response. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty = null)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Order Response. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  0..1
     *  Order Response
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty = null)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Order Response. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Order Response
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Delivery[] $delivery
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
     *  Order Response. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Order Response
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Order Response. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Order Response
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DeliveryTerms $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
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
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
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
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Order Response. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Order Response
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans[] $paymentMeans
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
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
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
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Order Response. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Order Response
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
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
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Order Response. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Order Response
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as transactionConditions
     *
     * ASBIE
     *  Order Response. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order Response
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransactionConditions
     */
    public function getTransactionConditions()
    {
        return $this->transactionConditions;
    }

    /**
     * Sets a new transactionConditions
     *
     * ASBIE
     *  Order Response. Transaction Conditions
     *  A specification of purchasing or sales conditions applying to the whole Order.
     *  0..1
     *  Order Response
     *  Transaction Conditions
     *  Transaction Conditions
     *  Transaction Conditions
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransactionConditions $transactionConditions
     * @return self
     */
    public function setTransactionConditions(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransactionConditions $transactionConditions = null)
    {
        $this->transactionConditions = $transactionConditions;
        return $this;
    }

    /**
     * Gets as taxExchangeRate
     *
     * ASBIE
     *  Order Response. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order Response
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxExchangeRate
     */
    public function getTaxExchangeRate()
    {
        return $this->taxExchangeRate;
    }

    /**
     * Sets a new taxExchangeRate
     *
     * ASBIE
     *  Order Response. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Order Response
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate
     * @return self
     */
    public function setTaxExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxExchangeRate $taxExchangeRate = null)
    {
        $this->taxExchangeRate = $taxExchangeRate;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Order Response. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order Response
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Order Response. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Order Response
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PricingExchangeRate $pricingExchangeRate = null)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentExchangeRate
     *
     * ASBIE
     *  Order Response. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order Response
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentExchangeRate
     */
    public function getPaymentExchangeRate()
    {
        return $this->paymentExchangeRate;
    }

    /**
     * Sets a new paymentExchangeRate
     *
     * ASBIE
     *  Order Response. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Order Response
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate
     * @return self
     */
    public function setPaymentExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentExchangeRate $paymentExchangeRate = null)
    {
        $this->paymentExchangeRate = $paymentExchangeRate;
        return $this;
    }

    /**
     * Gets as destinationCountry
     *
     * ASBIE
     *  Order Response. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order Response
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DestinationCountry
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }

    /**
     * Sets a new destinationCountry
     *
     * ASBIE
     *  Order Response. Destination_ Country. Country
     *  The country of destination (for customs purposes).
     *  0..1
     *  Order Response
     *  Destination
     *  Country
     *  Country
     *  Country
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DestinationCountry $destinationCountry
     * @return self
     */
    public function setDestinationCountry(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DestinationCountry $destinationCountry = null)
    {
        $this->destinationCountry = $destinationCountry;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
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
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Order Response. Tax Total
     *  The total amount of a specific type of tax, as calculated by the seller.
     *  0..n
     *  Order Response
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  The total amount of the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Order Response. Legal_ Monetary Total. Monetary Total
     *  The total amount of the Order (or counter-offer).
     *  0..1
     *  Order Response
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal = null)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as orderLine
     *
     * ASBIE
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderLine $orderLine
     */
    public function addToOrderLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderLine $orderLine)
    {
        $this->orderLine[] = $orderLine;
        return $this;
    }

    /**
     * isset orderLine
     *
     * ASBIE
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
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
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
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
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderLine[]
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * Sets a new orderLine
     *
     * ASBIE
     *  Order Response. Order Line
     *  A line associated with a line in the Catalogue and specifying a kind of item being ordered.
     *  0..n
     *  Order Response
     *  Order Line
     *  Order Line
     *  Order Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderLine[] $orderLine
     * @return self
     */
    public function setOrderLine(?array $orderLine = null)
    {
        $this->orderLine = $orderLine;
        return $this;
    }
}

