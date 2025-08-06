<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\TransportationStatus;

/**
 * Class representing TransportationStatusType
 *
 * ABIE
 *  Transportation Status. Details
 *  A document to circulate reports of transportation status or changes in status (events) among a group of participants.
 *  Transportation Status
 * XSD Type: TransportationStatusType
 */
class TransportationStatusType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Transportation Status. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transportation Status
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transportation Status. Carrier Assigned_ Identifier. Identifier
     *  A reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Transportation Status
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID
     */
    private $carrierAssignedID = null;

    /**
     * BBIE
     *  Transportation Status. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transportation Status
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Transportation Status. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transportation Status
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Transportation Status. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transportation Status
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Transportation Status. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Transportation Status
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Shipping Order Identifier. Identifier
     *  A reference number for a shipping order.
     *  0..1
     *  Transportation Status
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID
     */
    private $shippingOrderID = null;

    /**
     * BBIE
     *  Transportation Status. Other_ Instruction. Text
     *  An instruction regarding this message.
     *  0..1
     *  Transportation Status
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OtherInstruction $otherInstruction
     */
    private $otherInstruction = null;

    /**
     * BBIE
     *  Transportation Status. Transportation Status Type Code. Code
     *  A code signifying the type of status provided in a Transportation Status document.
     *  0..1
     *  Transportation Status
     *  Transportation Status Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportationStatusTypeCode $transportationStatusTypeCode
     */
    private $transportationStatusTypeCode = null;

    /**
     * BBIE
     *  Transportation Status. Transport Execution Status Code. Code
     *  A code signifying the overall status of transport service execution.
     *  0..1
     *  Transportation Status
     *  Transport Execution Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportExecutionStatusCode $transportExecutionStatusCode
     */
    private $transportExecutionStatusCode = null;

    /**
     * ASBIE
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment[] $consignment
     */
    private $consignment = [
        
    ];

    /**
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportEvent[] $transportEvent
     */
    private $transportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Sender_ Party. Party
     *  The party sending this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Receiver_ Party. Party
     *  The party receiving this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Transportation Status Request_ Document Reference. Document Reference
     *  A reference to the Transportation Status Request to which this report is a response.
     *  0..1
     *  Transportation Status
     *  Transportation Status Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportationStatusRequestDocumentReference $transportationStatusRequestDocumentReference
     */
    private $transportationStatusRequestDocumentReference = null;

    /**
     * ASBIE
     *  Transportation Status. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to the Transport Execution Plan associated with the transport service whose status is being reported.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Updated Pickup_ Transport Event. Transport Event
     *  Update of the original plan regarding a pickup of goods.
     *  0..1
     *  Transportation Status
     *  Updated Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedPickupTransportEvent $updatedPickupTransportEvent
     */
    private $updatedPickupTransportEvent = null;

    /**
     * ASBIE
     *  Transportation Status. Updated Delivery_ Transport Event. Transport Event
     *  Update of the original plan regarding a delivery.
     *  0..1
     *  Transportation Status
     *  Updated Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedDeliveryTransportEvent $updatedDeliveryTransportEvent
     */
    private $updatedDeliveryTransportEvent = null;

    /**
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusLocation[] $statusLocation
     */
    private $statusLocation = [
        
    ];

    /**
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusPeriod[] $statusPeriod
     */
    private $statusPeriod = [
        
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
     *  Transportation Status. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transportation Status
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
     *  Transportation Status. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transportation Status
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
     * Gets as carrierAssignedID
     *
     * BBIE
     *  Transportation Status. Carrier Assigned_ Identifier. Identifier
     *  A reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Transportation Status
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CarrierAssignedID
     */
    public function getCarrierAssignedID()
    {
        return $this->carrierAssignedID;
    }

    /**
     * Sets a new carrierAssignedID
     *
     * BBIE
     *  Transportation Status. Carrier Assigned_ Identifier. Identifier
     *  A reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Transportation Status
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID
     * @return self
     */
    public function setCarrierAssignedID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID = null)
    {
        $this->carrierAssignedID = $carrierAssignedID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Transportation Status. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transportation Status
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
     * Gets as name
     *
     * BBIE
     *  Transportation Status. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Transportation Status
     *  Name
     *  Name
     *  Name. Type
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
     *  Transportation Status. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Transportation Status
     *  Name
     *  Name
     *  Name. Type
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
     * Adds as description
     *
     * BBIE
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
     *  Description
     *  Text
     *  Text. Type
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
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
     *  Description
     *  Text
     *  Text. Type
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
     *  Transportation Status. Description. Text
     *  A textual description of transportation status.
     *  0..n
     *  Transportation Status
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as note
     *
     * BBIE
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transportation Status
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
     * Gets as shippingOrderID
     *
     * BBIE
     *  Transportation Status. Shipping Order Identifier. Identifier
     *  A reference number for a shipping order.
     *  0..1
     *  Transportation Status
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ShippingOrderID
     */
    public function getShippingOrderID()
    {
        return $this->shippingOrderID;
    }

    /**
     * Sets a new shippingOrderID
     *
     * BBIE
     *  Transportation Status. Shipping Order Identifier. Identifier
     *  A reference number for a shipping order.
     *  0..1
     *  Transportation Status
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID
     * @return self
     */
    public function setShippingOrderID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID = null)
    {
        $this->shippingOrderID = $shippingOrderID;
        return $this;
    }

    /**
     * Gets as otherInstruction
     *
     * BBIE
     *  Transportation Status. Other_ Instruction. Text
     *  An instruction regarding this message.
     *  0..1
     *  Transportation Status
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OtherInstruction
     */
    public function getOtherInstruction()
    {
        return $this->otherInstruction;
    }

    /**
     * Sets a new otherInstruction
     *
     * BBIE
     *  Transportation Status. Other_ Instruction. Text
     *  An instruction regarding this message.
     *  0..1
     *  Transportation Status
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OtherInstruction $otherInstruction
     * @return self
     */
    public function setOtherInstruction(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OtherInstruction $otherInstruction = null)
    {
        $this->otherInstruction = $otherInstruction;
        return $this;
    }

    /**
     * Gets as transportationStatusTypeCode
     *
     * BBIE
     *  Transportation Status. Transportation Status Type Code. Code
     *  A code signifying the type of status provided in a Transportation Status document.
     *  0..1
     *  Transportation Status
     *  Transportation Status Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportationStatusTypeCode
     */
    public function getTransportationStatusTypeCode()
    {
        return $this->transportationStatusTypeCode;
    }

    /**
     * Sets a new transportationStatusTypeCode
     *
     * BBIE
     *  Transportation Status. Transportation Status Type Code. Code
     *  A code signifying the type of status provided in a Transportation Status document.
     *  0..1
     *  Transportation Status
     *  Transportation Status Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportationStatusTypeCode $transportationStatusTypeCode
     * @return self
     */
    public function setTransportationStatusTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportationStatusTypeCode $transportationStatusTypeCode = null)
    {
        $this->transportationStatusTypeCode = $transportationStatusTypeCode;
        return $this;
    }

    /**
     * Gets as transportExecutionStatusCode
     *
     * BBIE
     *  Transportation Status. Transport Execution Status Code. Code
     *  A code signifying the overall status of transport service execution.
     *  0..1
     *  Transportation Status
     *  Transport Execution Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportExecutionStatusCode
     */
    public function getTransportExecutionStatusCode()
    {
        return $this->transportExecutionStatusCode;
    }

    /**
     * Sets a new transportExecutionStatusCode
     *
     * BBIE
     *  Transportation Status. Transport Execution Status Code. Code
     *  A code signifying the overall status of transport service execution.
     *  0..1
     *  Transportation Status
     *  Transport Execution Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportExecutionStatusCode $transportExecutionStatusCode
     * @return self
     */
    public function setTransportExecutionStatusCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TransportExecutionStatusCode $transportExecutionStatusCode = null)
    {
        $this->transportExecutionStatusCode = $transportExecutionStatusCode;
        return $this;
    }

    /**
     * Adds as consignment
     *
     * ASBIE
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Consignment
     *  A consignment associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Consignment[] $consignment
     * @return self
     */
    public function setConsignment(?array $consignment = null)
    {
        $this->consignment = $consignment;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportEvent $transportEvent
     */
    public function addToTransportEvent(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportEvent $transportEvent)
    {
        $this->transportEvent[] = $transportEvent;
        return $this;
    }

    /**
     * isset transportEvent
     *
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEvent($index)
    {
        return isset($this->transportEvent[$index]);
    }

    /**
     * unset transportEvent
     *
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEvent($index)
    {
        unset($this->transportEvent[$index]);
    }

    /**
     * Gets as transportEvent
     *
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportEvent[]
     */
    public function getTransportEvent()
    {
        return $this->transportEvent;
    }

    /**
     * Sets a new transportEvent
     *
     * ASBIE
     *  Transportation Status. Transport Event
     *  An event associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportEvent[] $transportEvent
     * @return self
     */
    public function setTransportEvent(?array $transportEvent = null)
    {
        $this->transportEvent = $transportEvent;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     *  Transportation Status. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transportation Status
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
     * Gets as senderParty
     *
     * ASBIE
     *  Transportation Status. Sender_ Party. Party
     *  The party sending this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Sender_ Party. Party
     *  The party sending this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Receiver_ Party. Party
     *  The party receiving this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Receiver_ Party. Party
     *  The party receiving this Transportation Status report.
     *  0..1
     *  Transportation Status
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
     * Gets as transportationStatusRequestDocumentReference
     *
     * ASBIE
     *  Transportation Status. Transportation Status Request_ Document Reference. Document Reference
     *  A reference to the Transportation Status Request to which this report is a response.
     *  0..1
     *  Transportation Status
     *  Transportation Status Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportationStatusRequestDocumentReference
     */
    public function getTransportationStatusRequestDocumentReference()
    {
        return $this->transportationStatusRequestDocumentReference;
    }

    /**
     * Sets a new transportationStatusRequestDocumentReference
     *
     * ASBIE
     *  Transportation Status. Transportation Status Request_ Document Reference. Document Reference
     *  A reference to the Transportation Status Request to which this report is a response.
     *  0..1
     *  Transportation Status
     *  Transportation Status Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportationStatusRequestDocumentReference $transportationStatusRequestDocumentReference
     * @return self
     */
    public function setTransportationStatusRequestDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TransportationStatusRequestDocumentReference $transportationStatusRequestDocumentReference = null)
    {
        $this->transportationStatusRequestDocumentReference = $transportationStatusRequestDocumentReference;
        return $this;
    }

    /**
     * Gets as transportExecutionPlanDocumentReference
     *
     * ASBIE
     *  Transportation Status. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to the Transport Execution Plan associated with the transport service whose status is being reported.
     *  0..1
     *  Transportation Status
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
     *  Transportation Status. Transport Execution Plan_ Document Reference. Document Reference
     *  A reference to the Transport Execution Plan associated with the transport service whose status is being reported.
     *  0..1
     *  Transportation Status
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
     * Gets as updatedPickupTransportEvent
     *
     * ASBIE
     *  Transportation Status. Updated Pickup_ Transport Event. Transport Event
     *  Update of the original plan regarding a pickup of goods.
     *  0..1
     *  Transportation Status
     *  Updated Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedPickupTransportEvent
     */
    public function getUpdatedPickupTransportEvent()
    {
        return $this->updatedPickupTransportEvent;
    }

    /**
     * Sets a new updatedPickupTransportEvent
     *
     * ASBIE
     *  Transportation Status. Updated Pickup_ Transport Event. Transport Event
     *  Update of the original plan regarding a pickup of goods.
     *  0..1
     *  Transportation Status
     *  Updated Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedPickupTransportEvent $updatedPickupTransportEvent
     * @return self
     */
    public function setUpdatedPickupTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedPickupTransportEvent $updatedPickupTransportEvent = null)
    {
        $this->updatedPickupTransportEvent = $updatedPickupTransportEvent;
        return $this;
    }

    /**
     * Gets as updatedDeliveryTransportEvent
     *
     * ASBIE
     *  Transportation Status. Updated Delivery_ Transport Event. Transport Event
     *  Update of the original plan regarding a delivery.
     *  0..1
     *  Transportation Status
     *  Updated Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedDeliveryTransportEvent
     */
    public function getUpdatedDeliveryTransportEvent()
    {
        return $this->updatedDeliveryTransportEvent;
    }

    /**
     * Sets a new updatedDeliveryTransportEvent
     *
     * ASBIE
     *  Transportation Status. Updated Delivery_ Transport Event. Transport Event
     *  Update of the original plan regarding a delivery.
     *  0..1
     *  Transportation Status
     *  Updated Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedDeliveryTransportEvent $updatedDeliveryTransportEvent
     * @return self
     */
    public function setUpdatedDeliveryTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\UpdatedDeliveryTransportEvent $updatedDeliveryTransportEvent = null)
    {
        $this->updatedDeliveryTransportEvent = $updatedDeliveryTransportEvent;
        return $this;
    }

    /**
     * Adds as statusLocation
     *
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusLocation $statusLocation
     */
    public function addToStatusLocation(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusLocation $statusLocation)
    {
        $this->statusLocation[] = $statusLocation;
        return $this;
    }

    /**
     * isset statusLocation
     *
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusLocation($index)
    {
        return isset($this->statusLocation[$index]);
    }

    /**
     * unset statusLocation
     *
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusLocation($index)
    {
        unset($this->statusLocation[$index]);
    }

    /**
     * Gets as statusLocation
     *
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusLocation[]
     */
    public function getStatusLocation()
    {
        return $this->statusLocation;
    }

    /**
     * Sets a new statusLocation
     *
     * ASBIE
     *  Transportation Status. Status_ Location. Location
     *  Locations associated with this Transportation Status report.
     *  0..n
     *  Transportation Status
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusLocation[] $statusLocation
     * @return self
     */
    public function setStatusLocation(?array $statusLocation = null)
    {
        $this->statusLocation = $statusLocation;
        return $this;
    }

    /**
     * Adds as statusPeriod
     *
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusPeriod $statusPeriod
     */
    public function addToStatusPeriod(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusPeriod $statusPeriod)
    {
        $this->statusPeriod[] = $statusPeriod;
        return $this;
    }

    /**
     * isset statusPeriod
     *
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusPeriod($index)
    {
        return isset($this->statusPeriod[$index]);
    }

    /**
     * unset statusPeriod
     *
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusPeriod($index)
    {
        unset($this->statusPeriod[$index]);
    }

    /**
     * Gets as statusPeriod
     *
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusPeriod[]
     */
    public function getStatusPeriod()
    {
        return $this->statusPeriod;
    }

    /**
     * Sets a new statusPeriod
     *
     * ASBIE
     *  Transportation Status. Status_ Period. Period
     *  A period for which status is provided.
     *  0..n
     *  Transportation Status
     *  Status
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\StatusPeriod[] $statusPeriod
     * @return self
     */
    public function setStatusPeriod(?array $statusPeriod = null)
    {
        $this->statusPeriod = $statusPeriod;
        return $this;
    }
}

