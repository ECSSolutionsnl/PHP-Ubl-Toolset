<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing SanitaryMeasureType
 *
 * ABIE
 *  Sanitary Measure. Details
 *  A class describing a plan, action or meassure that has been implemented for sanitary reasons.
 *  Sanitary Measure
 * XSD Type: SanitaryMeasureType
 */
class SanitaryMeasureType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Sanitary Measure. Sanitary Measure Type. Code
     *  A code decribing the type of sanitary meassure.
     *  1
     *  Sanitary Measure
     *  Sanitary Measure Type
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SanitaryMeasureTypeCode $sanitaryMeasureTypeCode
     */
    private $sanitaryMeasureTypeCode = null;

    /**
     * BBIE
     *  Sanitary Measure. Application. Date
     *  The date this sanitary meassure was applied.
     *  0..1
     *  Sanitary Measure
     *  Application
     *  Date
     *  Date. Type
     *
     * @var \DateTime $applicationDate
     */
    private $applicationDate = null;

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
     * Gets as sanitaryMeasureTypeCode
     *
     * BBIE
     *  Sanitary Measure. Sanitary Measure Type. Code
     *  A code decribing the type of sanitary meassure.
     *  1
     *  Sanitary Measure
     *  Sanitary Measure Type
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SanitaryMeasureTypeCode
     */
    public function getSanitaryMeasureTypeCode()
    {
        return $this->sanitaryMeasureTypeCode;
    }

    /**
     * Sets a new sanitaryMeasureTypeCode
     *
     * BBIE
     *  Sanitary Measure. Sanitary Measure Type. Code
     *  A code decribing the type of sanitary meassure.
     *  1
     *  Sanitary Measure
     *  Sanitary Measure Type
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SanitaryMeasureTypeCode $sanitaryMeasureTypeCode
     * @return self
     */
    public function setSanitaryMeasureTypeCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SanitaryMeasureTypeCode $sanitaryMeasureTypeCode)
    {
        $this->sanitaryMeasureTypeCode = $sanitaryMeasureTypeCode;
        return $this;
    }

    /**
     * Gets as applicationDate
     *
     * BBIE
     *  Sanitary Measure. Application. Date
     *  The date this sanitary meassure was applied.
     *  0..1
     *  Sanitary Measure
     *  Application
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Sets a new applicationDate
     *
     * BBIE
     *  Sanitary Measure. Application. Date
     *  The date this sanitary meassure was applied.
     *  0..1
     *  Sanitary Measure
     *  Application
     *  Date
     *  Date. Type
     *
     * @param \DateTime $applicationDate
     * @return self
     */
    public function setApplicationDate(?\DateTime $applicationDate = null)
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }
}

