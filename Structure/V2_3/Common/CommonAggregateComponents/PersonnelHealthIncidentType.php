<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PersonnelHealthIncidentType
 *
 * ABIE
 *  Personnel Health Incident. Details
 *  A class to describe a health incident involving crew or other personnel.
 *  Personnel Health Incident
 * XSD Type: PersonnelHealthIncidentType
 */
class PersonnelHealthIncidentType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Personnel Health Incident. Identifier
     *  An identifier for this personal health incident.
     *  1
     *  Personnel Health Incident
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Personnel Health Incident. Joined Ship Date. Date
     *  The date when the person joined the ship.
     *  0..1
     *  Personnel Health Incident
     *  Joined Ship Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $joinedShipDate
     */
    private $joinedShipDate = null;

    /**
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfIllnessDescription[] $natureOfIllnessDescription
     */
    private $natureOfIllnessDescription = [
        
    ];

    /**
     * BBIE
     *  Personnel Health Incident. Onset Date. Date
     *  The first date of the health incident.
     *  0..1
     *  Personnel Health Incident
     *  Onset Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $onsetDate
     */
    private $onsetDate = null;

    /**
     * BBIE
     *  Personnel Health Incident. Reported To Medical Officer Indicator. Indicator
     *  An indicator of whether this personal health incident has been reported to a medical officer (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Reported To Medical Officer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $reportedToMedicalOfficerIndicator
     */
    private $reportedToMedicalOfficerIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GivenTreatmentDescription[] $givenTreatmentDescription
     */
    private $givenTreatmentDescription = [
        
    ];

    /**
     * BBIE
     *  Personnel Health Incident. Still Ill Indicator. Indicator
     *  Indicates whether the person is still ill (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still Ill Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $stillIllIndicator
     */
    private $stillIllIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Died Indicator. Indicator
     *  Indicates whether the person died from this health incident (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Died Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $diedIndicator
     */
    private $diedIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Still On Board Indicator. Indicator
     *  Indicates whether the person is still on board (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $stillOnBoardIndicator
     */
    private $stillOnBoardIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Evacuated Indicator. Indicator
     *  Indicates whether the person has been evacuated (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Evacuated Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $evacuatedIndicator
     */
    private $evacuatedIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Buried At Sea Indicator. Indicator
     *  Indicates whether the person has been buired at sea (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Buried At Sea Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $buriedAtSeaIndicator
     */
    private $buriedAtSeaIndicator = null;

    /**
     * BBIE
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Person
     *  The person associated to this health incident.
     *  0..1
     *  Personnel Health Incident
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person $person
     */
    private $person = null;

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
     *  Personnel Health Incident. Identifier
     *  An identifier for this personal health incident.
     *  1
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Identifier
     *  An identifier for this personal health incident.
     *  1
     *  Personnel Health Incident
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
     * Gets as joinedShipDate
     *
     * BBIE
     *  Personnel Health Incident. Joined Ship Date. Date
     *  The date when the person joined the ship.
     *  0..1
     *  Personnel Health Incident
     *  Joined Ship Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getJoinedShipDate()
    {
        return $this->joinedShipDate;
    }

    /**
     * Sets a new joinedShipDate
     *
     * BBIE
     *  Personnel Health Incident. Joined Ship Date. Date
     *  The date when the person joined the ship.
     *  0..1
     *  Personnel Health Incident
     *  Joined Ship Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $joinedShipDate
     * @return self
     */
    public function setJoinedShipDate(?\DateTime $joinedShipDate = null)
    {
        $this->joinedShipDate = $joinedShipDate;
        return $this;
    }

    /**
     * Adds as natureOfIllnessDescription
     *
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfIllnessDescription $natureOfIllnessDescription
     */
    public function addToNatureOfIllnessDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfIllnessDescription $natureOfIllnessDescription)
    {
        $this->natureOfIllnessDescription[] = $natureOfIllnessDescription;
        return $this;
    }

    /**
     * isset natureOfIllnessDescription
     *
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNatureOfIllnessDescription($index)
    {
        return isset($this->natureOfIllnessDescription[$index]);
    }

    /**
     * unset natureOfIllnessDescription
     *
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNatureOfIllnessDescription($index)
    {
        unset($this->natureOfIllnessDescription[$index]);
    }

    /**
     * Gets as natureOfIllnessDescription
     *
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfIllnessDescription[]
     */
    public function getNatureOfIllnessDescription()
    {
        return $this->natureOfIllnessDescription;
    }

    /**
     * Sets a new natureOfIllnessDescription
     *
     * BBIE
     *  Personnel Health Incident. Nature Of Illness Description. Text
     *  A text decribing the nature of the illness.
     *  1..n
     *  Personnel Health Incident
     *  Nature Of Illness Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NatureOfIllnessDescription[] $natureOfIllnessDescription
     * @return self
     */
    public function setNatureOfIllnessDescription(array $natureOfIllnessDescription)
    {
        $this->natureOfIllnessDescription = $natureOfIllnessDescription;
        return $this;
    }

    /**
     * Gets as onsetDate
     *
     * BBIE
     *  Personnel Health Incident. Onset Date. Date
     *  The first date of the health incident.
     *  0..1
     *  Personnel Health Incident
     *  Onset Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getOnsetDate()
    {
        return $this->onsetDate;
    }

    /**
     * Sets a new onsetDate
     *
     * BBIE
     *  Personnel Health Incident. Onset Date. Date
     *  The first date of the health incident.
     *  0..1
     *  Personnel Health Incident
     *  Onset Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $onsetDate
     * @return self
     */
    public function setOnsetDate(?\DateTime $onsetDate = null)
    {
        $this->onsetDate = $onsetDate;
        return $this;
    }

    /**
     * Gets as reportedToMedicalOfficerIndicator
     *
     * BBIE
     *  Personnel Health Incident. Reported To Medical Officer Indicator. Indicator
     *  An indicator of whether this personal health incident has been reported to a medical officer (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Reported To Medical Officer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReportedToMedicalOfficerIndicator()
    {
        return $this->reportedToMedicalOfficerIndicator;
    }

    /**
     * Sets a new reportedToMedicalOfficerIndicator
     *
     * BBIE
     *  Personnel Health Incident. Reported To Medical Officer Indicator. Indicator
     *  An indicator of whether this personal health incident has been reported to a medical officer (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Reported To Medical Officer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $reportedToMedicalOfficerIndicator
     * @return self
     */
    public function setReportedToMedicalOfficerIndicator($reportedToMedicalOfficerIndicator)
    {
        $this->reportedToMedicalOfficerIndicator = $reportedToMedicalOfficerIndicator;
        return $this;
    }

    /**
     * Adds as givenTreatmentDescription
     *
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GivenTreatmentDescription $givenTreatmentDescription
     */
    public function addToGivenTreatmentDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GivenTreatmentDescription $givenTreatmentDescription)
    {
        $this->givenTreatmentDescription[] = $givenTreatmentDescription;
        return $this;
    }

    /**
     * isset givenTreatmentDescription
     *
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGivenTreatmentDescription($index)
    {
        return isset($this->givenTreatmentDescription[$index]);
    }

    /**
     * unset givenTreatmentDescription
     *
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGivenTreatmentDescription($index)
    {
        unset($this->givenTreatmentDescription[$index]);
    }

    /**
     * Gets as givenTreatmentDescription
     *
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GivenTreatmentDescription[]
     */
    public function getGivenTreatmentDescription()
    {
        return $this->givenTreatmentDescription;
    }

    /**
     * Sets a new givenTreatmentDescription
     *
     * BBIE
     *  Personnel Health Incident. Given Treatment Description. Text
     *  A text describing the given treatment.
     *  0..n
     *  Personnel Health Incident
     *  Given Treatment Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GivenTreatmentDescription[] $givenTreatmentDescription
     * @return self
     */
    public function setGivenTreatmentDescription(?array $givenTreatmentDescription = null)
    {
        $this->givenTreatmentDescription = $givenTreatmentDescription;
        return $this;
    }

    /**
     * Gets as stillIllIndicator
     *
     * BBIE
     *  Personnel Health Incident. Still Ill Indicator. Indicator
     *  Indicates whether the person is still ill (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still Ill Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getStillIllIndicator()
    {
        return $this->stillIllIndicator;
    }

    /**
     * Sets a new stillIllIndicator
     *
     * BBIE
     *  Personnel Health Incident. Still Ill Indicator. Indicator
     *  Indicates whether the person is still ill (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still Ill Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $stillIllIndicator
     * @return self
     */
    public function setStillIllIndicator($stillIllIndicator)
    {
        $this->stillIllIndicator = $stillIllIndicator;
        return $this;
    }

    /**
     * Gets as diedIndicator
     *
     * BBIE
     *  Personnel Health Incident. Died Indicator. Indicator
     *  Indicates whether the person died from this health incident (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Died Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getDiedIndicator()
    {
        return $this->diedIndicator;
    }

    /**
     * Sets a new diedIndicator
     *
     * BBIE
     *  Personnel Health Incident. Died Indicator. Indicator
     *  Indicates whether the person died from this health incident (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Died Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $diedIndicator
     * @return self
     */
    public function setDiedIndicator($diedIndicator)
    {
        $this->diedIndicator = $diedIndicator;
        return $this;
    }

    /**
     * Gets as stillOnBoardIndicator
     *
     * BBIE
     *  Personnel Health Incident. Still On Board Indicator. Indicator
     *  Indicates whether the person is still on board (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getStillOnBoardIndicator()
    {
        return $this->stillOnBoardIndicator;
    }

    /**
     * Sets a new stillOnBoardIndicator
     *
     * BBIE
     *  Personnel Health Incident. Still On Board Indicator. Indicator
     *  Indicates whether the person is still on board (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Still On Board Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $stillOnBoardIndicator
     * @return self
     */
    public function setStillOnBoardIndicator($stillOnBoardIndicator)
    {
        $this->stillOnBoardIndicator = $stillOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as evacuatedIndicator
     *
     * BBIE
     *  Personnel Health Incident. Evacuated Indicator. Indicator
     *  Indicates whether the person has been evacuated (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Evacuated Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getEvacuatedIndicator()
    {
        return $this->evacuatedIndicator;
    }

    /**
     * Sets a new evacuatedIndicator
     *
     * BBIE
     *  Personnel Health Incident. Evacuated Indicator. Indicator
     *  Indicates whether the person has been evacuated (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Evacuated Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $evacuatedIndicator
     * @return self
     */
    public function setEvacuatedIndicator($evacuatedIndicator)
    {
        $this->evacuatedIndicator = $evacuatedIndicator;
        return $this;
    }

    /**
     * Gets as buriedAtSeaIndicator
     *
     * BBIE
     *  Personnel Health Incident. Buried At Sea Indicator. Indicator
     *  Indicates whether the person has been buired at sea (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Buried At Sea Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBuriedAtSeaIndicator()
    {
        return $this->buriedAtSeaIndicator;
    }

    /**
     * Sets a new buriedAtSeaIndicator
     *
     * BBIE
     *  Personnel Health Incident. Buried At Sea Indicator. Indicator
     *  Indicates whether the person has been buired at sea (true) or not (false).
     *  0..1
     *  Personnel Health Incident
     *  Buried At Sea Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $buriedAtSeaIndicator
     * @return self
     */
    public function setBuriedAtSeaIndicator($buriedAtSeaIndicator)
    {
        $this->buriedAtSeaIndicator = $buriedAtSeaIndicator;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     *  Personnel Health Incident. Note. Text
     *  Any additional information that is not included elsewhere, expressed as text.
     *  0..n
     *  Personnel Health Incident
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
     * Gets as person
     *
     * ASBIE
     *  Personnel Health Incident. Person
     *  The person associated to this health incident.
     *  0..1
     *  Personnel Health Incident
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * ASBIE
     *  Personnel Health Incident. Person
     *  The person associated to this health incident.
     *  0..1
     *  Personnel Health Incident
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person $person
     * @return self
     */
    public function setPerson(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }
}

