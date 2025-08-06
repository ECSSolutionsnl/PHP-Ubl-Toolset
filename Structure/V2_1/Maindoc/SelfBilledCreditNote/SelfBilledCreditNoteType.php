<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\SelfBilledCreditNote;

/**
 * Class representing SelfBilledCreditNoteType
 *
 * ABIE
 *  Self Billed Credit Note. Details
 *  A credit note created by the debtor in a self billing arrangement with a creditor; Self Billed Credit Note replaces Debit Note in such arrangements.
 *  Self Billed Credit Note
 * XSD Type: SelfBilledCreditNoteType
 */
class SelfBilledCreditNoteType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Self Billed Credit Note. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Self Billed Credit Note
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Self Billed Credit Note
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Self Billed Credit Note
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Self Billed Credit Note
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Tax Point Date. Date
     *  The date of the Self Billed Credit Note, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentCurrencyCode $paymentCurrencyCode
     */
    private $paymentCurrencyCode = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     */
    private $paymentAlternativeCurrencyCode = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole.
     *  0..1
     *  Self Billed Credit Note
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole, expressed as text.
     *  0..1
     *  Self Billed Credit Note
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Self Billed Credit Note. Line Count. Numeric
     *  The number of Self Billed Credit Note Lines in this document.
     *  0..1
     *  Self Billed Credit Note
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Order Reference
     *  The Order associated with this Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
     */
    private $despatchDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     */
    private $receiptDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatementDocumentReference[] $statementDocumentReference
     */
    private $statementDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference[] $originatorDocumentReference
     */
    private $originatorDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Self Billed Credit Note
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Self Billed Credit Note
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxRepresentativeParty $taxRepresentativeParty
     */
    private $taxRepresentativeParty = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     */
    private $paymentAlternativeExchangeRate = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Self Billed Credit Note, including Allowances, Charges, and Taxes.
     *  1
     *  Self Billed Credit Note
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CreditNoteLine[] $creditNoteLine
     */
    private $creditNoteLine = [
        
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
     *  Self Billed Credit Note. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Self Billed Credit Note
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Self Billed Credit Note. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Self Billed Credit Note
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
     * Gets as taxPointDate
     *
     * BBIE
     *  Self Billed Credit Note. Tax Point Date. Date
     *  The date of the Self Billed Credit Note, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Self Billed Credit Note. Tax Point Date. Date
     *  The date of the Self Billed Credit Note, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(?\DateTime $taxPointDate = null)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Self Billed Credit Note
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
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  1
     *  Self Billed Credit Note
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
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
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
     * Gets as paymentCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentCurrencyCode
     */
    public function getPaymentCurrencyCode()
    {
        return $this->paymentCurrencyCode;
    }

    /**
     * Sets a new paymentCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentCurrencyCode $paymentCurrencyCode
     * @return self
     */
    public function setPaymentCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentCurrencyCode $paymentCurrencyCode = null)
    {
        $this->paymentCurrencyCode = $paymentCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentAlternativeCurrencyCode
     */
    public function getPaymentAlternativeCurrencyCode()
    {
        return $this->paymentAlternativeCurrencyCode;
    }

    /**
     * Sets a new paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Self Billed Credit Note. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     * @return self
     */
    public function setPaymentAlternativeCurrencyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode = null)
    {
        $this->paymentAlternativeCurrencyCode = $paymentAlternativeCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Self Billed Credit Note. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole, expressed as text.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Self Billed Credit Note as a whole, expressed as text.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Line Count. Numeric
     *  The number of Self Billed Credit Note Lines in this document.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Line Count. Numeric
     *  The number of Self Billed Credit Note Lines in this document.
     *  0..1
     *  Self Billed Credit Note
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
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Self Billed Credit Note. Invoice_ Period. Period
     *  A period (rather than a specific Invoice) associated with the Self Billed Credit Note.
     *  0..n
     *  Self Billed Credit Note
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(?array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Self Billed Credit Note. Discrepancy_ Response. Response
     *  A reason for the Self Billed Credit Note as a whole.
     *  0..n
     *  Self Billed Credit Note
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(?array $discrepancyResponse = null)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Self Billed Credit Note. Order Reference
     *  The Order associated with this Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Self Billed Credit Note. Order Reference
     *  The Order associated with this Self Billed Credit Note.
     *  0..1
     *  Self Billed Credit Note
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OrderReference $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BillingReference $billingReference
     */
    public function addToBillingReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Self Billed Credit Note. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(?array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as despatchDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DespatchDocumentReference $despatchDocumentReference
     */
    public function addToDespatchDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference[] = $despatchDocumentReference;
        return $this;
    }

    /**
     * isset despatchDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DespatchDocumentReference[]
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DespatchDocumentReference[] $despatchDocumentReference
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
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiptDocumentReference $receiptDocumentReference
     */
    public function addToReceiptDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiptDocumentReference $receiptDocumentReference)
    {
        $this->receiptDocumentReference[] = $receiptDocumentReference;
        return $this;
    }

    /**
     * isset receiptDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiptDocumentReference[]
     */
    public function getReceiptDocumentReference()
    {
        return $this->receiptDocumentReference;
    }

    /**
     * Sets a new receiptDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiptDocumentReference[] $receiptDocumentReference
     * @return self
     */
    public function setReceiptDocumentReference(?array $receiptDocumentReference = null)
    {
        $this->receiptDocumentReference = $receiptDocumentReference;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(?array $contractDocumentReference = null)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as statementDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatementDocumentReference $statementDocumentReference
     */
    public function addToStatementDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatementDocumentReference $statementDocumentReference)
    {
        $this->statementDocumentReference[] = $statementDocumentReference;
        return $this;
    }

    /**
     * isset statementDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatementDocumentReference($index)
    {
        return isset($this->statementDocumentReference[$index]);
    }

    /**
     * unset statementDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatementDocumentReference($index)
    {
        unset($this->statementDocumentReference[$index]);
    }

    /**
     * Gets as statementDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatementDocumentReference[]
     */
    public function getStatementDocumentReference()
    {
        return $this->statementDocumentReference;
    }

    /**
     * Sets a new statementDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatementDocumentReference[] $statementDocumentReference
     * @return self
     */
    public function setStatementDocumentReference(?array $statementDocumentReference = null)
    {
        $this->statementDocumentReference = $statementDocumentReference;
        return $this;
    }

    /**
     * Adds as originatorDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference
     */
    public function addToOriginatorDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference $originatorDocumentReference)
    {
        $this->originatorDocumentReference[] = $originatorDocumentReference;
        return $this;
    }

    /**
     * isset originatorDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginatorDocumentReference($index)
    {
        return isset($this->originatorDocumentReference[$index]);
    }

    /**
     * unset originatorDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginatorDocumentReference($index)
    {
        unset($this->originatorDocumentReference[$index]);
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference[]
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Self Billed Credit Note
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\OriginatorDocumentReference[] $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(?array $originatorDocumentReference = null)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Signature
     *  A signature applied to this document.
     *  0..n
     *  Self Billed Credit Note
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
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Self Billed Credit Note. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Self Billed Credit Note
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Self Billed Credit Note. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Self Billed Credit Note
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Self Billed Credit Note. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Self Billed Credit Note
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Self Billed Credit Note. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Self Billed Credit Note
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Self Billed Credit Note. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Self Billed Credit Note
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PayeeParty $payeeParty = null)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Self Billed Credit Note. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Self Billed Credit Note
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Self Billed Credit Note. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Self Billed Credit Note
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as taxRepresentativeParty
     *
     * ASBIE
     *  Self Billed Credit Note. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxRepresentativeParty
     */
    public function getTaxRepresentativeParty()
    {
        return $this->taxRepresentativeParty;
    }

    /**
     * Sets a new taxRepresentativeParty
     *
     * ASBIE
     *  Self Billed Credit Note. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Self Billed Credit Note
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxRepresentativeParty $taxRepresentativeParty
     * @return self
     */
    public function setTaxRepresentativeParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxRepresentativeParty $taxRepresentativeParty = null)
    {
        $this->taxRepresentativeParty = $taxRepresentativeParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Self Billed Credit Note
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Self Billed Credit Note
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
     * Gets as paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Self Billed Credit Note. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentAlternativeExchangeRate
     */
    public function getPaymentAlternativeExchangeRate()
    {
        return $this->paymentAlternativeExchangeRate;
    }

    /**
     * Sets a new paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Self Billed Credit Note. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Self Billed Credit Note
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     * @return self
     */
    public function setPaymentAlternativeExchangeRate(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate = null)
    {
        $this->paymentAlternativeExchangeRate = $paymentAlternativeExchangeRate;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     *  Self Billed Credit Note. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Self Billed Credit Note
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
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Self Billed Credit Note. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Self Billed Credit Note, including Allowances, Charges, and Taxes.
     *  1
     *  Self Billed Credit Note
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Self Billed Credit Note. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Self Billed Credit Note, including Allowances, Charges, and Taxes.
     *  1
     *  Self Billed Credit Note
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as creditNoteLine
     *
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CreditNoteLine $creditNoteLine
     */
    public function addToCreditNoteLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CreditNoteLine $creditNoteLine)
    {
        $this->creditNoteLine[] = $creditNoteLine;
        return $this;
    }

    /**
     * isset creditNoteLine
     *
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreditNoteLine($index)
    {
        return isset($this->creditNoteLine[$index]);
    }

    /**
     * unset creditNoteLine
     *
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreditNoteLine($index)
    {
        unset($this->creditNoteLine[$index]);
    }

    /**
     * Gets as creditNoteLine
     *
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CreditNoteLine[]
     */
    public function getCreditNoteLine()
    {
        return $this->creditNoteLine;
    }

    /**
     * Sets a new creditNoteLine
     *
     * ASBIE
     *  Self Billed Credit Note. Credit Note Line
     *  A Self Billed Credit Note Line.
     *  1..n
     *  Self Billed Credit Note
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CreditNoteLine[] $creditNoteLine
     * @return self
     */
    public function setCreditNoteLine(array $creditNoteLine)
    {
        $this->creditNoteLine = $creditNoteLine;
        return $this;
    }
}

