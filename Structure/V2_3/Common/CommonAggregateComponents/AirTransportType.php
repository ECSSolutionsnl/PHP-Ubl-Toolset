<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing AirTransportType
 *
 * ABIE
 *  Air Transport. Details
 *  A class to identify a specific aircraft used for transportation.
 *  Air Transport
 * XSD Type: AirTransportType
 */
class AirTransportType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AircraftID $aircraftID
     */
    private $aircraftID = null;

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
     * Gets as aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }
}

