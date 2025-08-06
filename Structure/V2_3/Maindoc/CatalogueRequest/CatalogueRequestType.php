<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\CatalogueRequest;

/**
 * Class representing CatalogueRequestType
 *
 * ABIE
 *  Catalogue Request. Details
 *  A document used to request a Catalogue.
 *  Catalogue Request
 * XSD Type: CatalogueRequestType
 */
class CatalogueRequestType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Request
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Catalogue Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Request
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Request
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Request. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Catalogue Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Request
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Request
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  Indicates a request for a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @var bool $pricingUpdateRequestIndicator
     */
    private $pricingUpdateRequestIndicator = null;

    /**
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  Indicates a request for an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @var bool $itemUpdateRequestIndicator
     */
    private $itemUpdateRequestIndicator = null;

    /**
     * BBIE
     *  Catalogue Request. Line Count. Numeric
     *  The number of Catalogue Lines in this document.
     *  0..1
     *  Catalogue Request
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Receiver_ Party. Party
     *  The party receiving the Catalogue Request.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Provider_ Party. Party
     *  The party sending the Catalogue Request.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  A reference to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedCatalogueReference $requestedCatalogueReference
     */
    private $requestedCatalogueReference = null;

    /**
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedContract[] $referencedContract
     */
    private $referencedContract = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  The trading terms associated with the requested Catalogue.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms $tradingTerms
     */
    private $tradingTerms = null;

    /**
     * ASBIE
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedLanguage $requestedLanguage
     */
    private $requestedLanguage = null;

    /**
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedClassificationScheme[] $requestedClassificationScheme
     */
    private $requestedClassificationScheme = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueRequestLine[] $catalogueRequestLine
     */
    private $catalogueRequestLine = [
        
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
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Request
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Catalogue Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Request
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Catalogue Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Request
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
     * Gets as uUID
     *
     * BBIE
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Request
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
     * Gets as name
     *
     * BBIE
     *  Catalogue Request. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Catalogue Request. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Request
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Catalogue Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request
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
     * Adds as description
     *
     * BBIE
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
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
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
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
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
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
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
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
     *  Catalogue Request. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Request
     *  Description
     *  Text
     *  Text. Type
     *  latest computer accessories for laptops
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
     * Gets as pricingUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  Indicates a request for a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @return bool
     */
    public function getPricingUpdateRequestIndicator()
    {
        return $this->pricingUpdateRequestIndicator;
    }

    /**
     * Sets a new pricingUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Pricing Update Request_ Indicator. Indicator
     *  Indicates a request for a pricing update.
     *  0..1
     *  Catalogue Request
     *  Pricing Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @param bool $pricingUpdateRequestIndicator
     * @return self
     */
    public function setPricingUpdateRequestIndicator($pricingUpdateRequestIndicator)
    {
        $this->pricingUpdateRequestIndicator = $pricingUpdateRequestIndicator;
        return $this;
    }

    /**
     * Gets as itemUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  Indicates a request for an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @return bool
     */
    public function getItemUpdateRequestIndicator()
    {
        return $this->itemUpdateRequestIndicator;
    }

    /**
     * Sets a new itemUpdateRequestIndicator
     *
     * BBIE
     *  Catalogue Request. Item Update Request_ Indicator. Indicator
     *  Indicates a request for an update of the item specifications.
     *  0..1
     *  Catalogue Request
     *  Item Update Request
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is true
     *
     * @param bool $itemUpdateRequestIndicator
     * @return self
     */
    public function setItemUpdateRequestIndicator($itemUpdateRequestIndicator)
    {
        $this->itemUpdateRequestIndicator = $itemUpdateRequestIndicator;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Catalogue Request. Line Count. Numeric
     *  The number of Catalogue Lines in this document.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Line Count. Numeric
     *  The number of Catalogue Lines in this document.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Validity_ Period. Period
     *  The period, assigned by the Catalogue Managing party, during which the information in the Catalogue requested is to be effective. This may be given as start and end dates or a duration.
     *  0..n
     *  Catalogue Request
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
     * Adds as signature
     *
     * ASBIE
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Request
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
     * Gets as receiverParty
     *
     * ASBIE
     *  Catalogue Request. Receiver_ Party. Party
     *  The party receiving the Catalogue Request.
     *  1
     *  Catalogue Request
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
     *  Catalogue Request. Receiver_ Party. Party
     *  The party receiving the Catalogue Request.
     *  1
     *  Catalogue Request
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
     * Gets as providerParty
     *
     * ASBIE
     *  Catalogue Request. Provider_ Party. Party
     *  The party sending the Catalogue Request.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProviderParty
     */
    public function getProviderParty()
    {
        return $this->providerParty;
    }

    /**
     * Sets a new providerParty
     *
     * ASBIE
     *  Catalogue Request. Provider_ Party. Party
     *  The party sending the Catalogue Request.
     *  1
     *  Catalogue Request
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProviderParty $providerParty
     * @return self
     */
    public function setProviderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProviderParty $providerParty)
    {
        $this->providerParty = $providerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Request
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
     *  Catalogue Request. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Request
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
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Request. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Request
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty = null)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as requestedCatalogueReference
     *
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  A reference to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedCatalogueReference
     */
    public function getRequestedCatalogueReference()
    {
        return $this->requestedCatalogueReference;
    }

    /**
     * Sets a new requestedCatalogueReference
     *
     * ASBIE
     *  Catalogue Request. Requested_ Catalogue Reference. Catalogue Reference
     *  A reference to a specific Catalogue; used if the Catalogue Request is for an update.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedCatalogueReference $requestedCatalogueReference
     * @return self
     */
    public function setRequestedCatalogueReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedCatalogueReference $requestedCatalogueReference = null)
    {
        $this->requestedCatalogueReference = $requestedCatalogueReference;
        return $this;
    }

    /**
     * Adds as referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedContract $referencedContract
     */
    public function addToReferencedContract(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedContract $referencedContract)
    {
        $this->referencedContract[] = $referencedContract;
        return $this;
    }

    /**
     * isset referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedContract($index)
    {
        return isset($this->referencedContract[$index]);
    }

    /**
     * unset referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedContract($index)
    {
        unset($this->referencedContract[$index]);
    }

    /**
     * Gets as referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedContract[]
     */
    public function getReferencedContract()
    {
        return $this->referencedContract;
    }

    /**
     * Sets a new referencedContract
     *
     * ASBIE
     *  Catalogue Request. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue being requested is associated.
     *  0..n
     *  Catalogue Request
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedContract[] $referencedContract
     * @return self
     */
    public function setReferencedContract(?array $referencedContract = null)
    {
        $this->referencedContract = $referencedContract;
        return $this;
    }

    /**
     * Gets as tradingTerms
     *
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  The trading terms associated with the requested Catalogue.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms
     */
    public function getTradingTerms()
    {
        return $this->tradingTerms;
    }

    /**
     * Sets a new tradingTerms
     *
     * ASBIE
     *  Catalogue Request. Trading Terms
     *  The trading terms associated with the requested Catalogue.
     *  0..1
     *  Catalogue Request
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms $tradingTerms
     * @return self
     */
    public function setTradingTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms $tradingTerms = null)
    {
        $this->tradingTerms = $tradingTerms;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     *  Catalogue Request. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue Request
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
     * Adds as applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    public function addToApplicableTerritoryAddress(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress)
    {
        $this->applicableTerritoryAddress[] = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * isset applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableTerritoryAddress($index)
    {
        return isset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * unset applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableTerritoryAddress($index)
    {
        unset($this->applicableTerritoryAddress[$index]);
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress[]
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Catalogue Request. Applicable Territory_ Address. Address
     *  A reference to a territory (region, country, city, etc.) to which the requested Catalogue will apply, expressed as an Address.
     *  0..n
     *  Catalogue Request
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress[] $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(?array $applicableTerritoryAddress = null)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as requestedLanguage
     *
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedLanguage
     */
    public function getRequestedLanguage()
    {
        return $this->requestedLanguage;
    }

    /**
     * Sets a new requestedLanguage
     *
     * ASBIE
     *  Catalogue Request. Requested_ Language. Language
     *  The language in which the Catalogue is requested to be provided.
     *  0..1
     *  Catalogue Request
     *  Requested
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedLanguage $requestedLanguage
     * @return self
     */
    public function setRequestedLanguage(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedLanguage $requestedLanguage = null)
    {
        $this->requestedLanguage = $requestedLanguage;
        return $this;
    }

    /**
     * Adds as requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedClassificationScheme $requestedClassificationScheme
     */
    public function addToRequestedClassificationScheme(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedClassificationScheme $requestedClassificationScheme)
    {
        $this->requestedClassificationScheme[] = $requestedClassificationScheme;
        return $this;
    }

    /**
     * isset requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedClassificationScheme($index)
    {
        return isset($this->requestedClassificationScheme[$index]);
    }

    /**
     * unset requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedClassificationScheme($index)
    {
        unset($this->requestedClassificationScheme[$index]);
    }

    /**
     * Gets as requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedClassificationScheme[]
     */
    public function getRequestedClassificationScheme()
    {
        return $this->requestedClassificationScheme;
    }

    /**
     * Sets a new requestedClassificationScheme
     *
     * ASBIE
     *  Catalogue Request. Requested_ Classification Scheme. Classification Scheme
     *  A requested classification scheme for the requested Catalogue.
     *  0..n
     *  Catalogue Request
     *  Requested
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedClassificationScheme[] $requestedClassificationScheme
     * @return self
     */
    public function setRequestedClassificationScheme(?array $requestedClassificationScheme = null)
    {
        $this->requestedClassificationScheme = $requestedClassificationScheme;
        return $this;
    }

    /**
     * Adds as catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueRequestLine $catalogueRequestLine
     */
    public function addToCatalogueRequestLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueRequestLine $catalogueRequestLine)
    {
        $this->catalogueRequestLine[] = $catalogueRequestLine;
        return $this;
    }

    /**
     * isset catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueRequestLine($index)
    {
        return isset($this->catalogueRequestLine[$index]);
    }

    /**
     * unset catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueRequestLine($index)
    {
        unset($this->catalogueRequestLine[$index]);
    }

    /**
     * Gets as catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueRequestLine[]
     */
    public function getCatalogueRequestLine()
    {
        return $this->catalogueRequestLine;
    }

    /**
     * Sets a new catalogueRequestLine
     *
     * ASBIE
     *  Catalogue Request. Catalogue Request Line
     *  An association to specific Catalogue Lines for the catalogue requested.
     *  0..n
     *  Catalogue Request
     *  Catalogue Request Line
     *  Catalogue Request Line
     *  Catalogue Request Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueRequestLine[] $catalogueRequestLine
     * @return self
     */
    public function setCatalogueRequestLine(?array $catalogueRequestLine = null)
    {
        $this->catalogueRequestLine = $catalogueRequestLine;
        return $this;
    }
}

