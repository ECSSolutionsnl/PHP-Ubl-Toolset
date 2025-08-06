<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\RemittanceAdvice;

/**
 * Class representing RemittanceAdviceType
 *
 * ABIE
 *  Remittance Advice. Details
 *  A document that specifies details of an actual payment.
 *  Remittance Advice
 * XSD Type: RemittanceAdviceType
 */
class RemittanceAdviceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Remittance Advice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Remittance Advice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Remittance Advice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Remittance Advice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Remittance Advice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Remittance Advice
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Remittance Advice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Remittance Advice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Total_ Debit Amount. Amount
     *  The totals of all debit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDebitAmount $totalDebitAmount
     */
    private $totalDebitAmount = null;

    /**
     * BBIE
     *  Remittance Advice. Total_ Credit Amount. Amount
     *  The totals of all credit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalCreditAmount $totalCreditAmount
     */
    private $totalCreditAmount = null;

    /**
     * BBIE
     *  Remittance Advice. Total_ Payment Amount. Amount
     *  The total payable amount for the Remittance Advice (must be positive).
     *  0..1
     *  Remittance Advice
     *  Total
     *  Payment Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPaymentAmount $totalPaymentAmount
     */
    private $totalPaymentAmount = null;

    /**
     * BBIE
     *  Remittance Advice. Payment Order Reference. Text
     *  An internal reference to the order for payment from the payer to the payer's bank.
     *  0..1
     *  Remittance Advice
     *  Payment Order Reference
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentOrderReference $paymentOrderReference
     */
    private $paymentOrderReference = null;

    /**
     * BBIE
     *  Remittance Advice. Payer_ Reference. Text
     *  An internal reference to the payer's order for payment.
     *  0..1
     *  Remittance Advice
     *  Payer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayerReference $payerReference
     */
    private $payerReference = null;

    /**
     * BBIE
     *  Remittance Advice. Invoicing Party_ Reference. Text
     *  An internal reference to the order for payment by the invoicing party. This may have been requested of the payer by the payee to accompany the payer's remittance.
     *  0..1
     *  Remittance Advice
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InvoicingPartyReference $invoicingPartyReference
     */
    private $invoicingPartyReference = null;

    /**
     * BBIE
     *  Remittance Advice. Line Count. Numeric
     *  The number of Remittance Advice Lines in the document.
     *  0..1
     *  Remittance Advice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Remittance Advice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..1
     *  Remittance Advice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BillingReference $billingReference
     */
    private $billingReference = null;

    /**
     * ASBIE
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Remittance Advice. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Remittance Advice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemittanceAdviceLine[] $remittanceAdviceLine
     */
    private $remittanceAdviceLine = [
        
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
     *  Remittance Advice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Remittance Advice
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
     * Gets as totalDebitAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Debit Amount. Amount
     *  The totals of all debit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDebitAmount
     */
    public function getTotalDebitAmount()
    {
        return $this->totalDebitAmount;
    }

    /**
     * Sets a new totalDebitAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Debit Amount. Amount
     *  The totals of all debit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Debit Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDebitAmount $totalDebitAmount
     * @return self
     */
    public function setTotalDebitAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDebitAmount $totalDebitAmount = null)
    {
        $this->totalDebitAmount = $totalDebitAmount;
        return $this;
    }

    /**
     * Gets as totalCreditAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Credit Amount. Amount
     *  The totals of all credit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalCreditAmount
     */
    public function getTotalCreditAmount()
    {
        return $this->totalCreditAmount;
    }

    /**
     * Sets a new totalCreditAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Credit Amount. Amount
     *  The totals of all credit amounts for the Remittance Advice.
     *  0..1
     *  Remittance Advice
     *  Total
     *  Credit Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalCreditAmount $totalCreditAmount
     * @return self
     */
    public function setTotalCreditAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalCreditAmount $totalCreditAmount = null)
    {
        $this->totalCreditAmount = $totalCreditAmount;
        return $this;
    }

    /**
     * Gets as totalPaymentAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Payment Amount. Amount
     *  The total payable amount for the Remittance Advice (must be positive).
     *  0..1
     *  Remittance Advice
     *  Total
     *  Payment Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPaymentAmount
     */
    public function getTotalPaymentAmount()
    {
        return $this->totalPaymentAmount;
    }

    /**
     * Sets a new totalPaymentAmount
     *
     * BBIE
     *  Remittance Advice. Total_ Payment Amount. Amount
     *  The total payable amount for the Remittance Advice (must be positive).
     *  0..1
     *  Remittance Advice
     *  Total
     *  Payment Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPaymentAmount $totalPaymentAmount
     * @return self
     */
    public function setTotalPaymentAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalPaymentAmount $totalPaymentAmount = null)
    {
        $this->totalPaymentAmount = $totalPaymentAmount;
        return $this;
    }

    /**
     * Gets as paymentOrderReference
     *
     * BBIE
     *  Remittance Advice. Payment Order Reference. Text
     *  An internal reference to the order for payment from the payer to the payer's bank.
     *  0..1
     *  Remittance Advice
     *  Payment Order Reference
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentOrderReference
     */
    public function getPaymentOrderReference()
    {
        return $this->paymentOrderReference;
    }

    /**
     * Sets a new paymentOrderReference
     *
     * BBIE
     *  Remittance Advice. Payment Order Reference. Text
     *  An internal reference to the order for payment from the payer to the payer's bank.
     *  0..1
     *  Remittance Advice
     *  Payment Order Reference
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentOrderReference $paymentOrderReference
     * @return self
     */
    public function setPaymentOrderReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaymentOrderReference $paymentOrderReference = null)
    {
        $this->paymentOrderReference = $paymentOrderReference;
        return $this;
    }

    /**
     * Gets as payerReference
     *
     * BBIE
     *  Remittance Advice. Payer_ Reference. Text
     *  An internal reference to the payer's order for payment.
     *  0..1
     *  Remittance Advice
     *  Payer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayerReference
     */
    public function getPayerReference()
    {
        return $this->payerReference;
    }

    /**
     * Sets a new payerReference
     *
     * BBIE
     *  Remittance Advice. Payer_ Reference. Text
     *  An internal reference to the payer's order for payment.
     *  0..1
     *  Remittance Advice
     *  Payer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayerReference $payerReference
     * @return self
     */
    public function setPayerReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayerReference $payerReference = null)
    {
        $this->payerReference = $payerReference;
        return $this;
    }

    /**
     * Gets as invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice. Invoicing Party_ Reference. Text
     *  An internal reference to the order for payment by the invoicing party. This may have been requested of the payer by the payee to accompany the payer's remittance.
     *  0..1
     *  Remittance Advice
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InvoicingPartyReference
     */
    public function getInvoicingPartyReference()
    {
        return $this->invoicingPartyReference;
    }

    /**
     * Sets a new invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice. Invoicing Party_ Reference. Text
     *  An internal reference to the order for payment by the invoicing party. This may have been requested of the payer by the payee to accompany the payer's remittance.
     *  0..1
     *  Remittance Advice
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InvoicingPartyReference $invoicingPartyReference
     * @return self
     */
    public function setInvoicingPartyReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InvoicingPartyReference $invoicingPartyReference = null)
    {
        $this->invoicingPartyReference = $invoicingPartyReference;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Remittance Advice. Line Count. Numeric
     *  The number of Remittance Advice Lines in the document.
     *  0..1
     *  Remittance Advice
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
     *  Remittance Advice. Line Count. Numeric
     *  The number of Remittance Advice Lines in the document.
     *  0..1
     *  Remittance Advice
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
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Remittance Advice. Invoice_ Period. Period
     *  A period (rather than a specific invoice) associated with this document.
     *  0..n
     *  Remittance Advice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(?array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Remittance Advice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..1
     *  Remittance Advice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BillingReference
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Remittance Advice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..1
     *  Remittance Advice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BillingReference $billingReference
     * @return self
     */
    public function setBillingReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BillingReference $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Remittance Advice
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
     * Adds as signature
     *
     * ASBIE
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Remittance Advice
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
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Remittance Advice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Remittance Advice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Remittance Advice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Remittance Advice
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
     *  Remittance Advice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Remittance Advice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Remittance Advice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Remittance Advice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PayeeParty $payeeParty = null)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Remittance Advice. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Remittance Advice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Remittance Advice. Payment Means
     *  Expected means of payment.
     *  0..1
     *  Remittance Advice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans $paymentMeans
     * @return self
     */
    public function setPaymentMeans(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentMeans $paymentMeans = null)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     *  Remittance Advice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Remittance Advice
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
     * Adds as remittanceAdviceLine
     *
     * ASBIE
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemittanceAdviceLine $remittanceAdviceLine
     */
    public function addToRemittanceAdviceLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemittanceAdviceLine $remittanceAdviceLine)
    {
        $this->remittanceAdviceLine[] = $remittanceAdviceLine;
        return $this;
    }

    /**
     * isset remittanceAdviceLine
     *
     * ASBIE
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemittanceAdviceLine($index)
    {
        return isset($this->remittanceAdviceLine[$index]);
    }

    /**
     * unset remittanceAdviceLine
     *
     * ASBIE
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemittanceAdviceLine($index)
    {
        unset($this->remittanceAdviceLine[$index]);
    }

    /**
     * Gets as remittanceAdviceLine
     *
     * ASBIE
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemittanceAdviceLine[]
     */
    public function getRemittanceAdviceLine()
    {
        return $this->remittanceAdviceLine;
    }

    /**
     * Sets a new remittanceAdviceLine
     *
     * ASBIE
     *  Remittance Advice. Remittance Advice Line
     *  A line specifying a balance.
     *  1..n
     *  Remittance Advice
     *  Remittance Advice Line
     *  Remittance Advice Line
     *  Remittance Advice Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RemittanceAdviceLine[] $remittanceAdviceLine
     * @return self
     */
    public function setRemittanceAdviceLine(array $remittanceAdviceLine)
    {
        $this->remittanceAdviceLine = $remittanceAdviceLine;
        return $this;
    }
}

