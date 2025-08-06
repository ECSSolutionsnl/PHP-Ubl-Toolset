<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\DigitalCapability;

/**
 * Class representing DigitalCapabilityType
 *
 * ABIE
 *  Digital Capability. Details
 *  A document used to provide information about a business party and its digital trade capabilities.
 *  Digital Capability
 * XSD Type: DigitalCapabilityType
 */
class DigitalCapabilityType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Capability. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Capability
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Digital Capability. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Capability
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Digital Capability. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Capability
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Digital Capability. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Capability
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Digital Capability. Version Identifier. Identifier
     *  Identifies the current version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Digital Capability. Previous Version Identifier. Identifier
     *  Identifies the previous version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Previous Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * ASBIE
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Sender_ Party. Party
     *  The party sending these digital capabilities. This party could be the owner of these digital capabilities or a third-party acting on behalf of the owner (e.g. service provider).
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Receiver_ Party. Party
     *  The party receiving these digital capabilities.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Business_ Party. Party
     *  The party owning these digital capabilities.
     *  1
     *  Digital Capability
     *  Business
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessParty $businessParty
     */
    private $businessParty = null;

    /**
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalProcess[] $digitalProcess
     */
    private $digitalProcess = [
        
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
     *  Digital Capability. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Capability
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
     *  Digital Capability. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Capability
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
     *  Digital Capability. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Capability
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
     *  Digital Capability. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Capability
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
     *  Digital Capability. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Capability
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
     * Gets as versionID
     *
     * BBIE
     *  Digital Capability. Version Identifier. Identifier
     *  Identifies the current version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1.1
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
     *  Digital Capability. Version Identifier. Identifier
     *  Identifies the current version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1.1
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
     * Gets as previousVersionID
     *
     * BBIE
     *  Digital Capability. Previous Version Identifier. Identifier
     *  Identifies the previous version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Previous Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * BBIE
     *  Digital Capability. Previous Version Identifier. Identifier
     *  Identifies the previous version of party's digital capabilities.
     *  0..1
     *  Digital Capability
     *  Previous Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID = null)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Capability
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
     *  Digital Capability. Sender_ Party. Party
     *  The party sending these digital capabilities. This party could be the owner of these digital capabilities or a third-party acting on behalf of the owner (e.g. service provider).
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Sender_ Party. Party
     *  The party sending these digital capabilities. This party could be the owner of these digital capabilities or a third-party acting on behalf of the owner (e.g. service provider).
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Receiver_ Party. Party
     *  The party receiving these digital capabilities.
     *  0..1
     *  Digital Capability
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
     *  Digital Capability. Receiver_ Party. Party
     *  The party receiving these digital capabilities.
     *  0..1
     *  Digital Capability
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
     * Gets as businessParty
     *
     * ASBIE
     *  Digital Capability. Business_ Party. Party
     *  The party owning these digital capabilities.
     *  1
     *  Digital Capability
     *  Business
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessParty
     */
    public function getBusinessParty()
    {
        return $this->businessParty;
    }

    /**
     * Sets a new businessParty
     *
     * ASBIE
     *  Digital Capability. Business_ Party. Party
     *  The party owning these digital capabilities.
     *  1
     *  Digital Capability
     *  Business
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessParty $businessParty
     * @return self
     */
    public function setBusinessParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessParty $businessParty)
    {
        $this->businessParty = $businessParty;
        return $this;
    }

    /**
     * Adds as digitalProcess
     *
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalProcess $digitalProcess
     */
    public function addToDigitalProcess(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalProcess $digitalProcess)
    {
        $this->digitalProcess[] = $digitalProcess;
        return $this;
    }

    /**
     * isset digitalProcess
     *
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDigitalProcess($index)
    {
        return isset($this->digitalProcess[$index]);
    }

    /**
     * unset digitalProcess
     *
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDigitalProcess($index)
    {
        unset($this->digitalProcess[$index]);
    }

    /**
     * Gets as digitalProcess
     *
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalProcess[]
     */
    public function getDigitalProcess()
    {
        return $this->digitalProcess;
    }

    /**
     * Sets a new digitalProcess
     *
     * ASBIE
     *  Digital Capability. Digital Process
     *  The digital trade processes supported by the party.
     *  1..n
     *  Digital Capability
     *  Digital Process
     *  Digital Process
     *  Digital Process
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalProcess[] $digitalProcess
     * @return self
     */
    public function setDigitalProcess(array $digitalProcess)
    {
        $this->digitalProcess = $digitalProcess;
        return $this;
    }
}

