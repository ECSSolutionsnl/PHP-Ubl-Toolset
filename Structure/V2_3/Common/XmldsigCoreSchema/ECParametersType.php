<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing ECParametersType
 *
 *
 * XSD Type: ECParametersType
 */
class ECParametersType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\FieldIDType $fieldID
     */
    private $fieldID = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CurveType $curve
     */
    private $curve = null;

    /**
     * @var string $base
     */
    private $base = null;

    /**
     * @var string $order
     */
    private $order = null;

    /**
     * @var int $coFactor
     */
    private $coFactor = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECValidationDataType $validationData
     */
    private $validationData = null;

    /**
     * Gets as fieldID
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\FieldIDType
     */
    public function getFieldID()
    {
        return $this->fieldID;
    }

    /**
     * Sets a new fieldID
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\FieldIDType $fieldID
     * @return self
     */
    public function setFieldID(\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\FieldIDType $fieldID)
    {
        $this->fieldID = $fieldID;
        return $this;
    }

    /**
     * Gets as curve
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CurveType
     */
    public function getCurve()
    {
        return $this->curve;
    }

    /**
     * Sets a new curve
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CurveType $curve
     * @return self
     */
    public function setCurve(\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CurveType $curve)
    {
        $this->curve = $curve;
        return $this;
    }

    /**
     * Gets as base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * @param string $base
     * @return self
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param string $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as coFactor
     *
     * @return int
     */
    public function getCoFactor()
    {
        return $this->coFactor;
    }

    /**
     * Sets a new coFactor
     *
     * @param int $coFactor
     * @return self
     */
    public function setCoFactor($coFactor)
    {
        $this->coFactor = $coFactor;
        return $this;
    }

    /**
     * Gets as validationData
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECValidationDataType
     */
    public function getValidationData()
    {
        return $this->validationData;
    }

    /**
     * Sets a new validationData
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECValidationDataType $validationData
     * @return self
     */
    public function setValidationData(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECValidationDataType $validationData = null)
    {
        $this->validationData = $validationData;
        return $this;
    }
}

