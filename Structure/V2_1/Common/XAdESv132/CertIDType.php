<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing CertIDType
 *
 *
 * XSD Type: CertIDType
 */
class CertIDType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $certDigest
     */
    private $certDigest = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\X509IssuerSerialType $issuerSerial
     */
    private $issuerSerial = null;

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
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * Sets a new certDigest
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $certDigest
     * @return self
     */
    public function setCertDigest(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * Gets as issuerSerial
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\X509IssuerSerialType
     */
    public function getIssuerSerial()
    {
        return $this->issuerSerial;
    }

    /**
     * Sets a new issuerSerial
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\X509IssuerSerialType $issuerSerial
     * @return self
     */
    public function setIssuerSerial(\ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\X509IssuerSerialType $issuerSerial)
    {
        $this->issuerSerial = $issuerSerial;
        return $this;
    }
}

