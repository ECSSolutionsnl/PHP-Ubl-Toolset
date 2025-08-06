<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing NamedCurveType
 *
 *
 * XSD Type: NamedCurveType
 */
class NamedCurveType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }
}

