<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractExecutionRequirementType
 *
 * ABIE
 *  Contract Execution Requirement. Details
 *  A class to describe a requirement for execution of a contract.
 *  Contract Execution Requirement
 * XSD Type: ContractExecutionRequirementType
 */
class ContractExecutionRequirementType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying a type of requirement to be fulfiled by the economic operator.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode
     */
    private $executionRequirementCode = null;

    /**
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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
     * Adds as name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    public function addToName(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Contract Execution Requirement. Name
     *  A name for this requirement.
     *  0..n
     *  Contract Execution Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name[] $name
     * @return self
     */
    public function setName(?array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as executionRequirementCode
     *
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying a type of requirement to be fulfiled by the economic operator.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExecutionRequirementCode
     */
    public function getExecutionRequirementCode()
    {
        return $this->executionRequirementCode;
    }

    /**
     * Sets a new executionRequirementCode
     *
     * BBIE
     *  Contract Execution Requirement. Execution Requirement Code. Code
     *  A code signifying a type of requirement to be fulfiled by the economic operator.
     *  0..1
     *  Contract Execution Requirement
     *  Execution Requirement Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode
     * @return self
     */
    public function setExecutionRequirementCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExecutionRequirementCode $executionRequirementCode = null)
    {
        $this->executionRequirementCode = $executionRequirementCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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
     *  Contract Execution Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Contract Execution Requirement
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

