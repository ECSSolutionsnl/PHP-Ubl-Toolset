<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141;

/**
 * Class representing RenewedDigestsType
 *
 *
 * XSD Type: RenewedDigestsType
 */
class RenewedDigestsType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\RecomputedDigestValue[] $recomputedDigestValue
     */
    private $recomputedDigestValue = [
        
    ];

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
     * Gets as digestMethod
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Adds as recomputedDigestValue
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\RecomputedDigestValue $recomputedDigestValue
     */
    public function addToRecomputedDigestValue(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\RecomputedDigestValue $recomputedDigestValue)
    {
        $this->recomputedDigestValue[] = $recomputedDigestValue;
        return $this;
    }

    /**
     * isset recomputedDigestValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecomputedDigestValue($index)
    {
        return isset($this->recomputedDigestValue[$index]);
    }

    /**
     * unset recomputedDigestValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecomputedDigestValue($index)
    {
        unset($this->recomputedDigestValue[$index]);
    }

    /**
     * Gets as recomputedDigestValue
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\RecomputedDigestValue[]
     */
    public function getRecomputedDigestValue()
    {
        return $this->recomputedDigestValue;
    }

    /**
     * Sets a new recomputedDigestValue
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\RecomputedDigestValue[] $recomputedDigestValue
     * @return self
     */
    public function setRecomputedDigestValue(array $recomputedDigestValue)
    {
        $this->recomputedDigestValue = $recomputedDigestValue;
        return $this;
    }
}

