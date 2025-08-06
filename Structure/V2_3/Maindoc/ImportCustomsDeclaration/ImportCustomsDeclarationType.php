<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ImportCustomsDeclaration;

/**
 * Class representing ImportCustomsDeclarationType
 *
 * ABIE
 *  Import Customs Declaration. Details
 *  A customs declaration document for importing goods.
 *  Import Customs Declaration
 * XSD Type: ImportCustomsDeclarationType
 */
class ImportCustomsDeclarationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Import Customs Declaration. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Import Customs Declaration
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Import Customs Declaration. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Import Customs Declaration
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Import Customs Declaration. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Import Customs Declaration
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Import Customs Declaration. Identifier
     *  An identifier for this document.
     *  1
     *  Import Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Import Customs Declaration. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Import Customs Declaration
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Import Customs Declaration. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Import Customs Declaration
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Import Customs Declaration. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Import Customs Declaration
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Import Customs Declaration. Type Code. Code
     *  Code specifying the type of import.
     *  0..1
     *  Import Customs Declaration
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Import Customs Declaration. Sub_ Type Code. Code
     *  Code specifying the subtype of import.
     *  0..1
     *  Import Customs Declaration
     *  Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SubTypeCode $subTypeCode
     */
    private $subTypeCode = null;

    /**
     * BBIE
     *  Import Customs Declaration. Nature Of_ Transaction Code. Code
     *  Code specifying the type of transactions for this import
     *  0..1
     *  Import Customs Declaration
     *  Nature Of
     *  Transaction Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfTransactionCode $natureOfTransactionCode
     */
    private $natureOfTransactionCode = null;

    /**
     * BBIE
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Version. Identifier
     *  Identifies a version of an Import Customs Declaration in order to distinguish updates.
     *  0..1
     *  Import Customs Declaration
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Validity_ Period. Period
     *  A period, assigned by the issuer, during which the information in the declaration is valid.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Customs Exit Office_ Location. Location
     *  Customs exit office of the goods being declared.
     *  0..1
     *  Import Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation
     */
    private $customsExitOfficeLocation = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Jurisdiction Region_ Address. Address
     *  A geographic area in which this declaration applies.
     *  0..1
     *  Import Customs Declaration
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Importer_ Party. Party
     *  The Party who makes the import declaration, or on whose behalf the import declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Import Customs Declaration
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 74A)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Consignor_ Party. Party
     *  The Party responsible for the consignment
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Consignee_ Party. Party
     *  The Party responsible for receiving the goods.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Freight Forwarder_ Party. Party
     *  The Party responsibe for the freight forwarding.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Customs_ Party. Party
     *  The authority who is legally responsible for processing the declaration.
     *  0..1
     *  Import Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty
     */
    private $customsParty = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Notifier_ Party. Party
     *  The party responsible for contact on master level.
     *  0..1
     *  Import Customs Declaration
     *  Notifier
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifierParty $notifierParty
     */
    private $notifierParty = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Shipment
     *  The shipment related to this trade certificate
     *  1
     *  Import Customs Declaration
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previously sent customs declaration.
     *  0..1
     *  Import Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration
     */
    private $previousCustomsDeclaration = null;

    /**
     * ASBIE
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Identifier
     *  An identifier for this document.
     *  1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Identifier
     *  An identifier for this document.
     *  1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Type Code. Code
     *  Code specifying the type of import.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Type Code. Code
     *  Code specifying the type of import.
     *  0..1
     *  Import Customs Declaration
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
     * Gets as subTypeCode
     *
     * BBIE
     *  Import Customs Declaration. Sub_ Type Code. Code
     *  Code specifying the subtype of import.
     *  0..1
     *  Import Customs Declaration
     *  Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SubTypeCode
     */
    public function getSubTypeCode()
    {
        return $this->subTypeCode;
    }

    /**
     * Sets a new subTypeCode
     *
     * BBIE
     *  Import Customs Declaration. Sub_ Type Code. Code
     *  Code specifying the subtype of import.
     *  0..1
     *  Import Customs Declaration
     *  Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SubTypeCode $subTypeCode
     * @return self
     */
    public function setSubTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SubTypeCode $subTypeCode = null)
    {
        $this->subTypeCode = $subTypeCode;
        return $this;
    }

    /**
     * Gets as natureOfTransactionCode
     *
     * BBIE
     *  Import Customs Declaration. Nature Of_ Transaction Code. Code
     *  Code specifying the type of transactions for this import
     *  0..1
     *  Import Customs Declaration
     *  Nature Of
     *  Transaction Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfTransactionCode
     */
    public function getNatureOfTransactionCode()
    {
        return $this->natureOfTransactionCode;
    }

    /**
     * Sets a new natureOfTransactionCode
     *
     * BBIE
     *  Import Customs Declaration. Nature Of_ Transaction Code. Code
     *  Code specifying the type of transactions for this import
     *  0..1
     *  Import Customs Declaration
     *  Nature Of
     *  Transaction Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfTransactionCode $natureOfTransactionCode
     * @return self
     */
    public function setNatureOfTransactionCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfTransactionCode $natureOfTransactionCode = null)
    {
        $this->natureOfTransactionCode = $natureOfTransactionCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Version. Identifier
     *  Identifies a version of an Import Customs Declaration in order to distinguish updates.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Version. Identifier
     *  Identifies a version of an Import Customs Declaration in order to distinguish updates.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Validity_ Period. Period
     *  A period, assigned by the issuer, during which the information in the declaration is valid.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Validity_ Period. Period
     *  A period, assigned by the issuer, during which the information in the declaration is valid.
     *  0..1
     *  Import Customs Declaration
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
     * Gets as customsExitOfficeLocation
     *
     * ASBIE
     *  Import Customs Declaration. Customs Exit Office_ Location. Location
     *  Customs exit office of the goods being declared.
     *  0..1
     *  Import Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation
     */
    public function getCustomsExitOfficeLocation()
    {
        return $this->customsExitOfficeLocation;
    }

    /**
     * Sets a new customsExitOfficeLocation
     *
     * ASBIE
     *  Import Customs Declaration. Customs Exit Office_ Location. Location
     *  Customs exit office of the goods being declared.
     *  0..1
     *  Import Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation
     * @return self
     */
    public function setCustomsExitOfficeLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation = null)
    {
        $this->customsExitOfficeLocation = $customsExitOfficeLocation;
        return $this;
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Import Customs Declaration. Jurisdiction Region_ Address. Address
     *  A geographic area in which this declaration applies.
     *  0..1
     *  Import Customs Declaration
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Import Customs Declaration. Jurisdiction Region_ Address. Address
     *  A geographic area in which this declaration applies.
     *  0..1
     *  Import Customs Declaration
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress = null)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Import Customs Declaration. Importer_ Party. Party
     *  The Party who makes the import declaration, or on whose behalf the import declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Import Customs Declaration
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 74A)
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
     *  Import Customs Declaration. Importer_ Party. Party
     *  The Party who makes the import declaration, or on whose behalf the import declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Import Customs Declaration
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 74A)
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
     * Gets as consignorParty
     *
     * ASBIE
     *  Import Customs Declaration. Consignor_ Party. Party
     *  The Party responsible for the consignment
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Consignor_ Party. Party
     *  The Party responsible for the consignment
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Consignee_ Party. Party
     *  The Party responsible for receiving the goods.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Consignee_ Party. Party
     *  The Party responsible for receiving the goods.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Freight Forwarder_ Party. Party
     *  The Party responsibe for the freight forwarding.
     *  0..1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Freight Forwarder_ Party. Party
     *  The Party responsibe for the freight forwarding.
     *  0..1
     *  Import Customs Declaration
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
     * Gets as customsParty
     *
     * ASBIE
     *  Import Customs Declaration. Customs_ Party. Party
     *  The authority who is legally responsible for processing the declaration.
     *  0..1
     *  Import Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty
     */
    public function getCustomsParty()
    {
        return $this->customsParty;
    }

    /**
     * Sets a new customsParty
     *
     * ASBIE
     *  Import Customs Declaration. Customs_ Party. Party
     *  The authority who is legally responsible for processing the declaration.
     *  0..1
     *  Import Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty
     * @return self
     */
    public function setCustomsParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty = null)
    {
        $this->customsParty = $customsParty;
        return $this;
    }

    /**
     * Gets as notifierParty
     *
     * ASBIE
     *  Import Customs Declaration. Notifier_ Party. Party
     *  The party responsible for contact on master level.
     *  0..1
     *  Import Customs Declaration
     *  Notifier
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifierParty
     */
    public function getNotifierParty()
    {
        return $this->notifierParty;
    }

    /**
     * Sets a new notifierParty
     *
     * ASBIE
     *  Import Customs Declaration. Notifier_ Party. Party
     *  The party responsible for contact on master level.
     *  0..1
     *  Import Customs Declaration
     *  Notifier
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifierParty $notifierParty
     * @return self
     */
    public function setNotifierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifierParty $notifierParty = null)
    {
        $this->notifierParty = $notifierParty;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Import Customs Declaration. Shipment
     *  The shipment related to this trade certificate
     *  1
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Shipment
     *  The shipment related to this trade certificate
     *  1
     *  Import Customs Declaration
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
     * Gets as previousCustomsDeclaration
     *
     * ASBIE
     *  Import Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previously sent customs declaration.
     *  0..1
     *  Import Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration
     */
    public function getPreviousCustomsDeclaration()
    {
        return $this->previousCustomsDeclaration;
    }

    /**
     * Sets a new previousCustomsDeclaration
     *
     * ASBIE
     *  Import Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previously sent customs declaration.
     *  0..1
     *  Import Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration
     * @return self
     */
    public function setPreviousCustomsDeclaration(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration = null)
    {
        $this->previousCustomsDeclaration = $previousCustomsDeclaration;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents related to or relevant for this customs declaration.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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
     *  Import Customs Declaration. Signature
     *  A signature applied to this document.
     *  0..n
     *  Import Customs Declaration
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

