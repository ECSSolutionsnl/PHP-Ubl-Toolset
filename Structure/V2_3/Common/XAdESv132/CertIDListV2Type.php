<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CertIDListV2Type
 *
 *
 * XSD Type: CertIDListV2Type
 */
class CertIDListV2Type
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert
     */
    public function addToCert(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert)
    {
        $this->cert[] = $cert;
        return $this;
    }

    /**
     * isset cert
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCert($index)
    {
        return isset($this->cert[$index]);
    }

    /**
     * unset cert
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCert($index)
    {
        unset($this->cert[$index]);
    }

    /**
     * Gets as cert
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }
}

