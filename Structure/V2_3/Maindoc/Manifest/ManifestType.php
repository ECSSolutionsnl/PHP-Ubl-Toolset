<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\Manifest;

/**
 * Class representing ManifestType
 *
 * ABIE
 *  Manifest. Details
 *  A document listing the contents, cargo, passengers and crew of an airplane, a ship, a truck or a vagon.
 *  Manifest
 * XSD Type: ManifestType
 */
class ManifestType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Manifest. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Manifest
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
     *  Manifest. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Manifest
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Manifest. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Manifest
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Manifest. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Manifest
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Manifest. Identifier
     *  An identifier for this document.
     *  1
     *  Manifest
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Manifest. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Manifest
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Manifest. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Manifest
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Manifest. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Manifest
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Manifest. Manifest Type Code. Code
     *  The type of Manifest, expressed as a code.
     *  0..1
     *  Manifest
     *  Manifest Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestTypeCode $manifestTypeCode
     */
    private $manifestTypeCode = null;

    /**
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestType[] $manifestType
     */
    private $manifestType = [
        
    ];

    /**
     * BBIE
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Manifest
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Manifest. Ad Valorem_ Indicator. Indicator
     *  An indicator of whether ad valorem duties are levied on commodities described in this manifest (true) or not (false).
     *  0..1
     *  Manifest
     *  Ad Valorem
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $adValoremIndicator
     */
    private $adValoremIndicator = null;

    /**
     * BBIE
     *  Manifest. Declared_ Carriage Value. Amount
     *  Value declared by the shipper or his agent for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Manifest
     *  Declared
     *  Carriage Value
     *  Amount
     *  Amount. Type
     *  Interest in Delivery
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount $declaredCarriageValueAmount
     */
    private $declaredCarriageValueAmount = null;

    /**
     * ASBIE
     *  Manifest. Sending Logistics Operator_ Party. Party
     *  The logistics operator party issuing this manifest
     *  1
     *  Manifest
     *  Sending Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingLogisticsOperatorParty $sendingLogisticsOperatorParty
     */
    private $sendingLogisticsOperatorParty = null;

    /**
     * ASBIE
     *  Manifest. Authority_ Party. Party
     *  The authority or regulator receiving this manifest.
     *  0..1
     *  Manifest
     *  Authority
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty
     */
    private $authorityParty = null;

    /**
     * ASBIE
     *  Manifest. Consignor_ Party. Party
     *  The party responsible for sending the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Consignee_ Party. Party
     *  The party receiving the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson[] $crewPerson
     */
    private $crewPerson = [
        
    ];

    /**
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PassengerPerson[] $passengerPerson
     */
    private $passengerPerson = [
        
    ];

    /**
     * ASBIE
     *  Manifest. Shipment
     *  A shipment associated with this manifest.
     *  0..1
     *  Manifest
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentDistribution[] $documentDistribution
     */
    private $documentDistribution = [
        
    ];

    /**
     * ASBIE
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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
     *  Manifest. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Manifest
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
     *  Manifest. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Manifest
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
     *  Manifest. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Manifest
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
     *  Manifest. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Manifest
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
     *  Manifest. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Manifest
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
     *  Manifest. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Manifest
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
     *  Manifest. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Manifest
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
     *  Manifest. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Manifest
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
     *  Manifest. Identifier
     *  An identifier for this document.
     *  1
     *  Manifest
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
     *  Manifest. Identifier
     *  An identifier for this document.
     *  1
     *  Manifest
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
     *  Manifest. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Manifest
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
     *  Manifest. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Manifest
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
     *  Manifest. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Manifest
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
     *  Manifest. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Manifest
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
     *  Manifest. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Manifest
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
     *  Manifest. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Manifest
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
     * Gets as manifestTypeCode
     *
     * BBIE
     *  Manifest. Manifest Type Code. Code
     *  The type of Manifest, expressed as a code.
     *  0..1
     *  Manifest
     *  Manifest Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestTypeCode
     */
    public function getManifestTypeCode()
    {
        return $this->manifestTypeCode;
    }

    /**
     * Sets a new manifestTypeCode
     *
     * BBIE
     *  Manifest. Manifest Type Code. Code
     *  The type of Manifest, expressed as a code.
     *  0..1
     *  Manifest
     *  Manifest Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestTypeCode $manifestTypeCode
     * @return self
     */
    public function setManifestTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestTypeCode $manifestTypeCode = null)
    {
        $this->manifestTypeCode = $manifestTypeCode;
        return $this;
    }

    /**
     * Adds as manifestType
     *
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestType $manifestType
     */
    public function addToManifestType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestType $manifestType)
    {
        $this->manifestType[] = $manifestType;
        return $this;
    }

    /**
     * isset manifestType
     *
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManifestType($index)
    {
        return isset($this->manifestType[$index]);
    }

    /**
     * unset manifestType
     *
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManifestType($index)
    {
        unset($this->manifestType[$index]);
    }

    /**
     * Gets as manifestType
     *
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestType[]
     */
    public function getManifestType()
    {
        return $this->manifestType;
    }

    /**
     * Sets a new manifestType
     *
     * BBIE
     *  Manifest. Manifest Type. Text
     *  The type of Manifest, expressed as text.
     *  0..n
     *  Manifest
     *  Manifest Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ManifestType[] $manifestType
     * @return self
     */
    public function setManifestType(?array $manifestType = null)
    {
        $this->manifestType = $manifestType;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Manifest
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
     *  Manifest. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Manifest
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
     *  Manifest. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Manifest
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
     * Gets as adValoremIndicator
     *
     * BBIE
     *  Manifest. Ad Valorem_ Indicator. Indicator
     *  An indicator of whether ad valorem duties are levied on commodities described in this manifest (true) or not (false).
     *  0..1
     *  Manifest
     *  Ad Valorem
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAdValoremIndicator()
    {
        return $this->adValoremIndicator;
    }

    /**
     * Sets a new adValoremIndicator
     *
     * BBIE
     *  Manifest. Ad Valorem_ Indicator. Indicator
     *  An indicator of whether ad valorem duties are levied on commodities described in this manifest (true) or not (false).
     *  0..1
     *  Manifest
     *  Ad Valorem
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $adValoremIndicator
     * @return self
     */
    public function setAdValoremIndicator($adValoremIndicator)
    {
        $this->adValoremIndicator = $adValoremIndicator;
        return $this;
    }

    /**
     * Gets as declaredCarriageValueAmount
     *
     * BBIE
     *  Manifest. Declared_ Carriage Value. Amount
     *  Value declared by the shipper or his agent for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Manifest
     *  Declared
     *  Carriage Value
     *  Amount
     *  Amount. Type
     *  Interest in Delivery
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount
     */
    public function getDeclaredCarriageValueAmount()
    {
        return $this->declaredCarriageValueAmount;
    }

    /**
     * Sets a new declaredCarriageValueAmount
     *
     * BBIE
     *  Manifest. Declared_ Carriage Value. Amount
     *  Value declared by the shipper or his agent for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Manifest
     *  Declared
     *  Carriage Value
     *  Amount
     *  Amount. Type
     *  Interest in Delivery
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount $declaredCarriageValueAmount
     * @return self
     */
    public function setDeclaredCarriageValueAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount $declaredCarriageValueAmount = null)
    {
        $this->declaredCarriageValueAmount = $declaredCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as sendingLogisticsOperatorParty
     *
     * ASBIE
     *  Manifest. Sending Logistics Operator_ Party. Party
     *  The logistics operator party issuing this manifest
     *  1
     *  Manifest
     *  Sending Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingLogisticsOperatorParty
     */
    public function getSendingLogisticsOperatorParty()
    {
        return $this->sendingLogisticsOperatorParty;
    }

    /**
     * Sets a new sendingLogisticsOperatorParty
     *
     * ASBIE
     *  Manifest. Sending Logistics Operator_ Party. Party
     *  The logistics operator party issuing this manifest
     *  1
     *  Manifest
     *  Sending Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingLogisticsOperatorParty $sendingLogisticsOperatorParty
     * @return self
     */
    public function setSendingLogisticsOperatorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingLogisticsOperatorParty $sendingLogisticsOperatorParty)
    {
        $this->sendingLogisticsOperatorParty = $sendingLogisticsOperatorParty;
        return $this;
    }

    /**
     * Gets as authorityParty
     *
     * ASBIE
     *  Manifest. Authority_ Party. Party
     *  The authority or regulator receiving this manifest.
     *  0..1
     *  Manifest
     *  Authority
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty
     */
    public function getAuthorityParty()
    {
        return $this->authorityParty;
    }

    /**
     * Sets a new authorityParty
     *
     * ASBIE
     *  Manifest. Authority_ Party. Party
     *  The authority or regulator receiving this manifest.
     *  0..1
     *  Manifest
     *  Authority
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty
     * @return self
     */
    public function setAuthorityParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty = null)
    {
        $this->authorityParty = $authorityParty;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Manifest. Consignor_ Party. Party
     *  The party responsible for sending the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Consignor_ Party. Party
     *  The party responsible for sending the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Consignee_ Party. Party
     *  The party receiving the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Consignee_ Party. Party
     *  The party receiving the goods mentioned in this manifest.
     *  0..1
     *  Manifest
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
     * Adds as crewPerson
     *
     * ASBIE
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson $crewPerson
     */
    public function addToCrewPerson(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson $crewPerson)
    {
        $this->crewPerson[] = $crewPerson;
        return $this;
    }

    /**
     * isset crewPerson
     *
     * ASBIE
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCrewPerson($index)
    {
        return isset($this->crewPerson[$index]);
    }

    /**
     * unset crewPerson
     *
     * ASBIE
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCrewPerson($index)
    {
        unset($this->crewPerson[$index]);
    }

    /**
     * Gets as crewPerson
     *
     * ASBIE
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson[]
     */
    public function getCrewPerson()
    {
        return $this->crewPerson;
    }

    /**
     * Sets a new crewPerson
     *
     * ASBIE
     *  Manifest. Crew_ Person. Person
     *  A person registred as crew in this manifest.
     *  0..n
     *  Manifest
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson[] $crewPerson
     * @return self
     */
    public function setCrewPerson(?array $crewPerson = null)
    {
        $this->crewPerson = $crewPerson;
        return $this;
    }

    /**
     * Adds as passengerPerson
     *
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PassengerPerson $passengerPerson
     */
    public function addToPassengerPerson(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PassengerPerson $passengerPerson)
    {
        $this->passengerPerson[] = $passengerPerson;
        return $this;
    }

    /**
     * isset passengerPerson
     *
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerPerson($index)
    {
        return isset($this->passengerPerson[$index]);
    }

    /**
     * unset passengerPerson
     *
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerPerson($index)
    {
        unset($this->passengerPerson[$index]);
    }

    /**
     * Gets as passengerPerson
     *
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PassengerPerson[]
     */
    public function getPassengerPerson()
    {
        return $this->passengerPerson;
    }

    /**
     * Sets a new passengerPerson
     *
     * ASBIE
     *  Manifest. Passenger_ Person. Person
     *  A person registred as passenger in this manifest
     *  0..n
     *  Manifest
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PassengerPerson[] $passengerPerson
     * @return self
     */
    public function setPassengerPerson(?array $passengerPerson = null)
    {
        $this->passengerPerson = $passengerPerson;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Manifest. Shipment
     *  A shipment associated with this manifest.
     *  0..1
     *  Manifest
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
     *  Manifest. Shipment
     *  A shipment associated with this manifest.
     *  0..1
     *  Manifest
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     *  Manifest. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Manifest
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
     * Adds as documentDistribution
     *
     * ASBIE
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentDistribution $documentDistribution
     */
    public function addToDocumentDistribution(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentDistribution $documentDistribution)
    {
        $this->documentDistribution[] = $documentDistribution;
        return $this;
    }

    /**
     * isset documentDistribution
     *
     * ASBIE
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDistribution($index)
    {
        return isset($this->documentDistribution[$index]);
    }

    /**
     * unset documentDistribution
     *
     * ASBIE
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDistribution($index)
    {
        unset($this->documentDistribution[$index]);
    }

    /**
     * Gets as documentDistribution
     *
     * ASBIE
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentDistribution[]
     */
    public function getDocumentDistribution()
    {
        return $this->documentDistribution;
    }

    /**
     * Sets a new documentDistribution
     *
     * ASBIE
     *  Manifest. Document Distribution
     *  An interested party to whom this document is distributed.
     *  0..n
     *  Manifest
     *  Document Distribution
     *  Document Distribution
     *  Document Distribution
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentDistribution[] $documentDistribution
     * @return self
     */
    public function setDocumentDistribution(?array $documentDistribution = null)
    {
        $this->documentDistribution = $documentDistribution;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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
     *  Manifest. Signature
     *  A signature applied to this document.
     *  0..n
     *  Manifest
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

