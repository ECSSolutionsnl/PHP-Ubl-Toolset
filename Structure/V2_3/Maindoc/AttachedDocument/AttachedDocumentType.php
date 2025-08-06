<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\AttachedDocument;

/**
 * Class representing AttachedDocumentType
 *
 * ABIE
 *  Attached Document. Details
 *  A wrapper that allows a document of any kind to be packaged with the UBL document that references it.
 *  Attached Document
 * XSD Type: AttachedDocumentType
 */
class AttachedDocumentType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Attached Document. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Attached Document
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Attached Document. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Attached Document
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Attached Document. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Attached Document
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Attached Document. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Attached Document
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Attached Document. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Attached Document
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Document Type Code. Code
     *  A code signifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Attached Document. Document Type. Text
     *  Text specifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentType $documentType
     */
    private $documentType = null;

    /**
     * BBIE
     *  Attached Document. Parent_ Document Identifier. Identifier
     *  The Identifier of the parent document.
     *  1
     *  Attached Document
     *  Parent
     *  Document Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentID $parentDocumentID
     */
    private $parentDocumentID = null;

    /**
     * BBIE
     *  Attached Document. Parent_ Document Type Code. Code
     *  A code signifying the type of parent document.
     *  0..1
     *  Attached Document
     *  Parent
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentTypeCode $parentDocumentTypeCode
     */
    private $parentDocumentTypeCode = null;

    /**
     * BBIE
     *  Attached Document. Parent Document_ Version. Identifier
     *  Indicates the current version of the referred document.
     *  0..1
     *  Attached Document
     *  Parent Document
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentVersionID $parentDocumentVersionID
     */
    private $parentDocumentVersionID = null;

    /**
     * ASBIE
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Attached Document
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
     *  Attached Document. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Attached Document
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
     *  Attached Document. Attachment
     *  An attachment containing the document content.
     *  1
     *  Attached Document
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment $attachment
     */
    private $attachment = null;

    /**
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentLineReference[] $parentDocumentLineReference
     */
    private $parentDocumentLineReference = [
        
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
     *  Attached Document. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Attached Document
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
     *  Attached Document. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Attached Document
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
     *  Attached Document. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Attached Document
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
     *  Attached Document. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Attached Document
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
     *  Attached Document. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Attached Document
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
     *  Attached Document. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Attached Document
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
     *  Attached Document. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Attached Document
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
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attached Document
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
     * Gets as documentTypeCode
     *
     * BBIE
     *  Attached Document. Document Type Code. Code
     *  A code signifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Attached Document. Document Type Code. Code
     *  A code signifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode = null)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as documentType
     *
     * BBIE
     *  Attached Document. Document Type. Text
     *  Text specifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * BBIE
     *  Attached Document. Document Type. Text
     *  Text specifying the type of document.
     *  0..1
     *  Attached Document
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentType $documentType
     * @return self
     */
    public function setDocumentType(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentType $documentType = null)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Gets as parentDocumentID
     *
     * BBIE
     *  Attached Document. Parent_ Document Identifier. Identifier
     *  The Identifier of the parent document.
     *  1
     *  Attached Document
     *  Parent
     *  Document Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentID
     */
    public function getParentDocumentID()
    {
        return $this->parentDocumentID;
    }

    /**
     * Sets a new parentDocumentID
     *
     * BBIE
     *  Attached Document. Parent_ Document Identifier. Identifier
     *  The Identifier of the parent document.
     *  1
     *  Attached Document
     *  Parent
     *  Document Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentID $parentDocumentID
     * @return self
     */
    public function setParentDocumentID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentID $parentDocumentID)
    {
        $this->parentDocumentID = $parentDocumentID;
        return $this;
    }

    /**
     * Gets as parentDocumentTypeCode
     *
     * BBIE
     *  Attached Document. Parent_ Document Type Code. Code
     *  A code signifying the type of parent document.
     *  0..1
     *  Attached Document
     *  Parent
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentTypeCode
     */
    public function getParentDocumentTypeCode()
    {
        return $this->parentDocumentTypeCode;
    }

    /**
     * Sets a new parentDocumentTypeCode
     *
     * BBIE
     *  Attached Document. Parent_ Document Type Code. Code
     *  A code signifying the type of parent document.
     *  0..1
     *  Attached Document
     *  Parent
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentTypeCode $parentDocumentTypeCode
     * @return self
     */
    public function setParentDocumentTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentTypeCode $parentDocumentTypeCode = null)
    {
        $this->parentDocumentTypeCode = $parentDocumentTypeCode;
        return $this;
    }

    /**
     * Gets as parentDocumentVersionID
     *
     * BBIE
     *  Attached Document. Parent Document_ Version. Identifier
     *  Indicates the current version of the referred document.
     *  0..1
     *  Attached Document
     *  Parent Document
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentVersionID
     */
    public function getParentDocumentVersionID()
    {
        return $this->parentDocumentVersionID;
    }

    /**
     * Sets a new parentDocumentVersionID
     *
     * BBIE
     *  Attached Document. Parent Document_ Version. Identifier
     *  Indicates the current version of the referred document.
     *  0..1
     *  Attached Document
     *  Parent Document
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentVersionID $parentDocumentVersionID
     * @return self
     */
    public function setParentDocumentVersionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParentDocumentVersionID $parentDocumentVersionID = null)
    {
        $this->parentDocumentVersionID = $parentDocumentVersionID;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Signature
     *  A signature applied to this document.
     *  0..n
     *  Attached Document
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
     *  Attached Document. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Attached Document
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
     *  Attached Document. Sender_ Party. Party
     *  The party sending this document.
     *  1
     *  Attached Document
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
     *  Attached Document. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Attached Document
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
     *  Attached Document. Receiver_ Party. Party
     *  The party receiving this document.
     *  1
     *  Attached Document
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
     * Gets as attachment
     *
     * ASBIE
     *  Attached Document. Attachment
     *  An attachment containing the document content.
     *  1
     *  Attached Document
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * ASBIE
     *  Attached Document. Attachment
     *  An attachment containing the document content.
     *  1
     *  Attached Document
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment $attachment
     * @return self
     */
    public function setAttachment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Attachment $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Adds as parentDocumentLineReference
     *
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentLineReference $parentDocumentLineReference
     */
    public function addToParentDocumentLineReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentLineReference $parentDocumentLineReference)
    {
        $this->parentDocumentLineReference[] = $parentDocumentLineReference;
        return $this;
    }

    /**
     * isset parentDocumentLineReference
     *
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentDocumentLineReference($index)
    {
        return isset($this->parentDocumentLineReference[$index]);
    }

    /**
     * unset parentDocumentLineReference
     *
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentDocumentLineReference($index)
    {
        unset($this->parentDocumentLineReference[$index]);
    }

    /**
     * Gets as parentDocumentLineReference
     *
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentLineReference[]
     */
    public function getParentDocumentLineReference()
    {
        return $this->parentDocumentLineReference;
    }

    /**
     * Sets a new parentDocumentLineReference
     *
     * ASBIE
     *  Attached Document. Parent Document_ Line Reference. Line Reference
     *  A reference to a line in the attached document.
     *  0..n
     *  Attached Document
     *  Parent Document
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParentDocumentLineReference[] $parentDocumentLineReference
     * @return self
     */
    public function setParentDocumentLineReference(?array $parentDocumentLineReference = null)
    {
        $this->parentDocumentLineReference = $parentDocumentLineReference;
        return $this;
    }
}

