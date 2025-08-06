<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing MaritimeHealthDeclarationType
 *
 * ABIE
 *  Maritime Health Declaration. Details
 *  A class to desccribe a maritime health declaration.
 *  Maritime Health Declaration
 * XSD Type: MaritimeHealthDeclarationType
 */
class MaritimeHealthDeclarationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Identifier
     *  An identifier for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Infectious Disease Case On Board_ Indicator. Indicator
     *  Indicates whether there is an infectious diasase case on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Infectious Disease Case On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $infectiousDiseaseCaseOnBoardIndicator
     */
    private $infectiousDiseaseCaseOnBoardIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. More Ill Than Expected_ Indicator. Indicator
     *  Indicates whether a sick person is more ill than extected (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  More Ill Than Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $moreIllThanExpectedIndicator
     */
    private $moreIllThanExpectedIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Medical Practitioner Consulted_ Indicator. Indicator
     *  Indicates whether a medical practioner has been consulted (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Medical Practitioner Consulted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $medicalPractitionerConsultedIndicator
     */
    private $medicalPractitionerConsultedIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Stowaways Found On Board_ Indicator. Indicator
     *  Indicates whether stowaways have been found on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Stowaways Found On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $stowawaysFoundOnBoardIndicator
     */
    private $stowawaysFoundOnBoardIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal On Board Indicator. Indicator
     *  Indicates whether a sick animal is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sick
     *  Animal On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sickAnimalOnBoardIndicator
     */
    private $sickAnimalOnBoardIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Fumigated_ Cargo Transport Indicator. Indicator
     *  Indicates whether the cargo under transport has been fumigated (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Fumigated
     *  Cargo Transport Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fumigatedCargoTransportIndicator
     */
    private $fumigatedCargoTransportIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Sanitary Measures Applied_ Indicator. Indicator
     *  Indicates whether sanity measures are applied (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sanitary Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $sanitaryMeasuresAppliedIndicator
     */
    private $sanitaryMeasuresAppliedIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Valid_ Sanitation Certificate On Board Indicator. Indicator
     *  Indicates whether a valid sanitary certificate is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Valid
     *  Sanitation Certificate On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $validSanitationCertificateOnBoardIndicator
     */
    private $validSanitationCertificateOnBoardIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Reinspection Required_ Indicator. Indicator
     *  Indicates whether a reinspaction is required (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Reinspection Required
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $reinspectionRequiredIndicator
     */
    private $reinspectionRequiredIndicator = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Total Dead_ Person Quantity. Quantity
     *  Specifies the total number of dead persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Dead
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDeadPersonQuantity $totalDeadPersonQuantity
     */
    private $totalDeadPersonQuantity = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Total Ill_ Person Quantity. Quantity
     *  Specifies the total number of ill persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Ill
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalIllPersonQuantity $totalIllPersonQuantity
     */
    private $totalIllPersonQuantity = null;

    /**
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SickAnimalDescription[] $sickAnimalDescription
     */
    private $sickAnimalDescription = [
        
    ];

    /**
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StowawayDescription[] $stowawayDescription
     */
    private $stowawayDescription = [
        
    ];

    /**
     * BBIE
     *  Maritime Health Declaration. Last_ Drinking Water Analysis Date. Date
     *  The date when the last drinking water analysis was made.
     *  0..1
     *  Maritime Health Declaration
     *  Last
     *  Drinking Water Analysis Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $lastDrinkingWaterAnalysisDate
     */
    private $lastDrinkingWaterAnalysisDate = null;

    /**
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaVisit[] $wHOAffectedAreaVisit
     */
    private $wHOAffectedAreaVisit = [
        
    ];

    /**
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PersonnelHealthIncident[] $personnelHealthIncident
     */
    private $personnelHealthIncident = [
        
    ];

    /**
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SanitaryMeasure[] $sanitaryMeasure
     */
    private $sanitaryMeasure = [
        
    ];

    /**
     * ASBIE
     *  Maritime Health Declaration. Place Of Report_ Location. Location
     *  The location where this maritime health declaration is reported.
     *  0..1
     *  Maritime Health Declaration
     *  Place Of Report
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlaceOfReportLocation $placeOfReportLocation
     */
    private $placeOfReportLocation = null;

    /**
     * ASBIE
     *  Maritime Health Declaration. Medical_ Certificate. Certificate
     *  The medical certificate for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
     *  Medical
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MedicalCertificate $medicalCertificate
     */
    private $medicalCertificate = null;

    /**
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control_ Certificate. Certificate
     *  A certificate describing the sanitation control of this maritime health certificate.
     *  0..1
     *  Maritime Health Declaration
     *  Ship Sanitation Control
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlCertificate $shipSanitationControlCertificate
     */
    private $shipSanitationControlCertificate = null;

    /**
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlExemptionDocumentReference[] $shipSanitationControlExemptionDocumentReference
     */
    private $shipSanitationControlExemptionDocumentReference = [
        
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
     * Gets as iD
     *
     * BBIE
     *  Maritime Health Declaration. Identifier
     *  An identifier for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
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
     *  Maritime Health Declaration. Identifier
     *  An identifier for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
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
     * Gets as infectiousDiseaseCaseOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Infectious Disease Case On Board_ Indicator. Indicator
     *  Indicates whether there is an infectious diasase case on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Infectious Disease Case On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getInfectiousDiseaseCaseOnBoardIndicator()
    {
        return $this->infectiousDiseaseCaseOnBoardIndicator;
    }

    /**
     * Sets a new infectiousDiseaseCaseOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Infectious Disease Case On Board_ Indicator. Indicator
     *  Indicates whether there is an infectious diasase case on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Infectious Disease Case On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $infectiousDiseaseCaseOnBoardIndicator
     * @return self
     */
    public function setInfectiousDiseaseCaseOnBoardIndicator($infectiousDiseaseCaseOnBoardIndicator)
    {
        $this->infectiousDiseaseCaseOnBoardIndicator = $infectiousDiseaseCaseOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as moreIllThanExpectedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. More Ill Than Expected_ Indicator. Indicator
     *  Indicates whether a sick person is more ill than extected (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  More Ill Than Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMoreIllThanExpectedIndicator()
    {
        return $this->moreIllThanExpectedIndicator;
    }

    /**
     * Sets a new moreIllThanExpectedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. More Ill Than Expected_ Indicator. Indicator
     *  Indicates whether a sick person is more ill than extected (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  More Ill Than Expected
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $moreIllThanExpectedIndicator
     * @return self
     */
    public function setMoreIllThanExpectedIndicator($moreIllThanExpectedIndicator)
    {
        $this->moreIllThanExpectedIndicator = $moreIllThanExpectedIndicator;
        return $this;
    }

    /**
     * Gets as medicalPractitionerConsultedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Medical Practitioner Consulted_ Indicator. Indicator
     *  Indicates whether a medical practioner has been consulted (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Medical Practitioner Consulted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMedicalPractitionerConsultedIndicator()
    {
        return $this->medicalPractitionerConsultedIndicator;
    }

    /**
     * Sets a new medicalPractitionerConsultedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Medical Practitioner Consulted_ Indicator. Indicator
     *  Indicates whether a medical practioner has been consulted (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Medical Practitioner Consulted
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $medicalPractitionerConsultedIndicator
     * @return self
     */
    public function setMedicalPractitionerConsultedIndicator($medicalPractitionerConsultedIndicator)
    {
        $this->medicalPractitionerConsultedIndicator = $medicalPractitionerConsultedIndicator;
        return $this;
    }

    /**
     * Gets as stowawaysFoundOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Stowaways Found On Board_ Indicator. Indicator
     *  Indicates whether stowaways have been found on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Stowaways Found On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getStowawaysFoundOnBoardIndicator()
    {
        return $this->stowawaysFoundOnBoardIndicator;
    }

    /**
     * Sets a new stowawaysFoundOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Stowaways Found On Board_ Indicator. Indicator
     *  Indicates whether stowaways have been found on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Stowaways Found On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $stowawaysFoundOnBoardIndicator
     * @return self
     */
    public function setStowawaysFoundOnBoardIndicator($stowawaysFoundOnBoardIndicator)
    {
        $this->stowawaysFoundOnBoardIndicator = $stowawaysFoundOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as sickAnimalOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal On Board Indicator. Indicator
     *  Indicates whether a sick animal is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sick
     *  Animal On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSickAnimalOnBoardIndicator()
    {
        return $this->sickAnimalOnBoardIndicator;
    }

    /**
     * Sets a new sickAnimalOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal On Board Indicator. Indicator
     *  Indicates whether a sick animal is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sick
     *  Animal On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sickAnimalOnBoardIndicator
     * @return self
     */
    public function setSickAnimalOnBoardIndicator($sickAnimalOnBoardIndicator)
    {
        $this->sickAnimalOnBoardIndicator = $sickAnimalOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as fumigatedCargoTransportIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Fumigated_ Cargo Transport Indicator. Indicator
     *  Indicates whether the cargo under transport has been fumigated (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Fumigated
     *  Cargo Transport Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFumigatedCargoTransportIndicator()
    {
        return $this->fumigatedCargoTransportIndicator;
    }

    /**
     * Sets a new fumigatedCargoTransportIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Fumigated_ Cargo Transport Indicator. Indicator
     *  Indicates whether the cargo under transport has been fumigated (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Fumigated
     *  Cargo Transport Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $fumigatedCargoTransportIndicator
     * @return self
     */
    public function setFumigatedCargoTransportIndicator($fumigatedCargoTransportIndicator)
    {
        $this->fumigatedCargoTransportIndicator = $fumigatedCargoTransportIndicator;
        return $this;
    }

    /**
     * Gets as sanitaryMeasuresAppliedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Sanitary Measures Applied_ Indicator. Indicator
     *  Indicates whether sanity measures are applied (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sanitary Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSanitaryMeasuresAppliedIndicator()
    {
        return $this->sanitaryMeasuresAppliedIndicator;
    }

    /**
     * Sets a new sanitaryMeasuresAppliedIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Sanitary Measures Applied_ Indicator. Indicator
     *  Indicates whether sanity measures are applied (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Sanitary Measures Applied
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $sanitaryMeasuresAppliedIndicator
     * @return self
     */
    public function setSanitaryMeasuresAppliedIndicator($sanitaryMeasuresAppliedIndicator)
    {
        $this->sanitaryMeasuresAppliedIndicator = $sanitaryMeasuresAppliedIndicator;
        return $this;
    }

    /**
     * Gets as validSanitationCertificateOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Valid_ Sanitation Certificate On Board Indicator. Indicator
     *  Indicates whether a valid sanitary certificate is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Valid
     *  Sanitation Certificate On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getValidSanitationCertificateOnBoardIndicator()
    {
        return $this->validSanitationCertificateOnBoardIndicator;
    }

    /**
     * Sets a new validSanitationCertificateOnBoardIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Valid_ Sanitation Certificate On Board Indicator. Indicator
     *  Indicates whether a valid sanitary certificate is on board (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Valid
     *  Sanitation Certificate On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $validSanitationCertificateOnBoardIndicator
     * @return self
     */
    public function setValidSanitationCertificateOnBoardIndicator($validSanitationCertificateOnBoardIndicator)
    {
        $this->validSanitationCertificateOnBoardIndicator = $validSanitationCertificateOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as reinspectionRequiredIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Reinspection Required_ Indicator. Indicator
     *  Indicates whether a reinspaction is required (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Reinspection Required
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReinspectionRequiredIndicator()
    {
        return $this->reinspectionRequiredIndicator;
    }

    /**
     * Sets a new reinspectionRequiredIndicator
     *
     * BBIE
     *  Maritime Health Declaration. Reinspection Required_ Indicator. Indicator
     *  Indicates whether a reinspaction is required (true) or not (false).
     *  0..1
     *  Maritime Health Declaration
     *  Reinspection Required
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $reinspectionRequiredIndicator
     * @return self
     */
    public function setReinspectionRequiredIndicator($reinspectionRequiredIndicator)
    {
        $this->reinspectionRequiredIndicator = $reinspectionRequiredIndicator;
        return $this;
    }

    /**
     * Gets as totalDeadPersonQuantity
     *
     * BBIE
     *  Maritime Health Declaration. Total Dead_ Person Quantity. Quantity
     *  Specifies the total number of dead persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Dead
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDeadPersonQuantity
     */
    public function getTotalDeadPersonQuantity()
    {
        return $this->totalDeadPersonQuantity;
    }

    /**
     * Sets a new totalDeadPersonQuantity
     *
     * BBIE
     *  Maritime Health Declaration. Total Dead_ Person Quantity. Quantity
     *  Specifies the total number of dead persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Dead
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDeadPersonQuantity $totalDeadPersonQuantity
     * @return self
     */
    public function setTotalDeadPersonQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalDeadPersonQuantity $totalDeadPersonQuantity = null)
    {
        $this->totalDeadPersonQuantity = $totalDeadPersonQuantity;
        return $this;
    }

    /**
     * Gets as totalIllPersonQuantity
     *
     * BBIE
     *  Maritime Health Declaration. Total Ill_ Person Quantity. Quantity
     *  Specifies the total number of ill persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Ill
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalIllPersonQuantity
     */
    public function getTotalIllPersonQuantity()
    {
        return $this->totalIllPersonQuantity;
    }

    /**
     * Sets a new totalIllPersonQuantity
     *
     * BBIE
     *  Maritime Health Declaration. Total Ill_ Person Quantity. Quantity
     *  Specifies the total number of ill persons on board the vessel.
     *  0..1
     *  Maritime Health Declaration
     *  Total Ill
     *  Person Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalIllPersonQuantity $totalIllPersonQuantity
     * @return self
     */
    public function setTotalIllPersonQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalIllPersonQuantity $totalIllPersonQuantity = null)
    {
        $this->totalIllPersonQuantity = $totalIllPersonQuantity;
        return $this;
    }

    /**
     * Adds as sickAnimalDescription
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SickAnimalDescription $sickAnimalDescription
     */
    public function addToSickAnimalDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SickAnimalDescription $sickAnimalDescription)
    {
        $this->sickAnimalDescription[] = $sickAnimalDescription;
        return $this;
    }

    /**
     * isset sickAnimalDescription
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSickAnimalDescription($index)
    {
        return isset($this->sickAnimalDescription[$index]);
    }

    /**
     * unset sickAnimalDescription
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSickAnimalDescription($index)
    {
        unset($this->sickAnimalDescription[$index]);
    }

    /**
     * Gets as sickAnimalDescription
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SickAnimalDescription[]
     */
    public function getSickAnimalDescription()
    {
        return $this->sickAnimalDescription;
    }

    /**
     * Sets a new sickAnimalDescription
     *
     * BBIE
     *  Maritime Health Declaration. Sick_ Animal Description. Text
     *  Describes any sick animals on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Sick
     *  Animal Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SickAnimalDescription[] $sickAnimalDescription
     * @return self
     */
    public function setSickAnimalDescription(?array $sickAnimalDescription = null)
    {
        $this->sickAnimalDescription = $sickAnimalDescription;
        return $this;
    }

    /**
     * Adds as stowawayDescription
     *
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StowawayDescription $stowawayDescription
     */
    public function addToStowawayDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StowawayDescription $stowawayDescription)
    {
        $this->stowawayDescription[] = $stowawayDescription;
        return $this;
    }

    /**
     * isset stowawayDescription
     *
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStowawayDescription($index)
    {
        return isset($this->stowawayDescription[$index]);
    }

    /**
     * unset stowawayDescription
     *
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStowawayDescription($index)
    {
        unset($this->stowawayDescription[$index]);
    }

    /**
     * Gets as stowawayDescription
     *
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StowawayDescription[]
     */
    public function getStowawayDescription()
    {
        return $this->stowawayDescription;
    }

    /**
     * Sets a new stowawayDescription
     *
     * BBIE
     *  Maritime Health Declaration. Stowaway Description. Text
     *  Describes any stowaways on board the vessel.
     *  0..n
     *  Maritime Health Declaration
     *  Stowaway Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\StowawayDescription[] $stowawayDescription
     * @return self
     */
    public function setStowawayDescription(?array $stowawayDescription = null)
    {
        $this->stowawayDescription = $stowawayDescription;
        return $this;
    }

    /**
     * Gets as lastDrinkingWaterAnalysisDate
     *
     * BBIE
     *  Maritime Health Declaration. Last_ Drinking Water Analysis Date. Date
     *  The date when the last drinking water analysis was made.
     *  0..1
     *  Maritime Health Declaration
     *  Last
     *  Drinking Water Analysis Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLastDrinkingWaterAnalysisDate()
    {
        return $this->lastDrinkingWaterAnalysisDate;
    }

    /**
     * Sets a new lastDrinkingWaterAnalysisDate
     *
     * BBIE
     *  Maritime Health Declaration. Last_ Drinking Water Analysis Date. Date
     *  The date when the last drinking water analysis was made.
     *  0..1
     *  Maritime Health Declaration
     *  Last
     *  Drinking Water Analysis Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $lastDrinkingWaterAnalysisDate
     * @return self
     */
    public function setLastDrinkingWaterAnalysisDate(?\DateTime $lastDrinkingWaterAnalysisDate = null)
    {
        $this->lastDrinkingWaterAnalysisDate = $lastDrinkingWaterAnalysisDate;
        return $this;
    }

    /**
     * Adds as wHOAffectedAreaVisit
     *
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaVisit $wHOAffectedAreaVisit
     */
    public function addToWHOAffectedAreaVisit(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaVisit $wHOAffectedAreaVisit)
    {
        $this->wHOAffectedAreaVisit[] = $wHOAffectedAreaVisit;
        return $this;
    }

    /**
     * isset wHOAffectedAreaVisit
     *
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWHOAffectedAreaVisit($index)
    {
        return isset($this->wHOAffectedAreaVisit[$index]);
    }

    /**
     * unset wHOAffectedAreaVisit
     *
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWHOAffectedAreaVisit($index)
    {
        unset($this->wHOAffectedAreaVisit[$index]);
    }

    /**
     * Gets as wHOAffectedAreaVisit
     *
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaVisit[]
     */
    public function getWHOAffectedAreaVisit()
    {
        return $this->wHOAffectedAreaVisit;
    }

    /**
     * Sets a new wHOAffectedAreaVisit
     *
     * ASBIE
     *  Maritime Health Declaration. WHO Affected Area Visit
     *  A WHO Affected Area visit related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *  WHO Affected Area Visit
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaVisit[] $wHOAffectedAreaVisit
     * @return self
     */
    public function setWHOAffectedAreaVisit(?array $wHOAffectedAreaVisit = null)
    {
        $this->wHOAffectedAreaVisit = $wHOAffectedAreaVisit;
        return $this;
    }

    /**
     * Adds as personnelHealthIncident
     *
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PersonnelHealthIncident $personnelHealthIncident
     */
    public function addToPersonnelHealthIncident(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PersonnelHealthIncident $personnelHealthIncident)
    {
        $this->personnelHealthIncident[] = $personnelHealthIncident;
        return $this;
    }

    /**
     * isset personnelHealthIncident
     *
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonnelHealthIncident($index)
    {
        return isset($this->personnelHealthIncident[$index]);
    }

    /**
     * unset personnelHealthIncident
     *
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonnelHealthIncident($index)
    {
        unset($this->personnelHealthIncident[$index]);
    }

    /**
     * Gets as personnelHealthIncident
     *
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PersonnelHealthIncident[]
     */
    public function getPersonnelHealthIncident()
    {
        return $this->personnelHealthIncident;
    }

    /**
     * Sets a new personnelHealthIncident
     *
     * ASBIE
     *  Maritime Health Declaration. Personnel Health Incident
     *  A personal health incident related to this maritime health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Personnel Health Incident
     *  Personnel Health Incident
     *  Personnel Health Incident
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PersonnelHealthIncident[] $personnelHealthIncident
     * @return self
     */
    public function setPersonnelHealthIncident(?array $personnelHealthIncident = null)
    {
        $this->personnelHealthIncident = $personnelHealthIncident;
        return $this;
    }

    /**
     * Adds as sanitaryMeasure
     *
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SanitaryMeasure $sanitaryMeasure
     */
    public function addToSanitaryMeasure(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SanitaryMeasure $sanitaryMeasure)
    {
        $this->sanitaryMeasure[] = $sanitaryMeasure;
        return $this;
    }

    /**
     * isset sanitaryMeasure
     *
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSanitaryMeasure($index)
    {
        return isset($this->sanitaryMeasure[$index]);
    }

    /**
     * unset sanitaryMeasure
     *
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSanitaryMeasure($index)
    {
        unset($this->sanitaryMeasure[$index]);
    }

    /**
     * Gets as sanitaryMeasure
     *
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SanitaryMeasure[]
     */
    public function getSanitaryMeasure()
    {
        return $this->sanitaryMeasure;
    }

    /**
     * Sets a new sanitaryMeasure
     *
     * ASBIE
     *  Maritime Health Declaration. Sanitary Measure
     *  A sanitary meassure for this health declaration.
     *  0..n
     *  Maritime Health Declaration
     *  Sanitary Measure
     *  Sanitary Measure
     *  Sanitary Measure
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SanitaryMeasure[] $sanitaryMeasure
     * @return self
     */
    public function setSanitaryMeasure(?array $sanitaryMeasure = null)
    {
        $this->sanitaryMeasure = $sanitaryMeasure;
        return $this;
    }

    /**
     * Gets as placeOfReportLocation
     *
     * ASBIE
     *  Maritime Health Declaration. Place Of Report_ Location. Location
     *  The location where this maritime health declaration is reported.
     *  0..1
     *  Maritime Health Declaration
     *  Place Of Report
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlaceOfReportLocation
     */
    public function getPlaceOfReportLocation()
    {
        return $this->placeOfReportLocation;
    }

    /**
     * Sets a new placeOfReportLocation
     *
     * ASBIE
     *  Maritime Health Declaration. Place Of Report_ Location. Location
     *  The location where this maritime health declaration is reported.
     *  0..1
     *  Maritime Health Declaration
     *  Place Of Report
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlaceOfReportLocation $placeOfReportLocation
     * @return self
     */
    public function setPlaceOfReportLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlaceOfReportLocation $placeOfReportLocation = null)
    {
        $this->placeOfReportLocation = $placeOfReportLocation;
        return $this;
    }

    /**
     * Gets as medicalCertificate
     *
     * ASBIE
     *  Maritime Health Declaration. Medical_ Certificate. Certificate
     *  The medical certificate for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
     *  Medical
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MedicalCertificate
     */
    public function getMedicalCertificate()
    {
        return $this->medicalCertificate;
    }

    /**
     * Sets a new medicalCertificate
     *
     * ASBIE
     *  Maritime Health Declaration. Medical_ Certificate. Certificate
     *  The medical certificate for this maritime health declaration.
     *  0..1
     *  Maritime Health Declaration
     *  Medical
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MedicalCertificate $medicalCertificate
     * @return self
     */
    public function setMedicalCertificate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MedicalCertificate $medicalCertificate = null)
    {
        $this->medicalCertificate = $medicalCertificate;
        return $this;
    }

    /**
     * Gets as shipSanitationControlCertificate
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control_ Certificate. Certificate
     *  A certificate describing the sanitation control of this maritime health certificate.
     *  0..1
     *  Maritime Health Declaration
     *  Ship Sanitation Control
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlCertificate
     */
    public function getShipSanitationControlCertificate()
    {
        return $this->shipSanitationControlCertificate;
    }

    /**
     * Sets a new shipSanitationControlCertificate
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control_ Certificate. Certificate
     *  A certificate describing the sanitation control of this maritime health certificate.
     *  0..1
     *  Maritime Health Declaration
     *  Ship Sanitation Control
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlCertificate $shipSanitationControlCertificate
     * @return self
     */
    public function setShipSanitationControlCertificate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlCertificate $shipSanitationControlCertificate = null)
    {
        $this->shipSanitationControlCertificate = $shipSanitationControlCertificate;
        return $this;
    }

    /**
     * Adds as shipSanitationControlExemptionDocumentReference
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlExemptionDocumentReference $shipSanitationControlExemptionDocumentReference
     */
    public function addToShipSanitationControlExemptionDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlExemptionDocumentReference $shipSanitationControlExemptionDocumentReference)
    {
        $this->shipSanitationControlExemptionDocumentReference[] = $shipSanitationControlExemptionDocumentReference;
        return $this;
    }

    /**
     * isset shipSanitationControlExemptionDocumentReference
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipSanitationControlExemptionDocumentReference($index)
    {
        return isset($this->shipSanitationControlExemptionDocumentReference[$index]);
    }

    /**
     * unset shipSanitationControlExemptionDocumentReference
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipSanitationControlExemptionDocumentReference($index)
    {
        unset($this->shipSanitationControlExemptionDocumentReference[$index]);
    }

    /**
     * Gets as shipSanitationControlExemptionDocumentReference
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlExemptionDocumentReference[]
     */
    public function getShipSanitationControlExemptionDocumentReference()
    {
        return $this->shipSanitationControlExemptionDocumentReference;
    }

    /**
     * Sets a new shipSanitationControlExemptionDocumentReference
     *
     * ASBIE
     *  Maritime Health Declaration. Ship Sanitation Control Exemption_ Document Reference. Document Reference
     *  A reference to a document evidencing the exemption of a ship sanitation control certificate, when absent.
     *  0..n
     *  Maritime Health Declaration
     *  Ship Sanitation Control Exemption
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipSanitationControlExemptionDocumentReference[] $shipSanitationControlExemptionDocumentReference
     * @return self
     */
    public function setShipSanitationControlExemptionDocumentReference(?array $shipSanitationControlExemptionDocumentReference = null)
    {
        $this->shipSanitationControlExemptionDocumentReference = $shipSanitationControlExemptionDocumentReference;
        return $this;
    }
}

