<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TransportScheduleType
 *
 * ABIE
 *  Transport Schedule. Details
 *  Describes the location and schedule relating to a transport means.
 *  Transport Schedule
 * XSD Type: TransportScheduleType
 */
class TransportScheduleType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\StatusLocation $statusLocation
     */
    private $statusLocation = null;

    /**
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent
     */
    private $actualArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent
     */
    private $actualDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     */
    private $estimatedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     */
    private $estimatedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     */
    private $plannedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

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
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Transport Schedule. Sequence. Numeric
     *  A number indicating the order of this status in the sequence in which statuses are to be presented.
     *  1
     *  Transport Schedule
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * BBIE
     *  Transport Schedule. Reference Date. Date
     *  The reference date for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(?\DateTime $referenceDate = null)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * BBIE
     *  Transport Schedule. Reference Time. Time
     *  The reference time for the transport schedule status.
     *  0..1
     *  Transport Schedule
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(?\DateTime $referenceTime = null)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * BBIE
     *  Transport Schedule. Reliability Percent. Percent
     *  The reliability of the transport schedule status, expressed as a percentage.
     *  0..1
     *  Transport Schedule
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReliabilityPercent $reliabilityPercent = null)
    {
        $this->reliabilityPercent = $reliabilityPercent;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks $remarks
     */
    public function addToRemarks(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Transport Schedule. Remarks. Text
     *  Remarks related to the transport schedule status.
     *  0..n
     *  Transport Schedule
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\StatusLocation
     */
    public function getStatusLocation()
    {
        return $this->statusLocation;
    }

    /**
     * Sets a new statusLocation
     *
     * ASBIE
     *  Transport Schedule. Status_ Location. Location
     *  The location for which status is reported.
     *  1
     *  Transport Schedule
     *  Status
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\StatusLocation $statusLocation
     * @return self
     */
    public function setStatusLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\StatusLocation $statusLocation)
    {
        $this->statusLocation = $statusLocation;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEvent()
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * Sets a new actualArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a location.
     *  0..1
     *  Transport Schedule
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualArrivalTransportEvent $actualArrivalTransportEvent = null)
    {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as actualDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEvent()
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * Sets a new actualDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a location.
     *  0..1
     *  Transport Schedule
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActualDepartureTransportEvent $actualDepartureTransportEvent = null)
    {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEvent()
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * Sets a new estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Departure_ Transport Event. Transport Event
     *  An estimated departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent = null)
    {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEvent()
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * Sets a new estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Estimated Arrival_ Transport Event. Transport Event
     *  An estimated arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent = null)
    {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEvent()
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * Sets a new plannedDepartureTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Departure_ Transport Event. Transport Event
     *  The planned departure from a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedDepartureTransportEvent $plannedDepartureTransportEvent = null)
    {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEvent()
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * Sets a new plannedArrivalTransportEvent
     *
     * ASBIE
     *  Transport Schedule. Planned Arrival_ Transport Event. Transport Event
     *  The planned arrival at a specified location.
     *  0..1
     *  Transport Schedule
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PlannedArrivalTransportEvent $plannedArrivalTransportEvent = null)
    {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;
        return $this;
    }
}

