<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\BusinessCard;

/**
 * Class representing BusinessCardType
 *
 * ABIE
 *  Business Card. Details
 *  A document used to provide information about a business party and its business capabilities.
 *  Business Card
 * XSD Type: BusinessCardType
 */
class BusinessCardType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Business Card. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Business Card
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
     *  Business Card. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Business Card
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
     *  Business Card. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Business Card
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Business Card. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Business Card
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Business Card. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Business Card
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Business Card. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Business Card
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Business Card. Version Identifier. Identifier
     *  Identifies the current version of this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Previous Version Identifier. Identifier
     *  Identifies the previous version of this business card.
     *  0..1
     *  Business Card
     *  Previous Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BriefDescription[] $briefDescription
     */
    private $briefDescription = [
        
    ];

    /**
     * ASBIE
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Sender_ Party. Party
     *  The party sending this business card. This party could be the owner of this business card or a third-party acting on behalf of the owner (e.g. business network).
     *  0..1
     *  Business Card
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
     *  Business Card. Receiver_ Party. Party
     *  The party receiving this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Business_ Party. Party
     *  The party owning this business card.
     *  1
     *  Business Card
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
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BrochureDocumentReference[] $brochureDocumentReference
     */
    private $brochureDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessCapability[] $businessCapability
     */
    private $businessCapability = [
        
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
     *  Business Card. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Business Card
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
     *  Business Card. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Business Card
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
     *  Business Card. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Business Card
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
     *  Business Card. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Business Card
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
     *  Business Card. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Business Card
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
     *  Business Card. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Business Card
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
     *  Business Card. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Business Card
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
     *  Business Card. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Business Card
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
     *  Business Card. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Business Card
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
     *  Business Card. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Business Card
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
     *  Business Card. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Business Card
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
     *  Business Card. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Business Card
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
     *  Business Card. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Business Card
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
     *  Business Card. Version Identifier. Identifier
     *  Identifies the current version of this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Version Identifier. Identifier
     *  Identifies the current version of this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Previous Version Identifier. Identifier
     *  Identifies the previous version of this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Previous Version Identifier. Identifier
     *  Identifies the previous version of this business card.
     *  0..1
     *  Business Card
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
     * Adds as briefDescription
     *
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BriefDescription $briefDescription
     */
    public function addToBriefDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BriefDescription $briefDescription)
    {
        $this->briefDescription[] = $briefDescription;
        return $this;
    }

    /**
     * isset briefDescription
     *
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBriefDescription($index)
    {
        return isset($this->briefDescription[$index]);
    }

    /**
     * unset briefDescription
     *
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBriefDescription($index)
    {
        unset($this->briefDescription[$index]);
    }

    /**
     * Gets as briefDescription
     *
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BriefDescription[]
     */
    public function getBriefDescription()
    {
        return $this->briefDescription;
    }

    /**
     * Sets a new briefDescription
     *
     * BBIE
     *  Business Card. Brief_ Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Business Card
     *  Brief
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BriefDescription[] $briefDescription
     * @return self
     */
    public function setBriefDescription(?array $briefDescription = null)
    {
        $this->briefDescription = $briefDescription;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Signature
     *  A signature applied to this document.
     *  0..n
     *  Business Card
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
     *  Business Card. Sender_ Party. Party
     *  The party sending this business card. This party could be the owner of this business card or a third-party acting on behalf of the owner (e.g. business network).
     *  0..1
     *  Business Card
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
     *  Business Card. Sender_ Party. Party
     *  The party sending this business card. This party could be the owner of this business card or a third-party acting on behalf of the owner (e.g. business network).
     *  0..1
     *  Business Card
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
     *  Business Card. Receiver_ Party. Party
     *  The party receiving this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Receiver_ Party. Party
     *  The party receiving this business card.
     *  0..1
     *  Business Card
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
     *  Business Card. Business_ Party. Party
     *  The party owning this business card.
     *  1
     *  Business Card
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
     *  Business Card. Business_ Party. Party
     *  The party owning this business card.
     *  1
     *  Business Card
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
     * Adds as brochureDocumentReference
     *
     * ASBIE
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BrochureDocumentReference $brochureDocumentReference
     */
    public function addToBrochureDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BrochureDocumentReference $brochureDocumentReference)
    {
        $this->brochureDocumentReference[] = $brochureDocumentReference;
        return $this;
    }

    /**
     * isset brochureDocumentReference
     *
     * ASBIE
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrochureDocumentReference($index)
    {
        return isset($this->brochureDocumentReference[$index]);
    }

    /**
     * unset brochureDocumentReference
     *
     * ASBIE
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrochureDocumentReference($index)
    {
        unset($this->brochureDocumentReference[$index]);
    }

    /**
     * Gets as brochureDocumentReference
     *
     * ASBIE
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BrochureDocumentReference[]
     */
    public function getBrochureDocumentReference()
    {
        return $this->brochureDocumentReference;
    }

    /**
     * Sets a new brochureDocumentReference
     *
     * ASBIE
     *  Business Card. Brochure_ Document Reference. Document Reference
     *  A reference to a company brochure document.
     *  0..n
     *  Business Card
     *  Brochure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BrochureDocumentReference[] $brochureDocumentReference
     * @return self
     */
    public function setBrochureDocumentReference(?array $brochureDocumentReference = null)
    {
        $this->brochureDocumentReference = $brochureDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     *  Business Card. Additional_ Document Reference. Document Reference
     *  A reference to an additional document (e.g. presentations).
     *  0..n
     *  Business Card
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
     * Adds as businessCapability
     *
     * ASBIE
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessCapability $businessCapability
     */
    public function addToBusinessCapability(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessCapability $businessCapability)
    {
        $this->businessCapability[] = $businessCapability;
        return $this;
    }

    /**
     * isset businessCapability
     *
     * ASBIE
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessCapability($index)
    {
        return isset($this->businessCapability[$index]);
    }

    /**
     * unset businessCapability
     *
     * ASBIE
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessCapability($index)
    {
        unset($this->businessCapability[$index]);
    }

    /**
     * Gets as businessCapability
     *
     * ASBIE
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessCapability[]
     */
    public function getBusinessCapability()
    {
        return $this->businessCapability;
    }

    /**
     * Sets a new businessCapability
     *
     * ASBIE
     *  Business Card. Business_ Capability. Capability
     *  The business capabilities of the party.
     *  0..n
     *  Business Card
     *  Business
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BusinessCapability[] $businessCapability
     * @return self
     */
    public function setBusinessCapability(?array $businessCapability = null)
    {
        $this->businessCapability = $businessCapability;
        return $this;
    }
}

