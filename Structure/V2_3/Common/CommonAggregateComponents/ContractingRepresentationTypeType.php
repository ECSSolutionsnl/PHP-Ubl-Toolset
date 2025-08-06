<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractingRepresentationTypeType
 *
 * ABIE
 *  Contracting Representation Type. Details
 *  The type of representation the party has acting for the Contracting party
 *  Contracting Representation Type
 * XSD Type: ContractingRepresentationTypeType
 */
class ContractingRepresentationTypeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contracting Representation Type. Representation Type Code. Code
     *  A code specifying the type of representation empowering the party to act on behalf of a third party
     *  0..1
     *  Contracting Representation Type
     *  Representation Type Code
     *  Code
     *  Code. Type
     *  CPB, SP, ..
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationTypeCode $representationTypeCode
     */
    private $representationTypeCode = null;

    /**
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationType[] $representationType
     */
    private $representationType = [
        
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
     * Gets as representationTypeCode
     *
     * BBIE
     *  Contracting Representation Type. Representation Type Code. Code
     *  A code specifying the type of representation empowering the party to act on behalf of a third party
     *  0..1
     *  Contracting Representation Type
     *  Representation Type Code
     *  Code
     *  Code. Type
     *  CPB, SP, ..
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationTypeCode
     */
    public function getRepresentationTypeCode()
    {
        return $this->representationTypeCode;
    }

    /**
     * Sets a new representationTypeCode
     *
     * BBIE
     *  Contracting Representation Type. Representation Type Code. Code
     *  A code specifying the type of representation empowering the party to act on behalf of a third party
     *  0..1
     *  Contracting Representation Type
     *  Representation Type Code
     *  Code
     *  Code. Type
     *  CPB, SP, ..
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationTypeCode $representationTypeCode
     * @return self
     */
    public function setRepresentationTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationTypeCode $representationTypeCode = null)
    {
        $this->representationTypeCode = $representationTypeCode;
        return $this;
    }

    /**
     * Adds as representationType
     *
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationType $representationType
     */
    public function addToRepresentationType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationType $representationType)
    {
        $this->representationType[] = $representationType;
        return $this;
    }

    /**
     * isset representationType
     *
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepresentationType($index)
    {
        return isset($this->representationType[$index]);
    }

    /**
     * unset representationType
     *
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepresentationType($index)
    {
        unset($this->representationType[$index]);
    }

    /**
     * Gets as representationType
     *
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationType[]
     */
    public function getRepresentationType()
    {
        return $this->representationType;
    }

    /**
     * Sets a new representationType
     *
     * BBIE
     *  Contracting Representation Type. Representation Type. Text
     *  The type of representation empowering the party to act on behalf of a third party, expressed as text.
     *  0..n
     *  Contracting Representation Type
     *  Representation Type
     *  Text
     *  Text. Type
     *  Central Purchasing Body, Service Provider, ...
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RepresentationType[] $representationType
     * @return self
     */
    public function setRepresentationType(?array $representationType = null)
    {
        $this->representationType = $representationType;
        return $this;
    }
}

