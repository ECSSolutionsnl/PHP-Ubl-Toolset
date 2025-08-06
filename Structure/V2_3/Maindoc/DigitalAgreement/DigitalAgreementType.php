<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\DigitalAgreement;

/**
 * Class representing DigitalAgreementType
 *
 * ABIE
 *  Digital Agreement. Details
 *  A document used to support business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
 *  Digital Agreement
 *  Trading Partner Agreement, TPA
 * XSD Type: DigitalAgreementType
 */
class DigitalAgreementType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Agreement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Agreement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  EESPA
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Digital Agreement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Agreement
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Digital Agreement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Agreement
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Digital Agreement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Agreement
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Digital Agreement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Agreement
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Digital Agreement. Agreement Type Code. Code
     *  A code signifying the type of digital agreement (e.g. bi-lateral, multi-lateral).
     *  0..1
     *  Digital Agreement
     *  Agreement Type Code
     *  Code
     *  Code. Type
     *  multi-lateral
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AgreementTypeCode $agreementTypeCode
     */
    private $agreementTypeCode = null;

    /**
     * BBIE
     *  Digital Agreement. Version Identifier. Identifier
     *  Identifies the current version of this digital agreement.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. Previous Version Identifier. Identifier
     *  Identifies the previous version of this digital agreement.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Required_ Response Message Level Code. Code
     *  A code signifying the minimum response message level the parties are required to provide (e.g. EESPA response message level).
     *  0..1
     *  Digital Agreement
     *  Required
     *  Response Message Level Code
     *  Code
     *  Code. Type
     *  RM2
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredResponseMessageLevelCode $requiredResponseMessageLevelCode
     */
    private $requiredResponseMessageLevelCode = null;

    /**
     * ASBIE
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     *  Digital Agreement. Governor_ Party. Party
     *  The party governing the agreement (e.g. a multi-lateral digital agreement).
     *  0..1
     *  Digital Agreement
     *  Governor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GovernorParty $governorParty
     */
    private $governorParty = null;

    /**
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipantParty[] $participantParty
     */
    private $participantParty = [
        
    ];

    /**
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgreementCountry[] $agreementCountry
     */
    private $agreementCountry = [
        
    ];

    /**
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredCertificationDocumentReference[] $requiredCertificationDocumentReference
     */
    private $requiredCertificationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Digital Agreement. Digital Agreement Terms
     *  A reference to digital agreement terms and conditions.
     *  0..1
     *  Digital Agreement
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalAgreementTerms $digitalAgreementTerms
     */
    private $digitalAgreementTerms = null;

    /**
     * ASBIE
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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
     *  Digital Agreement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Agreement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  EESPA
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
     *  Digital Agreement. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Digital Agreement
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  EESPA
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
     *  Digital Agreement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Digital Agreement
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
     * Gets as agreementTypeCode
     *
     * BBIE
     *  Digital Agreement. Agreement Type Code. Code
     *  A code signifying the type of digital agreement (e.g. bi-lateral, multi-lateral).
     *  0..1
     *  Digital Agreement
     *  Agreement Type Code
     *  Code
     *  Code. Type
     *  multi-lateral
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AgreementTypeCode
     */
    public function getAgreementTypeCode()
    {
        return $this->agreementTypeCode;
    }

    /**
     * Sets a new agreementTypeCode
     *
     * BBIE
     *  Digital Agreement. Agreement Type Code. Code
     *  A code signifying the type of digital agreement (e.g. bi-lateral, multi-lateral).
     *  0..1
     *  Digital Agreement
     *  Agreement Type Code
     *  Code
     *  Code. Type
     *  multi-lateral
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AgreementTypeCode $agreementTypeCode
     * @return self
     */
    public function setAgreementTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AgreementTypeCode $agreementTypeCode = null)
    {
        $this->agreementTypeCode = $agreementTypeCode;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Digital Agreement. Version Identifier. Identifier
     *  Identifies the current version of this digital agreement.
     *  1
     *  Digital Agreement
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
     *  Digital Agreement. Version Identifier. Identifier
     *  Identifies the current version of this digital agreement.
     *  1
     *  Digital Agreement
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  1.1
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
     * Gets as previousVersionID
     *
     * BBIE
     *  Digital Agreement. Previous Version Identifier. Identifier
     *  Identifies the previous version of this digital agreement.
     *  0..1
     *  Digital Agreement
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
     *  Digital Agreement. Previous Version Identifier. Identifier
     *  Identifies the previous version of this digital agreement.
     *  0..1
     *  Digital Agreement
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
     * Gets as requiredResponseMessageLevelCode
     *
     * BBIE
     *  Digital Agreement. Required_ Response Message Level Code. Code
     *  A code signifying the minimum response message level the parties are required to provide (e.g. EESPA response message level).
     *  0..1
     *  Digital Agreement
     *  Required
     *  Response Message Level Code
     *  Code
     *  Code. Type
     *  RM2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredResponseMessageLevelCode
     */
    public function getRequiredResponseMessageLevelCode()
    {
        return $this->requiredResponseMessageLevelCode;
    }

    /**
     * Sets a new requiredResponseMessageLevelCode
     *
     * BBIE
     *  Digital Agreement. Required_ Response Message Level Code. Code
     *  A code signifying the minimum response message level the parties are required to provide (e.g. EESPA response message level).
     *  0..1
     *  Digital Agreement
     *  Required
     *  Response Message Level Code
     *  Code
     *  Code. Type
     *  RM2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredResponseMessageLevelCode $requiredResponseMessageLevelCode
     * @return self
     */
    public function setRequiredResponseMessageLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RequiredResponseMessageLevelCode $requiredResponseMessageLevelCode = null)
    {
        $this->requiredResponseMessageLevelCode = $requiredResponseMessageLevelCode;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     *  Digital Agreement. Signature
     *  A signature applied to this document.
     *  0..n
     *  Digital Agreement
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
     * Gets as governorParty
     *
     * ASBIE
     *  Digital Agreement. Governor_ Party. Party
     *  The party governing the agreement (e.g. a multi-lateral digital agreement).
     *  0..1
     *  Digital Agreement
     *  Governor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GovernorParty
     */
    public function getGovernorParty()
    {
        return $this->governorParty;
    }

    /**
     * Sets a new governorParty
     *
     * ASBIE
     *  Digital Agreement. Governor_ Party. Party
     *  The party governing the agreement (e.g. a multi-lateral digital agreement).
     *  0..1
     *  Digital Agreement
     *  Governor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GovernorParty $governorParty
     * @return self
     */
    public function setGovernorParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GovernorParty $governorParty = null)
    {
        $this->governorParty = $governorParty;
        return $this;
    }

    /**
     * Adds as participantParty
     *
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipantParty $participantParty
     */
    public function addToParticipantParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipantParty $participantParty)
    {
        $this->participantParty[] = $participantParty;
        return $this;
    }

    /**
     * isset participantParty
     *
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipantParty($index)
    {
        return isset($this->participantParty[$index]);
    }

    /**
     * unset participantParty
     *
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipantParty($index)
    {
        unset($this->participantParty[$index]);
    }

    /**
     * Gets as participantParty
     *
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipantParty[]
     */
    public function getParticipantParty()
    {
        return $this->participantParty;
    }

    /**
     * Sets a new participantParty
     *
     * ASBIE
     *  Digital Agreement. Participant Party
     *  The business parties agreeing on a set of digital processes, terms and conditions to ensure interoperability.
     *  1..n
     *  Digital Agreement
     *  Participant Party
     *  Participant Party
     *  Participant Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ParticipantParty[] $participantParty
     * @return self
     */
    public function setParticipantParty(array $participantParty)
    {
        $this->participantParty = $participantParty;
        return $this;
    }

    /**
     * Adds as agreementCountry
     *
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgreementCountry $agreementCountry
     */
    public function addToAgreementCountry(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgreementCountry $agreementCountry)
    {
        $this->agreementCountry[] = $agreementCountry;
        return $this;
    }

    /**
     * isset agreementCountry
     *
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgreementCountry($index)
    {
        return isset($this->agreementCountry[$index]);
    }

    /**
     * unset agreementCountry
     *
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgreementCountry($index)
    {
        unset($this->agreementCountry[$index]);
    }

    /**
     * Gets as agreementCountry
     *
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgreementCountry[]
     */
    public function getAgreementCountry()
    {
        return $this->agreementCountry;
    }

    /**
     * Sets a new agreementCountry
     *
     * ASBIE
     *  Digital Agreement. Agreement_ Country. Country
     *  The country to which this digital agreement applies.
     *  0..n
     *  Digital Agreement
     *  Agreement
     *  Country
     *  Country
     *  Country
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgreementCountry[] $agreementCountry
     * @return self
     */
    public function setAgreementCountry(?array $agreementCountry = null)
    {
        $this->agreementCountry = $agreementCountry;
        return $this;
    }

    /**
     * Adds as requiredCertificationDocumentReference
     *
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredCertificationDocumentReference $requiredCertificationDocumentReference
     */
    public function addToRequiredCertificationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredCertificationDocumentReference $requiredCertificationDocumentReference)
    {
        $this->requiredCertificationDocumentReference[] = $requiredCertificationDocumentReference;
        return $this;
    }

    /**
     * isset requiredCertificationDocumentReference
     *
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredCertificationDocumentReference($index)
    {
        return isset($this->requiredCertificationDocumentReference[$index]);
    }

    /**
     * unset requiredCertificationDocumentReference
     *
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredCertificationDocumentReference($index)
    {
        unset($this->requiredCertificationDocumentReference[$index]);
    }

    /**
     * Gets as requiredCertificationDocumentReference
     *
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredCertificationDocumentReference[]
     */
    public function getRequiredCertificationDocumentReference()
    {
        return $this->requiredCertificationDocumentReference;
    }

    /**
     * Sets a new requiredCertificationDocumentReference
     *
     * ASBIE
     *  Digital Agreement. Required Certification_ Document Reference. Document Reference
     *  A reference to a certification document required by this digital agreement.
     *  0..n
     *  Digital Agreement
     *  Required Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredCertificationDocumentReference[] $requiredCertificationDocumentReference
     * @return self
     */
    public function setRequiredCertificationDocumentReference(?array $requiredCertificationDocumentReference = null)
    {
        $this->requiredCertificationDocumentReference = $requiredCertificationDocumentReference;
        return $this;
    }

    /**
     * Gets as digitalAgreementTerms
     *
     * ASBIE
     *  Digital Agreement. Digital Agreement Terms
     *  A reference to digital agreement terms and conditions.
     *  0..1
     *  Digital Agreement
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalAgreementTerms
     */
    public function getDigitalAgreementTerms()
    {
        return $this->digitalAgreementTerms;
    }

    /**
     * Sets a new digitalAgreementTerms
     *
     * ASBIE
     *  Digital Agreement. Digital Agreement Terms
     *  A reference to digital agreement terms and conditions.
     *  0..1
     *  Digital Agreement
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *  Digital Agreement Terms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalAgreementTerms $digitalAgreementTerms
     * @return self
     */
    public function setDigitalAgreementTerms(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalAgreementTerms $digitalAgreementTerms = null)
    {
        $this->digitalAgreementTerms = $digitalAgreementTerms;
        return $this;
    }

    /**
     * Adds as digitalProcess
     *
     * ASBIE
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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
     *  Digital Agreement. Digital Process
     *  The digital processes in scope of this digital agreement.
     *  1..n
     *  Digital Agreement
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

