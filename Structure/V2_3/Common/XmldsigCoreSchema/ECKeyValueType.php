<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing ECKeyValueType
 *
 *
 * XSD Type: ECKeyValueType
 */
class ECKeyValueType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECParametersType $eCParameters
     */
    private $eCParameters = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\NamedCurveType $namedCurve
     */
    private $namedCurve = null;

    /**
     * @var string $publicKey
     */
    private $publicKey = null;

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
     * Gets as eCParameters
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECParametersType
     */
    public function getECParameters()
    {
        return $this->eCParameters;
    }

    /**
     * Sets a new eCParameters
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECParametersType $eCParameters
     * @return self
     */
    public function setECParameters(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\ECParametersType $eCParameters = null)
    {
        $this->eCParameters = $eCParameters;
        return $this;
    }

    /**
     * Gets as namedCurve
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\NamedCurveType
     */
    public function getNamedCurve()
    {
        return $this->namedCurve;
    }

    /**
     * Sets a new namedCurve
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\NamedCurveType $namedCurve
     * @return self
     */
    public function setNamedCurve(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\NamedCurveType $namedCurve = null)
    {
        $this->namedCurve = $namedCurve;
        return $this;
    }

    /**
     * Gets as publicKey
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Sets a new publicKey
     *
     * @param string $publicKey
     * @return self
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }
}

