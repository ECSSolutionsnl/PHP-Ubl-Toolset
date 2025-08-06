<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing CurveType
 *
 *
 * XSD Type: CurveType
 */
class CurveType
{
    /**
     * @var string $a
     */
    private $a = null;

    /**
     * @var string $b
     */
    private $b = null;

    /**
     * Gets as a
     *
     * @return string
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Sets a new a
     *
     * @param string $a
     * @return self
     */
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * Gets as b
     *
     * @return string
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Sets a new b
     *
     * @param string $b
     * @return self
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }
}

