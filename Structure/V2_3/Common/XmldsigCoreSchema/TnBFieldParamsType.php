<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing TnBFieldParamsType
 *
 *
 * XSD Type: TnBFieldParamsType
 */
class TnBFieldParamsType extends CharTwoFieldParamsType
{
    /**
     * @var int $k
     */
    private $k = null;

    /**
     * Gets as k
     *
     * @return int
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Sets a new k
     *
     * @param int $k
     * @return self
     */
    public function setK($k)
    {
        $this->k = $k;
        return $this;
    }
}

