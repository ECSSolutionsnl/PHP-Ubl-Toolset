<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PortCallType
 *
 * ABIE
 *  Port Call. Details
 *  A class to describe a call to a port.
 *  Port Call
 * XSD Type: PortCallType
 */
class PortCallType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Port Call. Identifier
     *  An identifier for this Port Call.
     *  0..1
     *  Port Call
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedOperationsDescription[] $plannedOperationsDescription
     */
    private $plannedOperationsDescription = [
        
    ];

    /**
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedWorksDescription[] $plannedWorksDescription
     */
    private $plannedWorksDescription = [
        
    ];

    /**
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedInspectionsDescription[] $plannedInspectionsDescription
     */
    private $plannedInspectionsDescription = [
        
    ];

    /**
     * BBIE
     *  Port Call. Expected Anchorage Indicator. Indicator
     *  An indicator of whether the ship is expected to stay at an anchorage upon arrival at the port of call (true) or not (false).
     *  0..1
     *  Port Call
     *  Expected Anchorage Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $expectedAnchorageIndicator
     */
    private $expectedAnchorageIndicator = null;

    /**
     * BBIE
     *  Port Call. Position In Port Identifier. Identifier
     *  An identifier for the position in the port for this Port Call
     *  0..1
     *  Port Call
     *  Position In Port Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionInPortID $positionInPortID
     */
    private $positionInPortID = null;

    /**
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CargoAndBallastTankConditionDescription[] $cargoAndBallastTankConditionDescription
     */
    private $cargoAndBallastTankConditionDescription = [
        
    ];

    /**
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipRequirement[] $shipRequirement
     */
    private $shipRequirement = [
        
    ];

    /**
     * ASBIE
     *  Port Call. Primary_ Port Call Purpose. Port Call Purpose
     *  The primary purpose of this port call.
     *  0..1
     *  Port Call
     *  Primary
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PrimaryPortCallPurpose $primaryPortCallPurpose
     */
    private $primaryPortCallPurpose = null;

    /**
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalPortCallPurpose[] $additionalPortCallPurpose
     */
    private $additionalPortCallPurpose = [
        
    ];

    /**
     * ASBIE
     *  Port Call. Requested Arrival_ Event. Event
     *  The requested arrival event.
     *  0..1
     *  Port Call
     *  Requested Arrival
     *  Event
     *  Event
     *  Event
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedArrivalEvent $requestedArrivalEvent
     */
    private $requestedArrivalEvent = null;

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
     *  Port Call. Identifier
     *  An identifier for this Port Call.
     *  0..1
     *  Port Call
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
     *  Port Call. Identifier
     *  An identifier for this Port Call.
     *  0..1
     *  Port Call
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
     * Adds as plannedOperationsDescription
     *
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedOperationsDescription $plannedOperationsDescription
     */
    public function addToPlannedOperationsDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedOperationsDescription $plannedOperationsDescription)
    {
        $this->plannedOperationsDescription[] = $plannedOperationsDescription;
        return $this;
    }

    /**
     * isset plannedOperationsDescription
     *
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlannedOperationsDescription($index)
    {
        return isset($this->plannedOperationsDescription[$index]);
    }

    /**
     * unset plannedOperationsDescription
     *
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlannedOperationsDescription($index)
    {
        unset($this->plannedOperationsDescription[$index]);
    }

    /**
     * Gets as plannedOperationsDescription
     *
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedOperationsDescription[]
     */
    public function getPlannedOperationsDescription()
    {
        return $this->plannedOperationsDescription;
    }

    /**
     * Sets a new plannedOperationsDescription
     *
     * BBIE
     *  Port Call. Planned_ Operations Description. Text
     *  Description of the planned operations in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Operations Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedOperationsDescription[] $plannedOperationsDescription
     * @return self
     */
    public function setPlannedOperationsDescription(?array $plannedOperationsDescription = null)
    {
        $this->plannedOperationsDescription = $plannedOperationsDescription;
        return $this;
    }

    /**
     * Adds as plannedWorksDescription
     *
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedWorksDescription $plannedWorksDescription
     */
    public function addToPlannedWorksDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedWorksDescription $plannedWorksDescription)
    {
        $this->plannedWorksDescription[] = $plannedWorksDescription;
        return $this;
    }

    /**
     * isset plannedWorksDescription
     *
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlannedWorksDescription($index)
    {
        return isset($this->plannedWorksDescription[$index]);
    }

    /**
     * unset plannedWorksDescription
     *
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlannedWorksDescription($index)
    {
        unset($this->plannedWorksDescription[$index]);
    }

    /**
     * Gets as plannedWorksDescription
     *
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedWorksDescription[]
     */
    public function getPlannedWorksDescription()
    {
        return $this->plannedWorksDescription;
    }

    /**
     * Sets a new plannedWorksDescription
     *
     * BBIE
     *  Port Call. Planned_ Works Description. Text
     *  Description of the planned works in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Works Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedWorksDescription[] $plannedWorksDescription
     * @return self
     */
    public function setPlannedWorksDescription(?array $plannedWorksDescription = null)
    {
        $this->plannedWorksDescription = $plannedWorksDescription;
        return $this;
    }

    /**
     * Adds as plannedInspectionsDescription
     *
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedInspectionsDescription $plannedInspectionsDescription
     */
    public function addToPlannedInspectionsDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedInspectionsDescription $plannedInspectionsDescription)
    {
        $this->plannedInspectionsDescription[] = $plannedInspectionsDescription;
        return $this;
    }

    /**
     * isset plannedInspectionsDescription
     *
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlannedInspectionsDescription($index)
    {
        return isset($this->plannedInspectionsDescription[$index]);
    }

    /**
     * unset plannedInspectionsDescription
     *
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlannedInspectionsDescription($index)
    {
        unset($this->plannedInspectionsDescription[$index]);
    }

    /**
     * Gets as plannedInspectionsDescription
     *
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedInspectionsDescription[]
     */
    public function getPlannedInspectionsDescription()
    {
        return $this->plannedInspectionsDescription;
    }

    /**
     * Sets a new plannedInspectionsDescription
     *
     * BBIE
     *  Port Call. Planned_ Inspections Description. Text
     *  Description of the planned inspections in this Port Call.
     *  0..n
     *  Port Call
     *  Planned
     *  Inspections Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PlannedInspectionsDescription[] $plannedInspectionsDescription
     * @return self
     */
    public function setPlannedInspectionsDescription(?array $plannedInspectionsDescription = null)
    {
        $this->plannedInspectionsDescription = $plannedInspectionsDescription;
        return $this;
    }

    /**
     * Gets as expectedAnchorageIndicator
     *
     * BBIE
     *  Port Call. Expected Anchorage Indicator. Indicator
     *  An indicator of whether the ship is expected to stay at an anchorage upon arrival at the port of call (true) or not (false).
     *  0..1
     *  Port Call
     *  Expected Anchorage Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getExpectedAnchorageIndicator()
    {
        return $this->expectedAnchorageIndicator;
    }

    /**
     * Sets a new expectedAnchorageIndicator
     *
     * BBIE
     *  Port Call. Expected Anchorage Indicator. Indicator
     *  An indicator of whether the ship is expected to stay at an anchorage upon arrival at the port of call (true) or not (false).
     *  0..1
     *  Port Call
     *  Expected Anchorage Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $expectedAnchorageIndicator
     * @return self
     */
    public function setExpectedAnchorageIndicator($expectedAnchorageIndicator)
    {
        $this->expectedAnchorageIndicator = $expectedAnchorageIndicator;
        return $this;
    }

    /**
     * Gets as positionInPortID
     *
     * BBIE
     *  Port Call. Position In Port Identifier. Identifier
     *  An identifier for the position in the port for this Port Call
     *  0..1
     *  Port Call
     *  Position In Port Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionInPortID
     */
    public function getPositionInPortID()
    {
        return $this->positionInPortID;
    }

    /**
     * Sets a new positionInPortID
     *
     * BBIE
     *  Port Call. Position In Port Identifier. Identifier
     *  An identifier for the position in the port for this Port Call
     *  0..1
     *  Port Call
     *  Position In Port Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionInPortID $positionInPortID
     * @return self
     */
    public function setPositionInPortID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PositionInPortID $positionInPortID = null)
    {
        $this->positionInPortID = $positionInPortID;
        return $this;
    }

    /**
     * Adds as cargoAndBallastTankConditionDescription
     *
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CargoAndBallastTankConditionDescription $cargoAndBallastTankConditionDescription
     */
    public function addToCargoAndBallastTankConditionDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CargoAndBallastTankConditionDescription $cargoAndBallastTankConditionDescription)
    {
        $this->cargoAndBallastTankConditionDescription[] = $cargoAndBallastTankConditionDescription;
        return $this;
    }

    /**
     * isset cargoAndBallastTankConditionDescription
     *
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCargoAndBallastTankConditionDescription($index)
    {
        return isset($this->cargoAndBallastTankConditionDescription[$index]);
    }

    /**
     * unset cargoAndBallastTankConditionDescription
     *
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCargoAndBallastTankConditionDescription($index)
    {
        unset($this->cargoAndBallastTankConditionDescription[$index]);
    }

    /**
     * Gets as cargoAndBallastTankConditionDescription
     *
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CargoAndBallastTankConditionDescription[]
     */
    public function getCargoAndBallastTankConditionDescription()
    {
        return $this->cargoAndBallastTankConditionDescription;
    }

    /**
     * Sets a new cargoAndBallastTankConditionDescription
     *
     * BBIE
     *  Port Call. Cargo And Ballast Tank_ Condition Description. Text
     *  Description about the condition of the cargo and ballast tank.
     *  0..n
     *  Port Call
     *  Cargo And Ballast Tank
     *  Condition Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CargoAndBallastTankConditionDescription[] $cargoAndBallastTankConditionDescription
     * @return self
     */
    public function setCargoAndBallastTankConditionDescription(?array $cargoAndBallastTankConditionDescription = null)
    {
        $this->cargoAndBallastTankConditionDescription = $cargoAndBallastTankConditionDescription;
        return $this;
    }

    /**
     * Adds as shipRequirement
     *
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipRequirement $shipRequirement
     */
    public function addToShipRequirement(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipRequirement $shipRequirement)
    {
        $this->shipRequirement[] = $shipRequirement;
        return $this;
    }

    /**
     * isset shipRequirement
     *
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipRequirement($index)
    {
        return isset($this->shipRequirement[$index]);
    }

    /**
     * unset shipRequirement
     *
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipRequirement($index)
    {
        unset($this->shipRequirement[$index]);
    }

    /**
     * Gets as shipRequirement
     *
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipRequirement[]
     */
    public function getShipRequirement()
    {
        return $this->shipRequirement;
    }

    /**
     * Sets a new shipRequirement
     *
     * ASBIE
     *  Port Call. Ship Requirement
     *  Ship requirements for this port call.
     *  0..n
     *  Port Call
     *  Ship Requirement
     *  Ship Requirement
     *  Ship Requirement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ShipRequirement[] $shipRequirement
     * @return self
     */
    public function setShipRequirement(?array $shipRequirement = null)
    {
        $this->shipRequirement = $shipRequirement;
        return $this;
    }

    /**
     * Gets as primaryPortCallPurpose
     *
     * ASBIE
     *  Port Call. Primary_ Port Call Purpose. Port Call Purpose
     *  The primary purpose of this port call.
     *  0..1
     *  Port Call
     *  Primary
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PrimaryPortCallPurpose
     */
    public function getPrimaryPortCallPurpose()
    {
        return $this->primaryPortCallPurpose;
    }

    /**
     * Sets a new primaryPortCallPurpose
     *
     * ASBIE
     *  Port Call. Primary_ Port Call Purpose. Port Call Purpose
     *  The primary purpose of this port call.
     *  0..1
     *  Port Call
     *  Primary
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PrimaryPortCallPurpose $primaryPortCallPurpose
     * @return self
     */
    public function setPrimaryPortCallPurpose(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PrimaryPortCallPurpose $primaryPortCallPurpose = null)
    {
        $this->primaryPortCallPurpose = $primaryPortCallPurpose;
        return $this;
    }

    /**
     * Adds as additionalPortCallPurpose
     *
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalPortCallPurpose $additionalPortCallPurpose
     */
    public function addToAdditionalPortCallPurpose(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalPortCallPurpose $additionalPortCallPurpose)
    {
        $this->additionalPortCallPurpose[] = $additionalPortCallPurpose;
        return $this;
    }

    /**
     * isset additionalPortCallPurpose
     *
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalPortCallPurpose($index)
    {
        return isset($this->additionalPortCallPurpose[$index]);
    }

    /**
     * unset additionalPortCallPurpose
     *
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalPortCallPurpose($index)
    {
        unset($this->additionalPortCallPurpose[$index]);
    }

    /**
     * Gets as additionalPortCallPurpose
     *
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalPortCallPurpose[]
     */
    public function getAdditionalPortCallPurpose()
    {
        return $this->additionalPortCallPurpose;
    }

    /**
     * Sets a new additionalPortCallPurpose
     *
     * ASBIE
     *  Port Call. Additional_ Port Call Purpose. Port Call Purpose
     *  Any additional or secondary purposes of this port call.
     *  0..n
     *  Port Call
     *  Additional
     *  Port Call Purpose
     *  Port Call Purpose
     *  Port Call Purpose
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalPortCallPurpose[] $additionalPortCallPurpose
     * @return self
     */
    public function setAdditionalPortCallPurpose(?array $additionalPortCallPurpose = null)
    {
        $this->additionalPortCallPurpose = $additionalPortCallPurpose;
        return $this;
    }

    /**
     * Gets as requestedArrivalEvent
     *
     * ASBIE
     *  Port Call. Requested Arrival_ Event. Event
     *  The requested arrival event.
     *  0..1
     *  Port Call
     *  Requested Arrival
     *  Event
     *  Event
     *  Event
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedArrivalEvent
     */
    public function getRequestedArrivalEvent()
    {
        return $this->requestedArrivalEvent;
    }

    /**
     * Sets a new requestedArrivalEvent
     *
     * ASBIE
     *  Port Call. Requested Arrival_ Event. Event
     *  The requested arrival event.
     *  0..1
     *  Port Call
     *  Requested Arrival
     *  Event
     *  Event
     *  Event
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedArrivalEvent $requestedArrivalEvent
     * @return self
     */
    public function setRequestedArrivalEvent(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequestedArrivalEvent $requestedArrivalEvent = null)
    {
        $this->requestedArrivalEvent = $requestedArrivalEvent;
        return $this;
    }
}

