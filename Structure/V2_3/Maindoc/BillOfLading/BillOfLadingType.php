<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\BillOfLading;

/**
 * Class representing BillOfLadingType
 *
 * ABIE
 *  Bill Of Lading. Details
 *  A document issued by the party who acts as an agent for a transportation carrier or other agents to the party who gives instructions for the transportation services (shipper, consignor, etc.) stating the details of the transportation, charges, and terms and conditions under which the transportation service is provided. The party issuing this document does not necessarily provide the physical transportation service. The information in the Bill of Lading corresponds to the information on the Forwarding Instructions. It is used for any mode of transport. A Bill of Lading can serve as a contractual document between the parties for the transportation service. The document evidences a contract of carriage by sea and the acceptance of responsibility for the goods by the carrier, by which the carrier undertakes to deliver the goods against surrender of the document. A provision in the document that the goods are to be delivered to the order of a named person, or to order, or to bearer, constitutes such an undertaking.
 *  Bill Of Lading
 *  House Bill of Landing, Master Bill, Bill
 * XSD Type: BillOfLadingType
 */
class BillOfLadingType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Bill Of Lading. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Bill Of Lading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Bill of Lading Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Bill Of Lading. Carrier Assigned_ Identifier. Identifier
     *  Reference number (such as a booking reference number) assigned by a carrier or its agent to identify a specific shipment when cargo space is reserved prior to loading.
     *  0..1
     *  Bill Of Lading
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Booking Reference Number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID
     */
    private $carrierAssignedID = null;

    /**
     * BBIE
     *  Bill Of Lading. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Bill Of Lading
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Bill Of Lading. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Bill Of Lading
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Bill Of Lading. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Bill Of Lading
     *  Name
     *  Name
     *  Name. Type
     *  House Bill , Consolidated Bill of Lading , Proforma , Sea Waybill
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Status Code. Code
     *  A code signifying the status of the Bill Of Lading (revision, replacement, etc.).
     *  0..1
     *  Bill Of Lading
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     */
    private $documentStatusCode = null;

    /**
     * BBIE
     *  Bill Of Lading. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order or Forwarding Instruction.
     *  0..1
     *  Bill Of Lading
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *  Freight forwarding instruction, Shippers letter of instruction
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID
     */
    private $shippingOrderID = null;

    /**
     * BBIE
     *  Bill Of Lading. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Bill Of Lading
     *  To Order
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $toOrderIndicator
     */
    private $toOrderIndicator = null;

    /**
     * BBIE
     *  Bill Of Lading. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Bill Of Lading
     *  Declared Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in Delivery
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount $declaredCarriageValueAmount
     */
    private $declaredCarriageValueAmount = null;

    /**
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction[] $otherInstruction
     */
    private $otherInstruction = [
        
    ];

    /**
     * ASBIE
     *  Bill Of Lading. Consignor_ Party. Party
     *  The party consigning goods as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Bill Of Lading
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty
     */
    private $consignorParty = null;

    /**
     * ASBIE
     *  Bill Of Lading. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Bill Of Lading
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CarrierParty $carrierParty
     */
    private $carrierParty = null;

    /**
     * ASBIE
     *  Bill Of Lading. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Bill Of Lading
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Bill Of Lading. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  0..1
     *  Bill Of Lading
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeRate[] $exchangeRate
     */
    private $exchangeRate = [
        
    ];

    /**
     * ASBIE
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Bill Of Lading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Bill of Lading Number
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
     *  Bill Of Lading. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Bill Of Lading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Bill of Lading Number
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
     * Gets as carrierAssignedID
     *
     * BBIE
     *  Bill Of Lading. Carrier Assigned_ Identifier. Identifier
     *  Reference number (such as a booking reference number) assigned by a carrier or its agent to identify a specific shipment when cargo space is reserved prior to loading.
     *  0..1
     *  Bill Of Lading
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Booking Reference Number
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CarrierAssignedID
     */
    public function getCarrierAssignedID()
    {
        return $this->carrierAssignedID;
    }

    /**
     * Sets a new carrierAssignedID
     *
     * BBIE
     *  Bill Of Lading. Carrier Assigned_ Identifier. Identifier
     *  Reference number (such as a booking reference number) assigned by a carrier or its agent to identify a specific shipment when cargo space is reserved prior to loading.
     *  0..1
     *  Bill Of Lading
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Booking Reference Number
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID
     * @return self
     */
    public function setCarrierAssignedID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID = null)
    {
        $this->carrierAssignedID = $carrierAssignedID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Bill Of Lading. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Bill Of Lading
     *  Name
     *  Name
     *  Name. Type
     *  House Bill , Consolidated Bill of Lading , Proforma , Sea Waybill
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
     *  Bill Of Lading. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Bill Of Lading
     *  Name
     *  Name
     *  Name. Type
     *  House Bill , Consolidated Bill of Lading , Proforma , Sea Waybill
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
     * Adds as description
     *
     * BBIE
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Bill Of Lading
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
     * Gets as documentStatusCode
     *
     * BBIE
     *  Bill Of Lading. Document Status Code. Code
     *  A code signifying the status of the Bill Of Lading (revision, replacement, etc.).
     *  0..1
     *  Bill Of Lading
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode
     */
    public function getDocumentStatusCode()
    {
        return $this->documentStatusCode;
    }

    /**
     * Sets a new documentStatusCode
     *
     * BBIE
     *  Bill Of Lading. Document Status Code. Code
     *  A code signifying the status of the Bill Of Lading (revision, replacement, etc.).
     *  0..1
     *  Bill Of Lading
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     * @return self
     */
    public function setDocumentStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode = null)
    {
        $this->documentStatusCode = $documentStatusCode;
        return $this;
    }

    /**
     * Gets as shippingOrderID
     *
     * BBIE
     *  Bill Of Lading. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order or Forwarding Instruction.
     *  0..1
     *  Bill Of Lading
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *  Freight forwarding instruction, Shippers letter of instruction
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ShippingOrderID
     */
    public function getShippingOrderID()
    {
        return $this->shippingOrderID;
    }

    /**
     * Sets a new shippingOrderID
     *
     * BBIE
     *  Bill Of Lading. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order or Forwarding Instruction.
     *  0..1
     *  Bill Of Lading
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *  Freight forwarding instruction, Shippers letter of instruction
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID
     * @return self
     */
    public function setShippingOrderID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID = null)
    {
        $this->shippingOrderID = $shippingOrderID;
        return $this;
    }

    /**
     * Gets as toOrderIndicator
     *
     * BBIE
     *  Bill Of Lading. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Bill Of Lading
     *  To Order
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getToOrderIndicator()
    {
        return $this->toOrderIndicator;
    }

    /**
     * Sets a new toOrderIndicator
     *
     * BBIE
     *  Bill Of Lading. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Bill Of Lading
     *  To Order
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $toOrderIndicator
     * @return self
     */
    public function setToOrderIndicator($toOrderIndicator)
    {
        $this->toOrderIndicator = $toOrderIndicator;
        return $this;
    }

    /**
     * Gets as adValoremIndicator
     *
     * BBIE
     *  Bill Of Lading. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Bill Of Lading
     *  Declared Carriage
     *  Value
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
     *  Bill Of Lading. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Bill Of Lading
     *  Declared Carriage
     *  Value
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
     * Adds as otherInstruction
     *
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction $otherInstruction
     */
    public function addToOtherInstruction(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction $otherInstruction)
    {
        $this->otherInstruction[] = $otherInstruction;
        return $this;
    }

    /**
     * isset otherInstruction
     *
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherInstruction($index)
    {
        return isset($this->otherInstruction[$index]);
    }

    /**
     * unset otherInstruction
     *
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherInstruction($index)
    {
        unset($this->otherInstruction[$index]);
    }

    /**
     * Gets as otherInstruction
     *
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction[]
     */
    public function getOtherInstruction()
    {
        return $this->otherInstruction;
    }

    /**
     * Sets a new otherInstruction
     *
     * BBIE
     *  Bill Of Lading. Other_ Instruction. Text
     *  Other free-text instructions to the forwarders or carriers related to the shipment. This element should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Bill Of Lading
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *  Bill of Lading Remark
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction[] $otherInstruction
     * @return self
     */
    public function setOtherInstruction(?array $otherInstruction = null)
    {
        $this->otherInstruction = $otherInstruction;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Bill Of Lading. Consignor_ Party. Party
     *  The party consigning goods as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Bill Of Lading
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
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
     *  Bill Of Lading. Consignor_ Party. Party
     *  The party consigning goods as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Bill Of Lading
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
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
     * Gets as carrierParty
     *
     * ASBIE
     *  Bill Of Lading. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Bill Of Lading
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CarrierParty
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Bill Of Lading. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Bill Of Lading
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CarrierParty $carrierParty = null)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Bill Of Lading. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Bill Of Lading
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
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
     *  Bill Of Lading. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Bill Of Lading
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
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
     * Gets as shipment
     *
     * ASBIE
     *  Bill Of Lading. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  0..1
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Bill Of Lading
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
     * Adds as exchangeRate
     *
     * ASBIE
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeRate $exchangeRate
     */
    public function addToExchangeRate(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * isset exchangeRate
     *
     * ASBIE
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * ASBIE
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeRate[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Bill Of Lading. Exchange Rate
     *  Information that directly relates to the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Bill Of Lading
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeRate[] $exchangeRate
     * @return self
     */
    public function setExchangeRate(?array $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as documentDistribution
     *
     * ASBIE
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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
     *  Bill Of Lading. Signature
     *  A signature applied to this document.
     *  0..n
     *  Bill Of Lading
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

