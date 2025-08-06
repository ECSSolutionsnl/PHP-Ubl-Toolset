<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\Catalogue;

/**
 * Class representing CatalogueType
 *
 * ABIE
 *  Catalogue. Details
 *  A document that describes items, prices, and price validity.
 *  Catalogue
 * XSD Type: CatalogueType
 */
class CatalogueType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Catalogue. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue. Action Code. Code
     *  A code signifying whether the transaction is a replacement or an update.
     *  0..1
     *  Catalogue
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update .
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Catalogue. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue. Revision Date. Date
     *  The date, assigned by the seller party, on which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * BBIE
     *  Catalogue. Revision Time. Time
     *  The time, assigned by the Seller party, at which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * BBIE
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue. Version. Identifier
     *  An identifier for the current version of the Catalogue.
     *  0..1
     *  Catalogue
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Catalogue. Previous_ Version. Identifier
     *  An identifier for the previous version of the Catalogue that is superseded by this version.
     *  0..1
     *  Catalogue
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * BBIE
     *  Catalogue. Line Count. Numeric
     *  The number of Catalogue Lines in the document.
     *  0..1
     *  Catalogue
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * ASBIE
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Source_ Catalogue Reference. Catalogue Reference
     *  A reference to the source catalogue.
     *  0..1
     *  Catalogue
     *  Source
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SourceCatalogueReference $sourceCatalogueReference
     */
    private $sourceCatalogueReference = null;

    /**
     * ASBIE
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Provider_ Party. Party
     *  The party providing the Catalogue.
     *  1
     *  Catalogue
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
     *  Catalogue. Receiver_ Party. Party
     *  The party receiving the Catalogue.
     *  1
     *  Catalogue
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
     *  Catalogue. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms[] $tradingTerms
     */
    private $tradingTerms = [
        
    ];

    /**
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueLine[] $catalogueLine
     */
    private $catalogueLine = [
        
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
     *  Catalogue. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue
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
     *  Catalogue. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue
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
     *  Catalogue. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Catalogue
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
     *  Catalogue. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue
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
     *  Catalogue. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Catalogue
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
     * Gets as actionCode
     *
     * BBIE
     *  Catalogue. Action Code. Code
     *  A code signifying whether the transaction is a replacement or an update.
     *  0..1
     *  Catalogue
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update .
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Catalogue. Action Code. Code
     *  A code signifying whether the transaction is a replacement or an update.
     *  0..1
     *  Catalogue
     *  Action Code
     *  Code
     *  Code. Type
     *  Replace , Update .
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActionCode $actionCode = null)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Catalogue. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue
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
     *  Catalogue. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Catalogue
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
     *  Catalogue. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Revision Date. Date
     *  The date, assigned by the seller party, on which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Revision Date. Date
     *  The date, assigned by the seller party, on which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Revision Time. Time
     *  The time, assigned by the Seller party, at which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Revision Time. Time
     *  The time, assigned by the Seller party, at which the information in the Catalogue was last revised.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  Catalogue. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Catalogue
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     * Gets as versionID
     *
     * BBIE
     *  Catalogue. Version. Identifier
     *  An identifier for the current version of the Catalogue.
     *  0..1
     *  Catalogue
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Catalogue. Version. Identifier
     *  An identifier for the current version of the Catalogue.
     *  0..1
     *  Catalogue
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as previousVersionID
     *
     * BBIE
     *  Catalogue. Previous_ Version. Identifier
     *  An identifier for the previous version of the Catalogue that is superseded by this version.
     *  0..1
     *  Catalogue
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * BBIE
     *  Catalogue. Previous_ Version. Identifier
     *  An identifier for the previous version of the Catalogue that is superseded by this version.
     *  0..1
     *  Catalogue
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID = null)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Catalogue. Line Count. Numeric
     *  The number of Catalogue Lines in the document.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Line Count. Numeric
     *  The number of Catalogue Lines in the document.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Validity_ Period. Period
     *  A period, assigned by the seller, during which the information in the Catalogue is effective. This may be given as start and end dates or as a duration.
     *  0..n
     *  Catalogue
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
     * Adds as referencedContract
     *
     * ASBIE
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Referenced_ Contract. Contract
     *  A contract or framework agreement with which this Catalogue is associated.
     *  0..n
     *  Catalogue
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
     * Gets as sourceCatalogueReference
     *
     * ASBIE
     *  Catalogue. Source_ Catalogue Reference. Catalogue Reference
     *  A reference to the source catalogue.
     *  0..1
     *  Catalogue
     *  Source
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SourceCatalogueReference
     */
    public function getSourceCatalogueReference()
    {
        return $this->sourceCatalogueReference;
    }

    /**
     * Sets a new sourceCatalogueReference
     *
     * ASBIE
     *  Catalogue. Source_ Catalogue Reference. Catalogue Reference
     *  A reference to the source catalogue.
     *  0..1
     *  Catalogue
     *  Source
     *  Catalogue Reference
     *  Catalogue Reference
     *  Catalogue Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SourceCatalogueReference $sourceCatalogueReference
     * @return self
     */
    public function setSourceCatalogueReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SourceCatalogueReference $sourceCatalogueReference = null)
    {
        $this->sourceCatalogueReference = $sourceCatalogueReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     *  Catalogue. Signature
     *  A signature applied to this document.
     *  0..n
     *  Catalogue
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
     * Gets as providerParty
     *
     * ASBIE
     *  Catalogue. Provider_ Party. Party
     *  The party providing the Catalogue.
     *  1
     *  Catalogue
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
     *  Catalogue. Provider_ Party. Party
     *  The party providing the Catalogue.
     *  1
     *  Catalogue
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
     * Gets as receiverParty
     *
     * ASBIE
     *  Catalogue. Receiver_ Party. Party
     *  The party receiving the Catalogue.
     *  1
     *  Catalogue
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
     *  Catalogue. Receiver_ Party. Party
     *  The party receiving the Catalogue.
     *  1
     *  Catalogue
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
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue
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
     *  Catalogue. Contractor_ Customer Party. Customer Party
     *  The customer party responsible for the contracts with which the Catalogue is associated.
     *  0..1
     *  Catalogue
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
     * Adds as tradingTerms
     *
     * ASBIE
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms $tradingTerms
     */
    public function addToTradingTerms(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms $tradingTerms)
    {
        $this->tradingTerms[] = $tradingTerms;
        return $this;
    }

    /**
     * isset tradingTerms
     *
     * ASBIE
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTradingTerms($index)
    {
        return isset($this->tradingTerms[$index]);
    }

    /**
     * unset tradingTerms
     *
     * ASBIE
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTradingTerms($index)
    {
        unset($this->tradingTerms[$index]);
    }

    /**
     * Gets as tradingTerms
     *
     * ASBIE
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms[]
     */
    public function getTradingTerms()
    {
        return $this->tradingTerms;
    }

    /**
     * Sets a new tradingTerms
     *
     * ASBIE
     *  Catalogue. Trading Terms
     *  The trading terms associated with this Catalogue.
     *  0..n
     *  Catalogue
     *  Trading Terms
     *  Trading Terms
     *  Trading Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TradingTerms[] $tradingTerms
     * @return self
     */
    public function setTradingTerms(?array $tradingTerms = null)
    {
        $this->tradingTerms = $tradingTerms;
        return $this;
    }

    /**
     * Adds as catalogueLine
     *
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueLine $catalogueLine
     */
    public function addToCatalogueLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueLine $catalogueLine)
    {
        $this->catalogueLine[] = $catalogueLine;
        return $this;
    }

    /**
     * isset catalogueLine
     *
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogueLine($index)
    {
        return isset($this->catalogueLine[$index]);
    }

    /**
     * unset catalogueLine
     *
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogueLine($index)
    {
        unset($this->catalogueLine[$index]);
    }

    /**
     * Gets as catalogueLine
     *
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueLine[]
     */
    public function getCatalogueLine()
    {
        return $this->catalogueLine;
    }

    /**
     * Sets a new catalogueLine
     *
     * ASBIE
     *  Catalogue. Catalogue Line
     *  A line in a Catalogue describing an item of sale.
     *  1..n
     *  Catalogue
     *  Catalogue Line
     *  Catalogue Line
     *  Catalogue Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CatalogueLine[] $catalogueLine
     * @return self
     */
    public function setCatalogueLine(array $catalogueLine)
    {
        $this->catalogueLine = $catalogueLine;
        return $this;
    }
}

