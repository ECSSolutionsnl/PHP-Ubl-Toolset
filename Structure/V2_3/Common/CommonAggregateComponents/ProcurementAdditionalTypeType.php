<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ProcurementAdditionalTypeType
 *
 * ABIE
 *  Procurement Additional Type. Details
 *  A class to describe additional types for a procurement project
 *  Procurement Additional Type
 * XSD Type: ProcurementAdditionalTypeType
 */
class ProcurementAdditionalTypeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Procurement Additional Type. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Additional Type
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode
     */
    private $procurementTypeCode = null;

    /**
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementType[] $procurementType
     */
    private $procurementType = [
        
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
     * Gets as procurementTypeCode
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Additional Type
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode
     */
    public function getProcurementTypeCode()
    {
        return $this->procurementTypeCode;
    }

    /**
     * Sets a new procurementTypeCode
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Additional Type
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementTypeCode $procurementTypeCode = null)
    {
        $this->procurementTypeCode = $procurementTypeCode;
        return $this;
    }

    /**
     * Adds as procurementType
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementType $procurementType
     */
    public function addToProcurementType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementType $procurementType)
    {
        $this->procurementType[] = $procurementType;
        return $this;
    }

    /**
     * isset procurementType
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcurementType($index)
    {
        return isset($this->procurementType[$index]);
    }

    /**
     * unset procurementType
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcurementType($index)
    {
        unset($this->procurementType[$index]);
    }

    /**
     * Gets as procurementType
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementType[]
     */
    public function getProcurementType()
    {
        return $this->procurementType;
    }

    /**
     * Sets a new procurementType
     *
     * BBIE
     *  Procurement Additional Type. Procurement_ Type. Text
     *  Tthe type of procurement project (e.g., goods, works, services), expressed as text.
     *  0..n
     *  Procurement Additional Type
     *  Procurement
     *  Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProcurementType[] $procurementType
     * @return self
     */
    public function setProcurementType(?array $procurementType = null)
    {
        $this->procurementType = $procurementType;
        return $this;
    }
}

