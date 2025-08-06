<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\QualificationApplicationRequest;

/**
 * Class representing QualificationApplicationRequestType
 *
 * ABIE
 *  Qualification Application Request. Details
 *  A document issued by a procurement organization to notify an economic operator whether it has been admitted to or excluded from the tendering process.
 *  Qualification Application Request
 * XSD Type: QualificationApplicationRequestType
 */
class QualificationApplicationRequestType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Qualification Application Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Qualification Application Request
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Qualification Application Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Qualification Application Request
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Qualification Application Request. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Qualification Application Request
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[] $contractName
     */
    private $contractName = [
        
    ];

    /**
     * BBIE
     *  Qualification Application Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Qualification Application Request
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Qualification Application Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Qualification Application Request
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Qualification Application Request. Version. Identifier
     *  Indicates the current version of the Qualification Application Request.
     *  0..1
     *  Qualification Application Request
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Qualification Application Request. Previous_ Version. Identifier
     *  Identifies the previous version of the Qualification Application Request which is superceded by this version.
     *  0..1
     *  Qualification Application Request
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * BBIE
     *  Qualification Application Request. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Qualification Application Request
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode
     */
    private $procedureCode = null;

    /**
     * BBIE
     *  Qualification Application Request. Qualification Application Type Code. Code
     *  A code specifying the type of the Qualification Application.
     *  0..1
     *  Qualification Application Request
     *  Qualification Application Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualificationApplicationTypeCode $qualificationApplicationTypeCode
     */
    private $qualificationApplicationTypeCode = null;

    /**
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightScoringMethodologyNote[] $weightScoringMethodologyNote
     */
    private $weightScoringMethodologyNote = [
        
    ];

    /**
     * BBIE
     *  Qualification Application Request. Weighting Type Code. Code
     *  A code specifying the type of the Weighting.
     *  0..1
     *  Qualification Application Request
     *  Weighting Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingTypeCode $weightingTypeCode
     */
    private $weightingTypeCode = null;

    /**
     * BBIE
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[] $contractingParty
     */
    private $contractingParty = [
        
    ];

    /**
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty[] $economicOperatorParty
     */
    private $economicOperatorParty = [
        
    ];

    /**
     * ASBIE
     *  Qualification Application Request. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Qualification Application Request
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     */
    private $procurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterion[] $tenderingCriterion
     */
    private $tenderingCriterion = [
        
    ];

    /**
     * ASBIE
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Qualification Application Request
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
     *  Qualification Application Request. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Qualification Application Request
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     * @return self
     */
    public function setContractFolderID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID)
    {
        $this->contractFolderID = $contractFolderID;
        return $this;
    }

    /**
     * Adds as contractName
     *
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName $contractName
     */
    public function addToContractName(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName $contractName)
    {
        $this->contractName[] = $contractName;
        return $this;
    }

    /**
     * isset contractName
     *
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractName($index)
    {
        return isset($this->contractName[$index]);
    }

    /**
     * unset contractName
     *
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractName($index)
    {
        unset($this->contractName[$index]);
    }

    /**
     * Gets as contractName
     *
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[]
     */
    public function getContractName()
    {
        return $this->contractName;
    }

    /**
     * Sets a new contractName
     *
     * BBIE
     *  Qualification Application Request. Contract Name. Name
     *  Short title of a contract associated with this Tender.
     *  0..n
     *  Qualification Application Request
     *  Contract Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractName[] $contractName
     * @return self
     */
    public function setContractName(?array $contractName = null)
    {
        $this->contractName = $contractName;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Qualification Application Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Qualification Application Request
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
     *  Qualification Application Request. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Qualification Application Request
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
     *  Qualification Application Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Version. Identifier
     *  Indicates the current version of the Qualification Application Request.
     *  0..1
     *  Qualification Application Request
     *  Version
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
     *  Qualification Application Request. Version. Identifier
     *  Indicates the current version of the Qualification Application Request.
     *  0..1
     *  Qualification Application Request
     *  Version
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
     *  Qualification Application Request. Previous_ Version. Identifier
     *  Identifies the previous version of the Qualification Application Request which is superceded by this version.
     *  0..1
     *  Qualification Application Request
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
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
     *  Qualification Application Request. Previous_ Version. Identifier
     *  Identifies the previous version of the Qualification Application Request which is superceded by this version.
     *  0..1
     *  Qualification Application Request
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
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
     * Gets as procedureCode
     *
     * BBIE
     *  Qualification Application Request. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Qualification Application Request
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
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
     *  Qualification Application Request. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Qualification Application Request
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode
     * @return self
     */
    public function setProcedureCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcedureCode $procedureCode = null)
    {
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * Gets as qualificationApplicationTypeCode
     *
     * BBIE
     *  Qualification Application Request. Qualification Application Type Code. Code
     *  A code specifying the type of the Qualification Application.
     *  0..1
     *  Qualification Application Request
     *  Qualification Application Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualificationApplicationTypeCode
     */
    public function getQualificationApplicationTypeCode()
    {
        return $this->qualificationApplicationTypeCode;
    }

    /**
     * Sets a new qualificationApplicationTypeCode
     *
     * BBIE
     *  Qualification Application Request. Qualification Application Type Code. Code
     *  A code specifying the type of the Qualification Application.
     *  0..1
     *  Qualification Application Request
     *  Qualification Application Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualificationApplicationTypeCode $qualificationApplicationTypeCode
     * @return self
     */
    public function setQualificationApplicationTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\QualificationApplicationTypeCode $qualificationApplicationTypeCode = null)
    {
        $this->qualificationApplicationTypeCode = $qualificationApplicationTypeCode;
        return $this;
    }

    /**
     * Adds as weightScoringMethodologyNote
     *
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightScoringMethodologyNote $weightScoringMethodologyNote
     */
    public function addToWeightScoringMethodologyNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightScoringMethodologyNote $weightScoringMethodologyNote)
    {
        $this->weightScoringMethodologyNote[] = $weightScoringMethodologyNote;
        return $this;
    }

    /**
     * isset weightScoringMethodologyNote
     *
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeightScoringMethodologyNote($index)
    {
        return isset($this->weightScoringMethodologyNote[$index]);
    }

    /**
     * unset weightScoringMethodologyNote
     *
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeightScoringMethodologyNote($index)
    {
        unset($this->weightScoringMethodologyNote[$index]);
    }

    /**
     * Gets as weightScoringMethodologyNote
     *
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightScoringMethodologyNote[]
     */
    public function getWeightScoringMethodologyNote()
    {
        return $this->weightScoringMethodologyNote;
    }

    /**
     * Sets a new weightScoringMethodologyNote
     *
     * BBIE
     *  Qualification Application Request. Weight Scoring Methodology Note. Text
     *  Free-form text to describing information about Weight Scoring Methodology.
     *  0..n
     *  Qualification Application Request
     *  Weight Scoring Methodology Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightScoringMethodologyNote[] $weightScoringMethodologyNote
     * @return self
     */
    public function setWeightScoringMethodologyNote(?array $weightScoringMethodologyNote = null)
    {
        $this->weightScoringMethodologyNote = $weightScoringMethodologyNote;
        return $this;
    }

    /**
     * Gets as weightingTypeCode
     *
     * BBIE
     *  Qualification Application Request. Weighting Type Code. Code
     *  A code specifying the type of the Weighting.
     *  0..1
     *  Qualification Application Request
     *  Weighting Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingTypeCode
     */
    public function getWeightingTypeCode()
    {
        return $this->weightingTypeCode;
    }

    /**
     * Sets a new weightingTypeCode
     *
     * BBIE
     *  Qualification Application Request. Weighting Type Code. Code
     *  A code specifying the type of the Weighting.
     *  0..1
     *  Qualification Application Request
     *  Weighting Type Code
     *  Code
     *  Code. Type
     *  "Regulated", "Self-contained"
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingTypeCode $weightingTypeCode
     * @return self
     */
    public function setWeightingTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeightingTypeCode $weightingTypeCode = null)
    {
        $this->weightingTypeCode = $weightingTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Qualification Application Request
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
     * Adds as contractingParty
     *
     * ASBIE
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty
     */
    public function addToContractingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty $contractingParty)
    {
        $this->contractingParty[] = $contractingParty;
        return $this;
    }

    /**
     * isset contractingParty
     *
     * ASBIE
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractingParty($index)
    {
        return isset($this->contractingParty[$index]);
    }

    /**
     * unset contractingParty
     *
     * ASBIE
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractingParty($index)
    {
        unset($this->contractingParty[$index]);
    }

    /**
     * Gets as contractingParty
     *
     * ASBIE
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[]
     */
    public function getContractingParty()
    {
        return $this->contractingParty;
    }

    /**
     * Sets a new contractingParty
     *
     * ASBIE
     *  Qualification Application Request. Contracting Party
     *  The contracting party.
     *  1..n
     *  Qualification Application Request
     *  Contracting Party
     *  Contracting Party
     *  Contracting Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ContractingParty[] $contractingParty
     * @return self
     */
    public function setContractingParty(array $contractingParty)
    {
        $this->contractingParty = $contractingParty;
        return $this;
    }

    /**
     * Adds as economicOperatorParty
     *
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty
     */
    public function addToEconomicOperatorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty)
    {
        $this->economicOperatorParty[] = $economicOperatorParty;
        return $this;
    }

    /**
     * isset economicOperatorParty
     *
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEconomicOperatorParty($index)
    {
        return isset($this->economicOperatorParty[$index]);
    }

    /**
     * unset economicOperatorParty
     *
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEconomicOperatorParty($index)
    {
        unset($this->economicOperatorParty[$index]);
    }

    /**
     * Gets as economicOperatorParty
     *
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty[]
     */
    public function getEconomicOperatorParty()
    {
        return $this->economicOperatorParty;
    }

    /**
     * Sets a new economicOperatorParty
     *
     * ASBIE
     *  Qualification Application Request. Economic Operator Party
     *  The Economic Operator receiving the Qualification Application Resquest.
     *  0..n
     *  Qualification Application Request
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty[] $economicOperatorParty
     * @return self
     */
    public function setEconomicOperatorParty(?array $economicOperatorParty = null)
    {
        $this->economicOperatorParty = $economicOperatorParty;
        return $this;
    }

    /**
     * Gets as procurementProject
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Qualification Application Request
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
     *  Qualification Application Request. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Qualification Application Request
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
     * Adds as procurementProjectLot
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    public function addToProcurementProjectLot(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot[] = $procurementProjectLot;
        return $this;
    }

    /**
     * isset procurementProjectLot
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementProjectLot($index)
    {
        return isset($this->procurementProjectLot[$index]);
    }

    /**
     * unset procurementProjectLot
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementProjectLot($index)
    {
        unset($this->procurementProjectLot[$index]);
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[]
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Qualification Application Request. Procurement Project Lot
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Qualification Application Request
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProjectLot[] $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?array $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as tenderingCriterion
     *
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterion $tenderingCriterion
     */
    public function addToTenderingCriterion(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterion $tenderingCriterion)
    {
        $this->tenderingCriterion[] = $tenderingCriterion;
        return $this;
    }

    /**
     * isset tenderingCriterion
     *
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderingCriterion($index)
    {
        return isset($this->tenderingCriterion[$index]);
    }

    /**
     * unset tenderingCriterion
     *
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderingCriterion($index)
    {
        unset($this->tenderingCriterion[$index]);
    }

    /**
     * Gets as tenderingCriterion
     *
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterion[]
     */
    public function getTenderingCriterion()
    {
        return $this->tenderingCriterion;
    }

    /**
     * Sets a new tenderingCriterion
     *
     * ASBIE
     *  Qualification Application Request. Tendering Criterion
     *  A criterion supporting Tenderer qualifications.
     *  0..n
     *  Qualification Application Request
     *  Tendering Criterion
     *  Tendering Criterion
     *  Tendering Criterion
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TenderingCriterion[] $tenderingCriterion
     * @return self
     */
    public function setTenderingCriterion(?array $tenderingCriterion = null)
    {
        $this->tenderingCriterion = $tenderingCriterion;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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
     *  Qualification Application Request. Signature
     *  A signature applied to this document.
     *  0..n
     *  Qualification Application Request
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

