<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PortCallPurposeType
 *
 * ABIE
 *  Port Call Purpose. Details
 *  A class to describe the purpose of a port call.
 *  Port Call Purpose
 * XSD Type: PortCallPurposeType
 */
class PortCallPurposeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Port Call Purpose. Purpose_ Type Code. Code
     *  The purpose of this port call, expressed as a code.
     *  0..1
     *  Port Call Purpose
     *  Purpose
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeTypeCode $purposeTypeCode
     */
    private $purposeTypeCode = null;

    /**
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeType[] $purposeType
     */
    private $purposeType = [
        
    ];

    /**
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for extensions foreign to the document.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(?array $uBLExtensions = null)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as purposeTypeCode
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Code. Code
     *  The purpose of this port call, expressed as a code.
     *  0..1
     *  Port Call Purpose
     *  Purpose
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeTypeCode
     */
    public function getPurposeTypeCode()
    {
        return $this->purposeTypeCode;
    }

    /**
     * Sets a new purposeTypeCode
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Code. Code
     *  The purpose of this port call, expressed as a code.
     *  0..1
     *  Port Call Purpose
     *  Purpose
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeTypeCode $purposeTypeCode
     * @return self
     */
    public function setPurposeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeTypeCode $purposeTypeCode = null)
    {
        $this->purposeTypeCode = $purposeTypeCode;
        return $this;
    }

    /**
     * Adds as purposeType
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeType $purposeType
     */
    public function addToPurposeType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeType $purposeType)
    {
        $this->purposeType[] = $purposeType;
        return $this;
    }

    /**
     * isset purposeType
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurposeType($index)
    {
        return isset($this->purposeType[$index]);
    }

    /**
     * unset purposeType
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurposeType($index)
    {
        unset($this->purposeType[$index]);
    }

    /**
     * Gets as purposeType
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeType[]
     */
    public function getPurposeType()
    {
        return $this->purposeType;
    }

    /**
     * Sets a new purposeType
     *
     * BBIE
     *  Port Call Purpose. Purpose_ Type Text. Text
     *  The purpose of this port call, expressed as a text.
     *  0..n
     *  Port Call Purpose
     *  Purpose
     *  Type Text
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeType[] $purposeType
     * @return self
     */
    public function setPurposeType(?array $purposeType = null)
    {
        $this->purposeType = $purposeType;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Port Call Purpose. Description. Text
     *  A description of the purpose of the port call.
     *  0..n
     *  Port Call Purpose
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

