<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\InventoryReport;

/**
 * Class representing InventoryReportType
 *
 * ABIE
 *  Inventory Report. Details
 *  A report on the quantities of each item that are, or will be, in stock. This document is sent by a Buyer (for example a retailer) to a Seller (for example a producer).
 *  Inventory Report
 *  Storage status report.
 * XSD Type: InventoryReportType
 */
class InventoryReportType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Inventory Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Identifier
     *  An identifier for the Inventory Report, assigned by the Issuer.
     *  1
     *  Inventory Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Document Number, Inventory Report Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Inventory Report. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Inventory Report
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Inventory Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Inventory Report
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Inventory Report. Issue Time. Time
     *  The time at which the Inventory Report was issued.
     *  0..1
     *  Inventory Report
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Document_ Currency Code. Code
     *  A code signifying the currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Inventory Report
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
     * ASBIE
     *  Inventory Report. Inventory_ Period. Period
     *  The period covered by this report.
     *  0..1
     *  Inventory Report
     *  Inventory
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryPeriod $inventoryPeriod
     */
    private $inventoryPeriod = null;

    /**
     * ASBIE
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Retailer_ Customer Party. Customer Party
     *  The retailer, who sends this message.
     *  1
     *  Inventory Report
     *  Retailer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RetailerCustomerParty $retailerCustomerParty
     */
    private $retailerCustomerParty = null;

    /**
     * ASBIE
     *  Inventory Report. Inventory Reporting_ Party. Party
     *  An association to the Party that will really use the Inventory report (normally the branch for which the stock is reported).
     *  1
     *  Inventory Report
     *  Inventory Reporting
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportingParty $inventoryReportingParty
     */
    private $inventoryReportingParty = null;

    /**
     * ASBIE
     *  Inventory Report. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportLine[] $inventoryReportLine
     */
    private $inventoryReportLine = [
        
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
     *  Inventory Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Identifier
     *  An identifier for the Inventory Report, assigned by the Issuer.
     *  1
     *  Inventory Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Document Number, Inventory Report Number
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
     *  Inventory Report. Identifier
     *  An identifier for the Inventory Report, assigned by the Issuer.
     *  1
     *  Inventory Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Document Number, Inventory Report Number
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
     *  Inventory Report. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Inventory Report
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
     *  Inventory Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Inventory Report
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
     *  Inventory Report. Issue Time. Time
     *  The time at which the Inventory Report was issued.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Issue Time. Time
     *  The time at which the Inventory Report was issued.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Document_ Currency Code. Code
     *  A code signifying the currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Document_ Currency Code. Code
     *  A code signifying the currency in which the Document is presented. This may be the same currency as the pricing or as the tax.
     *  0..1
     *  Inventory Report
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
     * Gets as inventoryPeriod
     *
     * ASBIE
     *  Inventory Report. Inventory_ Period. Period
     *  The period covered by this report.
     *  0..1
     *  Inventory Report
     *  Inventory
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryPeriod
     */
    public function getInventoryPeriod()
    {
        return $this->inventoryPeriod;
    }

    /**
     * Sets a new inventoryPeriod
     *
     * ASBIE
     *  Inventory Report. Inventory_ Period. Period
     *  The period covered by this report.
     *  0..1
     *  Inventory Report
     *  Inventory
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryPeriod $inventoryPeriod
     * @return self
     */
    public function setInventoryPeriod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryPeriod $inventoryPeriod = null)
    {
        $this->inventoryPeriod = $inventoryPeriod;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Inventory Report. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Inventory Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentReference[] $documentReference
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
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     *  Inventory Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Inventory Report
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
     * Gets as retailerCustomerParty
     *
     * ASBIE
     *  Inventory Report. Retailer_ Customer Party. Customer Party
     *  The retailer, who sends this message.
     *  1
     *  Inventory Report
     *  Retailer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RetailerCustomerParty
     */
    public function getRetailerCustomerParty()
    {
        return $this->retailerCustomerParty;
    }

    /**
     * Sets a new retailerCustomerParty
     *
     * ASBIE
     *  Inventory Report. Retailer_ Customer Party. Customer Party
     *  The retailer, who sends this message.
     *  1
     *  Inventory Report
     *  Retailer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RetailerCustomerParty $retailerCustomerParty
     * @return self
     */
    public function setRetailerCustomerParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RetailerCustomerParty $retailerCustomerParty)
    {
        $this->retailerCustomerParty = $retailerCustomerParty;
        return $this;
    }

    /**
     * Gets as inventoryReportingParty
     *
     * ASBIE
     *  Inventory Report. Inventory Reporting_ Party. Party
     *  An association to the Party that will really use the Inventory report (normally the branch for which the stock is reported).
     *  1
     *  Inventory Report
     *  Inventory Reporting
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportingParty
     */
    public function getInventoryReportingParty()
    {
        return $this->inventoryReportingParty;
    }

    /**
     * Sets a new inventoryReportingParty
     *
     * ASBIE
     *  Inventory Report. Inventory Reporting_ Party. Party
     *  An association to the Party that will really use the Inventory report (normally the branch for which the stock is reported).
     *  1
     *  Inventory Report
     *  Inventory Reporting
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportingParty $inventoryReportingParty
     * @return self
     */
    public function setInventoryReportingParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportingParty $inventoryReportingParty)
    {
        $this->inventoryReportingParty = $inventoryReportingParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Inventory Report. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Inventory Report
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
     *  Inventory Report. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Inventory Report
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
     * Adds as inventoryReportLine
     *
     * ASBIE
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportLine $inventoryReportLine
     */
    public function addToInventoryReportLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportLine $inventoryReportLine)
    {
        $this->inventoryReportLine[] = $inventoryReportLine;
        return $this;
    }

    /**
     * isset inventoryReportLine
     *
     * ASBIE
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryReportLine($index)
    {
        return isset($this->inventoryReportLine[$index]);
    }

    /**
     * unset inventoryReportLine
     *
     * ASBIE
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryReportLine($index)
    {
        unset($this->inventoryReportLine[$index]);
    }

    /**
     * Gets as inventoryReportLine
     *
     * ASBIE
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportLine[]
     */
    public function getInventoryReportLine()
    {
        return $this->inventoryReportLine;
    }

    /**
     * Sets a new inventoryReportLine
     *
     * ASBIE
     *  Inventory Report. Inventory Report Line
     *  A line representing a particular item of sale and associated with a line in the Catalogue.
     *  1..n
     *  Inventory Report
     *  Inventory Report Line
     *  Inventory Report Line
     *  Inventory Report Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\InventoryReportLine[] $inventoryReportLine
     * @return self
     */
    public function setInventoryReportLine(array $inventoryReportLine)
    {
        $this->inventoryReportLine = $inventoryReportLine;
        return $this;
    }
}

