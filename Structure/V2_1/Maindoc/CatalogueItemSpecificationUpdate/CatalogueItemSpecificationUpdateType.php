<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\CatalogueItemSpecificationUpdate;

/**
 * Class representing CatalogueItemSpecificationUpdateType
 *
 * ABIE
 *  Catalogue Item Specification Update. Details
 *  A document used to update information (e.g., technical descriptions and properties) about Items in an existing Catalogue.
 *  Catalogue Item Specification Update
 * XSD Type: CatalogueItemSpecificationUpdateType
 */
class CatalogueItemSpecificationUpdateType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Item Specification Update
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Item Specification Update
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Item Specification Update
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  electrical goods - new energy ratings.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Item Specification Update
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Item Specification Update
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date, assigned by the seller, on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time, assigned by the seller, at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Item Specification Update. Version. Identifier
     *  Identifies the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of Catalogue Item Specification Update Lines in this document.
     *  0..1
     *  Catalogue Item Specification Update
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  A reference to the Catalogue being updated.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RelatedCatalogueReference $relatedCatalogueReference
     */
    private $relatedCatalogueReference = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReferencedContract[] $referencedContract
     */
    private $referencedContract = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  The party sending the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProviderParty $providerParty
     */
    private $providerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  The party receiving the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Item Specification Update
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Trading Terms
     *  The trading terms associated with the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TradingTerms $tradingTerms
     */
    private $tradingTerms = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DefaultLanguage $defaultLanguage
     */
    private $defaultLanguage = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueItemSpecificationUpdateLine[] $catalogueItemSpecificationUpdateLine
     */
    private $catalogueItemSpecificationUpdateLine = [
        
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
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the subset of UBL being used.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue Item Specification Update
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
     * Gets as uUID
     *
     * BBIE
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as name
     *
     * BBIE
     *  Catalogue Item Specification Update. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  electrical goods - new energy ratings.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Catalogue Item Specification Update. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue Item Specification Update
     *  Name
     *  Name
     *  Name. Type
     *  electrical goods - new energy ratings.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as revisionDate
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date, assigned by the seller, on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Sets a new revisionDate
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Date. Date
     *  The date, assigned by the seller, on which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $revisionDate
     * @return self
     */
    public function setRevisionDate(?\DateTime $revisionDate = null)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Gets as revisionTime
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time, assigned by the seller, at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRevisionTime()
    {
        return $this->revisionTime;
    }

    /**
     * Sets a new revisionTime
     *
     * BBIE
     *  Catalogue Item Specification Update. Revision Time. Time
     *  The time, assigned by the seller, at which the Catalogue was revised.
     *  0..1
     *  Catalogue Item Specification Update
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $revisionTime
     * @return self
     */
    public function setRevisionTime(?\DateTime $revisionTime = null)
    {
        $this->revisionTime = $revisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Adds as description
     *
     * BBIE
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
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
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
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
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Catalogue Item Specification Update. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue Item Specification Update
     *  Description
     *  Text
     *  Text. Type
     *  ratings based on new environmental standards for EU
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Catalogue Item Specification Update. Version. Identifier
     *  Identifies the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Catalogue Item Specification Update. Version. Identifier
     *  Identifies the current version of the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of Catalogue Item Specification Update Lines in this document.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Line Count. Numeric
     *  The number of Catalogue Item Specification Update Lines in this document.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue Revision is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Gets as relatedCatalogueReference
     *
     * ASBIE
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  A reference to the Catalogue being updated.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RelatedCatalogueReference
     */
    public function getRelatedCatalogueReference()
    {
        return $this->relatedCatalogueReference;
    }

    /**
     * Sets a new relatedCatalogueReference
     *
     * ASBIE
     *  Catalogue Item Specification Update. Related_ Catalogue Reference. Catalogue Reference
     *  A reference to the Catalogue being updated.
     *  1
     *  Catalogue Item Specification Update
     *  Related
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RelatedCatalogueReference $relatedCatalogueReference
     * @return self
     */
    public function setRelatedCatalogueReference(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\RelatedCatalogueReference $relatedCatalogueReference)
    {
        $this->relatedCatalogueReference = $relatedCatalogueReference;
        return $this;
    }

    /**
     * Adds as referencedContract
     *
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReferencedContract $referencedContract
     */
    public function addToReferencedContract(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReferencedContract $referencedContract)
    {
        $this->referencedContract[] = $referencedContract;
        return $this;
    }

    /**
     * isset referencedContract
     *
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReferencedContract[]
     */
    public function getReferencedContract()
    {
        return $this->referencedContract;
    }

    /**
     * Sets a new referencedContract
     *
     * ASBIE
     *  Catalogue Item Specification Update. Referenced_ Contract. Contract
     *  A contract or framework agreement with which the Catalogue is associated.
     *  0..n
     *  Catalogue Item Specification Update
     *  Referenced
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReferencedContract[] $referencedContract
     * @return self
     */
    public function setReferencedContract(?array $referencedContract = null)
    {
        $this->referencedContract = $referencedContract;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue Item Specification Update
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
     * Gets as providerParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  The party sending the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProviderParty
     */
    public function getProviderParty()
    {
        return $this->providerParty;
    }

    /**
     * Sets a new providerParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Provider_ Party. Party
     *  The party sending the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
     *  Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProviderParty $providerParty
     * @return self
     */
    public function setProviderParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ProviderParty $providerParty)
    {
        $this->providerParty = $providerParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  The party receiving the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Receiver_ Party. Party
     *  The party receiving the Catalogue Item Specification Update.
     *  1
     *  Catalogue Item Specification Update
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Item Specification Update
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
     *  Catalogue Item Specification Update. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue Item Specification Update
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
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Item Specification Update
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Item Specification Update. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue Item Specification Update
     *  Contractor
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ContractorCustomerParty $contractorCustomerParty = null)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as tradingTerms
     *
     * ASBIE
     *  Catalogue Item Specification Update. Trading Terms
     *  The trading terms associated with the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TradingTerms
     */
    public function getTradingTerms()
    {
        return $this->tradingTerms;
    }

    /**
     * Sets a new tradingTerms
     *
     * ASBIE
     *  Catalogue Item Specification Update. Trading Terms
     *  The trading terms associated with the Catalogue.
     *  0..1
     *  Catalogue Item Specification Update
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TradingTerms $tradingTerms
     * @return self
     */
    public function setTradingTerms(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TradingTerms $tradingTerms = null)
    {
        $this->tradingTerms = $tradingTerms;
        return $this;
    }

    /**
     * Gets as defaultLanguage
     *
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DefaultLanguage
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets a new defaultLanguage
     *
     * ASBIE
     *  Catalogue Item Specification Update. Default_ Language. Language
     *  The default language for the item specifications.
     *  0..1
     *  Catalogue Item Specification Update
     *  Default
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DefaultLanguage $defaultLanguage
     * @return self
     */
    public function setDefaultLanguage(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DefaultLanguage $defaultLanguage = null)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * Adds as catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueItemSpecificationUpdateLine $catalogueItemSpecificationUpdateLine
     */
    public function addToCatalogueItemSpecificationUpdateLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueItemSpecificationUpdateLine $catalogueItemSpecificationUpdateLine)
    {
        $this->catalogueItemSpecificationUpdateLine[] = $catalogueItemSpecificationUpdateLine;
        return $this;
    }

    /**
     * isset catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueItemSpecificationUpdateLine($index)
    {
        return isset($this->catalogueItemSpecificationUpdateLine[$index]);
    }

    /**
     * unset catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueItemSpecificationUpdateLine($index)
    {
        unset($this->catalogueItemSpecificationUpdateLine[$index]);
    }

    /**
     * Gets as catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueItemSpecificationUpdateLine[]
     */
    public function getCatalogueItemSpecificationUpdateLine()
    {
        return $this->catalogueItemSpecificationUpdateLine;
    }

    /**
     * Sets a new catalogueItemSpecificationUpdateLine
     *
     * ASBIE
     *  Catalogue Item Specification Update. Catalogue Item Specification Update Line
     *  One or more lines in the Catalogue Item Specification Update, each line updating a specific catalogue item.
     *  1..n
     *  Catalogue Item Specification Update
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *  Catalogue Item Specification Update Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\CatalogueItemSpecificationUpdateLine[] $catalogueItemSpecificationUpdateLine
     * @return self
     */
    public function setCatalogueItemSpecificationUpdateLine(array $catalogueItemSpecificationUpdateLine)
    {
        $this->catalogueItemSpecificationUpdateLine = $catalogueItemSpecificationUpdateLine;
        return $this;
    }
}

