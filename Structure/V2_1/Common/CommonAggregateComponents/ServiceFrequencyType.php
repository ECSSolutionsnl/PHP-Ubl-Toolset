<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

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
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\WeekDayCode $weekDayCode
     */
    private $weekDayCode = null;

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
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\WeekDayCode
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
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\WeekDayCode $weekDayCode
     * @return self
     */
    public function setWeekDayCode(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\WeekDayCode $weekDayCode)
    {
        $this->weekDayCode = $weekDayCode;
        return $this;
    }
}

