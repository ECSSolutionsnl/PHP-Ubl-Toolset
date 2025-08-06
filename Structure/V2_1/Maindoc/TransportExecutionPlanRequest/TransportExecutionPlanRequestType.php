<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\TransportExecutionPlanRequest;

/**
 * Class representing TransportExecutionPlanRequestType
 *
 * ABIE
 *  Transport Execution Plan Request. Details
 *  A document sent by a transport user to request a transport service from a transport service provider.
 *  Transport Execution Plan Request
 * XSD Type: TransportExecutionPlanRequestType
 */
class TransportExecutionPlanRequestType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Execution Plan Request
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Execution Plan Request
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Execution Plan Request
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Execution Plan Request
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Execution Plan Request
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Version. Identifier
     *  An identifier for the current version of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Execution Plan Request
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
     *  Issue Date
     *  Date
     *  Date. Type
     *  Transport Document Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Document Status Code. Code
     *  A code signifying the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     */
    private $documentStatusCode = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Code. Code
     *  A code signifying a reason associated with the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Reason Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonCode $documentStatusReasonCode
     */
    private $documentStatusReasonCode = null;

    /**
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonDescription[] $documentStatusReasonDescription
     */
    private $documentStatusReasonDescription = [
        
    ];

    /**
     * BBIE
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportUserRemarks[] $transportUserRemarks
     */
    private $transportUserRemarks = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Plan Request. Sender_ Party. Party
     *  The party sending the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Receiver_ Party. Party
     *  The party receiving the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Transport User_ Party. Party
     *  The party requesting the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport User
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportUserParty $transportUserParty
     */
    private $transportUserParty = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider_ Party. Party
     *  The party providing the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     */
    private $transportServiceProviderParty = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Payee_ Party. Party
     *  The party that will pay for the transport service(s) referred to in a Transport Execution Plan.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to an original Transport Execution Plan Document.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Plan
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionPlanDocumentReference $transportExecutionPlanDocumentReference
     */
    private $transportExecutionPlanDocumentReference = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Description_ Document Reference. Document Reference
     *  A reference to the Transport Service Description, which is used by a transport service provider to announce transport services to transport users (buyers).
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Service Description
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceDescriptionDocumentReference $transportServiceDescriptionDocumentReference
     */
    private $transportServiceDescriptionDocumentReference = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Transport_ Contract. Contract
     *  A potential contract related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportContract $transportContract
     */
    private $transportContract = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderResponseDeadlinePeriod[] $transportServiceProviderResponseDeadlinePeriod
     */
    private $transportServiceProviderResponseDeadlinePeriod = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Plan Request. Main_ Transportation Service. Transportation Service
     *  A description of the main transportation service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Main
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainTransportationService $mainTransportationService
     */
    private $mainTransportationService = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalTransportationService[] $additionalTransportationService
     */
    private $additionalTransportationService = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Plan Request. Service Start Time_ Period. Period
     *  The period within which the services referred to in the Transport Execution Plan Request must begin.
     *  0..1
     *  Transport Execution Plan Request
     *  Service Start Time
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceStartTimePeriod $serviceStartTimePeriod
     */
    private $serviceStartTimePeriod = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Service End Time_ Period. Period
     *  The period during which the services referred to in the Transport Execution Plan Request must be completed.
     *  0..1
     *  Transport Execution Plan Request
     *  Service End Time
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceEndTimePeriod $serviceEndTimePeriod
     */
    private $serviceEndTimePeriod = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. From_ Location. Location
     *  The location of origin of the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  From
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FromLocation $fromLocation
     */
    private $fromLocation = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. To_ Location. Location
     *  The destination location for the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  To
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ToLocation $toLocation
     */
    private $toLocation = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. At_ Location. Location
     *  The location of a transport service (e.g., terminal handling service) that does not require transport movement.
     *  0..1
     *  Transport Execution Plan Request
     *  At
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AtLocation $atLocation
     */
    private $atLocation = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Transport Execution Terms
     *  A description of terms and conditions related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Terms
     *  Transport Execution Terms
     *  Transport Execution Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionTerms $transportExecutionTerms
     */
    private $transportExecutionTerms = null;

    /**
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment[] $consignment
     */
    private $consignment = [
        
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
     *  Transport Execution Plan Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Execution Plan Request
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Execution Plan Request
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Execution Plan Request
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Execution Plan Request
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Execution Plan Request
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Execution Plan Request
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transport Execution Plan Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Execution Plan Request
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
     * Gets as versionID
     *
     * BBIE
     *  Transport Execution Plan Request. Version. Identifier
     *  An identifier for the current version of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Version. Identifier
     *  An identifier for the current version of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Transport Execution Plan Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
     *  Issue Date
     *  Date
     *  Date. Type
     *  Transport Document Date
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
     *  Transport Execution Plan Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
     *  Issue Date
     *  Date
     *  Date. Type
     *  Transport Document Date
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
     *  Transport Execution Plan Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Execution Plan Request
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
     * Gets as documentStatusCode
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Code. Code
     *  A code signifying the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusCode
     */
    public function getDocumentStatusCode()
    {
        return $this->documentStatusCode;
    }

    /**
     * Sets a new documentStatusCode
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Code. Code
     *  A code signifying the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     * @return self
     */
    public function setDocumentStatusCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode = null)
    {
        $this->documentStatusCode = $documentStatusCode;
        return $this;
    }

    /**
     * Gets as documentStatusReasonCode
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Code. Code
     *  A code signifying a reason associated with the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Reason Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonCode
     */
    public function getDocumentStatusReasonCode()
    {
        return $this->documentStatusReasonCode;
    }

    /**
     * Sets a new documentStatusReasonCode
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Code. Code
     *  A code signifying a reason associated with the status of the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Document Status Reason Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonCode $documentStatusReasonCode
     * @return self
     */
    public function setDocumentStatusReasonCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonCode $documentStatusReasonCode = null)
    {
        $this->documentStatusReasonCode = $documentStatusReasonCode;
        return $this;
    }

    /**
     * Adds as documentStatusReasonDescription
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonDescription $documentStatusReasonDescription
     */
    public function addToDocumentStatusReasonDescription(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonDescription $documentStatusReasonDescription)
    {
        $this->documentStatusReasonDescription[] = $documentStatusReasonDescription;
        return $this;
    }

    /**
     * isset documentStatusReasonDescription
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentStatusReasonDescription($index)
    {
        return isset($this->documentStatusReasonDescription[$index]);
    }

    /**
     * unset documentStatusReasonDescription
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentStatusReasonDescription($index)
    {
        unset($this->documentStatusReasonDescription[$index]);
    }

    /**
     * Gets as documentStatusReasonDescription
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonDescription[]
     */
    public function getDocumentStatusReasonDescription()
    {
        return $this->documentStatusReasonDescription;
    }

    /**
     * Sets a new documentStatusReasonDescription
     *
     * BBIE
     *  Transport Execution Plan Request. Document Status Reason Description. Text
     *  A reason associated with the status of the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Document Status Reason Description
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DocumentStatusReasonDescription[] $documentStatusReasonDescription
     * @return self
     */
    public function setDocumentStatusReasonDescription(?array $documentStatusReasonDescription = null)
    {
        $this->documentStatusReasonDescription = $documentStatusReasonDescription;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Execution Plan Request
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
     * Adds as transportUserRemarks
     *
     * BBIE
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportUserRemarks $transportUserRemarks
     */
    public function addToTransportUserRemarks(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportUserRemarks $transportUserRemarks)
    {
        $this->transportUserRemarks[] = $transportUserRemarks;
        return $this;
    }

    /**
     * isset transportUserRemarks
     *
     * BBIE
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportUserRemarks($index)
    {
        return isset($this->transportUserRemarks[$index]);
    }

    /**
     * unset transportUserRemarks
     *
     * BBIE
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportUserRemarks($index)
    {
        unset($this->transportUserRemarks[$index]);
    }

    /**
     * Gets as transportUserRemarks
     *
     * BBIE
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportUserRemarks[]
     */
    public function getTransportUserRemarks()
    {
        return $this->transportUserRemarks;
    }

    /**
     * Sets a new transportUserRemarks
     *
     * BBIE
     *  Transport Execution Plan Request. Transport User_ Remarks. Text
     *  Remarks from the transport user regarding the transport operations referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport User
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportUserRemarks[] $transportUserRemarks
     * @return self
     */
    public function setTransportUserRemarks(?array $transportUserRemarks = null)
    {
        $this->transportUserRemarks = $transportUserRemarks;
        return $this;
    }

    /**
     * Gets as senderParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Sender_ Party. Party
     *  The party sending the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Sender_ Party. Party
     *  The party sending the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty = null)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Receiver_ Party. Party
     *  The party receiving the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Receiver_ Party. Party
     *  The party receiving the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty = null)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Gets as transportUserParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport User_ Party. Party
     *  The party requesting the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport User
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportUserParty
     */
    public function getTransportUserParty()
    {
        return $this->transportUserParty;
    }

    /**
     * Sets a new transportUserParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport User_ Party. Party
     *  The party requesting the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport User
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportUserParty $transportUserParty
     * @return self
     */
    public function setTransportUserParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportUserParty $transportUserParty)
    {
        $this->transportUserParty = $transportUserParty;
        return $this;
    }

    /**
     * Gets as transportServiceProviderParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider_ Party. Party
     *  The party providing the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderParty
     */
    public function getTransportServiceProviderParty()
    {
        return $this->transportServiceProviderParty;
    }

    /**
     * Sets a new transportServiceProviderParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider_ Party. Party
     *  The party providing the transport services referenced in the Transport Execution Plan Request.
     *  1
     *  Transport Execution Plan Request
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     * @return self
     */
    public function setTransportServiceProviderParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty)
    {
        $this->transportServiceProviderParty = $transportServiceProviderParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Transport Execution Plan Request. Payee_ Party. Party
     *  The party that will pay for the transport service(s) referred to in a Transport Execution Plan.
     *  0..1
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Payee_ Party. Party
     *  The party that will pay for the transport service(s) referred to in a Transport Execution Plan.
     *  0..1
     *  Transport Execution Plan Request
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
     * Adds as signature
     *
     * ASBIE
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Execution Plan Request
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
     * Gets as transportExecutionPlanDocumentReference
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to an original Transport Execution Plan Document.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Plan
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionPlanDocumentReference
     */
    public function getTransportExecutionPlanDocumentReference()
    {
        return $this->transportExecutionPlanDocumentReference;
    }

    /**
     * Sets a new transportExecutionPlanDocumentReference
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to an original Transport Execution Plan Document.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Plan
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionPlanDocumentReference $transportExecutionPlanDocumentReference
     * @return self
     */
    public function setTransportExecutionPlanDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionPlanDocumentReference $transportExecutionPlanDocumentReference = null)
    {
        $this->transportExecutionPlanDocumentReference = $transportExecutionPlanDocumentReference;
        return $this;
    }

    /**
     * Gets as transportServiceDescriptionDocumentReference
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Description_ Document Reference. Document Reference
     *  A reference to the Transport Service Description, which is used by a transport service provider to announce transport services to transport users (buyers).
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Service Description
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceDescriptionDocumentReference
     */
    public function getTransportServiceDescriptionDocumentReference()
    {
        return $this->transportServiceDescriptionDocumentReference;
    }

    /**
     * Sets a new transportServiceDescriptionDocumentReference
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Description_ Document Reference. Document Reference
     *  A reference to the Transport Service Description, which is used by a transport service provider to announce transport services to transport users (buyers).
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Service Description
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceDescriptionDocumentReference $transportServiceDescriptionDocumentReference
     * @return self
     */
    public function setTransportServiceDescriptionDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceDescriptionDocumentReference $transportServiceDescriptionDocumentReference = null)
    {
        $this->transportServiceDescriptionDocumentReference = $transportServiceDescriptionDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     *  Transport Execution Plan Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Transport Execution Plan Request
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
     * Gets as transportContract
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport_ Contract. Contract
     *  A potential contract related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportContract
     */
    public function getTransportContract()
    {
        return $this->transportContract;
    }

    /**
     * Sets a new transportContract
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport_ Contract. Contract
     *  A potential contract related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportContract $transportContract
     * @return self
     */
    public function setTransportContract(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportContract $transportContract = null)
    {
        $this->transportContract = $transportContract;
        return $this;
    }

    /**
     * Adds as transportServiceProviderResponseDeadlinePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderResponseDeadlinePeriod $transportServiceProviderResponseDeadlinePeriod
     */
    public function addToTransportServiceProviderResponseDeadlinePeriod(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderResponseDeadlinePeriod $transportServiceProviderResponseDeadlinePeriod)
    {
        $this->transportServiceProviderResponseDeadlinePeriod[] = $transportServiceProviderResponseDeadlinePeriod;
        return $this;
    }

    /**
     * isset transportServiceProviderResponseDeadlinePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportServiceProviderResponseDeadlinePeriod($index)
    {
        return isset($this->transportServiceProviderResponseDeadlinePeriod[$index]);
    }

    /**
     * unset transportServiceProviderResponseDeadlinePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportServiceProviderResponseDeadlinePeriod($index)
    {
        unset($this->transportServiceProviderResponseDeadlinePeriod[$index]);
    }

    /**
     * Gets as transportServiceProviderResponseDeadlinePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderResponseDeadlinePeriod[]
     */
    public function getTransportServiceProviderResponseDeadlinePeriod()
    {
        return $this->transportServiceProviderResponseDeadlinePeriod;
    }

    /**
     * Sets a new transportServiceProviderResponseDeadlinePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Service Provider Response Deadline_ Period. Period
     *  A deadline for a response from the Transport Service Provider to this Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Transport Service Provider Response Deadline
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportServiceProviderResponseDeadlinePeriod[] $transportServiceProviderResponseDeadlinePeriod
     * @return self
     */
    public function setTransportServiceProviderResponseDeadlinePeriod(?array $transportServiceProviderResponseDeadlinePeriod = null)
    {
        $this->transportServiceProviderResponseDeadlinePeriod = $transportServiceProviderResponseDeadlinePeriod;
        return $this;
    }

    /**
     * Gets as mainTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Main_ Transportation Service. Transportation Service
     *  A description of the main transportation service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Main
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainTransportationService
     */
    public function getMainTransportationService()
    {
        return $this->mainTransportationService;
    }

    /**
     * Sets a new mainTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Main_ Transportation Service. Transportation Service
     *  A description of the main transportation service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Main
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainTransportationService $mainTransportationService
     * @return self
     */
    public function setMainTransportationService(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainTransportationService $mainTransportationService = null)
    {
        $this->mainTransportationService = $mainTransportationService;
        return $this;
    }

    /**
     * Adds as additionalTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalTransportationService $additionalTransportationService
     */
    public function addToAdditionalTransportationService(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalTransportationService $additionalTransportationService)
    {
        $this->additionalTransportationService[] = $additionalTransportationService;
        return $this;
    }

    /**
     * isset additionalTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTransportationService($index)
    {
        return isset($this->additionalTransportationService[$index]);
    }

    /**
     * unset additionalTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTransportationService($index)
    {
        unset($this->additionalTransportationService[$index]);
    }

    /**
     * Gets as additionalTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalTransportationService[]
     */
    public function getAdditionalTransportationService()
    {
        return $this->additionalTransportationService;
    }

    /**
     * Sets a new additionalTransportationService
     *
     * ASBIE
     *  Transport Execution Plan Request. Additional_ Transportation Service. Transportation Service
     *  A description of an additional transportation service referenced in the Transport Execution Plan Request.
     *  0..n
     *  Transport Execution Plan Request
     *  Additional
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AdditionalTransportationService[] $additionalTransportationService
     * @return self
     */
    public function setAdditionalTransportationService(?array $additionalTransportationService = null)
    {
        $this->additionalTransportationService = $additionalTransportationService;
        return $this;
    }

    /**
     * Gets as serviceStartTimePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Service Start Time_ Period. Period
     *  The period within which the services referred to in the Transport Execution Plan Request must begin.
     *  0..1
     *  Transport Execution Plan Request
     *  Service Start Time
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceStartTimePeriod
     */
    public function getServiceStartTimePeriod()
    {
        return $this->serviceStartTimePeriod;
    }

    /**
     * Sets a new serviceStartTimePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Service Start Time_ Period. Period
     *  The period within which the services referred to in the Transport Execution Plan Request must begin.
     *  0..1
     *  Transport Execution Plan Request
     *  Service Start Time
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceStartTimePeriod $serviceStartTimePeriod
     * @return self
     */
    public function setServiceStartTimePeriod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceStartTimePeriod $serviceStartTimePeriod = null)
    {
        $this->serviceStartTimePeriod = $serviceStartTimePeriod;
        return $this;
    }

    /**
     * Gets as serviceEndTimePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Service End Time_ Period. Period
     *  The period during which the services referred to in the Transport Execution Plan Request must be completed.
     *  0..1
     *  Transport Execution Plan Request
     *  Service End Time
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceEndTimePeriod
     */
    public function getServiceEndTimePeriod()
    {
        return $this->serviceEndTimePeriod;
    }

    /**
     * Sets a new serviceEndTimePeriod
     *
     * ASBIE
     *  Transport Execution Plan Request. Service End Time_ Period. Period
     *  The period during which the services referred to in the Transport Execution Plan Request must be completed.
     *  0..1
     *  Transport Execution Plan Request
     *  Service End Time
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceEndTimePeriod $serviceEndTimePeriod
     * @return self
     */
    public function setServiceEndTimePeriod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ServiceEndTimePeriod $serviceEndTimePeriod = null)
    {
        $this->serviceEndTimePeriod = $serviceEndTimePeriod;
        return $this;
    }

    /**
     * Gets as fromLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. From_ Location. Location
     *  The location of origin of the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  From
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FromLocation
     */
    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    /**
     * Sets a new fromLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. From_ Location. Location
     *  The location of origin of the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  From
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FromLocation $fromLocation
     * @return self
     */
    public function setFromLocation(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\FromLocation $fromLocation = null)
    {
        $this->fromLocation = $fromLocation;
        return $this;
    }

    /**
     * Gets as toLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. To_ Location. Location
     *  The destination location for the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  To
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ToLocation
     */
    public function getToLocation()
    {
        return $this->toLocation;
    }

    /**
     * Sets a new toLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. To_ Location. Location
     *  The destination location for the transport service referenced in the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  To
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ToLocation $toLocation
     * @return self
     */
    public function setToLocation(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ToLocation $toLocation = null)
    {
        $this->toLocation = $toLocation;
        return $this;
    }

    /**
     * Gets as atLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. At_ Location. Location
     *  The location of a transport service (e.g., terminal handling service) that does not require transport movement.
     *  0..1
     *  Transport Execution Plan Request
     *  At
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AtLocation
     */
    public function getAtLocation()
    {
        return $this->atLocation;
    }

    /**
     * Sets a new atLocation
     *
     * ASBIE
     *  Transport Execution Plan Request. At_ Location. Location
     *  The location of a transport service (e.g., terminal handling service) that does not require transport movement.
     *  0..1
     *  Transport Execution Plan Request
     *  At
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AtLocation $atLocation
     * @return self
     */
    public function setAtLocation(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AtLocation $atLocation = null)
    {
        $this->atLocation = $atLocation;
        return $this;
    }

    /**
     * Gets as transportExecutionTerms
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Execution Terms
     *  A description of terms and conditions related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Terms
     *  Transport Execution Terms
     *  Transport Execution Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionTerms
     */
    public function getTransportExecutionTerms()
    {
        return $this->transportExecutionTerms;
    }

    /**
     * Sets a new transportExecutionTerms
     *
     * ASBIE
     *  Transport Execution Plan Request. Transport Execution Terms
     *  A description of terms and conditions related to the Transport Execution Plan Request.
     *  0..1
     *  Transport Execution Plan Request
     *  Transport Execution Terms
     *  Transport Execution Terms
     *  Transport Execution Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionTerms $transportExecutionTerms
     * @return self
     */
    public function setTransportExecutionTerms(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportExecutionTerms $transportExecutionTerms = null)
    {
        $this->transportExecutionTerms = $transportExecutionTerms;
        return $this;
    }

    /**
     * Adds as consignment
     *
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment $consignment
     */
    public function addToConsignment(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment $consignment)
    {
        $this->consignment[] = $consignment;
        return $this;
    }

    /**
     * isset consignment
     *
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsignment($index)
    {
        return isset($this->consignment[$index]);
    }

    /**
     * unset consignment
     *
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsignment($index)
    {
        unset($this->consignment[$index]);
    }

    /**
     * Gets as consignment
     *
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment[]
     */
    public function getConsignment()
    {
        return $this->consignment;
    }

    /**
     * Sets a new consignment
     *
     * ASBIE
     *  Transport Execution Plan Request. Consignment
     *  A description of an identifiable collection of goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
     *  1..n
     *  Transport Execution Plan Request
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment[] $consignment
     * @return self
     */
    public function setConsignment(array $consignment)
    {
        $this->consignment = $consignment;
        return $this;
    }
}

