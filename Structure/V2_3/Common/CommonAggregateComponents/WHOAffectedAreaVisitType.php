<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing WHOAffectedAreaVisitType
 *
 * ABIE
 *  WHO Affected Area Visit. Details
 *  A class to describe a visit to a port located in a geographical area considered an “affected area” by the World Health Organization (WHO).
 *  WHO Affected Area Visit
 * XSD Type: WHOAffectedAreaVisitType
 */
class WHOAffectedAreaVisitType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  WHO Affected Area Visit. Visit. Date
     *  The date that the WHO Affected Area was visited.
     *  1
     *  WHO Affected Area Visit
     *  Visit
     *  Date
     *  Date. Type
     *
     * @var \DateTime $visitDate
     */
    private $visitDate = null;

    /**
     * ASBIE
     *  WHO Affected Area Visit. WHO Affected Area Port_ Location. Location
     *  The location of the port of the visited WHO Affected Area.
     *  1
     *  WHO Affected Area Visit
     *  WHO Affected Area Port
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaPortLocation $wHOAffectedAreaPortLocation
     */
    private $wHOAffectedAreaPortLocation = null;

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
     * Gets as visitDate
     *
     * BBIE
     *  WHO Affected Area Visit. Visit. Date
     *  The date that the WHO Affected Area was visited.
     *  1
     *  WHO Affected Area Visit
     *  Visit
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getVisitDate()
    {
        return $this->visitDate;
    }

    /**
     * Sets a new visitDate
     *
     * BBIE
     *  WHO Affected Area Visit. Visit. Date
     *  The date that the WHO Affected Area was visited.
     *  1
     *  WHO Affected Area Visit
     *  Visit
     *  Date
     *  Date. Type
     *
     * @param \DateTime $visitDate
     * @return self
     */
    public function setVisitDate(\DateTime $visitDate)
    {
        $this->visitDate = $visitDate;
        return $this;
    }

    /**
     * Gets as wHOAffectedAreaPortLocation
     *
     * ASBIE
     *  WHO Affected Area Visit. WHO Affected Area Port_ Location. Location
     *  The location of the port of the visited WHO Affected Area.
     *  1
     *  WHO Affected Area Visit
     *  WHO Affected Area Port
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaPortLocation
     */
    public function getWHOAffectedAreaPortLocation()
    {
        return $this->wHOAffectedAreaPortLocation;
    }

    /**
     * Sets a new wHOAffectedAreaPortLocation
     *
     * ASBIE
     *  WHO Affected Area Visit. WHO Affected Area Port_ Location. Location
     *  The location of the port of the visited WHO Affected Area.
     *  1
     *  WHO Affected Area Visit
     *  WHO Affected Area Port
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaPortLocation $wHOAffectedAreaPortLocation
     * @return self
     */
    public function setWHOAffectedAreaPortLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WHOAffectedAreaPortLocation $wHOAffectedAreaPortLocation)
    {
        $this->wHOAffectedAreaPortLocation = $wHOAffectedAreaPortLocation;
        return $this;
    }
}

