<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141;

/**
 * Class representing CompleteCertificateRefsTypeV2Type
 *
 *
 * XSD Type: CompleteCertificateRefsTypeV2
 */
class CompleteCertificateRefsTypeV2Type
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $certRefs
     */
    private $certRefs = null;

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
     * Adds as cert
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert
     */
    public function addToCertRefs(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert)
    {
        $this->certRefs[] = $cert;
        return $this;
    }

    /**
     * isset certRefs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertRefs($index)
    {
        return isset($this->certRefs[$index]);
    }

    /**
     * unset certRefs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertRefs($index)
    {
        unset($this->certRefs[$index]);
    }

    /**
     * Gets as certRefs
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[]
     */
    public function getCertRefs()
    {
        return $this->certRefs;
    }

    /**
     * Sets a new certRefs
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $certRefs
     * @return self
     */
    public function setCertRefs(array $certRefs)
    {
        $this->certRefs = $certRefs;
        return $this;
    }
}

