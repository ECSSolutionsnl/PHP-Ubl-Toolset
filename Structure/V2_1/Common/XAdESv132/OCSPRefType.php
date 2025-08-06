<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing OCSPRefType
 *
 *
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

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
    public function setDigestAlgAndValue(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\DigestAlgAndValueType $digestAlgAndValue = null)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }
}

