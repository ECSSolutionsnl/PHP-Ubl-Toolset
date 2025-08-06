<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing VesselDynamicsType
 *
 * ABIE
 *  Vessel Dynamics. Details
 *  A class to describe the dynamics of a vesssel.
 *  Vessel Dynamics
 * XSD Type: VesselDynamicsType
 */
class VesselDynamicsType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Vessel Dynamics. Navigation_ Status Code. Code
     *  A code specifying the navigation status for the vessel.
     *  0..1
     *  Vessel Dynamics
     *  Navigation
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NavigationStatusCode $navigationStatusCode
     */
    private $navigationStatusCode = null;

    /**
     * BBIE
     *  Vessel Dynamics. At Anchorage_ Indicator. Indicator
     *  Indicates whether the vessel is at anchor.
     *  0..1
     *  Vessel Dynamics
     *  At Anchorage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $atAnchorageIndicator
     */
    private $atAnchorageIndicator = null;

    /**
     * BBIE
     *  Vessel Dynamics. Course Over Ground Direction. Text
     *  Text describing the actual direction of progress of a vessel, between two points, in relation to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Course Over Ground Direction
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CourseOverGroundDirection $courseOverGroundDirection
     */
    private $courseOverGroundDirection = null;

    /**
     * BBIE
     *  Vessel Dynamics. Speed Over Ground Measure. Measure
     *  Text describing the speed of the vessel relative to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Speed Over Ground Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpeedOverGroundMeasure $speedOverGroundMeasure
     */
    private $speedOverGroundMeasure = null;

    /**
     * BBIE
     *  Vessel Dynamics. Rate Of Turn Measure. Measure
     *  Text describing the rate at which the vessel is turning.
     *  0..1
     *  Vessel Dynamics
     *  Rate Of Turn Measure
     *  Measure
     *  Measure. Type
     *  ROTI
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RateOfTurnMeasure $rateOfTurnMeasure
     */
    private $rateOfTurnMeasure = null;

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
     * Gets as navigationStatusCode
     *
     * BBIE
     *  Vessel Dynamics. Navigation_ Status Code. Code
     *  A code specifying the navigation status for the vessel.
     *  0..1
     *  Vessel Dynamics
     *  Navigation
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NavigationStatusCode
     */
    public function getNavigationStatusCode()
    {
        return $this->navigationStatusCode;
    }

    /**
     * Sets a new navigationStatusCode
     *
     * BBIE
     *  Vessel Dynamics. Navigation_ Status Code. Code
     *  A code specifying the navigation status for the vessel.
     *  0..1
     *  Vessel Dynamics
     *  Navigation
     *  Status Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NavigationStatusCode $navigationStatusCode
     * @return self
     */
    public function setNavigationStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NavigationStatusCode $navigationStatusCode = null)
    {
        $this->navigationStatusCode = $navigationStatusCode;
        return $this;
    }

    /**
     * Gets as atAnchorageIndicator
     *
     * BBIE
     *  Vessel Dynamics. At Anchorage_ Indicator. Indicator
     *  Indicates whether the vessel is at anchor.
     *  0..1
     *  Vessel Dynamics
     *  At Anchorage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAtAnchorageIndicator()
    {
        return $this->atAnchorageIndicator;
    }

    /**
     * Sets a new atAnchorageIndicator
     *
     * BBIE
     *  Vessel Dynamics. At Anchorage_ Indicator. Indicator
     *  Indicates whether the vessel is at anchor.
     *  0..1
     *  Vessel Dynamics
     *  At Anchorage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $atAnchorageIndicator
     * @return self
     */
    public function setAtAnchorageIndicator($atAnchorageIndicator)
    {
        $this->atAnchorageIndicator = $atAnchorageIndicator;
        return $this;
    }

    /**
     * Gets as courseOverGroundDirection
     *
     * BBIE
     *  Vessel Dynamics. Course Over Ground Direction. Text
     *  Text describing the actual direction of progress of a vessel, between two points, in relation to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Course Over Ground Direction
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CourseOverGroundDirection
     */
    public function getCourseOverGroundDirection()
    {
        return $this->courseOverGroundDirection;
    }

    /**
     * Sets a new courseOverGroundDirection
     *
     * BBIE
     *  Vessel Dynamics. Course Over Ground Direction. Text
     *  Text describing the actual direction of progress of a vessel, between two points, in relation to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Course Over Ground Direction
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CourseOverGroundDirection $courseOverGroundDirection
     * @return self
     */
    public function setCourseOverGroundDirection(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CourseOverGroundDirection $courseOverGroundDirection = null)
    {
        $this->courseOverGroundDirection = $courseOverGroundDirection;
        return $this;
    }

    /**
     * Gets as speedOverGroundMeasure
     *
     * BBIE
     *  Vessel Dynamics. Speed Over Ground Measure. Measure
     *  Text describing the speed of the vessel relative to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Speed Over Ground Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpeedOverGroundMeasure
     */
    public function getSpeedOverGroundMeasure()
    {
        return $this->speedOverGroundMeasure;
    }

    /**
     * Sets a new speedOverGroundMeasure
     *
     * BBIE
     *  Vessel Dynamics. Speed Over Ground Measure. Measure
     *  Text describing the speed of the vessel relative to the surface of the earth.
     *  0..1
     *  Vessel Dynamics
     *  Speed Over Ground Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpeedOverGroundMeasure $speedOverGroundMeasure
     * @return self
     */
    public function setSpeedOverGroundMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpeedOverGroundMeasure $speedOverGroundMeasure = null)
    {
        $this->speedOverGroundMeasure = $speedOverGroundMeasure;
        return $this;
    }

    /**
     * Gets as rateOfTurnMeasure
     *
     * BBIE
     *  Vessel Dynamics. Rate Of Turn Measure. Measure
     *  Text describing the rate at which the vessel is turning.
     *  0..1
     *  Vessel Dynamics
     *  Rate Of Turn Measure
     *  Measure
     *  Measure. Type
     *  ROTI
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RateOfTurnMeasure
     */
    public function getRateOfTurnMeasure()
    {
        return $this->rateOfTurnMeasure;
    }

    /**
     * Sets a new rateOfTurnMeasure
     *
     * BBIE
     *  Vessel Dynamics. Rate Of Turn Measure. Measure
     *  Text describing the rate at which the vessel is turning.
     *  0..1
     *  Vessel Dynamics
     *  Rate Of Turn Measure
     *  Measure
     *  Measure. Type
     *  ROTI
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RateOfTurnMeasure $rateOfTurnMeasure
     * @return self
     */
    public function setRateOfTurnMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RateOfTurnMeasure $rateOfTurnMeasure = null)
    {
        $this->rateOfTurnMeasure = $rateOfTurnMeasure;
        return $this;
    }
}

