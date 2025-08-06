<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing CertIDListType
 *
 *
 * XSD Type: CertIDListType
 */
class CertIDListType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CertIDType[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CertIDType $cert
     */
    public function addToCert(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CertIDType $cert)
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
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CertIDType[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CertIDType[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }
}

