<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PortCallRecordType
 *
 * ABIE
 *  Port Call Record. Details
 *  A record for a ship call at a port facility.
 *  Port Call Record
 *  Port facility call record
 * XSD Type: PortCallRecordType
 */
class PortCallRecordType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Port Call Record. Identifier
     *  An identifier for this port call record.
     *  0..1
     *  Port Call Record
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Port Call Record. Security Level Code. Code
     *  A code describing the security level of the port facility call record.
     *  0..1
     *  Port Call Record
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SecurityLevelCode $securityLevelCode
     */
    private $securityLevelCode = null;

    /**
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityMeasure[] $securityMeasure
     */
    private $securityMeasure = [
        
    ];

    /**
     * ASBIE
     *  Port Call Record. Port Facility_ Location. Location
     *  The location of the port facility.
     *  0..1
     *  Port Call Record
     *  Port Facility
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortFacilityLocation $portFacilityLocation
     */
    private $portFacilityLocation = null;

    /**
     * ASBIE
     *  Port Call Record. Period
     *  The period when this port call took place.
     *  0..1
     *  Port Call Record
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

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
     *  Port Call Record. Identifier
     *  An identifier for this port call record.
     *  0..1
     *  Port Call Record
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
     *  Port Call Record. Identifier
     *  An identifier for this port call record.
     *  0..1
     *  Port Call Record
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
     * Gets as securityLevelCode
     *
     * BBIE
     *  Port Call Record. Security Level Code. Code
     *  A code describing the security level of the port facility call record.
     *  0..1
     *  Port Call Record
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SecurityLevelCode
     */
    public function getSecurityLevelCode()
    {
        return $this->securityLevelCode;
    }

    /**
     * Sets a new securityLevelCode
     *
     * BBIE
     *  Port Call Record. Security Level Code. Code
     *  A code describing the security level of the port facility call record.
     *  0..1
     *  Port Call Record
     *  Security Level Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SecurityLevelCode $securityLevelCode
     * @return self
     */
    public function setSecurityLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SecurityLevelCode $securityLevelCode = null)
    {
        $this->securityLevelCode = $securityLevelCode;
        return $this;
    }

    /**
     * Adds as securityMeasure
     *
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityMeasure $securityMeasure
     */
    public function addToSecurityMeasure(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityMeasure $securityMeasure)
    {
        $this->securityMeasure[] = $securityMeasure;
        return $this;
    }

    /**
     * isset securityMeasure
     *
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityMeasure($index)
    {
        return isset($this->securityMeasure[$index]);
    }

    /**
     * unset securityMeasure
     *
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityMeasure($index)
    {
        unset($this->securityMeasure[$index]);
    }

    /**
     * Gets as securityMeasure
     *
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityMeasure[]
     */
    public function getSecurityMeasure()
    {
        return $this->securityMeasure;
    }

    /**
     * Sets a new securityMeasure
     *
     * ASBIE
     *  Port Call Record. Security Measure
     *  One or more security measures applied to this port call record.
     *  0..n
     *  Port Call Record
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SecurityMeasure[] $securityMeasure
     * @return self
     */
    public function setSecurityMeasure(?array $securityMeasure = null)
    {
        $this->securityMeasure = $securityMeasure;
        return $this;
    }

    /**
     * Gets as portFacilityLocation
     *
     * ASBIE
     *  Port Call Record. Port Facility_ Location. Location
     *  The location of the port facility.
     *  0..1
     *  Port Call Record
     *  Port Facility
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortFacilityLocation
     */
    public function getPortFacilityLocation()
    {
        return $this->portFacilityLocation;
    }

    /**
     * Sets a new portFacilityLocation
     *
     * ASBIE
     *  Port Call Record. Port Facility_ Location. Location
     *  The location of the port facility.
     *  0..1
     *  Port Call Record
     *  Port Facility
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortFacilityLocation $portFacilityLocation
     * @return self
     */
    public function setPortFacilityLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PortFacilityLocation $portFacilityLocation = null)
    {
        $this->portFacilityLocation = $portFacilityLocation;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Port Call Record. Period
     *  The period when this port call took place.
     *  0..1
     *  Port Call Record
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Port Call Record. Period
     *  The period when this port call took place.
     *  0..1
     *  Port Call Record
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period = null)
    {
        $this->period = $period;
        return $this;
    }
}

