<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ISPSRequirementsType
 *
 * ABIE
 *  ISPS Requirements. Details
 *  A class to describe a set of ISPS Requirements.
 *  ISPS Requirements
 * XSD Type: ISPSRequirementsType
 */
class ISPSRequirementsType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  ISPS Requirements. Identifier
     *  An identifier for these ISPS requirements.
     *  1
     *  ISPS Requirements
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  ISPS Requirements. Valid_ ISSC Indicator. Indicator
     *  An indicator of whether the International Ship Security Certificate (ISSC) is valid (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  Valid
     *  ISSC Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $validISSCIndicator
     */
    private $validISSCIndicator = null;

    /**
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ISSCAbsenceReason[] $iSSCAbsenceReason
     */
    private $iSSCAbsenceReason = [
        
    ];

    /**
     * BBIE
     *  ISPS Requirements. ISSC Expiry_ Date. Date
     *  The expiration date of the International Ship Security Certificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Expiry
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $iSSCExpiryDate
     */
    private $iSSCExpiryDate = null;

    /**
     * BBIE
     *  ISPS Requirements. SSP On Board_ Indicator. Indicator
     *  An indicator of whether the vessel has a Ship Security Plan (SSP) on board (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sSPOnBoardIndicator
     */
    private $sSPOnBoardIndicator = null;

    /**
     * BBIE
     *  ISPS Requirements. SSP Security Measures Applied_ Indicator. Indicator
     *  An indication of whether the Ship Security Plan (SSP) meassures are applied (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP Security Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sSPSecurityMeasuresAppliedIndicator
     */
    private $sSPSecurityMeasuresAppliedIndicator = null;

    /**
     * BBIE
     *  ISPS Requirements. Current Operating_ Security Level Code. Code
     *  A code describing the current operating security level.
     *  0..1
     *  ISPS Requirements
     *  Current Operating
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CurrentOperatingSecurityLevelCode $currentOperatingSecurityLevelCode
     */
    private $currentOperatingSecurityLevelCode = null;

    /**
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalMattersDescription[] $additionalMattersDescription
     */
    private $additionalMattersDescription = [
        
    ];

    /**
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalSecurityMeasure[] $additionalSecurityMeasure
     */
    private $additionalSecurityMeasure = [
        
    ];

    /**
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortCallRecord[] $portCallRecord
     */
    private $portCallRecord = [
        
    ];

    /**
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipToShipActivityRecord[] $shipToShipActivityRecord
     */
    private $shipToShipActivityRecord = [
        
    ];

    /**
     * ASBIE
     *  ISPS Requirements. Report_ Location. Location
     *  The location where these ISPC requirements are reported.
     *  0..1
     *  ISPS Requirements
     *  Report
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportLocation $reportLocation
     */
    private $reportLocation = null;

    /**
     * ASBIE
     *  ISPS Requirements. ISSC Issuer_ Party. Party
     *  The party issuing the International Ship Security Cetificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ISSCIssuerParty $iSSCIssuerParty
     */
    private $iSSCIssuerParty = null;

    /**
     * ASBIE
     *  ISPS Requirements. Security Officer_ Person. Person
     *  The security officer reponsible for these ISPC requirements.
     *  0..1
     *  ISPS Requirements
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *  SSO
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityOfficerPerson $securityOfficerPerson
     */
    private $securityOfficerPerson = null;

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
     * Gets as iD
     *
     * BBIE
     *  ISPS Requirements. Identifier
     *  An identifier for these ISPS requirements.
     *  1
     *  ISPS Requirements
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
     *  ISPS Requirements. Identifier
     *  An identifier for these ISPS requirements.
     *  1
     *  ISPS Requirements
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
     * Gets as validISSCIndicator
     *
     * BBIE
     *  ISPS Requirements. Valid_ ISSC Indicator. Indicator
     *  An indicator of whether the International Ship Security Certificate (ISSC) is valid (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  Valid
     *  ISSC Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getValidISSCIndicator()
    {
        return $this->validISSCIndicator;
    }

    /**
     * Sets a new validISSCIndicator
     *
     * BBIE
     *  ISPS Requirements. Valid_ ISSC Indicator. Indicator
     *  An indicator of whether the International Ship Security Certificate (ISSC) is valid (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  Valid
     *  ISSC Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $validISSCIndicator
     * @return self
     */
    public function setValidISSCIndicator($validISSCIndicator)
    {
        $this->validISSCIndicator = $validISSCIndicator;
        return $this;
    }

    /**
     * Adds as iSSCAbsenceReason
     *
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ISSCAbsenceReason $iSSCAbsenceReason
     */
    public function addToISSCAbsenceReason(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ISSCAbsenceReason $iSSCAbsenceReason)
    {
        $this->iSSCAbsenceReason[] = $iSSCAbsenceReason;
        return $this;
    }

    /**
     * isset iSSCAbsenceReason
     *
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetISSCAbsenceReason($index)
    {
        return isset($this->iSSCAbsenceReason[$index]);
    }

    /**
     * unset iSSCAbsenceReason
     *
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetISSCAbsenceReason($index)
    {
        unset($this->iSSCAbsenceReason[$index]);
    }

    /**
     * Gets as iSSCAbsenceReason
     *
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ISSCAbsenceReason[]
     */
    public function getISSCAbsenceReason()
    {
        return $this->iSSCAbsenceReason;
    }

    /**
     * Sets a new iSSCAbsenceReason
     *
     * BBIE
     *  ISPS Requirements. ISSC Absence_ Reason. Text
     *  A text describing the reason if not having a International Ship Security Certificate (ISSC).
     *  0..n
     *  ISPS Requirements
     *  ISSC Absence
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ISSCAbsenceReason[] $iSSCAbsenceReason
     * @return self
     */
    public function setISSCAbsenceReason(?array $iSSCAbsenceReason = null)
    {
        $this->iSSCAbsenceReason = $iSSCAbsenceReason;
        return $this;
    }

    /**
     * Gets as iSSCExpiryDate
     *
     * BBIE
     *  ISPS Requirements. ISSC Expiry_ Date. Date
     *  The expiration date of the International Ship Security Certificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Expiry
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getISSCExpiryDate()
    {
        return $this->iSSCExpiryDate;
    }

    /**
     * Sets a new iSSCExpiryDate
     *
     * BBIE
     *  ISPS Requirements. ISSC Expiry_ Date. Date
     *  The expiration date of the International Ship Security Certificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Expiry
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $iSSCExpiryDate
     * @return self
     */
    public function setISSCExpiryDate(?\DateTime $iSSCExpiryDate = null)
    {
        $this->iSSCExpiryDate = $iSSCExpiryDate;
        return $this;
    }

    /**
     * Gets as sSPOnBoardIndicator
     *
     * BBIE
     *  ISPS Requirements. SSP On Board_ Indicator. Indicator
     *  An indicator of whether the vessel has a Ship Security Plan (SSP) on board (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSSPOnBoardIndicator()
    {
        return $this->sSPOnBoardIndicator;
    }

    /**
     * Sets a new sSPOnBoardIndicator
     *
     * BBIE
     *  ISPS Requirements. SSP On Board_ Indicator. Indicator
     *  An indicator of whether the vessel has a Ship Security Plan (SSP) on board (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sSPOnBoardIndicator
     * @return self
     */
    public function setSSPOnBoardIndicator($sSPOnBoardIndicator)
    {
        $this->sSPOnBoardIndicator = $sSPOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as sSPSecurityMeasuresAppliedIndicator
     *
     * BBIE
     *  ISPS Requirements. SSP Security Measures Applied_ Indicator. Indicator
     *  An indication of whether the Ship Security Plan (SSP) meassures are applied (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP Security Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSSPSecurityMeasuresAppliedIndicator()
    {
        return $this->sSPSecurityMeasuresAppliedIndicator;
    }

    /**
     * Sets a new sSPSecurityMeasuresAppliedIndicator
     *
     * BBIE
     *  ISPS Requirements. SSP Security Measures Applied_ Indicator. Indicator
     *  An indication of whether the Ship Security Plan (SSP) meassures are applied (true) or not (false).
     *  0..1
     *  ISPS Requirements
     *  SSP Security Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sSPSecurityMeasuresAppliedIndicator
     * @return self
     */
    public function setSSPSecurityMeasuresAppliedIndicator($sSPSecurityMeasuresAppliedIndicator)
    {
        $this->sSPSecurityMeasuresAppliedIndicator = $sSPSecurityMeasuresAppliedIndicator;
        return $this;
    }

    /**
     * Gets as currentOperatingSecurityLevelCode
     *
     * BBIE
     *  ISPS Requirements. Current Operating_ Security Level Code. Code
     *  A code describing the current operating security level.
     *  0..1
     *  ISPS Requirements
     *  Current Operating
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CurrentOperatingSecurityLevelCode
     */
    public function getCurrentOperatingSecurityLevelCode()
    {
        return $this->currentOperatingSecurityLevelCode;
    }

    /**
     * Sets a new currentOperatingSecurityLevelCode
     *
     * BBIE
     *  ISPS Requirements. Current Operating_ Security Level Code. Code
     *  A code describing the current operating security level.
     *  0..1
     *  ISPS Requirements
     *  Current Operating
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CurrentOperatingSecurityLevelCode $currentOperatingSecurityLevelCode
     * @return self
     */
    public function setCurrentOperatingSecurityLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CurrentOperatingSecurityLevelCode $currentOperatingSecurityLevelCode = null)
    {
        $this->currentOperatingSecurityLevelCode = $currentOperatingSecurityLevelCode;
        return $this;
    }

    /**
     * Adds as additionalMattersDescription
     *
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalMattersDescription $additionalMattersDescription
     */
    public function addToAdditionalMattersDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalMattersDescription $additionalMattersDescription)
    {
        $this->additionalMattersDescription[] = $additionalMattersDescription;
        return $this;
    }

    /**
     * isset additionalMattersDescription
     *
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalMattersDescription($index)
    {
        return isset($this->additionalMattersDescription[$index]);
    }

    /**
     * unset additionalMattersDescription
     *
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalMattersDescription($index)
    {
        unset($this->additionalMattersDescription[$index]);
    }

    /**
     * Gets as additionalMattersDescription
     *
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalMattersDescription[]
     */
    public function getAdditionalMattersDescription()
    {
        return $this->additionalMattersDescription;
    }

    /**
     * Sets a new additionalMattersDescription
     *
     * BBIE
     *  ISPS Requirements. Additional_ Matters Description. Text
     *  A textual description of any addidtional matters concerning these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Matters Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AdditionalMattersDescription[] $additionalMattersDescription
     * @return self
     */
    public function setAdditionalMattersDescription(?array $additionalMattersDescription = null)
    {
        $this->additionalMattersDescription = $additionalMattersDescription;
        return $this;
    }

    /**
     * Adds as additionalSecurityMeasure
     *
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalSecurityMeasure $additionalSecurityMeasure
     */
    public function addToAdditionalSecurityMeasure(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalSecurityMeasure $additionalSecurityMeasure)
    {
        $this->additionalSecurityMeasure[] = $additionalSecurityMeasure;
        return $this;
    }

    /**
     * isset additionalSecurityMeasure
     *
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalSecurityMeasure($index)
    {
        return isset($this->additionalSecurityMeasure[$index]);
    }

    /**
     * unset additionalSecurityMeasure
     *
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalSecurityMeasure($index)
    {
        unset($this->additionalSecurityMeasure[$index]);
    }

    /**
     * Gets as additionalSecurityMeasure
     *
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalSecurityMeasure[]
     */
    public function getAdditionalSecurityMeasure()
    {
        return $this->additionalSecurityMeasure;
    }

    /**
     * Sets a new additionalSecurityMeasure
     *
     * ASBIE
     *  ISPS Requirements. Additional_ Security Measure. Security Measure
     *  Security measures for these ISPS requirements in addition to those in the ship security plan, such as special measures taken in response to unforeseen events.
     *  0..n
     *  ISPS Requirements
     *  Additional
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalSecurityMeasure[] $additionalSecurityMeasure
     * @return self
     */
    public function setAdditionalSecurityMeasure(?array $additionalSecurityMeasure = null)
    {
        $this->additionalSecurityMeasure = $additionalSecurityMeasure;
        return $this;
    }

    /**
     * Adds as portCallRecord
     *
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortCallRecord $portCallRecord
     */
    public function addToPortCallRecord(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortCallRecord $portCallRecord)
    {
        $this->portCallRecord[] = $portCallRecord;
        return $this;
    }

    /**
     * isset portCallRecord
     *
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPortCallRecord($index)
    {
        return isset($this->portCallRecord[$index]);
    }

    /**
     * unset portCallRecord
     *
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPortCallRecord($index)
    {
        unset($this->portCallRecord[$index]);
    }

    /**
     * Gets as portCallRecord
     *
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortCallRecord[]
     */
    public function getPortCallRecord()
    {
        return $this->portCallRecord;
    }

    /**
     * Sets a new portCallRecord
     *
     * ASBIE
     *  ISPS Requirements. Port Call Record
     *  The port call records for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Port Call Record
     *  Port Call Record
     *  Port Call Record
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortCallRecord[] $portCallRecord
     * @return self
     */
    public function setPortCallRecord(?array $portCallRecord = null)
    {
        $this->portCallRecord = $portCallRecord;
        return $this;
    }

    /**
     * Adds as shipToShipActivityRecord
     *
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipToShipActivityRecord $shipToShipActivityRecord
     */
    public function addToShipToShipActivityRecord(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipToShipActivityRecord $shipToShipActivityRecord)
    {
        $this->shipToShipActivityRecord[] = $shipToShipActivityRecord;
        return $this;
    }

    /**
     * isset shipToShipActivityRecord
     *
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToShipActivityRecord($index)
    {
        return isset($this->shipToShipActivityRecord[$index]);
    }

    /**
     * unset shipToShipActivityRecord
     *
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToShipActivityRecord($index)
    {
        unset($this->shipToShipActivityRecord[$index]);
    }

    /**
     * Gets as shipToShipActivityRecord
     *
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipToShipActivityRecord[]
     */
    public function getShipToShipActivityRecord()
    {
        return $this->shipToShipActivityRecord;
    }

    /**
     * Sets a new shipToShipActivityRecord
     *
     * ASBIE
     *  ISPS Requirements. Ship To Ship Activity Record
     *  The recordded ship to ship activities for these ISPS requirements.
     *  0..n
     *  ISPS Requirements
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *  Ship To Ship Activity Record
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipToShipActivityRecord[] $shipToShipActivityRecord
     * @return self
     */
    public function setShipToShipActivityRecord(?array $shipToShipActivityRecord = null)
    {
        $this->shipToShipActivityRecord = $shipToShipActivityRecord;
        return $this;
    }

    /**
     * Gets as reportLocation
     *
     * ASBIE
     *  ISPS Requirements. Report_ Location. Location
     *  The location where these ISPC requirements are reported.
     *  0..1
     *  ISPS Requirements
     *  Report
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportLocation
     */
    public function getReportLocation()
    {
        return $this->reportLocation;
    }

    /**
     * Sets a new reportLocation
     *
     * ASBIE
     *  ISPS Requirements. Report_ Location. Location
     *  The location where these ISPC requirements are reported.
     *  0..1
     *  ISPS Requirements
     *  Report
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportLocation $reportLocation
     * @return self
     */
    public function setReportLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReportLocation $reportLocation = null)
    {
        $this->reportLocation = $reportLocation;
        return $this;
    }

    /**
     * Gets as iSSCIssuerParty
     *
     * ASBIE
     *  ISPS Requirements. ISSC Issuer_ Party. Party
     *  The party issuing the International Ship Security Cetificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ISSCIssuerParty
     */
    public function getISSCIssuerParty()
    {
        return $this->iSSCIssuerParty;
    }

    /**
     * Sets a new iSSCIssuerParty
     *
     * ASBIE
     *  ISPS Requirements. ISSC Issuer_ Party. Party
     *  The party issuing the International Ship Security Cetificate (ISSC).
     *  0..1
     *  ISPS Requirements
     *  ISSC Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ISSCIssuerParty $iSSCIssuerParty
     * @return self
     */
    public function setISSCIssuerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ISSCIssuerParty $iSSCIssuerParty = null)
    {
        $this->iSSCIssuerParty = $iSSCIssuerParty;
        return $this;
    }

    /**
     * Gets as securityOfficerPerson
     *
     * ASBIE
     *  ISPS Requirements. Security Officer_ Person. Person
     *  The security officer reponsible for these ISPC requirements.
     *  0..1
     *  ISPS Requirements
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *  SSO
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityOfficerPerson
     */
    public function getSecurityOfficerPerson()
    {
        return $this->securityOfficerPerson;
    }

    /**
     * Sets a new securityOfficerPerson
     *
     * ASBIE
     *  ISPS Requirements. Security Officer_ Person. Person
     *  The security officer reponsible for these ISPC requirements.
     *  0..1
     *  ISPS Requirements
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *  SSO
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityOfficerPerson $securityOfficerPerson
     * @return self
     */
    public function setSecurityOfficerPerson(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityOfficerPerson $securityOfficerPerson = null)
    {
        $this->securityOfficerPerson = $securityOfficerPerson;
        return $this;
    }
}

