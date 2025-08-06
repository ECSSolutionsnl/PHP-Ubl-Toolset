<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature
     * @return self
     */
    public function setSignature(\ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

