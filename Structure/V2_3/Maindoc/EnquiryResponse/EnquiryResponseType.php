<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\EnquiryResponse;

/**
 * Class representing EnquiryResponseType
 *
 * ABIE
 *  Enquiry Response. Details
 *  A document sent by a responder to a requester answering a particular enqury.
 *  Enquiry Response
 * XSD Type: EnquiryResponseType
 */
class EnquiryResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Enquiry Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Identifier
     *  An identifier for this document, assigned by the responder.
     *  0..1
     *  Enquiry Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Enquiry Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Enquiry Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Enquiry Response. Issue Date. Date
     *  The date, assigned by the responder, at which this enquiry response was issued.
     *  1
     *  Enquiry Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Enquiry Response. Issue Time. Time
     *  The time, assigned by the responder, at which this enquiry response was issued.
     *  0..1
     *  Enquiry Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Requestor_ Party. Party
     *  The party issuing the enquiry.
     *  1
     *  Enquiry Response
     *  Requestor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestorParty $requestorParty
     */
    private $requestorParty = null;

    /**
     * ASBIE
     *  Enquiry Response. Responder_ Party. Party
     *  The party that has to respond to the enquiry.
     *  1
     *  Enquiry Response
     *  Responder
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponderParty $responderParty
     */
    private $responderParty = null;

    /**
     * ASBIE
     *  Enquiry Response. Parent_ Document Reference. Document Reference
     *  Reference to the enquiry that this response refers to.
     *  1
     *  Enquiry Response
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference
     */
    private $parentDocumentReference = null;

    /**
     * ASBIE
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment[] $attachment
     */
    private $attachment = [
        
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
     *  Enquiry Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Identifier
     *  An identifier for this document, assigned by the responder.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Identifier
     *  An identifier for this document, assigned by the responder.
     *  0..1
     *  Enquiry Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Enquiry Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Issue Date. Date
     *  The date, assigned by the responder, at which this enquiry response was issued.
     *  1
     *  Enquiry Response
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
     *  Enquiry Response. Issue Date. Date
     *  The date, assigned by the responder, at which this enquiry response was issued.
     *  1
     *  Enquiry Response
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
     *  Enquiry Response. Issue Time. Time
     *  The time, assigned by the responder, at which this enquiry response was issued.
     *  0..1
     *  Enquiry Response
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
     *  Enquiry Response. Issue Time. Time
     *  The time, assigned by the responder, at which this enquiry response was issued.
     *  0..1
     *  Enquiry Response
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
     * Adds as description
     *
     * BBIE
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Description. Text
     *  Free-form text-only enquiry response description pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Enquiry Response
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
     * Adds as signature
     *
     * ASBIE
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Enquiry Response
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
     * Gets as requestorParty
     *
     * ASBIE
     *  Enquiry Response. Requestor_ Party. Party
     *  The party issuing the enquiry.
     *  1
     *  Enquiry Response
     *  Requestor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestorParty
     */
    public function getRequestorParty()
    {
        return $this->requestorParty;
    }

    /**
     * Sets a new requestorParty
     *
     * ASBIE
     *  Enquiry Response. Requestor_ Party. Party
     *  The party issuing the enquiry.
     *  1
     *  Enquiry Response
     *  Requestor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestorParty $requestorParty
     * @return self
     */
    public function setRequestorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestorParty $requestorParty)
    {
        $this->requestorParty = $requestorParty;
        return $this;
    }

    /**
     * Gets as responderParty
     *
     * ASBIE
     *  Enquiry Response. Responder_ Party. Party
     *  The party that has to respond to the enquiry.
     *  1
     *  Enquiry Response
     *  Responder
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponderParty
     */
    public function getResponderParty()
    {
        return $this->responderParty;
    }

    /**
     * Sets a new responderParty
     *
     * ASBIE
     *  Enquiry Response. Responder_ Party. Party
     *  The party that has to respond to the enquiry.
     *  1
     *  Enquiry Response
     *  Responder
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponderParty $responderParty
     * @return self
     */
    public function setResponderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponderParty $responderParty)
    {
        $this->responderParty = $responderParty;
        return $this;
    }

    /**
     * Gets as parentDocumentReference
     *
     * ASBIE
     *  Enquiry Response. Parent_ Document Reference. Document Reference
     *  Reference to the enquiry that this response refers to.
     *  1
     *  Enquiry Response
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentReference
     */
    public function getParentDocumentReference()
    {
        return $this->parentDocumentReference;
    }

    /**
     * Sets a new parentDocumentReference
     *
     * ASBIE
     *  Enquiry Response. Parent_ Document Reference. Document Reference
     *  Reference to the enquiry that this response refers to.
     *  1
     *  Enquiry Response
     *  Parent
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference
     * @return self
     */
    public function setParentDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentReference $parentDocumentReference)
    {
        $this->parentDocumentReference = $parentDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     *  Enquiry Response. Additional_ Document Reference. Document Reference
     *  References to relevant documents for the response such as the Contract folder or the lot in the eTendering.
     *  0..n
     *  Enquiry Response
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
     * Adds as attachment
     *
     * ASBIE
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment $attachment
     */
    public function addToAttachment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment $attachment)
    {
        $this->attachment[] = $attachment;
        return $this;
    }

    /**
     * isset attachment
     *
     * ASBIE
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachment($index)
    {
        return isset($this->attachment[$index]);
    }

    /**
     * unset attachment
     *
     * ASBIE
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachment($index)
    {
        unset($this->attachment[$index]);
    }

    /**
     * Gets as attachment
     *
     * ASBIE
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * ASBIE
     *  Enquiry Response. Attachment
     *  Attachment that includes file-based response.
     *  0..n
     *  Enquiry Response
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment[] $attachment
     * @return self
     */
    public function setAttachment(?array $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }
}

