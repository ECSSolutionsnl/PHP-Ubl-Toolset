<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Maindoc\CommonTransportationReport;

/**
 * Class representing CommonTransportationReportType
 *
 * ABIE
 *  Common Transportation Report. Details
 *  A common document used for reporting transport related issues to authorities or regulators.
 *  Common Transportation Report
 *  Single window documents, border crossing reports.
 * XSD Type: CommonTransportationReportType
 */
class CommonTransportationReportType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Common Transportation Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Common Transportation Report
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Common Transportation Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Common Transportation Report
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Common Transportation Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Common Transportation Report
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Common Transportation Report. Identifier
     *  An identifier for this document.
     *  1
     *  Common Transportation Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Common Transportation Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Common Transportation Report
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Common Transportation Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Common Transportation Report
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Common Transportation Report. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Common Transportation Report
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Common Transportation Report. Document Status Code. Code
     *  A code signifying the status of this Common Transportation Report with respect to its original state.
     *  0..1
     *  Common Transportation Report
     *  Document Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     */
    private $documentStatusCode = null;

    /**
     * BBIE
     *  Common Transportation Report. Report Type Code. Code
     *  A code signifying the type of report being provided
     *  0..1
     *  Common Transportation Report
     *  Report Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportTypeCode $reportTypeCode
     */
    private $reportTypeCode = null;

    /**
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportType[] $reportType
     */
    private $reportType = [
        
    ];

    /**
     * BBIE
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Common Transportation Report
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * ASBIE
     *  Common Transportation Report. Reporter_ Party. Party
     *  The party providing this common transportation report.
     *  1
     *  Common Transportation Report
     *  Reporter
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReporterParty $reporterParty
     */
    private $reporterParty = null;

    /**
     * ASBIE
     *  Common Transportation Report. Authority_ Party. Party
     *  The authority or regulator receiving this common transportation report.
     *  0..1
     *  Common Transportation Report
     *  Authority
     *  Party
     *  Party
     *  Party
     *  Harbour, Customs authorites, Department of Transport
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty
     */
    private $authorityParty = null;

    /**
     * ASBIE
     *  Common Transportation Report. Sender_ Party. Party
     *  The party sending this report.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Receiver_ Party. Party
     *  The party receiving this report.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Reporting_ Location. Location
     *  A location to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Reporting
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportingLocation $reportingLocation
     */
    private $reportingLocation = null;

    /**
     * ASBIE
     *  Common Transportation Report. Shipment
     *  A shipment to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportMeans[] $transportMeans
     */
    private $transportMeans = [
        
    ];

    /**
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Identifier
     *  An identifier for this document.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Identifier
     *  An identifier for this document.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Common Transportation Report
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
     * Gets as documentStatusCode
     *
     * BBIE
     *  Common Transportation Report. Document Status Code. Code
     *  A code signifying the status of this Common Transportation Report with respect to its original state.
     *  0..1
     *  Common Transportation Report
     *  Document Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode
     */
    public function getDocumentStatusCode()
    {
        return $this->documentStatusCode;
    }

    /**
     * Sets a new documentStatusCode
     *
     * BBIE
     *  Common Transportation Report. Document Status Code. Code
     *  A code signifying the status of this Common Transportation Report with respect to its original state.
     *  0..1
     *  Common Transportation Report
     *  Document Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode
     * @return self
     */
    public function setDocumentStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentStatusCode $documentStatusCode = null)
    {
        $this->documentStatusCode = $documentStatusCode;
        return $this;
    }

    /**
     * Gets as reportTypeCode
     *
     * BBIE
     *  Common Transportation Report. Report Type Code. Code
     *  A code signifying the type of report being provided
     *  0..1
     *  Common Transportation Report
     *  Report Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportTypeCode
     */
    public function getReportTypeCode()
    {
        return $this->reportTypeCode;
    }

    /**
     * Sets a new reportTypeCode
     *
     * BBIE
     *  Common Transportation Report. Report Type Code. Code
     *  A code signifying the type of report being provided
     *  0..1
     *  Common Transportation Report
     *  Report Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportTypeCode $reportTypeCode
     * @return self
     */
    public function setReportTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportTypeCode $reportTypeCode = null)
    {
        $this->reportTypeCode = $reportTypeCode;
        return $this;
    }

    /**
     * Adds as reportType
     *
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportType $reportType
     */
    public function addToReportType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportType $reportType)
    {
        $this->reportType[] = $reportType;
        return $this;
    }

    /**
     * isset reportType
     *
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReportType($index)
    {
        return isset($this->reportType[$index]);
    }

    /**
     * unset reportType
     *
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReportType($index)
    {
        unset($this->reportType[$index]);
    }

    /**
     * Gets as reportType
     *
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportType[]
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Sets a new reportType
     *
     * BBIE
     *  Common Transportation Report. Report Type. Text
     *  A text that identifies the type of report to business users.
     *  0..n
     *  Common Transportation Report
     *  Report Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReportType[] $reportType
     * @return self
     */
    public function setReportType(?array $reportType = null)
    {
        $this->reportType = $reportType;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Description. Text
     *  Textual description of this document instance.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Common Transportation Report
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
     *  Common Transportation Report. Version. Identifier
     *  Identifies a version of a common transportation report in order to distinguish updates.
     *  0..1
     *  Common Transportation Report
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
     * Gets as reporterParty
     *
     * ASBIE
     *  Common Transportation Report. Reporter_ Party. Party
     *  The party providing this common transportation report.
     *  1
     *  Common Transportation Report
     *  Reporter
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReporterParty
     */
    public function getReporterParty()
    {
        return $this->reporterParty;
    }

    /**
     * Sets a new reporterParty
     *
     * ASBIE
     *  Common Transportation Report. Reporter_ Party. Party
     *  The party providing this common transportation report.
     *  1
     *  Common Transportation Report
     *  Reporter
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReporterParty $reporterParty
     * @return self
     */
    public function setReporterParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReporterParty $reporterParty)
    {
        $this->reporterParty = $reporterParty;
        return $this;
    }

    /**
     * Gets as authorityParty
     *
     * ASBIE
     *  Common Transportation Report. Authority_ Party. Party
     *  The authority or regulator receiving this common transportation report.
     *  0..1
     *  Common Transportation Report
     *  Authority
     *  Party
     *  Party
     *  Party
     *  Harbour, Customs authorites, Department of Transport
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty
     */
    public function getAuthorityParty()
    {
        return $this->authorityParty;
    }

    /**
     * Sets a new authorityParty
     *
     * ASBIE
     *  Common Transportation Report. Authority_ Party. Party
     *  The authority or regulator receiving this common transportation report.
     *  0..1
     *  Common Transportation Report
     *  Authority
     *  Party
     *  Party
     *  Party
     *  Harbour, Customs authorites, Department of Transport
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty
     * @return self
     */
    public function setAuthorityParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AuthorityParty $authorityParty = null)
    {
        $this->authorityParty = $authorityParty;
        return $this;
    }

    /**
     * Gets as senderParty
     *
     * ASBIE
     *  Common Transportation Report. Sender_ Party. Party
     *  The party sending this report.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Sender_ Party. Party
     *  The party sending this report.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Receiver_ Party. Party
     *  The party receiving this report.
     *  1
     *  Common Transportation Report
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
     *  Common Transportation Report. Receiver_ Party. Party
     *  The party receiving this report.
     *  1
     *  Common Transportation Report
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
     * Gets as reportingLocation
     *
     * ASBIE
     *  Common Transportation Report. Reporting_ Location. Location
     *  A location to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Reporting
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportingLocation
     */
    public function getReportingLocation()
    {
        return $this->reportingLocation;
    }

    /**
     * Sets a new reportingLocation
     *
     * ASBIE
     *  Common Transportation Report. Reporting_ Location. Location
     *  A location to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Reporting
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportingLocation $reportingLocation
     * @return self
     */
    public function setReportingLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportingLocation $reportingLocation = null)
    {
        $this->reportingLocation = $reportingLocation;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Common Transportation Report. Shipment
     *  A shipment to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Common Transportation Report. Shipment
     *  A shipment to which this common transportation report applies.
     *  0..1
     *  Common Transportation Report
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as transportMeans
     *
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportMeans $transportMeans
     */
    public function addToTransportMeans(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportMeans $transportMeans)
    {
        $this->transportMeans[] = $transportMeans;
        return $this;
    }

    /**
     * isset transportMeans
     *
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportMeans($index)
    {
        return isset($this->transportMeans[$index]);
    }

    /**
     * unset transportMeans
     *
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportMeans($index)
    {
        unset($this->transportMeans[$index]);
    }

    /**
     * Gets as transportMeans
     *
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportMeans[]
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * ASBIE
     *  Common Transportation Report. Transport Means
     *  A means of transport used in relation to this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TransportMeans[] $transportMeans
     * @return self
     */
    public function setTransportMeans(?array $transportMeans = null)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Common Transportation Report. Document Reference
     *  A reference to a document relevant for or associated with this common transportation report.
     *  0..n
     *  Common Transportation Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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
     *  Common Transportation Report. Signature
     *  A signature applied to this document.
     *  0..n
     *  Common Transportation Report
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

