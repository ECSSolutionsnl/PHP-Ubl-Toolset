<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\WeightStatement;

/**
 * Class representing WeightStatementType
 *
 * ABIE
 *  Weight Statement. Details
 *  A document used to report weight or verified mass measurements in the transport chain.
 *  Weight Statement
 *  Weight Declaration, Weight Certificate
 * XSD Type: WeightStatementType
 */
class WeightStatementType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Weight Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Weight Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Weight Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Weight Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  SMDG
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Weight Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Weight Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  SOLAS
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Weight Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Weight Statement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Weight Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Weight Statement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Weight Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Weight Statement
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Weight Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Weight Statement
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Weight Statement. Weight Statement Type Code. Code
     *  A code signifying the type of Weight Statement.
     *  0..1
     *  Weight Statement
     *  Weight Statement Type Code
     *  Code
     *  Code. Type
     *  VGM, WeightCertificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightStatementTypeCode $weightStatementTypeCode
     */
    private $weightStatementTypeCode = null;

    /**
     * ASBIE
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Sender_ Party. Party
     *  The party sending this weight statement (e.g. Weighing Station, Shipper, Freight Forwarder, Carrier, ...).
     *  1
     *  Weight Statement
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
     *  Weight Statement. Receiver_ Party. Party
     *  The party receiving this weight statement (e.g. Carrier, Terminal Operator, ...).
     *  1
     *  Weight Statement
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
     *  Weight Statement. Weighing_ Party. Party
     *  The party executing the weight measure (e.g. Weighing Station).
     *  0..1
     *  Weight Statement
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WeighingParty $weighingParty
     */
    private $weighingParty = null;

    /**
     * ASBIE
     *  Weight Statement. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Weight Statement
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipperParty $shipperParty
     */
    private $shipperParty = null;

    /**
     * ASBIE
     *  Weight Statement. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Weight Statement
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleParty $responsibleParty
     */
    private $responsibleParty = null;

    /**
     * ASBIE
     *  Weight Statement. Shipment
     *  The relevant shipment information with details on the transport equipment weight or mass measurements, including verified gross mass (VGM) information.
     *  1
     *  Weight Statement
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

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
     *  Weight Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Weight Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
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
     *  Weight Statement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Weight Statement
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
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
     *  Weight Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Weight Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  SMDG
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
     *  Weight Statement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Weight Statement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  SMDG
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
     *  Weight Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Weight Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  SOLAS
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
     *  Weight Statement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Weight Statement
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  SOLAS
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
     *  Weight Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Weight Statement
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
     *  Weight Statement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Weight Statement
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
     *  Weight Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Weight Statement
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
     *  Weight Statement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Weight Statement
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
     *  Weight Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Weight Statement
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
     *  Weight Statement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Weight Statement
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
     * Gets as weightStatementTypeCode
     *
     * BBIE
     *  Weight Statement. Weight Statement Type Code. Code
     *  A code signifying the type of Weight Statement.
     *  0..1
     *  Weight Statement
     *  Weight Statement Type Code
     *  Code
     *  Code. Type
     *  VGM, WeightCertificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightStatementTypeCode
     */
    public function getWeightStatementTypeCode()
    {
        return $this->weightStatementTypeCode;
    }

    /**
     * Sets a new weightStatementTypeCode
     *
     * BBIE
     *  Weight Statement. Weight Statement Type Code. Code
     *  A code signifying the type of Weight Statement.
     *  0..1
     *  Weight Statement
     *  Weight Statement Type Code
     *  Code
     *  Code. Type
     *  VGM, WeightCertificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightStatementTypeCode $weightStatementTypeCode
     * @return self
     */
    public function setWeightStatementTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightStatementTypeCode $weightStatementTypeCode = null)
    {
        $this->weightStatementTypeCode = $weightStatementTypeCode;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Weight Statement
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
     *  Weight Statement. Sender_ Party. Party
     *  The party sending this weight statement (e.g. Weighing Station, Shipper, Freight Forwarder, Carrier, ...).
     *  1
     *  Weight Statement
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
     *  Weight Statement. Sender_ Party. Party
     *  The party sending this weight statement (e.g. Weighing Station, Shipper, Freight Forwarder, Carrier, ...).
     *  1
     *  Weight Statement
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Weight Statement. Receiver_ Party. Party
     *  The party receiving this weight statement (e.g. Carrier, Terminal Operator, ...).
     *  1
     *  Weight Statement
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
     *  Weight Statement. Receiver_ Party. Party
     *  The party receiving this weight statement (e.g. Carrier, Terminal Operator, ...).
     *  1
     *  Weight Statement
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
     * Gets as weighingParty
     *
     * ASBIE
     *  Weight Statement. Weighing_ Party. Party
     *  The party executing the weight measure (e.g. Weighing Station).
     *  0..1
     *  Weight Statement
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WeighingParty
     */
    public function getWeighingParty()
    {
        return $this->weighingParty;
    }

    /**
     * Sets a new weighingParty
     *
     * ASBIE
     *  Weight Statement. Weighing_ Party. Party
     *  The party executing the weight measure (e.g. Weighing Station).
     *  0..1
     *  Weight Statement
     *  Weighing
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WeighingParty $weighingParty
     * @return self
     */
    public function setWeighingParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WeighingParty $weighingParty = null)
    {
        $this->weighingParty = $weighingParty;
        return $this;
    }

    /**
     * Gets as shipperParty
     *
     * ASBIE
     *  Weight Statement. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Weight Statement
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipperParty
     */
    public function getShipperParty()
    {
        return $this->shipperParty;
    }

    /**
     * Sets a new shipperParty
     *
     * ASBIE
     *  Weight Statement. Shipper_ Party. Party
     *  The party playing the role of the Shipper (BCO, FF or NVOCC) who is responsible for the VGM (e.g. according the SOLAS Convention).
     *  0..1
     *  Weight Statement
     *  Shipper
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipperParty $shipperParty
     * @return self
     */
    public function setShipperParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipperParty $shipperParty = null)
    {
        $this->shipperParty = $shipperParty;
        return $this;
    }

    /**
     * Gets as responsibleParty
     *
     * ASBIE
     *  Weight Statement. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Weight Statement
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleParty
     */
    public function getResponsibleParty()
    {
        return $this->responsibleParty;
    }

    /**
     * Sets a new responsibleParty
     *
     * ASBIE
     *  Weight Statement. Responsible_ Party. Party
     *  The party responsible for signing the VGM on behalf of the Shipper.
     *  0..1
     *  Weight Statement
     *  Responsible
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleParty $responsibleParty
     * @return self
     */
    public function setResponsibleParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleParty $responsibleParty = null)
    {
        $this->responsibleParty = $responsibleParty;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Weight Statement. Shipment
     *  The relevant shipment information with details on the transport equipment weight or mass measurements, including verified gross mass (VGM) information.
     *  1
     *  Weight Statement
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
     *  Weight Statement. Shipment
     *  The relevant shipment information with details on the transport equipment weight or mass measurements, including verified gross mass (VGM) information.
     *  1
     *  Weight Statement
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
}

