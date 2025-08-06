<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Maindoc\ApplicationResponse;

/**
 * Class representing ApplicationResponseType
 *
 * ABIE
 *  Application Response. Details
 *  A document to indicate the application's response to a transaction. This may be a business response initiated by a user or a technical response sent automatically by an application.
 *  Application Response
 * XSD Type: ApplicationResponseType
 */
class ApplicationResponseType
{
    /**
     * A container for all extensions present in the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Application Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
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
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Application Response
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
     *  Application Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Application Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Application Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Application Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Application Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Application Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Application Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Application Response. Response Date. Date
     *  The date on which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $responseDate
     */
    private $responseDate = null;

    /**
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $responseTime
     */
    private $responseTime = null;

    /**
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     *  Application Response. Version. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Application Response
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
     *  Application Response. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Application Response
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
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentResponse[] $documentResponse
     */
    private $documentResponse = [
        
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
     *  Application Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
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
     *  Application Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Application Response
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
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
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
     *  Application Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Application Response
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
     *  Application Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Application Response
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
     *  Application Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Application Response
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
     *  Application Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Application Response
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
     * Gets as uUID
     *
     * BBIE
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Application Response
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
     *  Application Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Application Response
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
     *  Application Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Application Response
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
     *  Application Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Application Response
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
     *  Application Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Application Response
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
     *  Application Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Application Response
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
     * Gets as responseDate
     *
     * BBIE
     *  Application Response. Response Date. Date
     *  The date on which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Sets a new responseDate
     *
     * BBIE
     *  Application Response. Response Date. Date
     *  The date on which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $responseDate
     * @return self
     */
    public function setResponseDate(?\DateTime $responseDate = null)
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Gets as responseTime
     *
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * Sets a new responseTime
     *
     * BBIE
     *  Application Response. Response Time. Time
     *  The time at which the information in the response was created.
     *  0..1
     *  Application Response
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $responseTime
     * @return self
     */
    public function setResponseTime(?\DateTime $responseTime = null)
    {
        $this->responseTime = $responseTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     *  Application Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Application Response
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
     * Gets as versionID
     *
     * BBIE
     *  Application Response. Version. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version
     *  Identifier
     *  Identifier. Type
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
     *  Application Response. Version. Identifier
     *  Identifies the current version of this document.
     *  0..1
     *  Application Response
     *  Version
     *  Identifier
     *  Identifier. Type
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
     * Adds as signature
     *
     * ASBIE
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Application Response
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
     *  Application Response. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Application Response
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
     *  Application Response. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Application Response
     *  Sender
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty
     * @return self
     */
    public function setSenderParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SenderParty $senderParty)
    {
        $this->senderParty = $senderParty;
        return $this;
    }

    /**
     * Gets as receiverParty
     *
     * ASBIE
     *  Application Response. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Application Response
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
     *  Application Response. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Application Response
     *  Receiver
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty
     * @return self
     */
    public function setReceiverParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ReceiverParty $receiverParty)
    {
        $this->receiverParty = $receiverParty;
        return $this;
    }

    /**
     * Adds as documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentResponse $documentResponse
     */
    public function addToDocumentResponse(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentResponse $documentResponse)
    {
        $this->documentResponse[] = $documentResponse;
        return $this;
    }

    /**
     * isset documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentResponse($index)
    {
        return isset($this->documentResponse[$index]);
    }

    /**
     * unset documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentResponse($index)
    {
        unset($this->documentResponse[$index]);
    }

    /**
     * Gets as documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentResponse[]
     */
    public function getDocumentResponse()
    {
        return $this->documentResponse;
    }

    /**
     * Sets a new documentResponse
     *
     * ASBIE
     *  Application Response. Document Response
     *  A response to a document.
     *  0..n
     *  Application Response
     *  Document Response
     *  Document Response
     *  Document Response
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\DocumentResponse[] $documentResponse
     * @return self
     */
    public function setDocumentResponse(?array $documentResponse = null)
    {
        $this->documentResponse = $documentResponse;
        return $this;
    }
}

