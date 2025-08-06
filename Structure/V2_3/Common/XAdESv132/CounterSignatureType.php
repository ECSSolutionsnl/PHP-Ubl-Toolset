<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CounterSignatureType
 *
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Signature $signature
     */
    private $signature = null;

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
     * Gets as signature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Signature $signature
     * @return self
     */
    public function setSignature(\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }
}

