<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\UnsubscribeFromProcedureResponse;

/**
 * Class representing UnsubscribeFromProcedureResponseType
 *
 * ABIE
 *  Unsubscribe From Procedure Response. Details
 *  A document sent from a Contracting Party to the Economic Operator confirming that the latter has been unsubscribed from a tendering procedure.
 *  Unsubscribe From Procedure Response
 * XSD Type: UnsubscribeFromProcedureResponseType
 */
class UnsubscribeFromProcedureResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Unsubscribe From Procedure Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Unsubscribe From Procedure Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Unsubscribe From Procedure Response. Unsubscribe To Procedure_ Document Reference. Document Reference
     *  A reference to the unsubscribe to procedure document associated with this confirmation.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Unsubscribe To Procedure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UnsubscribeToProcedureDocumentReference $unsubscribeToProcedureDocumentReference
     */
    private $unsubscribeToProcedureDocumentReference = null;

    /**
     * ASBIE
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Economic Operator Party
     *  The Economic Operator receiving this unsubscribe to procedure confirmation.
     *  1
     *  Unsubscribe From Procedure Response
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty
     */
    private $economicOperatorParty = null;

    /**
     * ASBIE
     *  Unsubscribe From Procedure Response. Contracting Party
     *  The Contracting Party.
     *  1
     *  Unsubscribe From Procedure Response
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty
     */
    private $contractingParty = null;

    /**
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[] $procurementProjectLotReference
     */
    private $procurementProjectLotReference = [
        
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
     *  Unsubscribe From Procedure Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     * Gets as contractFolderID
     *
     * BBIE
     *  Unsubscribe From Procedure Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID
     */
    public function getContractFolderID()
    {
        return $this->contractFolderID;
    }

    /**
     * Sets a new contractFolderID
     *
     * BBIE
     *  Unsubscribe From Procedure Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     * @return self
     */
    public function setContractFolderID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID = null)
    {
        $this->contractFolderID = $contractFolderID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Unsubscribe From Procedure Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     * Gets as unsubscribeToProcedureDocumentReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Unsubscribe To Procedure_ Document Reference. Document Reference
     *  A reference to the unsubscribe to procedure document associated with this confirmation.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Unsubscribe To Procedure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UnsubscribeToProcedureDocumentReference
     */
    public function getUnsubscribeToProcedureDocumentReference()
    {
        return $this->unsubscribeToProcedureDocumentReference;
    }

    /**
     * Sets a new unsubscribeToProcedureDocumentReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Unsubscribe To Procedure_ Document Reference. Document Reference
     *  A reference to the unsubscribe to procedure document associated with this confirmation.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Unsubscribe To Procedure
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UnsubscribeToProcedureDocumentReference $unsubscribeToProcedureDocumentReference
     * @return self
     */
    public function setUnsubscribeToProcedureDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UnsubscribeToProcedureDocumentReference $unsubscribeToProcedureDocumentReference = null)
    {
        $this->unsubscribeToProcedureDocumentReference = $unsubscribeToProcedureDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     *  Unsubscribe From Procedure Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Unsubscribe From Procedure Response
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
     * Gets as economicOperatorParty
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Economic Operator Party
     *  The Economic Operator receiving this unsubscribe to procedure confirmation.
     *  1
     *  Unsubscribe From Procedure Response
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty
     */
    public function getEconomicOperatorParty()
    {
        return $this->economicOperatorParty;
    }

    /**
     * Sets a new economicOperatorParty
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Economic Operator Party
     *  The Economic Operator receiving this unsubscribe to procedure confirmation.
     *  1
     *  Unsubscribe From Procedure Response
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty
     * @return self
     */
    public function setEconomicOperatorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty)
    {
        $this->economicOperatorParty = $economicOperatorParty;
        return $this;
    }

    /**
     * Gets as contractingParty
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Contracting Party
     *  The Contracting Party.
     *  1
     *  Unsubscribe From Procedure Response
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty
     */
    public function getContractingParty()
    {
        return $this->contractingParty;
    }

    /**
     * Sets a new contractingParty
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Contracting Party
     *  The Contracting Party.
     *  1
     *  Unsubscribe From Procedure Response
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty
     * @return self
     */
    public function setContractingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty)
    {
        $this->contractingParty = $contractingParty;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject
     */
    public function getProcurementProject()
    {
        return $this->procurementProject;
    }

    /**
     * Sets a new procurementProject
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Unsubscribe From Procedure Response
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     * @return self
     */
    public function setProcurementProject(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject = null)
    {
        $this->procurementProject = $procurementProject;
        return $this;
    }

    /**
     * Adds as procurementProjectLotReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference $procurementProjectLotReference
     */
    public function addToProcurementProjectLotReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference $procurementProjectLotReference)
    {
        $this->procurementProjectLotReference[] = $procurementProjectLotReference;
        return $this;
    }

    /**
     * isset procurementProjectLotReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLotReference($index)
    {
        return isset($this->procurementProjectLotReference[$index]);
    }

    /**
     * unset procurementProjectLotReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLotReference($index)
    {
        unset($this->procurementProjectLotReference[$index]);
    }

    /**
     * Gets as procurementProjectLotReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[]
     */
    public function getProcurementProjectLotReference()
    {
        return $this->procurementProjectLotReference;
    }

    /**
     * Sets a new procurementProjectLotReference
     *
     * ASBIE
     *  Unsubscribe From Procedure Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Unsubscribe From Procedure Response
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *  Procurement Project Lot Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLotReference[] $procurementProjectLotReference
     * @return self
     */
    public function setProcurementProjectLotReference(?array $procurementProjectLotReference = null)
    {
        $this->procurementProjectLotReference = $procurementProjectLotReference;
        return $this;
    }
}

