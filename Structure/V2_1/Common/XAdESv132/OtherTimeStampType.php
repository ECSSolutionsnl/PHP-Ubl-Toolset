<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132;

/**
 * Class representing OtherTimeStampType
 *
 *
 * XSD Type: OtherTimeStampType
 */
class OtherTimeStampType extends GenericTimeStampType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\ReferenceInfo[] $referenceInfo
     */
    private $referenceInfo = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType $xMLTimeStamp
     */
    private $xMLTimeStamp = null;

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
     * Adds as referenceInfo
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\ReferenceInfo $referenceInfo
     */
    public function addToReferenceInfo(\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\ReferenceInfo $referenceInfo)
    {
        $this->referenceInfo[] = $referenceInfo;
        return $this;
    }

    /**
     * isset referenceInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceInfo($index)
    {
        return isset($this->referenceInfo[$index]);
    }

    /**
     * unset referenceInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceInfo($index)
    {
        unset($this->referenceInfo[$index]);
    }

    /**
     * Gets as referenceInfo
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\ReferenceInfo[]
     */
    public function getReferenceInfo()
    {
        return $this->referenceInfo;
    }

    /**
     * Sets a new referenceInfo
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\ReferenceInfo[] $referenceInfo
     * @return self
     */
    public function setReferenceInfo(array $referenceInfo)
    {
        $this->referenceInfo = $referenceInfo;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod = null)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedTimeStamp = null)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XAdESv132\AnyType $xMLTimeStamp = null)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }
}

