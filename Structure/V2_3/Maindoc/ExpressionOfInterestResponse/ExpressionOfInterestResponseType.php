<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\ExpressionOfInterestResponse;

/**
 * Class representing ExpressionOfInterestResponseType
 *
 * ABIE
 *  Expression Of Interest Response. Details
 *  An expression of interest confirmation issued by a Contracting Party in reply to an expression of interest. The purpose of this document is to inform the Economic Operator he has been registered as an interested party.
 *  Expression Of Interest Response
 * XSD Type: ExpressionOfInterestResponseType
 */
class ExpressionOfInterestResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Expression Of Interest Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Expression Of Interest Response
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Expression Of Interest Response
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Expression Of Interest Response
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Expression Of Interest Response
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Expression Of Interest Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Expression Of Interest Response
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Expression Of Interest Response
     *  Contract Folder Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractFolderID $contractFolderID
     */
    private $contractFolderID = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Expression Of Interest Response
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Expression Of Interest Response
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Tender Language_ Locale Code. Code
     *  A code signifying the language required for the tender.
     *  0..1
     *  Expression Of Interest Response
     *  Tender Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderLanguageLocaleCode $tenderLanguageLocaleCode
     */
    private $tenderLanguageLocaleCode = null;

    /**
     * BBIE
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExpressionOfInterestDocumentReference[] $expressionOfInterestDocumentReference
     */
    private $expressionOfInterestDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Economic Operator Party
     *  The economic operator that issued the expression of interest and is receiving the confirmation.
     *  1
     *  Expression Of Interest Response
     *  Economic Operator Party
     *  Economic Operator Party
     *  Economic Operator Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EconomicOperatorParty $economicOperatorParty
     */
    private $economicOperatorParty = null;

    /**
     * ASBIE
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Expression Of Interest Response
     *  Procurement Project
     *  Procurement Project
     *  Procurement Project
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ProcurementProject $procurementProject
     */
    private $procurementProject = null;

    /**
     * ASBIE
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. UBL Version Identifier. Identifier
     *  The earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Folder Identifier. Identifier
     *  An identifier, assigned by the sender, for the process file (i.e., record) to which this document belongs.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Expression Of Interest Response
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
     * Adds as contractName
     *
     * BBIE
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contract Name. Name
     *  Short title of a contract associated with this Expression of Interest.
     *  0..n
     *  Expression Of Interest Response
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
     * Gets as tenderLanguageLocaleCode
     *
     * BBIE
     *  Expression Of Interest Response. Tender Language_ Locale Code. Code
     *  A code signifying the language required for the tender.
     *  0..1
     *  Expression Of Interest Response
     *  Tender Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderLanguageLocaleCode
     */
    public function getTenderLanguageLocaleCode()
    {
        return $this->tenderLanguageLocaleCode;
    }

    /**
     * Sets a new tenderLanguageLocaleCode
     *
     * BBIE
     *  Expression Of Interest Response. Tender Language_ Locale Code. Code
     *  A code signifying the language required for the tender.
     *  0..1
     *  Expression Of Interest Response
     *  Tender Language
     *  Locale Code
     *  Code
     *  Language
     *  Language_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderLanguageLocaleCode $tenderLanguageLocaleCode
     * @return self
     */
    public function setTenderLanguageLocaleCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TenderLanguageLocaleCode $tenderLanguageLocaleCode = null)
    {
        $this->tenderLanguageLocaleCode = $tenderLanguageLocaleCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Expression Of Interest Response
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
     * Adds as expressionOfInterestDocumentReference
     *
     * ASBIE
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExpressionOfInterestDocumentReference $expressionOfInterestDocumentReference
     */
    public function addToExpressionOfInterestDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExpressionOfInterestDocumentReference $expressionOfInterestDocumentReference)
    {
        $this->expressionOfInterestDocumentReference[] = $expressionOfInterestDocumentReference;
        return $this;
    }

    /**
     * isset expressionOfInterestDocumentReference
     *
     * ASBIE
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExpressionOfInterestDocumentReference($index)
    {
        return isset($this->expressionOfInterestDocumentReference[$index]);
    }

    /**
     * unset expressionOfInterestDocumentReference
     *
     * ASBIE
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExpressionOfInterestDocumentReference($index)
    {
        unset($this->expressionOfInterestDocumentReference[$index]);
    }

    /**
     * Gets as expressionOfInterestDocumentReference
     *
     * ASBIE
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExpressionOfInterestDocumentReference[]
     */
    public function getExpressionOfInterestDocumentReference()
    {
        return $this->expressionOfInterestDocumentReference;
    }

    /**
     * Sets a new expressionOfInterestDocumentReference
     *
     * ASBIE
     *  Expression Of Interest Response. Expression Of Interest_ Document Reference. Document Reference
     *  A reference to the expression of interest document associated with this document.
     *  0..n
     *  Expression Of Interest Response
     *  Expression Of Interest
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExpressionOfInterestDocumentReference[] $expressionOfInterestDocumentReference
     * @return self
     */
    public function setExpressionOfInterestDocumentReference(?array $expressionOfInterestDocumentReference = null)
    {
        $this->expressionOfInterestDocumentReference = $expressionOfInterestDocumentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Signature
     *  A signature applied to this document.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Economic Operator Party
     *  The economic operator that issued the expression of interest and is receiving the confirmation.
     *  1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Economic Operator Party
     *  The economic operator that issued the expression of interest and is receiving the confirmation.
     *  1
     *  Expression Of Interest Response
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
     * Adds as contractingParty
     *
     * ASBIE
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Contracting Party
     *  The contracting party or parties in case of joint procurement.
     *  1..n
     *  Expression Of Interest Response
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
     * Gets as procurementProject
     *
     * ASBIE
     *  Expression Of Interest Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project
     *  An overall definition of this procurement project.
     *  0..1
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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
     *  Expression Of Interest Response. Procurement Project Lot Reference
     *  One of the procurement project lots into which this contract can be split.
     *  0..n
     *  Expression Of Interest Response
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

