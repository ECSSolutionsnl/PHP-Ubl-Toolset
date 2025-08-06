<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\GoodsItemItinerary;

/**
 * Class representing GoodsItemItineraryType
 *
 * ABIE
 *  Goods Item Itinerary. Details
 *  A document providing details relating to a transport service, such as transport movement, identification of equipment and goods, subcontracted service providers, etc.
 *  Goods Item Itinerary
 * XSD Type: GoodsItemItineraryType
 */
class GoodsItemItineraryType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Goods Item Itinerary. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Itinerary
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Itinerary
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Itinerary
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Itinerary
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Itinerary
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Itinerary
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Goods Item Itinerary
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  1
     *  Goods Item Itinerary
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Version. Identifier
     *  Identifies a version of a Goods Item Itinerary in order to distinguish updates.
     *  1
     *  Goods Item Itinerary
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Goods Item Itinerary. Transport Execution Plan Reference. Identifier
     *  The Transport Execution Plan associated with this Goods Item Itinerary.
     *  1
     *  Goods Item Itinerary
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     */
    private $transportExecutionPlanReferenceID = null;

    /**
     * ASBIE
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Sender_ Party. Party
     *  The sender of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty
     */
    private $senderParty = null;

    /**
     * ASBIE
     *  Goods Item Itinerary. Receiver_ Party. Party
     *  The receiver of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedConsignment[] $referencedConsignment
     */
    private $referencedConsignment = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedTransportEquipment[] $referencedTransportEquipment
     */
    private $referencedTransportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedPackage[] $referencedPackage
     */
    private $referencedPackage = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedGoodsItem[] $referencedGoodsItem
     */
    private $referencedGoodsItem = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationSegment[] $transportationSegment
     */
    private $transportationSegment = [
        
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
     *  Goods Item Itinerary. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Itinerary
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Item Itinerary. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Goods Item Itinerary
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Goods Item Itinerary. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Goods Item Itinerary
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Goods Item Itinerary. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  1
     *  Goods Item Itinerary
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Version. Identifier
     *  Identifies a version of a Goods Item Itinerary in order to distinguish updates.
     *  1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Version. Identifier
     *  Identifies a version of a Goods Item Itinerary in order to distinguish updates.
     *  1
     *  Goods Item Itinerary
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as transportExecutionPlanReferenceID
     *
     * BBIE
     *  Goods Item Itinerary. Transport Execution Plan Reference. Identifier
     *  The Transport Execution Plan associated with this Goods Item Itinerary.
     *  1
     *  Goods Item Itinerary
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TransportExecutionPlanReferenceID
     */
    public function getTransportExecutionPlanReferenceID()
    {
        return $this->transportExecutionPlanReferenceID;
    }

    /**
     * Sets a new transportExecutionPlanReferenceID
     *
     * BBIE
     *  Goods Item Itinerary. Transport Execution Plan Reference. Identifier
     *  The Transport Execution Plan associated with this Goods Item Itinerary.
     *  1
     *  Goods Item Itinerary
     *  Transport Execution Plan Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID
     * @return self
     */
    public function setTransportExecutionPlanReferenceID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TransportExecutionPlanReferenceID $transportExecutionPlanReferenceID)
    {
        $this->transportExecutionPlanReferenceID = $transportExecutionPlanReferenceID;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Signature
     *  A signature applied to this document.
     *  0..n
     *  Goods Item Itinerary
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
     * Gets as senderParty
     *
     * ASBIE
     *  Goods Item Itinerary. Sender_ Party. Party
     *  The sender of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty
     */
    public function getSenderParty()
    {
        return $this->senderParty;
    }

    /**
     * Sets a new senderParty
     *
     * ASBIE
     *  Goods Item Itinerary. Sender_ Party. Party
     *  The sender of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty = null)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Goods Item Itinerary. Receiver_ Party. Party
     *  The receiver of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
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
     *  Goods Item Itinerary. Receiver_ Party. Party
     *  The receiver of this Goods Item Itinerary.
     *  0..1
     *  Goods Item Itinerary
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceiverParty $receiverParty = null)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Adds as referencedConsignment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedConsignment $referencedConsignment
     */
    public function addToReferencedConsignment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedConsignment $referencedConsignment)
    {
        $this->referencedConsignment[] = $referencedConsignment;
        return $this;
    }

    /**
     * isset referencedConsignment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedConsignment($index)
    {
        return isset($this->referencedConsignment[$index]);
    }

    /**
     * unset referencedConsignment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedConsignment($index)
    {
        unset($this->referencedConsignment[$index]);
    }

    /**
     * Gets as referencedConsignment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedConsignment[]
     */
    public function getReferencedConsignment()
    {
        return $this->referencedConsignment;
    }

    /**
     * Sets a new referencedConsignment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Consignment. Consignment
     *  A consignment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedConsignment[] $referencedConsignment
     * @return self
     */
    public function setReferencedConsignment(?array $referencedConsignment = null)
    {
        $this->referencedConsignment = $referencedConsignment;
        return $this;
    }

    /**
     * Adds as referencedTransportEquipment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedTransportEquipment $referencedTransportEquipment
     */
    public function addToReferencedTransportEquipment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedTransportEquipment $referencedTransportEquipment)
    {
        $this->referencedTransportEquipment[] = $referencedTransportEquipment;
        return $this;
    }

    /**
     * isset referencedTransportEquipment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedTransportEquipment($index)
    {
        return isset($this->referencedTransportEquipment[$index]);
    }

    /**
     * unset referencedTransportEquipment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedTransportEquipment($index)
    {
        unset($this->referencedTransportEquipment[$index]);
    }

    /**
     * Gets as referencedTransportEquipment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedTransportEquipment[]
     */
    public function getReferencedTransportEquipment()
    {
        return $this->referencedTransportEquipment;
    }

    /**
     * Sets a new referencedTransportEquipment
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Transport Equipment. Transport Equipment
     *  Transport equipment being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedTransportEquipment[] $referencedTransportEquipment
     * @return self
     */
    public function setReferencedTransportEquipment(?array $referencedTransportEquipment = null)
    {
        $this->referencedTransportEquipment = $referencedTransportEquipment;
        return $this;
    }

    /**
     * Adds as referencedPackage
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedPackage $referencedPackage
     */
    public function addToReferencedPackage(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedPackage $referencedPackage)
    {
        $this->referencedPackage[] = $referencedPackage;
        return $this;
    }

    /**
     * isset referencedPackage
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedPackage($index)
    {
        return isset($this->referencedPackage[$index]);
    }

    /**
     * unset referencedPackage
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedPackage($index)
    {
        unset($this->referencedPackage[$index]);
    }

    /**
     * Gets as referencedPackage
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedPackage[]
     */
    public function getReferencedPackage()
    {
        return $this->referencedPackage;
    }

    /**
     * Sets a new referencedPackage
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Package. Package
     *  A package being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Package
     *  Package
     *  Package
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedPackage[] $referencedPackage
     * @return self
     */
    public function setReferencedPackage(?array $referencedPackage = null)
    {
        $this->referencedPackage = $referencedPackage;
        return $this;
    }

    /**
     * Adds as referencedGoodsItem
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedGoodsItem $referencedGoodsItem
     */
    public function addToReferencedGoodsItem(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedGoodsItem $referencedGoodsItem)
    {
        $this->referencedGoodsItem[] = $referencedGoodsItem;
        return $this;
    }

    /**
     * isset referencedGoodsItem
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedGoodsItem($index)
    {
        return isset($this->referencedGoodsItem[$index]);
    }

    /**
     * unset referencedGoodsItem
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedGoodsItem($index)
    {
        unset($this->referencedGoodsItem[$index]);
    }

    /**
     * Gets as referencedGoodsItem
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedGoodsItem[]
     */
    public function getReferencedGoodsItem()
    {
        return $this->referencedGoodsItem;
    }

    /**
     * Sets a new referencedGoodsItem
     *
     * ASBIE
     *  Goods Item Itinerary. Referenced_ Goods Item. Goods Item
     *  An item of goods being transported in the transport service associated with this Goods Item Itinerary.
     *  0..n
     *  Goods Item Itinerary
     *  Referenced
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReferencedGoodsItem[] $referencedGoodsItem
     * @return self
     */
    public function setReferencedGoodsItem(?array $referencedGoodsItem = null)
    {
        $this->referencedGoodsItem = $referencedGoodsItem;
        return $this;
    }

    /**
     * Adds as transportationSegment
     *
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationSegment $transportationSegment
     */
    public function addToTransportationSegment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationSegment $transportationSegment)
    {
        $this->transportationSegment[] = $transportationSegment;
        return $this;
    }

    /**
     * isset transportationSegment
     *
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportationSegment($index)
    {
        return isset($this->transportationSegment[$index]);
    }

    /**
     * unset transportationSegment
     *
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportationSegment($index)
    {
        unset($this->transportationSegment[$index]);
    }

    /**
     * Gets as transportationSegment
     *
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationSegment[]
     */
    public function getTransportationSegment()
    {
        return $this->transportationSegment;
    }

    /**
     * Sets a new transportationSegment
     *
     * ASBIE
     *  Goods Item Itinerary. Transportation Segment
     *  A part of a transport service that has its own Transport Execution Plan. A Transportation Segment may cover services other than transport, such as terminal handling, document management, customs procedures, etc.
     *  1..n
     *  Goods Item Itinerary
     *  Transportation Segment
     *  Transportation Segment
     *  Transportation Segment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationSegment[] $transportationSegment
     * @return self
     */
    public function setTransportationSegment(array $transportationSegment)
    {
        $this->transportationSegment = $transportationSegment;
        return $this;
    }
}

