<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ShipToShipActivityRecordType
 *
 * ABIE
 *  Ship To Ship Activity Record. Details
 *  A class to describe a ship to ship activity record.
 *  Ship To Ship Activity Record
 *  STS transfer
 * XSD Type: ShipToShipActivityRecordType
 */
class ShipToShipActivityRecordType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Ship To Ship Activity Record. Identifier
     *  An indentifier for this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppliedSecurityMeasure[] $appliedSecurityMeasure
     */
    private $appliedSecurityMeasure = [
        
    ];

    /**
     * ASBIE
     *  Ship To Ship Activity Record. Period
     *  The duration of this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Ship To Ship Activity Record. Location
     *  The location where this ship to ship activity took place.
     *  0..1
     *  Ship To Ship Activity Record
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location
     */
    private $location = null;

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
     *  Ship To Ship Activity Record. Identifier
     *  An indentifier for this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Identifier
     *  An indentifier for this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
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
     * Adds as description
     *
     * BBIE
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Description. Text
     *  A text describing the ship to ship activity.
     *  1..n
     *  Ship To Ship Activity Record
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as appliedSecurityMeasure
     *
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppliedSecurityMeasure $appliedSecurityMeasure
     */
    public function addToAppliedSecurityMeasure(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppliedSecurityMeasure $appliedSecurityMeasure)
    {
        $this->appliedSecurityMeasure[] = $appliedSecurityMeasure;
        return $this;
    }

    /**
     * isset appliedSecurityMeasure
     *
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppliedSecurityMeasure($index)
    {
        return isset($this->appliedSecurityMeasure[$index]);
    }

    /**
     * unset appliedSecurityMeasure
     *
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppliedSecurityMeasure($index)
    {
        unset($this->appliedSecurityMeasure[$index]);
    }

    /**
     * Gets as appliedSecurityMeasure
     *
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppliedSecurityMeasure[]
     */
    public function getAppliedSecurityMeasure()
    {
        return $this->appliedSecurityMeasure;
    }

    /**
     * Sets a new appliedSecurityMeasure
     *
     * ASBIE
     *  Ship To Ship Activity Record. Applied_ Security Measure. Security Measure
     *  Any security measures applied to this ship to ship activity in lieu of those specified in the approved Ship Security Plan (SSP).
     *  0..n
     *  Ship To Ship Activity Record
     *  Applied
     *  Security Measure
     *  Security Measure
     *  Security Measure
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AppliedSecurityMeasure[] $appliedSecurityMeasure
     * @return self
     */
    public function setAppliedSecurityMeasure(?array $appliedSecurityMeasure = null)
    {
        $this->appliedSecurityMeasure = $appliedSecurityMeasure;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Ship To Ship Activity Record. Period
     *  The duration of this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
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
     *  Ship To Ship Activity Record. Period
     *  The duration of this ship to ship activity.
     *  0..1
     *  Ship To Ship Activity Record
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

    /**
     * Gets as location
     *
     * ASBIE
     *  Ship To Ship Activity Record. Location
     *  The location where this ship to ship activity took place.
     *  0..1
     *  Ship To Ship Activity Record
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * ASBIE
     *  Ship To Ship Activity Record. Location
     *  The location where this ship to ship activity took place.
     *  0..1
     *  Ship To Ship Activity Record
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location
     * @return self
     */
    public function setLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }
}

