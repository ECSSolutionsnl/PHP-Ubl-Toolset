<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\GoodsItemPassport;

/**
 * Class representing GoodsItemPassportType
 *
 * ABIE
 *  Goods Item Passport. Details
 *  A document providing a temporary export license, also knowned as an ATA Carnet
 *  Goods Item Passport
 *  ATA Carnet
 * XSD Type: GoodsItemPassportType
 */
class GoodsItemPassportType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Goods Item Passport. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Passport
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Goods Item Passport. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Passport
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Goods Item Passport. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Passport
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item Passport. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Passport
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Goods Item Passport. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Item Passport
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Goods Item Passport. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Item Passport
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Goods Item Passport. Status. Code
     *  The reason for importing the goods, expressed as a code.
     *  0..1
     *  Goods Item Passport
     *  Status
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Status[] $status
     */
    private $status = [
        
    ];

    /**
     * BBIE
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Version. Identifier
     *  Identifies the current version of this request for proof
     *  0..1
     *  Goods Item Passport
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Goods Item Passport. Export_ Reason. Code
     *  The reason for importing the goods, expressed as a code
     *  0..1
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReasonCode $exportReasonCode
     */
    private $exportReasonCode = null;

    /**
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReason[] $exportReason
     */
    private $exportReason = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport. Validity_ Period. Period
     *  The period within which this Goods Item Passport is valid
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issuer_ Party. Party
     *  The party issuing this Goods Item Passport
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Holder_ Party. Party
     *  The holder of the Goods Item Passport, often the temporary exporter of the goods
     *  1
     *  Goods Item Passport
     *  Holder
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\HolderParty $holderParty
     */
    private $holderParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Representative_ Party. Party
     *  The party accompanying the goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Representative
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RepresentativeParty $representativeParty
     */
    private $representativeParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Exporting Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty
     */
    private $exportingGuarantorParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Importing Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily imported
     *  0..1
     *  Goods Item Passport
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty
     */
    private $importingGuarantorParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Exporting Customs_ Party. Party
     *  The competent Customs party of the exporting country
     *  0..1
     *  Goods Item Passport
     *  Exporting Customs
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingCustomsParty $exportingCustomsParty
     */
    private $exportingCustomsParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Importing Customs_ Party. Party
     *  The competent Customs party of the importing country
     *  0..1
     *  Goods Item Passport
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty
     */
    private $importingCustomsParty = null;

    /**
     * ASBIE
     *  Goods Item Passport. Shipment
     *  The reference to the shipment of the goods included under this Goods Item Passport
     *  1
     *  Goods Item Passport
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[] $goodsItemPassportCounterfoil
     */
    private $goodsItemPassportCounterfoil = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport. Issuer_ Endorsement. Endorsement
     *  A reference to the issuer's endorsement of this Goods Item Passport
     *  0..1
     *  Goods Item Passport
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement
     */
    private $issuerEndorsement = null;

    /**
     * ASBIE
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Passport
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
     *  Goods Item Passport. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Passport
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
     *  Goods Item Passport. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Goods Item Passport
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
     * Gets as statusCode
     *
     * BBIE
     *  Goods Item Passport. Status. Code
     *  The reason for importing the goods, expressed as a code.
     *  0..1
     *  Goods Item Passport
     *  Status
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * BBIE
     *  Goods Item Passport. Status. Code
     *  The reason for importing the goods, expressed as a code.
     *  0..1
     *  Goods Item Passport
     *  Status
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StatusCode $statusCode = null)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adds as status
     *
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Status $status
     */
    public function addToStatus(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * BBIE
     *  Goods Item Passport. Status. Text
     *  The reason for importing the goods, expressed as text in one or more languages.
     *  0..n
     *  Goods Item Passport
     *  Status
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Status[] $status
     * @return self
     */
    public function setStatus(?array $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Version. Identifier
     *  Identifies the current version of this request for proof
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Version. Identifier
     *  Identifies the current version of this request for proof
     *  0..1
     *  Goods Item Passport
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
     * Gets as exportReasonCode
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Code
     *  The reason for importing the goods, expressed as a code
     *  0..1
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReasonCode
     */
    public function getExportReasonCode()
    {
        return $this->exportReasonCode;
    }

    /**
     * Sets a new exportReasonCode
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Code
     *  The reason for importing the goods, expressed as a code
     *  0..1
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReasonCode $exportReasonCode
     * @return self
     */
    public function setExportReasonCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReasonCode $exportReasonCode = null)
    {
        $this->exportReasonCode = $exportReasonCode;
        return $this;
    }

    /**
     * Adds as exportReason
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReason $exportReason
     */
    public function addToExportReason(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReason $exportReason)
    {
        $this->exportReason[] = $exportReason;
        return $this;
    }

    /**
     * isset exportReason
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportReason($index)
    {
        return isset($this->exportReason[$index]);
    }

    /**
     * unset exportReason
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportReason($index)
    {
        unset($this->exportReason[$index]);
    }

    /**
     * Gets as exportReason
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReason[]
     */
    public function getExportReason()
    {
        return $this->exportReason;
    }

    /**
     * Sets a new exportReason
     *
     * BBIE
     *  Goods Item Passport. Export_ Reason. Text
     *  The reason for importing the goods, expressed as text in one or more languages
     *  0..n
     *  Goods Item Passport
     *  Export
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExportReason[] $exportReason
     * @return self
     */
    public function setExportReason(?array $exportReason = null)
    {
        $this->exportReason = $exportReason;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Goods Item Passport. Validity_ Period. Period
     *  The period within which this Goods Item Passport is valid
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Validity_ Period. Period
     *  The period within which this Goods Item Passport is valid
     *  0..1
     *  Goods Item Passport
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
     * Gets as issuerParty
     *
     * ASBIE
     *  Goods Item Passport. Issuer_ Party. Party
     *  The party issuing this Goods Item Passport
     *  0..1
     *  Goods Item Passport
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
     *  Goods Item Passport. Issuer_ Party. Party
     *  The party issuing this Goods Item Passport
     *  0..1
     *  Goods Item Passport
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as holderParty
     *
     * ASBIE
     *  Goods Item Passport. Holder_ Party. Party
     *  The holder of the Goods Item Passport, often the temporary exporter of the goods
     *  1
     *  Goods Item Passport
     *  Holder
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\HolderParty
     */
    public function getHolderParty()
    {
        return $this->holderParty;
    }

    /**
     * Sets a new holderParty
     *
     * ASBIE
     *  Goods Item Passport. Holder_ Party. Party
     *  The holder of the Goods Item Passport, often the temporary exporter of the goods
     *  1
     *  Goods Item Passport
     *  Holder
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\HolderParty $holderParty
     * @return self
     */
    public function setHolderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\HolderParty $holderParty)
    {
        $this->holderParty = $holderParty;
        return $this;
    }

    /**
     * Gets as representativeParty
     *
     * ASBIE
     *  Goods Item Passport. Representative_ Party. Party
     *  The party accompanying the goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Representative
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RepresentativeParty
     */
    public function getRepresentativeParty()
    {
        return $this->representativeParty;
    }

    /**
     * Sets a new representativeParty
     *
     * ASBIE
     *  Goods Item Passport. Representative_ Party. Party
     *  The party accompanying the goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Representative
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RepresentativeParty $representativeParty
     * @return self
     */
    public function setRepresentativeParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RepresentativeParty $representativeParty = null)
    {
        $this->representativeParty = $representativeParty;
        return $this;
    }

    /**
     * Gets as exportingGuarantorParty
     *
     * ASBIE
     *  Goods Item Passport. Exporting Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty
     */
    public function getExportingGuarantorParty()
    {
        return $this->exportingGuarantorParty;
    }

    /**
     * Sets a new exportingGuarantorParty
     *
     * ASBIE
     *  Goods Item Passport. Exporting Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily exported
     *  0..1
     *  Goods Item Passport
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty
     * @return self
     */
    public function setExportingGuarantorParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty = null)
    {
        $this->exportingGuarantorParty = $exportingGuarantorParty;
        return $this;
    }

    /**
     * Gets as importingGuarantorParty
     *
     * ASBIE
     *  Goods Item Passport. Importing Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily imported
     *  0..1
     *  Goods Item Passport
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty
     */
    public function getImportingGuarantorParty()
    {
        return $this->importingGuarantorParty;
    }

    /**
     * Sets a new importingGuarantorParty
     *
     * ASBIE
     *  Goods Item Passport. Importing Guarantor_ Party. Party
     *  A party (often a chamber of commerce) which provides a guarantee goods while temporarily imported
     *  0..1
     *  Goods Item Passport
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty
     * @return self
     */
    public function setImportingGuarantorParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty = null)
    {
        $this->importingGuarantorParty = $importingGuarantorParty;
        return $this;
    }

    /**
     * Gets as exportingCustomsParty
     *
     * ASBIE
     *  Goods Item Passport. Exporting Customs_ Party. Party
     *  The competent Customs party of the exporting country
     *  0..1
     *  Goods Item Passport
     *  Exporting Customs
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingCustomsParty
     */
    public function getExportingCustomsParty()
    {
        return $this->exportingCustomsParty;
    }

    /**
     * Sets a new exportingCustomsParty
     *
     * ASBIE
     *  Goods Item Passport. Exporting Customs_ Party. Party
     *  The competent Customs party of the exporting country
     *  0..1
     *  Goods Item Passport
     *  Exporting Customs
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingCustomsParty $exportingCustomsParty
     * @return self
     */
    public function setExportingCustomsParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingCustomsParty $exportingCustomsParty = null)
    {
        $this->exportingCustomsParty = $exportingCustomsParty;
        return $this;
    }

    /**
     * Gets as importingCustomsParty
     *
     * ASBIE
     *  Goods Item Passport. Importing Customs_ Party. Party
     *  The competent Customs party of the importing country
     *  0..1
     *  Goods Item Passport
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty
     */
    public function getImportingCustomsParty()
    {
        return $this->importingCustomsParty;
    }

    /**
     * Sets a new importingCustomsParty
     *
     * ASBIE
     *  Goods Item Passport. Importing Customs_ Party. Party
     *  The competent Customs party of the importing country
     *  0..1
     *  Goods Item Passport
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty
     * @return self
     */
    public function setImportingCustomsParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty = null)
    {
        $this->importingCustomsParty = $importingCustomsParty;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Goods Item Passport. Shipment
     *  The reference to the shipment of the goods included under this Goods Item Passport
     *  1
     *  Goods Item Passport
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
     *  Goods Item Passport. Shipment
     *  The reference to the shipment of the goods included under this Goods Item Passport
     *  1
     *  Goods Item Passport
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
     * Adds as goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil $goodsItemPassportCounterfoil
     */
    public function addToGoodsItemPassportCounterfoil(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil $goodsItemPassportCounterfoil)
    {
        $this->goodsItemPassportCounterfoil[] = $goodsItemPassportCounterfoil;
        return $this;
    }

    /**
     * isset goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItemPassportCounterfoil($index)
    {
        return isset($this->goodsItemPassportCounterfoil[$index]);
    }

    /**
     * unset goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItemPassportCounterfoil($index)
    {
        unset($this->goodsItemPassportCounterfoil[$index]);
    }

    /**
     * Gets as goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[]
     */
    public function getGoodsItemPassportCounterfoil()
    {
        return $this->goodsItemPassportCounterfoil;
    }

    /**
     * Sets a new goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Goods Item Passport. Goods Item Passport Counterfoil
     *  One or more counterfoils associated with this Goods Item Passport
     *  1..n
     *  Goods Item Passport
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  ATA Carnet counterfoil
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[] $goodsItemPassportCounterfoil
     * @return self
     */
    public function setGoodsItemPassportCounterfoil(array $goodsItemPassportCounterfoil)
    {
        $this->goodsItemPassportCounterfoil = $goodsItemPassportCounterfoil;
        return $this;
    }

    /**
     * Gets as issuerEndorsement
     *
     * ASBIE
     *  Goods Item Passport. Issuer_ Endorsement. Endorsement
     *  A reference to the issuer's endorsement of this Goods Item Passport
     *  0..1
     *  Goods Item Passport
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement
     */
    public function getIssuerEndorsement()
    {
        return $this->issuerEndorsement;
    }

    /**
     * Sets a new issuerEndorsement
     *
     * ASBIE
     *  Goods Item Passport. Issuer_ Endorsement. Endorsement
     *  A reference to the issuer's endorsement of this Goods Item Passport
     *  0..1
     *  Goods Item Passport
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement
     * @return self
     */
    public function setIssuerEndorsement(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement = null)
    {
        $this->issuerEndorsement = $issuerEndorsement;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Goods Item Passport
     *  0..n
     *  Goods Item Passport
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
     * Adds as documentDistribution
     *
     * ASBIE
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Document Distribution
     *  One or more parties to whom this document is distributed
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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
     *  Goods Item Passport. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Passport
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

