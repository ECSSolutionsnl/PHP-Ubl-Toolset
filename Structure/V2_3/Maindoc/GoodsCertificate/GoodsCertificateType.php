<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\GoodsCertificate;

/**
 * Class representing GoodsCertificateType
 *
 * ABIE
 *  Goods Certificate. Details
 *  A document that describes a certificate of goods for importation and exportation
 *  Goods Certificate
 * XSD Type: GoodsCertificateType
 */
class GoodsCertificateType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Goods Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Certificate
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Goods Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Certificate
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Goods Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Certificate
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Goods Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Certificate
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Goods Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Certificate
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Goods Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Certificate
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Goods Certificate. Type Code. Code
     *  A code specifying the type of goods certificate
     *  0..1
     *  Goods Certificate
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Version. Identifier
     *  Identifies the current version of this goods certificate
     *  0..1
     *  Goods Certificate
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Goods Certificate. Validity_ Period. Period
     *  The period of time for which this goods certificate is considered valid
     *  0..1
     *  Goods Certificate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Goods Certificate. Applicable Territory_ Address. Address
     *  A geographic area where this goods certificate is valid
     *  0..1
     *  Goods Certificate
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = null;

    /**
     * ASBIE
     *  Goods Certificate. Exporter_ Party. Party
     *  The party who exports the goods or has similar right of disposal over them at the time of export
     *  0..1
     *  Goods Certificate
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Importer_ Party. Party
     *  The party who imports the goods, or on whose behalf the goods are being import
     *  0..1
     *  Goods Certificate
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Warehouse_ Party. Party
     *  The party who is responsible for storing the goods
     *  0..1
     *  Goods Certificate
     *  Warehouse
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarehouseParty $warehouseParty
     */
    private $warehouseParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Goods Certificate
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty
     */
    private $consignorParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Goods Certificate
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty
     */
    private $consigneeParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Issuer_ Party. Party
     *  The party issuing this goods certificate
     *  1
     *  Goods Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Legal Authority_ Party. Party
     *  The legal authority, when different from the issuer, who sanctions this goods certificate
     *  0..1
     *  Goods Certificate
     *  Legal Authority
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalAuthorityParty $legalAuthorityParty
     */
    private $legalAuthorityParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Applicant_ Party. Party
     *  The party applying for this goods certificate
     *  0..1
     *  Goods Certificate
     *  Applicant
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicantParty $applicantParty
     */
    private $applicantParty = null;

    /**
     * ASBIE
     *  Goods Certificate. Shipment
     *  The shipment for which this goods certificate is issued
     *  1
     *  Goods Certificate
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attestation[] $attestation
     */
    private $attestation = [
        
    ];

    /**
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsProcessing[] $goodsProcessing
     */
    private $goodsProcessing = [
        
    ];

    /**
     * ASBIE
     *  Goods Certificate. Original_ Document Reference. Document Reference
     *  A reference to the original version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     */
    private $originalDocumentReference = null;

    /**
     * ASBIE
     *  Goods Certificate. Previous_ Document Reference. Document Reference
     *  A reference to the previous version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousDocumentReference $previousDocumentReference
     */
    private $previousDocumentReference = null;

    /**
     * ASBIE
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
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
     *  Goods Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Certificate
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
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
     *  Goods Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Certificate
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
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
     *  Goods Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Certificate
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Certificate
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Certificate
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Certificate
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Certificate
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
     *  Goods Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Certificate
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
     *  Goods Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Certificate
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Goods Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Certificate
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
     * Gets as typeCode
     *
     * BBIE
     *  Goods Certificate. Type Code. Code
     *  A code specifying the type of goods certificate
     *  0..1
     *  Goods Certificate
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * BBIE
     *  Goods Certificate. Type Code. Code
     *  A code specifying the type of goods certificate
     *  0..1
     *  Goods Certificate
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     * @return self
     */
    public function setTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode = null)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
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
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
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
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
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
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
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
     *  Goods Certificate. Description. Text
     *  Textual description of this goods certificate
     *  0..n
     *  Goods Certificate
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as note
     *
     * BBIE
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Certificate
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
     * Gets as versionID
     *
     * BBIE
     *  Goods Certificate. Version. Identifier
     *  Identifies the current version of this goods certificate
     *  0..1
     *  Goods Certificate
     *  Version
     *  Identifier
     *  Identifier. Type
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
     *  Goods Certificate. Version. Identifier
     *  Identifies the current version of this goods certificate
     *  0..1
     *  Goods Certificate
     *  Version
     *  Identifier
     *  Identifier. Type
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
     * Gets as validityPeriod
     *
     * ASBIE
     *  Goods Certificate. Validity_ Period. Period
     *  The period of time for which this goods certificate is considered valid
     *  0..1
     *  Goods Certificate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Goods Certificate. Validity_ Period. Period
     *  The period of time for which this goods certificate is considered valid
     *  0..1
     *  Goods Certificate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Goods Certificate. Applicable Territory_ Address. Address
     *  A geographic area where this goods certificate is valid
     *  0..1
     *  Goods Certificate
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Goods Certificate. Applicable Territory_ Address. Address
     *  A geographic area where this goods certificate is valid
     *  0..1
     *  Goods Certificate
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress = null)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as exporterParty
     *
     * ASBIE
     *  Goods Certificate. Exporter_ Party. Party
     *  The party who exports the goods or has similar right of disposal over them at the time of export
     *  0..1
     *  Goods Certificate
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * ASBIE
     *  Goods Certificate. Exporter_ Party. Party
     *  The party who exports the goods or has similar right of disposal over them at the time of export
     *  0..1
     *  Goods Certificate
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty = null)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Goods Certificate. Importer_ Party. Party
     *  The party who imports the goods, or on whose behalf the goods are being import
     *  0..1
     *  Goods Certificate
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * ASBIE
     *  Goods Certificate. Importer_ Party. Party
     *  The party who imports the goods, or on whose behalf the goods are being import
     *  0..1
     *  Goods Certificate
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty = null)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Gets as warehouseParty
     *
     * ASBIE
     *  Goods Certificate. Warehouse_ Party. Party
     *  The party who is responsible for storing the goods
     *  0..1
     *  Goods Certificate
     *  Warehouse
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarehouseParty
     */
    public function getWarehouseParty()
    {
        return $this->warehouseParty;
    }

    /**
     * Sets a new warehouseParty
     *
     * ASBIE
     *  Goods Certificate. Warehouse_ Party. Party
     *  The party who is responsible for storing the goods
     *  0..1
     *  Goods Certificate
     *  Warehouse
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarehouseParty $warehouseParty
     * @return self
     */
    public function setWarehouseParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WarehouseParty $warehouseParty = null)
    {
        $this->warehouseParty = $warehouseParty;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Goods Certificate. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Goods Certificate
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty
     */
    public function getConsignorParty()
    {
        return $this->consignorParty;
    }

    /**
     * Sets a new consignorParty
     *
     * ASBIE
     *  Goods Certificate. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Goods Certificate
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty
     * @return self
     */
    public function setConsignorParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty = null)
    {
        $this->consignorParty = $consignorParty;
        return $this;
    }

    /**
     * Gets as consigneeParty
     *
     * ASBIE
     *  Goods Certificate. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Goods Certificate
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty
     */
    public function getConsigneeParty()
    {
        return $this->consigneeParty;
    }

    /**
     * Sets a new consigneeParty
     *
     * ASBIE
     *  Goods Certificate. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Goods Certificate
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty
     * @return self
     */
    public function setConsigneeParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty = null)
    {
        $this->consigneeParty = $consigneeParty;
        return $this;
    }

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Goods Certificate. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Goods Certificate
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
     *  Goods Certificate. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Goods Certificate
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
     * Gets as issuerParty
     *
     * ASBIE
     *  Goods Certificate. Issuer_ Party. Party
     *  The party issuing this goods certificate
     *  1
     *  Goods Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Goods Certificate. Issuer_ Party. Party
     *  The party issuing this goods certificate
     *  1
     *  Goods Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as legalAuthorityParty
     *
     * ASBIE
     *  Goods Certificate. Legal Authority_ Party. Party
     *  The legal authority, when different from the issuer, who sanctions this goods certificate
     *  0..1
     *  Goods Certificate
     *  Legal Authority
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalAuthorityParty
     */
    public function getLegalAuthorityParty()
    {
        return $this->legalAuthorityParty;
    }

    /**
     * Sets a new legalAuthorityParty
     *
     * ASBIE
     *  Goods Certificate. Legal Authority_ Party. Party
     *  The legal authority, when different from the issuer, who sanctions this goods certificate
     *  0..1
     *  Goods Certificate
     *  Legal Authority
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalAuthorityParty $legalAuthorityParty
     * @return self
     */
    public function setLegalAuthorityParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalAuthorityParty $legalAuthorityParty = null)
    {
        $this->legalAuthorityParty = $legalAuthorityParty;
        return $this;
    }

    /**
     * Gets as applicantParty
     *
     * ASBIE
     *  Goods Certificate. Applicant_ Party. Party
     *  The party applying for this goods certificate
     *  0..1
     *  Goods Certificate
     *  Applicant
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicantParty
     */
    public function getApplicantParty()
    {
        return $this->applicantParty;
    }

    /**
     * Sets a new applicantParty
     *
     * ASBIE
     *  Goods Certificate. Applicant_ Party. Party
     *  The party applying for this goods certificate
     *  0..1
     *  Goods Certificate
     *  Applicant
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicantParty $applicantParty
     * @return self
     */
    public function setApplicantParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicantParty $applicantParty = null)
    {
        $this->applicantParty = $applicantParty;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Goods Certificate. Shipment
     *  The shipment for which this goods certificate is issued
     *  1
     *  Goods Certificate
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Goods Certificate. Shipment
     *  The shipment for which this goods certificate is issued
     *  1
     *  Goods Certificate
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as attestation
     *
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attestation $attestation
     */
    public function addToAttestation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attestation $attestation)
    {
        $this->attestation[] = $attestation;
        return $this;
    }

    /**
     * isset attestation
     *
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttestation($index)
    {
        return isset($this->attestation[$index]);
    }

    /**
     * unset attestation
     *
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttestation($index)
    {
        unset($this->attestation[$index]);
    }

    /**
     * Gets as attestation
     *
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attestation[]
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    /**
     * Sets a new attestation
     *
     * ASBIE
     *  Goods Certificate. Attestation
     *  Any attestations made for the goods related to this goods certificate
     *  0..n
     *  Goods Certificate
     *  Attestation
     *  Attestation
     *  Attestation
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attestation[] $attestation
     * @return self
     */
    public function setAttestation(?array $attestation = null)
    {
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * Adds as goodsProcessing
     *
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsProcessing $goodsProcessing
     */
    public function addToGoodsProcessing(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsProcessing $goodsProcessing)
    {
        $this->goodsProcessing[] = $goodsProcessing;
        return $this;
    }

    /**
     * isset goodsProcessing
     *
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsProcessing($index)
    {
        return isset($this->goodsProcessing[$index]);
    }

    /**
     * unset goodsProcessing
     *
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsProcessing($index)
    {
        unset($this->goodsProcessing[$index]);
    }

    /**
     * Gets as goodsProcessing
     *
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsProcessing[]
     */
    public function getGoodsProcessing()
    {
        return $this->goodsProcessing;
    }

    /**
     * Sets a new goodsProcessing
     *
     * ASBIE
     *  Goods Certificate. Goods Processing
     *  Any processing that the goods have been undergoing
     *  0..n
     *  Goods Certificate
     *  Goods Processing
     *  Goods Processing
     *  Goods Processing
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsProcessing[] $goodsProcessing
     * @return self
     */
    public function setGoodsProcessing(?array $goodsProcessing = null)
    {
        $this->goodsProcessing = $goodsProcessing;
        return $this;
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Goods Certificate. Original_ Document Reference. Document Reference
     *  A reference to the original version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Goods Certificate. Original_ Document Reference. Document Reference
     *  A reference to the original version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference = null)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }

    /**
     * Gets as previousDocumentReference
     *
     * ASBIE
     *  Goods Certificate. Previous_ Document Reference. Document Reference
     *  A reference to the previous version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousDocumentReference
     */
    public function getPreviousDocumentReference()
    {
        return $this->previousDocumentReference;
    }

    /**
     * Sets a new previousDocumentReference
     *
     * ASBIE
     *  Goods Certificate. Previous_ Document Reference. Document Reference
     *  A reference to the previous version of the goods certificate
     *  0..1
     *  Goods Certificate
     *  Previous
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousDocumentReference $previousDocumentReference
     * @return self
     */
    public function setPreviousDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousDocumentReference $previousDocumentReference = null)
    {
        $this->previousDocumentReference = $previousDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this goods certificate
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
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
     *  Goods Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Certificate
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
}

