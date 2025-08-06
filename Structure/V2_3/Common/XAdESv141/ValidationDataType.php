<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141;

/**
 * Class representing ValidationDataType
 *
 *
 * XSD Type: ValidationDataType
 */
class ValidationDataType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertificateValues $certificateValues
     */
    private $certificateValues = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\RevocationValues $revocationValues
     */
    private $revocationValues = null;

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

    /**
     * Gets as certificateValues
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertificateValues
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertificateValues $certificateValues
     * @return self
     */
    public function setCertificateValues(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertificateValues $certificateValues = null)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Gets as revocationValues
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\RevocationValues
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\RevocationValues $revocationValues
     * @return self
     */
    public function setRevocationValues(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\RevocationValues $revocationValues = null)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }
}

