<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\GuaranteeCertificate;

/**
 * Class representing GuaranteeCertificateType
 *
 * ABIE
 *  Guarantee Certificate. Details
 *  A document to notify the deposit of a bid bond guarantee.
 *  Guarantee Certificate
 * XSD Type: GuaranteeCertificateType
 */
class GuaranteeCertificateType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Guarantee Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Guarantee Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Guarantee Certificate. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Guarantee Certificate
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Guarantee Certificate. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Guarantee Certificate
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Guarantee Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Guarantee Certificate
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Guarantee Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Guarantee Certificate
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Guarantee Certificate. Guarantee Type Code. Code
     *  A code signifying the type of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GuaranteeTypeCode $guaranteeTypeCode
     */
    private $guaranteeTypeCode = null;

    /**
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[] $purpose
     */
    private $purpose = [
        
    ];

    /**
     * BBIE
     *  Guarantee Certificate. Liability. Amount
     *  The liability amount (a monetary value) in the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LiabilityAmount $liabilityAmount
     */
    private $liabilityAmount = null;

    /**
     * BBIE
     *  Guarantee Certificate. Constitution Code. Code
     *  The code stating the constitution means of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Constitution Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConstitutionCode $constitutionCode
     */
    private $constitutionCode = null;

    /**
     * BBIE
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Applicable_ Period. Period
     *  The specified period in the tendering process for which this bid bond guarantee is effective
     *  0..1
     *  Guarantee Certificate
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod $applicablePeriod
     */
    private $applicablePeriod = null;

    /**
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableRegulation[] $applicableRegulation
     */
    private $applicableRegulation = [
        
    ];

    /**
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuaranteeDocumentReference[] $guaranteeDocumentReference
     */
    private $guaranteeDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImmobilizedSecurity[] $immobilizedSecurity
     */
    private $immobilizedSecurity = [
        
    ];

    /**
     * ASBIE
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Guarantor_ Party. Party
     *  The guarantee creditor organization that has the authority to charge bid bond guarantee credit.
     *  1
     *  Guarantee Certificate
     *  Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuarantorParty $guarantorParty
     */
    private $guarantorParty = null;

    /**
     * ASBIE
     *  Guarantee Certificate. Interested_ Party. Party
     *  The party depositing the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Interested
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedParty $interestedParty
     */
    private $interestedParty = null;

    /**
     * ASBIE
     *  Guarantee Certificate. Beneficiary_ Party. Party
     *  The beneficiary of the bid bond guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Beneficiary
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BeneficiaryParty $beneficiaryParty
     */
    private $beneficiaryParty = null;

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
     *  Guarantee Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Identifier
     *  An identifier for this document, assigned by the sender.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  1
     *  Guarantee Certificate
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
     * Gets as issueDate
     *
     * BBIE
     *  Guarantee Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Guarantee Certificate
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
     * Gets as guaranteeTypeCode
     *
     * BBIE
     *  Guarantee Certificate. Guarantee Type Code. Code
     *  A code signifying the type of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GuaranteeTypeCode
     */
    public function getGuaranteeTypeCode()
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * Sets a new guaranteeTypeCode
     *
     * BBIE
     *  Guarantee Certificate. Guarantee Type Code. Code
     *  A code signifying the type of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GuaranteeTypeCode $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GuaranteeTypeCode $guaranteeTypeCode = null)
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose $purpose
     */
    public function addToPurpose(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurpose($index)
    {
        return isset($this->purpose[$index]);
    }

    /**
     * unset purpose
     *
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurpose($index)
    {
        unset($this->purpose[$index]);
    }

    /**
     * Gets as purpose
     *
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * BBIE
     *  Guarantee Certificate. Purpose. Text
     *  A textual description of the purpose of the bid bond guarantee.
     *  0..n
     *  Guarantee Certificate
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[] $purpose
     * @return self
     */
    public function setPurpose(?array $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as liabilityAmount
     *
     * BBIE
     *  Guarantee Certificate. Liability. Amount
     *  The liability amount (a monetary value) in the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LiabilityAmount
     */
    public function getLiabilityAmount()
    {
        return $this->liabilityAmount;
    }

    /**
     * Sets a new liabilityAmount
     *
     * BBIE
     *  Guarantee Certificate. Liability. Amount
     *  The liability amount (a monetary value) in the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LiabilityAmount $liabilityAmount
     * @return self
     */
    public function setLiabilityAmount(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LiabilityAmount $liabilityAmount)
    {
        $this->liabilityAmount = $liabilityAmount;
        return $this;
    }

    /**
     * Gets as constitutionCode
     *
     * BBIE
     *  Guarantee Certificate. Constitution Code. Code
     *  The code stating the constitution means of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Constitution Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConstitutionCode
     */
    public function getConstitutionCode()
    {
        return $this->constitutionCode;
    }

    /**
     * Sets a new constitutionCode
     *
     * BBIE
     *  Guarantee Certificate. Constitution Code. Code
     *  The code stating the constitution means of the guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Constitution Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConstitutionCode $constitutionCode
     * @return self
     */
    public function setConstitutionCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConstitutionCode $constitutionCode = null)
    {
        $this->constitutionCode = $constitutionCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Guarantee Certificate
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
     * Gets as applicablePeriod
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Period. Period
     *  The specified period in the tendering process for which this bid bond guarantee is effective
     *  0..1
     *  Guarantee Certificate
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod
     */
    public function getApplicablePeriod()
    {
        return $this->applicablePeriod;
    }

    /**
     * Sets a new applicablePeriod
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Period. Period
     *  The specified period in the tendering process for which this bid bond guarantee is effective
     *  0..1
     *  Guarantee Certificate
     *  Applicable
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod $applicablePeriod
     * @return self
     */
    public function setApplicablePeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicablePeriod $applicablePeriod = null)
    {
        $this->applicablePeriod = $applicablePeriod;
        return $this;
    }

    /**
     * Adds as applicableRegulation
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableRegulation $applicableRegulation
     */
    public function addToApplicableRegulation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableRegulation $applicableRegulation)
    {
        $this->applicableRegulation[] = $applicableRegulation;
        return $this;
    }

    /**
     * isset applicableRegulation
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableRegulation($index)
    {
        return isset($this->applicableRegulation[$index]);
    }

    /**
     * unset applicableRegulation
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableRegulation($index)
    {
        unset($this->applicableRegulation[$index]);
    }

    /**
     * Gets as applicableRegulation
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableRegulation[]
     */
    public function getApplicableRegulation()
    {
        return $this->applicableRegulation;
    }

    /**
     * Sets a new applicableRegulation
     *
     * ASBIE
     *  Guarantee Certificate. Applicable_ Regulation. Regulation
     *  A reference to an applicable regulation.
     *  0..n
     *  Guarantee Certificate
     *  Applicable
     *  Regulation
     *  Regulation
     *  Regulation
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableRegulation[] $applicableRegulation
     * @return self
     */
    public function setApplicableRegulation(?array $applicableRegulation = null)
    {
        $this->applicableRegulation = $applicableRegulation;
        return $this;
    }

    /**
     * Adds as guaranteeDocumentReference
     *
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuaranteeDocumentReference $guaranteeDocumentReference
     */
    public function addToGuaranteeDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuaranteeDocumentReference $guaranteeDocumentReference)
    {
        $this->guaranteeDocumentReference[] = $guaranteeDocumentReference;
        return $this;
    }

    /**
     * isset guaranteeDocumentReference
     *
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteeDocumentReference($index)
    {
        return isset($this->guaranteeDocumentReference[$index]);
    }

    /**
     * unset guaranteeDocumentReference
     *
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteeDocumentReference($index)
    {
        unset($this->guaranteeDocumentReference[$index]);
    }

    /**
     * Gets as guaranteeDocumentReference
     *
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuaranteeDocumentReference[]
     */
    public function getGuaranteeDocumentReference()
    {
        return $this->guaranteeDocumentReference;
    }

    /**
     * Sets a new guaranteeDocumentReference
     *
     * ASBIE
     *  Guarantee Certificate. Guarantee_ Document Reference. Document Reference
     *  A reference to a legal document.
     *  0..n
     *  Guarantee Certificate
     *  Guarantee
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuaranteeDocumentReference[] $guaranteeDocumentReference
     * @return self
     */
    public function setGuaranteeDocumentReference(?array $guaranteeDocumentReference = null)
    {
        $this->guaranteeDocumentReference = $guaranteeDocumentReference;
        return $this;
    }

    /**
     * Adds as immobilizedSecurity
     *
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImmobilizedSecurity $immobilizedSecurity
     */
    public function addToImmobilizedSecurity(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImmobilizedSecurity $immobilizedSecurity)
    {
        $this->immobilizedSecurity[] = $immobilizedSecurity;
        return $this;
    }

    /**
     * isset immobilizedSecurity
     *
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImmobilizedSecurity($index)
    {
        return isset($this->immobilizedSecurity[$index]);
    }

    /**
     * unset immobilizedSecurity
     *
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImmobilizedSecurity($index)
    {
        unset($this->immobilizedSecurity[$index]);
    }

    /**
     * Gets as immobilizedSecurity
     *
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImmobilizedSecurity[]
     */
    public function getImmobilizedSecurity()
    {
        return $this->immobilizedSecurity;
    }

    /**
     * Sets a new immobilizedSecurity
     *
     * ASBIE
     *  Guarantee Certificate. Immobilized Security
     *  Details of an immobilized security.
     *  0..n
     *  Guarantee Certificate
     *  Immobilized Security
     *  Immobilized Security
     *  Immobilized Security
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImmobilizedSecurity[] $immobilizedSecurity
     * @return self
     */
    public function setImmobilizedSecurity(?array $immobilizedSecurity = null)
    {
        $this->immobilizedSecurity = $immobilizedSecurity;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     *  Guarantee Certificate. Signature
     *  A signature applied to this document.
     *  0..n
     *  Guarantee Certificate
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
     * Gets as guarantorParty
     *
     * ASBIE
     *  Guarantee Certificate. Guarantor_ Party. Party
     *  The guarantee creditor organization that has the authority to charge bid bond guarantee credit.
     *  1
     *  Guarantee Certificate
     *  Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuarantorParty
     */
    public function getGuarantorParty()
    {
        return $this->guarantorParty;
    }

    /**
     * Sets a new guarantorParty
     *
     * ASBIE
     *  Guarantee Certificate. Guarantor_ Party. Party
     *  The guarantee creditor organization that has the authority to charge bid bond guarantee credit.
     *  1
     *  Guarantee Certificate
     *  Guarantor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuarantorParty $guarantorParty
     * @return self
     */
    public function setGuarantorParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GuarantorParty $guarantorParty)
    {
        $this->guarantorParty = $guarantorParty;
        return $this;
    }

    /**
     * Gets as interestedParty
     *
     * ASBIE
     *  Guarantee Certificate. Interested_ Party. Party
     *  The party depositing the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Interested
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedParty
     */
    public function getInterestedParty()
    {
        return $this->interestedParty;
    }

    /**
     * Sets a new interestedParty
     *
     * ASBIE
     *  Guarantee Certificate. Interested_ Party. Party
     *  The party depositing the bid bond guarantee.
     *  1
     *  Guarantee Certificate
     *  Interested
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedParty $interestedParty
     * @return self
     */
    public function setInterestedParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedParty $interestedParty)
    {
        $this->interestedParty = $interestedParty;
        return $this;
    }

    /**
     * Gets as beneficiaryParty
     *
     * ASBIE
     *  Guarantee Certificate. Beneficiary_ Party. Party
     *  The beneficiary of the bid bond guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Beneficiary
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BeneficiaryParty
     */
    public function getBeneficiaryParty()
    {
        return $this->beneficiaryParty;
    }

    /**
     * Sets a new beneficiaryParty
     *
     * ASBIE
     *  Guarantee Certificate. Beneficiary_ Party. Party
     *  The beneficiary of the bid bond guarantee.
     *  0..1
     *  Guarantee Certificate
     *  Beneficiary
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BeneficiaryParty $beneficiaryParty
     * @return self
     */
    public function setBeneficiaryParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BeneficiaryParty $beneficiaryParty = null)
    {
        $this->beneficiaryParty = $beneficiaryParty;
        return $this;
    }
}

