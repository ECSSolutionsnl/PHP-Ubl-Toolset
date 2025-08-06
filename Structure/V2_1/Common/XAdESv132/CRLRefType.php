<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing CRLRefType
 *
 *
 * XSD Type: CRLRefType
 */
class CRLRefType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\CRLIdentifierType $cRLIdentifier = null)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }
}

