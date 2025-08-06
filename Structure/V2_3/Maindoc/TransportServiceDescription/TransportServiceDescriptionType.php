<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\TransportServiceDescription;

/**
 * Class representing TransportServiceDescriptionType
 *
 * ABIE
 *  Transport Service Description. Details
 *  A document sent by a transport service provider to announce the availability of a transport service.
 *  Transport Service Description
 * XSD Type: TransportServiceDescriptionType
 */
class TransportServiceDescriptionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Transport Service Description. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Service Description
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Transport Service Description. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Service Description
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Transport Service Description. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Service Description
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Transport Service Description. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Service Description
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Transport Service Description. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Service Description
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Service Description. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Service Description
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Transport Service Description. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Service Description
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Transport Service Description. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Service Description
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Service Name. Name
     *  A name, assigned by the Transport Service Provider, for the service being announced.
     *  0..1
     *  Transport Service Description
     *  Service Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ServiceName $serviceName
     */
    private $serviceName = null;

    /**
     * BBIE
     *  Transport Service Description. Response Code. Code
     *  A code signifying a response related to the Transport Service Description.
     *  0..1
     *  Transport Service Description
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * ASBIE
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Sender_ Party. Party
     *  The party sending the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Receiver_ Party. Party
     *  The party receiving the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Transport Service Description Request_ Document Reference. Document Reference
     *  A Transport Service Description Request to which this Transport Service Description is a response.
     *  0..1
     *  Transport Service Description
     *  Transport Service Description Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceDescriptionRequestDocumentReference $transportServiceDescriptionRequestDocumentReference
     */
    private $transportServiceDescriptionRequestDocumentReference = null;

    /**
     * ASBIE
     *  Transport Service Description. Transport Service Provider_ Party. Party
     *  The transport service provider.
     *  0..1
     *  Transport Service Description
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     */
    private $transportServiceProviderParty = null;

    /**
     * ASBIE
     *  Transport Service Description. Service Charge_ Payment Terms. Payment Terms
     *  The terms of payment under which the transport service would be provided.
     *  0..1
     *  Transport Service Description
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms
     */
    private $serviceChargePaymentTerms = null;

    /**
     * ASBIE
     *  Transport Service Description. Validity_ Period. Period
     *  A period during which this Transport Service Description is valid.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationService[] $transportationService
     */
    private $transportationService = [
        
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
     *  Transport Service Description. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Service Description
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
     *  Transport Service Description. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Transport Service Description
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
     *  Transport Service Description. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Transport Service Description
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
     * Adds as note
     *
     * BBIE
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Transport Service Description
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
     * Gets as serviceName
     *
     * BBIE
     *  Transport Service Description. Service Name. Name
     *  A name, assigned by the Transport Service Provider, for the service being announced.
     *  0..1
     *  Transport Service Description
     *  Service Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ServiceName
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Sets a new serviceName
     *
     * BBIE
     *  Transport Service Description. Service Name. Name
     *  A name, assigned by the Transport Service Provider, for the service being announced.
     *  0..1
     *  Transport Service Description
     *  Service Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ServiceName $serviceName
     * @return self
     */
    public function setServiceName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ServiceName $serviceName = null)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Transport Service Description. Response Code. Code
     *  A code signifying a response related to the Transport Service Description.
     *  0..1
     *  Transport Service Description
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * BBIE
     *  Transport Service Description. Response Code. Code
     *  A code signifying a response related to the Transport Service Description.
     *  0..1
     *  Transport Service Description
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode = null)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Signature
     *  A signature applied to this document.
     *  0..n
     *  Transport Service Description
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
     *  Transport Service Description. Sender_ Party. Party
     *  The party sending the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Sender_ Party. Party
     *  The party sending the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Receiver_ Party. Party
     *  The party receiving the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Receiver_ Party. Party
     *  The party receiving the Transport Service Description.
     *  0..1
     *  Transport Service Description
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
     * Gets as transportServiceDescriptionRequestDocumentReference
     *
     * ASBIE
     *  Transport Service Description. Transport Service Description Request_ Document Reference. Document Reference
     *  A Transport Service Description Request to which this Transport Service Description is a response.
     *  0..1
     *  Transport Service Description
     *  Transport Service Description Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceDescriptionRequestDocumentReference
     */
    public function getTransportServiceDescriptionRequestDocumentReference()
    {
        return $this->transportServiceDescriptionRequestDocumentReference;
    }

    /**
     * Sets a new transportServiceDescriptionRequestDocumentReference
     *
     * ASBIE
     *  Transport Service Description. Transport Service Description Request_ Document Reference. Document Reference
     *  A Transport Service Description Request to which this Transport Service Description is a response.
     *  0..1
     *  Transport Service Description
     *  Transport Service Description Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceDescriptionRequestDocumentReference $transportServiceDescriptionRequestDocumentReference
     * @return self
     */
    public function setTransportServiceDescriptionRequestDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceDescriptionRequestDocumentReference $transportServiceDescriptionRequestDocumentReference = null)
    {
        $this->transportServiceDescriptionRequestDocumentReference = $transportServiceDescriptionRequestDocumentReference;
        return $this;
    }

    /**
     * Gets as transportServiceProviderParty
     *
     * ASBIE
     *  Transport Service Description. Transport Service Provider_ Party. Party
     *  The transport service provider.
     *  0..1
     *  Transport Service Description
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceProviderParty
     */
    public function getTransportServiceProviderParty()
    {
        return $this->transportServiceProviderParty;
    }

    /**
     * Sets a new transportServiceProviderParty
     *
     * ASBIE
     *  Transport Service Description. Transport Service Provider_ Party. Party
     *  The transport service provider.
     *  0..1
     *  Transport Service Description
     *  Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty
     * @return self
     */
    public function setTransportServiceProviderParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportServiceProviderParty $transportServiceProviderParty = null)
    {
        $this->transportServiceProviderParty = $transportServiceProviderParty;
        return $this;
    }

    /**
     * Gets as serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Service Description. Service Charge_ Payment Terms. Payment Terms
     *  The terms of payment under which the transport service would be provided.
     *  0..1
     *  Transport Service Description
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceChargePaymentTerms
     */
    public function getServiceChargePaymentTerms()
    {
        return $this->serviceChargePaymentTerms;
    }

    /**
     * Sets a new serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Service Description. Service Charge_ Payment Terms. Payment Terms
     *  The terms of payment under which the transport service would be provided.
     *  0..1
     *  Transport Service Description
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms
     * @return self
     */
    public function setServiceChargePaymentTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceChargePaymentTerms $serviceChargePaymentTerms = null)
    {
        $this->serviceChargePaymentTerms = $serviceChargePaymentTerms;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Transport Service Description. Validity_ Period. Period
     *  A period during which this Transport Service Description is valid.
     *  0..1
     *  Transport Service Description
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
     *  Transport Service Description. Validity_ Period. Period
     *  A period during which this Transport Service Description is valid.
     *  0..1
     *  Transport Service Description
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
     * Adds as transportationService
     *
     * ASBIE
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationService $transportationService
     */
    public function addToTransportationService(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationService $transportationService)
    {
        $this->transportationService[] = $transportationService;
        return $this;
    }

    /**
     * isset transportationService
     *
     * ASBIE
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportationService($index)
    {
        return isset($this->transportationService[$index]);
    }

    /**
     * unset transportationService
     *
     * ASBIE
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportationService($index)
    {
        unset($this->transportationService[$index]);
    }

    /**
     * Gets as transportationService
     *
     * ASBIE
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationService[]
     */
    public function getTransportationService()
    {
        return $this->transportationService;
    }

    /**
     * Sets a new transportationService
     *
     * ASBIE
     *  Transport Service Description. Transportation Service
     *  A transportation service announced in this Transport Service Description.
     *  0..n
     *  Transport Service Description
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportationService[] $transportationService
     * @return self
     */
    public function setTransportationService(?array $transportationService = null)
    {
        $this->transportationService = $transportationService;
        return $this;
    }
}

