<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing PnBFieldParamsType
 *
 *
 * XSD Type: PnBFieldParamsType
 */
class PnBFieldParamsType extends CharTwoFieldParamsType
{
    /**
     * @var int $k1
     */
    private $k1 = null;

    /**
     * @var int $k2
     */
    private $k2 = null;

    /**
     * @var int $k3
     */
    private $k3 = null;

    /**
     * Gets as k1
     *
     * @return int
     */
    public function getK1()
    {
        return $this->k1;
    }

    /**
     * Sets a new k1
     *
     * @param int $k1
     * @return self
     */
    public function setK1($k1)
    {
        $this->k1 = $k1;
        return $this;
    }

    /**
     * Gets as k2
     *
     * @return int
     */
    public function getK2()
    {
        return $this->k2;
    }

    /**
     * Sets a new k2
     *
     * @param int $k2
     * @return self
     */
    public function setK2($k2)
    {
        $this->k2 = $k2;
        return $this;
    }

    /**
     * Gets as k3
     *
     * @return int
     */
    public function getK3()
    {
        return $this->k3;
    }

    /**
     * Sets a new k3
     *
     * @param int $k3
     * @return self
     */
    public function setK3($k3)
    {
        $this->k3 = $k3;
        return $this;
    }
}

