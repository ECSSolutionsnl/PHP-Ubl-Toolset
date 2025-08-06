<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing XAdESTimeStampType
 *
 *
 * XSD Type: XAdESTimeStampType
 */
class XAdESTimeStampType extends GenericTimeStampType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IncludeXsd[] $include
     */
    private $include = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $xMLTimeStamp
     */
    private $xMLTimeStamp = [
        
    ];

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
     * Adds as include
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IncludeXsd $include
     */
    public function addToInclude(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IncludeXsd $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IncludeXsd[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IncludeXsd[] $include
     * @return self
     */
    public function setInclude(?array $include = null)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\CanonicalizationMethod $canonicalizationMethod = null)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Adds as encapsulatedTimeStamp
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    public function addToEncapsulatedTimeStamp(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\EncapsulatedPKIDataType $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp[] = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * isset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedTimeStamp($index)
    {
        return isset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * unset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedTimeStamp($index)
    {
        unset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(?array $encapsulatedTimeStamp = null)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Adds as xMLTimeStamp
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $xMLTimeStamp
     */
    public function addToXMLTimeStamp(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $xMLTimeStamp)
    {
        $this->xMLTimeStamp[] = $xMLTimeStamp;
        return $this;
    }

    /**
     * isset xMLTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXMLTimeStamp($index)
    {
        return isset($this->xMLTimeStamp[$index]);
    }

    /**
     * unset xMLTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXMLTimeStamp($index)
    {
        unset($this->xMLTimeStamp[$index]);
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[]
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(?array $xMLTimeStamp = null)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }
}

