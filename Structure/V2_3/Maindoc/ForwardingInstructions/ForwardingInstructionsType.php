<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ForwardingInstructions;

/**
 * Class representing ForwardingInstructionsType
 *
 * ABIE
 *  Forwarding Instructions. Details
 *  A document issued to a forwarder, giving instructions regarding the action to be taken for the forwarding of goods described therein. Forwarding Instructions is used by any party who gives instructions for the transportation services required for a consignment of goods to any party who is contracted to provide the transportation services. The parties who issue this document are commonly referred to as the shipper or consignor, while the parties who receive this document are forwarders, carriers, shipping agents, etc. This document may also be issued by a forwarder or shipping agent in its capacity as a shipper. This document can be used to arrange for the transportation (1) of different types of goods or cargoes; (2) whether containerized or non-containerized; (3) through different modes of transport including multi-modal; and (4) from any origin to any destination.
 *  Forwarding Instructions
 *  Forwarding Instruction, Freight Forwarding Instruction, Shippers Letter of Instruction, Shipper's Letter of Instruction, Shipping Instruction
 * XSD Type: ForwardingInstructionsType
 */
class ForwardingInstructionsType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Forwarding Instructions. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forwarding Instructions
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Forwarding Instructions. Carrier Assigned_ Identifier. Identifier
     *  Reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Forwarding Instructions
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CarrierAssignedID $carrierAssignedID
     */
    private $carrierAssignedID = null;

    /**
     * BBIE
     *  Forwarding Instructions. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forwarding Instructions
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Forwarding Instructions. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Forwarding Instructions
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Forwarding Instructions. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forwarding Instructions
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Forwarding Instructions. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Forwarding Instructions
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Status Code. Code
     *  A code signifying the status of the Forwarding Instructions with respect to its original state. This code may be used if the document precedes the event and is subsequently found to be incorrect and in need of cancellation or revision.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order.
     *  0..1
     *  Forwarding Instructions
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ShippingOrderID $shippingOrderID
     */
    private $shippingOrderID = null;

    /**
     * BBIE
     *  Forwarding Instructions. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Forwarding Instructions
     *  Declared Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DeclaredCarriageValueAmount $declaredCarriageValueAmount
     */
    private $declaredCarriageValueAmount = null;

    /**
     * BBIE
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherInstruction[] $otherInstruction
     */
    private $otherInstruction = [
        
    ];

    /**
     * ASBIE
     *  Forwarding Instructions. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  1
     *  Forwarding Instructions
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Forwarding Instructions
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
     * Gets as carrierAssignedID
     *
     * BBIE
     *  Forwarding Instructions. Carrier Assigned_ Identifier. Identifier
     *  Reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Forwarding Instructions
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Forwarding Instructions. Carrier Assigned_ Identifier. Identifier
     *  Reference number assigned by a carrier or its agent to identify a specific shipment, such as a booking reference number when cargo space is reserved prior to loading.
     *  0..1
     *  Forwarding Instructions
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Forwarding Instructions. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Forwarding Instructions
     *  Name
     *  Name
     *  Name. Type
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
     *  Forwarding Instructions. Name
     *  Text, assigned by the sender, that identifies this document to business users.
     *  0..1
     *  Forwarding Instructions
     *  Name
     *  Name
     *  Name. Type
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
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Status Code. Code
     *  A code signifying the status of the Forwarding Instructions with respect to its original state. This code may be used if the document precedes the event and is subsequently found to be incorrect and in need of cancellation or revision.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Status Code. Code
     *  A code signifying the status of the Forwarding Instructions with respect to its original state. This code may be used if the document precedes the event and is subsequently found to be incorrect and in need of cancellation or revision.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order.
     *  0..1
     *  Forwarding Instructions
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Forwarding Instructions. Shipping Order Identifier. Identifier
     *  Reference number to identify a Shipping Order.
     *  0..1
     *  Forwarding Instructions
     *  Shipping Order Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Forwarding Instructions. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. To Order_ Indicator. Indicator
     *  Indicates whether the transport document is consigned to order.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Ad Valorem_ Indicator. Indicator
     *  A term used in commerce in reference to certain duties, called ad valorem duties, which are levied on commodities at certain rates per centum on their value.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Forwarding Instructions
     *  Declared Carriage
     *  Value
     *  Amount
     *  Amount. Type
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
     *  Forwarding Instructions. Declared Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Forwarding Instructions
     *  Declared Carriage
     *  Value
     *  Amount
     *  Amount. Type
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
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
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
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
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
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
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
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
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
     *  Forwarding Instructions. Other_ Instruction. Text
     *  Contains other free-text instructions to the forwarders or carriers related to the shipment. This should only be used where such information cannot be represented in other structured information entities within the document.
     *  0..n
     *  Forwarding Instructions
     *  Other
     *  Instruction
     *  Text
     *  Text. Type
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
     *  Forwarding Instructions. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Carrier_ Party. Party
     *  The party providing the transport of goods between named points.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Freight Forwarder_ Party. Party
     *  A party combining individual smaller consignments into a single larger shipment (a so-called consolidated consignment or shipment) that is sent to a counterpart who mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  1
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Shipment
     *  An identifiable collection of one or more goods items to be transported between the seller party and the buyer party.
     *  1
     *  Forwarding Instructions
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
     * Adds as documentReference
     *
     * ASBIE
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Reference
     *  A reference to another document associated with this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Exchange Rate
     *  Information about the rate of exchange (conversion) between two currencies.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Document Distribution
     *  A list of interested parties to whom this document is distributed.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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
     *  Forwarding Instructions. Signature
     *  A signature applied to this document.
     *  0..n
     *  Forwarding Instructions
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

