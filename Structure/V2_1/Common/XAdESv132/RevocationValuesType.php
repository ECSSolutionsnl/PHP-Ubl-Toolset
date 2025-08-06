<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing RevocationValuesType
 *
 *
 * XSD Type: RevocationValuesType
 */
class RevocationValuesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[] $cRLValues
     */
    private $cRLValues = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[] $oCSPValues
     */
    private $oCSPValues = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType[] $otherValues
     */
    private $otherValues = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as encapsulatedCRLValue
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedCRLValue
     */
    public function addToCRLValues(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedCRLValue)
    {
        $this->cRLValues[] = $encapsulatedCRLValue;
        return $this;
    }

    /**
     * isset cRLValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLValues($index)
    {
        return isset($this->cRLValues[$index]);
    }

    /**
     * unset cRLValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLValues($index)
    {
        unset($this->cRLValues[$index]);
    }

    /**
     * Gets as cRLValues
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[]
     */
    public function getCRLValues()
    {
        return $this->cRLValues;
    }

    /**
     * Sets a new cRLValues
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[] $cRLValues
     * @return self
     */
    public function setCRLValues(?array $cRLValues = null)
    {
        $this->cRLValues = $cRLValues;
        return $this;
    }

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToOCSPValues(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->oCSPValues[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset oCSPValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOCSPValues($index)
    {
        return isset($this->oCSPValues[$index]);
    }

    /**
     * unset oCSPValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOCSPValues($index)
    {
        unset($this->oCSPValues[$index]);
    }

    /**
     * Gets as oCSPValues
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[]
     */
    public function getOCSPValues()
    {
        return $this->oCSPValues;
    }

    /**
     * Sets a new oCSPValues
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType[] $oCSPValues
     * @return self
     */
    public function setOCSPValues(?array $oCSPValues = null)
    {
        $this->oCSPValues = $oCSPValues;
        return $this;
    }

    /**
     * Adds as otherValue
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType $otherValue
     */
    public function addToOtherValues(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType $otherValue)
    {
        $this->otherValues[] = $otherValue;
        return $this;
    }

    /**
     * isset otherValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherValues($index)
    {
        return isset($this->otherValues[$index]);
    }

    /**
     * unset otherValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherValues($index)
    {
        unset($this->otherValues[$index]);
    }

    /**
     * Gets as otherValues
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType[]
     */
    public function getOtherValues()
    {
        return $this->otherValues;
    }

    /**
     * Sets a new otherValues
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType[] $otherValues
     * @return self
     */
    public function setOtherValues(?array $otherValues = null)
    {
        $this->otherValues = $otherValues;
        return $this;
    }
}

