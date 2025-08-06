<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractingSystemType
 *
 * ABIE
 *  Contracting System. Details
 *  A class to describe the contracting system. If the procedure is individual (nonrepetitive), this class should not be used.
 *  Contracting System
 * XSD Type: ContractingSystemType
 */
class ContractingSystemType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractingSystemTypeCode $contractingSystemTypeCode
     */
    private $contractingSystemTypeCode = null;

    /**
     * BBIE
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     * Gets as iD
     *
     * BBIE
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Contracting System. Identifier
     *  An identifier for the contracting system.
     *  0..1
     *  Contracting System
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as contractingSystemTypeCode
     *
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractingSystemTypeCode
     */
    public function getContractingSystemTypeCode()
    {
        return $this->contractingSystemTypeCode;
    }

    /**
     * Sets a new contractingSystemTypeCode
     *
     * BBIE
     *  Contracting System. Contracting System Type. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). 
     *  0..1
     *  Contracting System
     *  Contracting System Type
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractingSystemTypeCode $contractingSystemTypeCode
     * @return self
     */
    public function setContractingSystemTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ContractingSystemTypeCode $contractingSystemTypeCode = null)
    {
        $this->contractingSystemTypeCode = $contractingSystemTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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
     *  Contracting System. Description. Text
     *  The description of the contracting system
     *  0..n
     *  Contracting System
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

