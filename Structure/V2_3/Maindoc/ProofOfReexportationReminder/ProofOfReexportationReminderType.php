<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ProofOfReexportationReminder;

/**
 * Class representing ProofOfReexportationReminderType
 *
 * ABIE
 *  Proof Of Reexportation Reminder. Details
 *  A reminder that a requested Proof of Reexportation is pending.
 *  Proof Of Reexportation Reminder
 * XSD Type: ProofOfReexportationReminderType
 */
class ProofOfReexportationReminderType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Proof Of Reexportation Reminder
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Proof Of Reexportation Reminder
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Procedure. Code
     *  The procedure under which this reminder was sent, expressed as a code
     *  1
     *  Proof Of Reexportation Reminder
     *  Procedure
     *  Code
     *  Code. Type
     *  "A-letter", "B-letter"
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode
     */
    private $procedureCode = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Version. Identifier
     *  Identifies a version of a Proof of Reexportation Reminder in order to distinguish updates.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Identifier. Identifier
     *  An identifier for the associated Goods Item Passport, used when all counterfoils refer to the same.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID
     */
    private $goodsItemPassportID = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Proof Of Reexportation Request_ Document Reference. Document Reference
     *  The Document Reference related to this Proof of Reexportation Request
     *  1
     *  Proof Of Reexportation Reminder
     *  Proof Of Reexportation Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProofOfReexportationRequestDocumentReference $proofOfReexportationRequestDocumentReference
     */
    private $proofOfReexportationRequestDocumentReference = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that on behalf of their customs authority issues this document
     *  1
     *  Proof Of Reexportation Reminder
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty
     */
    private $importingGuarantorParty = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Exporting Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that are fiscally responsible for the Goods Item Passort counterfoils that the Customs Party are requesting
     *  1
     *  Proof Of Reexportation Reminder
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty
     */
    private $exportingGuarantorParty = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Customs_ Party. Party
     *  An original requester of the Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty
     */
    private $importingCustomsParty = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Issuer_ Endorsement. Endorsement
     *  An Issuers endorsment of this Request for Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement
     */
    private $issuerEndorsement = null;

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[] $goodsItemPassportCounterfoil
     */
    private $goodsItemPassportCounterfoil = [
        
    ];

    /**
     * ASBIE
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
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
     *  Proof Of Reexportation Reminder. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.3
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
     *  Proof Of Reexportation Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     * Gets as procedureCode
     *
     * BBIE
     *  Proof Of Reexportation Reminder. Procedure. Code
     *  The procedure under which this reminder was sent, expressed as a code
     *  1
     *  Proof Of Reexportation Reminder
     *  Procedure
     *  Code
     *  Code. Type
     *  "A-letter", "B-letter"
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }

    /**
     * Sets a new procedureCode
     *
     * BBIE
     *  Proof Of Reexportation Reminder. Procedure. Code
     *  The procedure under which this reminder was sent, expressed as a code
     *  1
     *  Proof Of Reexportation Reminder
     *  Procedure
     *  Code
     *  Code. Type
     *  "A-letter", "B-letter"
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode
     * @return self
     */
    public function setProcedureCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode)
    {
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Version. Identifier
     *  Identifies a version of a Proof of Reexportation Reminder in order to distinguish updates.
     *  0..1
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Version. Identifier
     *  Identifies a version of a Proof of Reexportation Reminder in order to distinguish updates.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Version
     *  Identifier
     *  Identifier. Type
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
     * Gets as goodsItemPassportID
     *
     * BBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Identifier. Identifier
     *  An identifier for the associated Goods Item Passport, used when all counterfoils refer to the same.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID
     */
    public function getGoodsItemPassportID()
    {
        return $this->goodsItemPassportID;
    }

    /**
     * Sets a new goodsItemPassportID
     *
     * BBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Identifier. Identifier
     *  An identifier for the associated Goods Item Passport, used when all counterfoils refer to the same.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID
     * @return self
     */
    public function setGoodsItemPassportID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID = null)
    {
        $this->goodsItemPassportID = $goodsItemPassportID;
        return $this;
    }

    /**
     * Gets as proofOfReexportationRequestDocumentReference
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Proof Of Reexportation Request_ Document Reference. Document Reference
     *  The Document Reference related to this Proof of Reexportation Request
     *  1
     *  Proof Of Reexportation Reminder
     *  Proof Of Reexportation Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProofOfReexportationRequestDocumentReference
     */
    public function getProofOfReexportationRequestDocumentReference()
    {
        return $this->proofOfReexportationRequestDocumentReference;
    }

    /**
     * Sets a new proofOfReexportationRequestDocumentReference
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Proof Of Reexportation Request_ Document Reference. Document Reference
     *  The Document Reference related to this Proof of Reexportation Request
     *  1
     *  Proof Of Reexportation Reminder
     *  Proof Of Reexportation Request
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProofOfReexportationRequestDocumentReference $proofOfReexportationRequestDocumentReference
     * @return self
     */
    public function setProofOfReexportationRequestDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProofOfReexportationRequestDocumentReference $proofOfReexportationRequestDocumentReference)
    {
        $this->proofOfReexportationRequestDocumentReference = $proofOfReexportationRequestDocumentReference;
        return $this;
    }

    /**
     * Gets as importingGuarantorParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that on behalf of their customs authority issues this document
     *  1
     *  Proof Of Reexportation Reminder
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty
     */
    public function getImportingGuarantorParty()
    {
        return $this->importingGuarantorParty;
    }

    /**
     * Sets a new importingGuarantorParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that on behalf of their customs authority issues this document
     *  1
     *  Proof Of Reexportation Reminder
     *  Importing Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty
     * @return self
     */
    public function setImportingGuarantorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingGuarantorParty $importingGuarantorParty)
    {
        $this->importingGuarantorParty = $importingGuarantorParty;
        return $this;
    }

    /**
     * Gets as exportingGuarantorParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Exporting Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that are fiscally responsible for the Goods Item Passort counterfoils that the Customs Party are requesting
     *  1
     *  Proof Of Reexportation Reminder
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty
     */
    public function getExportingGuarantorParty()
    {
        return $this->exportingGuarantorParty;
    }

    /**
     * Sets a new exportingGuarantorParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Exporting Guarantor_ Party. Party
     *  The party (often a chamber of commerce) that are fiscally responsible for the Goods Item Passort counterfoils that the Customs Party are requesting
     *  1
     *  Proof Of Reexportation Reminder
     *  Exporting Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty
     * @return self
     */
    public function setExportingGuarantorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportingGuarantorParty $exportingGuarantorParty)
    {
        $this->exportingGuarantorParty = $exportingGuarantorParty;
        return $this;
    }

    /**
     * Gets as importingCustomsParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Customs_ Party. Party
     *  An original requester of the Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty
     */
    public function getImportingCustomsParty()
    {
        return $this->importingCustomsParty;
    }

    /**
     * Sets a new importingCustomsParty
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Importing Customs_ Party. Party
     *  An original requester of the Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Importing Customs
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty
     * @return self
     */
    public function setImportingCustomsParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportingCustomsParty $importingCustomsParty = null)
    {
        $this->importingCustomsParty = $importingCustomsParty;
        return $this;
    }

    /**
     * Gets as issuerEndorsement
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Issuer_ Endorsement. Endorsement
     *  An Issuers endorsment of this Request for Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement
     */
    public function getIssuerEndorsement()
    {
        return $this->issuerEndorsement;
    }

    /**
     * Sets a new issuerEndorsement
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Issuer_ Endorsement. Endorsement
     *  An Issuers endorsment of this Request for Proof of Reexportation.
     *  0..1
     *  Proof Of Reexportation Reminder
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement
     * @return self
     */
    public function setIssuerEndorsement(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement = null)
    {
        $this->issuerEndorsement = $issuerEndorsement;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Payment Terms
     *  A set of payment terms associated with this Request for Proof of Reexportation, used for generating a subsequent invoice in case no proof of re-exportation can be provided.
     *  0..n
     *  Proof Of Reexportation Reminder
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil $goodsItemPassportCounterfoil
     */
    public function addToGoodsItemPassportCounterfoil(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil $goodsItemPassportCounterfoil)
    {
        $this->goodsItemPassportCounterfoil[] = $goodsItemPassportCounterfoil;
        return $this;
    }

    /**
     * isset goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItemPassportCounterfoil($index)
    {
        return isset($this->goodsItemPassportCounterfoil[$index]);
    }

    /**
     * unset goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItemPassportCounterfoil($index)
    {
        unset($this->goodsItemPassportCounterfoil[$index]);
    }

    /**
     * Gets as goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[]
     */
    public function getGoodsItemPassportCounterfoil()
    {
        return $this->goodsItemPassportCounterfoil;
    }

    /**
     * Sets a new goodsItemPassportCounterfoil
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Goods Item Passport Counterfoil
     *  The related Goods Item Passport Counterfoils of an associated Goods Item Passport.
     *  1..n
     *  Proof Of Reexportation Reminder
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Counterfoil
     *  Travel set
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItemPassportCounterfoil[] $goodsItemPassportCounterfoil
     * @return self
     */
    public function setGoodsItemPassportCounterfoil(array $goodsItemPassportCounterfoil)
    {
        $this->goodsItemPassportCounterfoil = $goodsItemPassportCounterfoil;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Additional_ Document Reference. Document Reference
     *  One or more references to additional documents related to this Request for Proof of Reexportation
     *  0..n
     *  Proof Of Reexportation Reminder
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
     * Adds as signature
     *
     * ASBIE
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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
     *  Proof Of Reexportation Reminder. Signature
     *  A signature applied to this document.
     *  0..n
     *  Proof Of Reexportation Reminder
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

