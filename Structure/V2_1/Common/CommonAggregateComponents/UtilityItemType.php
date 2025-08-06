<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing UtilityItemType
 *
 * ABIE
 *  Utility Item. Details
 *  A class to describe the consumption of a utility product.
 *  Utility Item
 * XSD Type: UtilityItemType
 */
class UtilityItemType
{
    /**
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeType $currentChargeType
     */
    private $currentChargeType = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeTypeCode $currentChargeTypeCode
     */
    private $currentChargeTypeCode = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeType $oneTimeChargeType
     */
    private $oneTimeChargeType = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     */
    private $oneTimeChargeTypeCode = null;

    /**
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract $contract
     */
    private $contract = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberID $subscriberID = null)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberType $subscriberType = null)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SubscriberTypeCode $subscriberTypeCode = null)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackQuantity $packQuantity = null)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PackSizeNumeric $packSizeNumeric = null)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionType $consumptionType = null)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ConsumptionTypeCode $consumptionTypeCode = null)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeType
     */
    public function getCurrentChargeType()
    {
        return $this->currentChargeType;
    }

    /**
     * Sets a new currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeType $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeType $currentChargeType = null)
    {
        $this->currentChargeType = $currentChargeType;
        return $this;
    }

    /**
     * Gets as currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCode()
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * Sets a new currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeTypeCode $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\CurrentChargeTypeCode $currentChargeTypeCode = null)
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;
        return $this;
    }

    /**
     * Gets as oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeType
     */
    public function getOneTimeChargeType()
    {
        return $this->oneTimeChargeType;
    }

    /**
     * Sets a new oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeType $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeType $oneTimeChargeType = null)
    {
        $this->oneTimeChargeType = $oneTimeChargeType;
        return $this;
    }

    /**
     * Gets as oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCode()
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * Sets a new oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\OneTimeChargeTypeCode $oneTimeChargeTypeCode = null)
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxCategory $taxCategory = null)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract $contract
     * @return self
     */
    public function setContract(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Contract $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }
}

