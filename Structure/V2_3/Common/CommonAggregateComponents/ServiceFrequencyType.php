<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ServiceFrequencyType
 *
 * ABIE
 *  Service Frequency. Details
 *  A class to specify which day of the week a transport service is operational.
 *  Service Frequency
 * XSD Type: ServiceFrequencyType
 */
class ServiceFrequencyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeekDayCode $weekDayCode
     */
    private $weekDayCode = null;

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
     * Gets as weekDayCode
     *
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeekDayCode
     */
    public function getWeekDayCode()
    {
        return $this->weekDayCode;
    }

    /**
     * Sets a new weekDayCode
     *
     * BBIE
     *  Service Frequency. Week Day. Code
     *  A day of the week, expressed as code.
     *  1
     *  Service Frequency
     *  Week Day
     *  Code
     *  Week Day
     *  Week Day_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeekDayCode $weekDayCode
     * @return self
     */
    public function setWeekDayCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WeekDayCode $weekDayCode)
    {
        $this->weekDayCode = $weekDayCode;
        return $this;
    }
}

