<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\CertificateOfOrigin;

/**
 * Class representing CertificateOfOriginType
 *
 * ABIE
 *  Certificate Of Origin. Details
 *  A document that describes the Certificate of Origin.
 *  Certificate Of Origin
 * XSD Type: CertificateOfOriginType
 */
class CertificateOfOriginType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Certificate Of Origin. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Certificate Of Origin
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Certificate Of Origin. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Certificate Of Origin
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Certificate Of Origin. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Certificate Of Origin
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Certificate Of Origin. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Certificate Of Origin
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Version. Identifier
     *  Identifies the version of this Certificate of Origin.
     *  0..1
     *  Certificate Of Origin
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Exporter_ Party. Party
     *  The Party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin. Importer_ Party. Party
     *  The Party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EndorserParty[] $endorserParty
     */
    private $endorserParty = [
        
    ];

    /**
     * ASBIE
     *  Certificate Of Origin. Certificate Of Origin Application
     *  Details of the application for a Certificate of Origin.
     *  1
     *  Certificate Of Origin
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificateOfOriginApplication $certificateOfOriginApplication
     */
    private $certificateOfOriginApplication = null;

    /**
     * ASBIE
     *  Certificate Of Origin. Issuer_ Endorsement. Endorsement
     *  Issuer Endorsement details.
     *  1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Embassy_ Endorsement. Endorsement
     *  Embassy Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Embassy
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmbassyEndorsement $embassyEndorsement
     */
    private $embassyEndorsement = null;

    /**
     * ASBIE
     *  Certificate Of Origin. Insurance_ Endorsement. Endorsement
     *  Insurance Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Insurance
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InsuranceEndorsement $insuranceEndorsement
     */
    private $insuranceEndorsement = null;

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
     *  Certificate Of Origin. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Description. Text
     *  Textual description of the document instance.
     *  0..n
     *  Certificate Of Origin
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
     * Adds as note
     *
     * BBIE
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Version. Identifier
     *  Identifies the version of this Certificate of Origin.
     *  0..1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Version. Identifier
     *  Identifies the version of this Certificate of Origin.
     *  0..1
     *  Certificate Of Origin
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
     * Adds as signature
     *
     * ASBIE
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Signature
     *  A signature applied to this document.
     *  0..n
     *  Certificate Of Origin
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
     * Gets as exporterParty
     *
     * ASBIE
     *  Certificate Of Origin. Exporter_ Party. Party
     *  The Party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * ASBIE
     *  Certificate Of Origin. Exporter_ Party. Party
     *  The Party who makes the export declaration, or on whose behalf the export declaration is made, and who is the owner of the goods or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Certificate Of Origin
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExporterParty $exporterParty = null)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Certificate Of Origin. Importer_ Party. Party
     *  The Party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * ASBIE
     *  Certificate Of Origin. Importer_ Party. Party
     *  The Party who makes an import declaration, or on whose behalf a Customs clearing agent or other authorized person makes an import declaration. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Certificate Of Origin
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImporterParty $importerParty = null)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Adds as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EndorserParty $endorserParty
     */
    public function addToEndorserParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EndorserParty $endorserParty)
    {
        $this->endorserParty[] = $endorserParty;
        return $this;
    }

    /**
     * isset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorserParty($index)
    {
        return isset($this->endorserParty[$index]);
    }

    /**
     * unset endorserParty
     *
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorserParty($index)
    {
        unset($this->endorserParty[$index]);
    }

    /**
     * Gets as endorserParty
     *
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EndorserParty[]
     */
    public function getEndorserParty()
    {
        return $this->endorserParty;
    }

    /**
     * Sets a new endorserParty
     *
     * ASBIE
     *  Certificate Of Origin. Endorser Party
     *  The Party providing the endorsement.
     *  0..n
     *  Certificate Of Origin
     *  Endorser Party
     *  Endorser Party
     *  Endorser Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EndorserParty[] $endorserParty
     * @return self
     */
    public function setEndorserParty(?array $endorserParty = null)
    {
        $this->endorserParty = $endorserParty;
        return $this;
    }

    /**
     * Gets as certificateOfOriginApplication
     *
     * ASBIE
     *  Certificate Of Origin. Certificate Of Origin Application
     *  Details of the application for a Certificate of Origin.
     *  1
     *  Certificate Of Origin
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificateOfOriginApplication
     */
    public function getCertificateOfOriginApplication()
    {
        return $this->certificateOfOriginApplication;
    }

    /**
     * Sets a new certificateOfOriginApplication
     *
     * ASBIE
     *  Certificate Of Origin. Certificate Of Origin Application
     *  Details of the application for a Certificate of Origin.
     *  1
     *  Certificate Of Origin
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *  Certificate Of Origin Application
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificateOfOriginApplication $certificateOfOriginApplication
     * @return self
     */
    public function setCertificateOfOriginApplication(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificateOfOriginApplication $certificateOfOriginApplication)
    {
        $this->certificateOfOriginApplication = $certificateOfOriginApplication;
        return $this;
    }

    /**
     * Gets as issuerEndorsement
     *
     * ASBIE
     *  Certificate Of Origin. Issuer_ Endorsement. Endorsement
     *  Issuer Endorsement details.
     *  1
     *  Certificate Of Origin
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
     *  Certificate Of Origin. Issuer_ Endorsement. Endorsement
     *  Issuer Endorsement details.
     *  1
     *  Certificate Of Origin
     *  Issuer
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement
     * @return self
     */
    public function setIssuerEndorsement(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerEndorsement $issuerEndorsement)
    {
        $this->issuerEndorsement = $issuerEndorsement;
        return $this;
    }

    /**
     * Gets as embassyEndorsement
     *
     * ASBIE
     *  Certificate Of Origin. Embassy_ Endorsement. Endorsement
     *  Embassy Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Embassy
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmbassyEndorsement
     */
    public function getEmbassyEndorsement()
    {
        return $this->embassyEndorsement;
    }

    /**
     * Sets a new embassyEndorsement
     *
     * ASBIE
     *  Certificate Of Origin. Embassy_ Endorsement. Endorsement
     *  Embassy Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Embassy
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmbassyEndorsement $embassyEndorsement
     * @return self
     */
    public function setEmbassyEndorsement(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EmbassyEndorsement $embassyEndorsement = null)
    {
        $this->embassyEndorsement = $embassyEndorsement;
        return $this;
    }

    /**
     * Gets as insuranceEndorsement
     *
     * ASBIE
     *  Certificate Of Origin. Insurance_ Endorsement. Endorsement
     *  Insurance Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Insurance
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InsuranceEndorsement
     */
    public function getInsuranceEndorsement()
    {
        return $this->insuranceEndorsement;
    }

    /**
     * Sets a new insuranceEndorsement
     *
     * ASBIE
     *  Certificate Of Origin. Insurance_ Endorsement. Endorsement
     *  Insurance Endorsement details.
     *  0..1
     *  Certificate Of Origin
     *  Insurance
     *  Endorsement
     *  Endorsement
     *  Endorsement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InsuranceEndorsement $insuranceEndorsement
     * @return self
     */
    public function setInsuranceEndorsement(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InsuranceEndorsement $insuranceEndorsement = null)
    {
        $this->insuranceEndorsement = $insuranceEndorsement;
        return $this;
    }
}

