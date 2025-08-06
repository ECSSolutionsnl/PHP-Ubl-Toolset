<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CertifiedRoleTypeV2Type
 *
 *
 * XSD Type: CertifiedRoleTypeV2
 */
class CertifiedRoleTypeV2Type
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\X509AttributeCertificate $x509AttributeCertificate
     */
    private $x509AttributeCertificate = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\OtherAttributeCertificate $otherAttributeCertificate
     */
    private $otherAttributeCertificate = null;

    /**
     * Gets as x509AttributeCertificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\X509AttributeCertificate
     */
    public function getX509AttributeCertificate()
    {
        return $this->x509AttributeCertificate;
    }

    /**
     * Sets a new x509AttributeCertificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\X509AttributeCertificate $x509AttributeCertificate
     * @return self
     */
    public function setX509AttributeCertificate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\X509AttributeCertificate $x509AttributeCertificate = null)
    {
        $this->x509AttributeCertificate = $x509AttributeCertificate;
        return $this;
    }

    /**
     * Gets as otherAttributeCertificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\OtherAttributeCertificate
     */
    public function getOtherAttributeCertificate()
    {
        return $this->otherAttributeCertificate;
    }

    /**
     * Sets a new otherAttributeCertificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\OtherAttributeCertificate $otherAttributeCertificate
     * @return self
     */
    public function setOtherAttributeCertificate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\OtherAttributeCertificate $otherAttributeCertificate = null)
    {
        $this->otherAttributeCertificate = $otherAttributeCertificate;
        return $this;
    }
}

