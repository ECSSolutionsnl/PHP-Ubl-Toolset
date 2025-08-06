<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CertIDTypeV2Type
 *
 *
 * XSD Type: CertIDTypeV2
 */
class CertIDTypeV2Type
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $certDigest
     */
    private $certDigest = null;

    /**
     * @var string $issuerSerialV2
     */
    private $issuerSerialV2 = null;

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
     * Gets as certDigest
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * Sets a new certDigest
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $certDigest
     * @return self
     */
    public function setCertDigest(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * Gets as issuerSerialV2
     *
     * @return string
     */
    public function getIssuerSerialV2()
    {
        return $this->issuerSerialV2;
    }

    /**
     * Sets a new issuerSerialV2
     *
     * @param string $issuerSerialV2
     * @return self
     */
    public function setIssuerSerialV2($issuerSerialV2)
    {
        $this->issuerSerialV2 = $issuerSerialV2;
        return $this;
    }
}

