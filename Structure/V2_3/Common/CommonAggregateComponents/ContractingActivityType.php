<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractingActivityType
 *
 * ABIE
 *  Contracting Activity. Details
 *  The nature of the type of business of the organization.
 *  Contracting Activity
 * XSD Type: ContractingActivityType
 */
class ContractingActivityType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityTypeCode $activityTypeCode
     */
    private $activityTypeCode = null;

    /**
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityType[] $activityType
     */
    private $activityType = [
        
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
     * Gets as activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityTypeCode
     */
    public function getActivityTypeCode()
    {
        return $this->activityTypeCode;
    }

    /**
     * Sets a new activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityTypeCode $activityTypeCode
     * @return self
     */
    public function setActivityTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityTypeCode $activityTypeCode = null)
    {
        $this->activityTypeCode = $activityTypeCode;
        return $this;
    }

    /**
     * Adds as activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityType $activityType
     */
    public function addToActivityType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityType $activityType)
    {
        $this->activityType[] = $activityType;
        return $this;
    }

    /**
     * isset activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivityType($index)
    {
        return isset($this->activityType[$index]);
    }

    /**
     * unset activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivityType($index)
    {
        unset($this->activityType[$index]);
    }

    /**
     * Gets as activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityType[]
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Sets a new activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..n
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ActivityType[] $activityType
     * @return self
     */
    public function setActivityType(?array $activityType = null)
    {
        $this->activityType = $activityType;
        return $this;
    }
}

