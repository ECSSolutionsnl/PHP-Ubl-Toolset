<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing UnsignedPropertiesType
 *
 *
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedSignatureProperties $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedDataObjectProperties $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedSignatureProperties
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedSignatureProperties $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedSignatureProperties $unsignedSignatureProperties = null)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedDataObjectProperties
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedDataObjectProperties $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\UnsignedDataObjectProperties $unsignedDataObjectProperties = null)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }
}

