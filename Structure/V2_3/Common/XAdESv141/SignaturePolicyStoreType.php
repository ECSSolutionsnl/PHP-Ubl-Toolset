<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141;

/**
 * Class representing SignaturePolicyStoreType
 *
 *
 * XSD Type: SignaturePolicyStoreType
 */
class SignaturePolicyStoreType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\SPDocSpecification $sPDocSpecification
     */
    private $sPDocSpecification = null;

    /**
     * @var string $signaturePolicyDocument
     */
    private $signaturePolicyDocument = null;

    /**
     * @var string $sigPolDocLocalURI
     */
    private $sigPolDocLocalURI = null;

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
     * Gets as sPDocSpecification
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\SPDocSpecification
     */
    public function getSPDocSpecification()
    {
        return $this->sPDocSpecification;
    }

    /**
     * Sets a new sPDocSpecification
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\SPDocSpecification $sPDocSpecification
     * @return self
     */
    public function setSPDocSpecification(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141\SPDocSpecification $sPDocSpecification)
    {
        $this->sPDocSpecification = $sPDocSpecification;
        return $this;
    }

    /**
     * Gets as signaturePolicyDocument
     *
     * @return string
     */
    public function getSignaturePolicyDocument()
    {
        return $this->signaturePolicyDocument;
    }

    /**
     * Sets a new signaturePolicyDocument
     *
     * @param string $signaturePolicyDocument
     * @return self
     */
    public function setSignaturePolicyDocument($signaturePolicyDocument)
    {
        $this->signaturePolicyDocument = $signaturePolicyDocument;
        return $this;
    }

    /**
     * Gets as sigPolDocLocalURI
     *
     * @return string
     */
    public function getSigPolDocLocalURI()
    {
        return $this->sigPolDocLocalURI;
    }

    /**
     * Sets a new sigPolDocLocalURI
     *
     * @param string $sigPolDocLocalURI
     * @return self
     */
    public function setSigPolDocLocalURI($sigPolDocLocalURI)
    {
        $this->sigPolDocLocalURI = $sigPolDocLocalURI;
        return $this;
    }
}

