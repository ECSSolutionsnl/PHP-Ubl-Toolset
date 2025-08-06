<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing SignaturePolicyIdType
 *
 *
 * XSD Type: SignaturePolicyIdType
 */
class SignaturePolicyIdType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\ObjectIdentifierType $sigPolicyId
     */
    private $sigPolicyId = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $sigPolicyHash
     */
    private $sigPolicyHash = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $sigPolicyQualifiers
     */
    private $sigPolicyQualifiers = null;

    /**
     * Gets as sigPolicyId
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\ObjectIdentifierType
     */
    public function getSigPolicyId()
    {
        return $this->sigPolicyId;
    }

    /**
     * Sets a new sigPolicyId
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\ObjectIdentifierType $sigPolicyId
     * @return self
     */
    public function setSigPolicyId(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\ObjectIdentifierType $sigPolicyId)
    {
        $this->sigPolicyId = $sigPolicyId;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Transform $transform
     */
    public function addToTransforms(\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Transform[] $transforms
     * @return self
     */
    public function setTransforms(?array $transforms = null)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * Gets as sigPolicyHash
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType
     */
    public function getSigPolicyHash()
    {
        return $this->sigPolicyHash;
    }

    /**
     * Sets a new sigPolicyHash
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $sigPolicyHash
     * @return self
     */
    public function setSigPolicyHash(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DigestAlgAndValueType $sigPolicyHash)
    {
        $this->sigPolicyHash = $sigPolicyHash;
        return $this;
    }

    /**
     * Adds as sigPolicyQualifier
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $sigPolicyQualifier
     */
    public function addToSigPolicyQualifiers(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $sigPolicyQualifier)
    {
        $this->sigPolicyQualifiers[] = $sigPolicyQualifier;
        return $this;
    }

    /**
     * isset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigPolicyQualifiers($index)
    {
        return isset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * unset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigPolicyQualifiers($index)
    {
        unset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * Gets as sigPolicyQualifiers
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[]
     */
    public function getSigPolicyQualifiers()
    {
        return $this->sigPolicyQualifiers;
    }

    /**
     * Sets a new sigPolicyQualifiers
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $sigPolicyQualifiers
     * @return self
     */
    public function setSigPolicyQualifiers(?array $sigPolicyQualifiers = null)
    {
        $this->sigPolicyQualifiers = $sigPolicyQualifiers;
        return $this;
    }
}

