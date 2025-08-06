<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing SubscriberConsumptionType
 *
 * ABIE
 *  Subscriber Consumption. Details
 *  The consumption for a specific party for given consumption point provided by a numbers of suppliers. An enterprise can have one utility statement for several parties (e.g. a ministry of defence receiving a telephone bill). In this way each subscriber consumption represent a sub utility statement.
 *  Subscriber Consumption
 * XSD Type: SubscriberConsumptionType
 */
class SubscriberConsumptionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionID $consumptionID
     */
    private $consumptionID = null;

    /**
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpecificationTypeCode $specificationTypeCode
     */
    private $specificationTypeCode = null;

    /**
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalMeteredQuantity $totalMeteredQuantity
     */
    private $totalMeteredQuantity = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubscriberParty $subscriberParty
     */
    private $subscriberParty = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint
     */
    private $utilityConsumptionPoint = null;

    /**
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OnAccountPayment[] $onAccountPayment
     */
    private $onAccountPayment = [
        
    ];

    /**
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Consumption $consumption
     */
    private $consumption = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplierConsumption[] $supplierConsumption
     */
    private $supplierConsumption = [
        
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
     * Gets as consumptionID
     *
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionID
     */
    public function getConsumptionID()
    {
        return $this->consumptionID;
    }

    /**
     * Sets a new consumptionID
     *
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionID $consumptionID
     * @return self
     */
    public function setConsumptionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConsumptionID $consumptionID = null)
    {
        $this->consumptionID = $consumptionID;
        return $this;
    }

    /**
     * Gets as specificationTypeCode
     *
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpecificationTypeCode
     */
    public function getSpecificationTypeCode()
    {
        return $this->specificationTypeCode;
    }

    /**
     * Sets a new specificationTypeCode
     *
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpecificationTypeCode $specificationTypeCode
     * @return self
     */
    public function setSpecificationTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SpecificationTypeCode $specificationTypeCode = null)
    {
        $this->specificationTypeCode = $specificationTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as totalMeteredQuantity
     *
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalMeteredQuantity
     */
    public function getTotalMeteredQuantity()
    {
        return $this->totalMeteredQuantity;
    }

    /**
     * Sets a new totalMeteredQuantity
     *
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalMeteredQuantity $totalMeteredQuantity
     * @return self
     */
    public function setTotalMeteredQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalMeteredQuantity $totalMeteredQuantity = null)
    {
        $this->totalMeteredQuantity = $totalMeteredQuantity;
        return $this;
    }

    /**
     * Gets as subscriberParty
     *
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubscriberParty
     */
    public function getSubscriberParty()
    {
        return $this->subscriberParty;
    }

    /**
     * Sets a new subscriberParty
     *
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubscriberParty $subscriberParty
     * @return self
     */
    public function setSubscriberParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SubscriberParty $subscriberParty = null)
    {
        $this->subscriberParty = $subscriberParty;
        return $this;
    }

    /**
     * Gets as utilityConsumptionPoint
     *
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UtilityConsumptionPoint
     */
    public function getUtilityConsumptionPoint()
    {
        return $this->utilityConsumptionPoint;
    }

    /**
     * Sets a new utilityConsumptionPoint
     *
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint
     * @return self
     */
    public function setUtilityConsumptionPoint(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UtilityConsumptionPoint $utilityConsumptionPoint)
    {
        $this->utilityConsumptionPoint = $utilityConsumptionPoint;
        return $this;
    }

    /**
     * Adds as onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OnAccountPayment $onAccountPayment
     */
    public function addToOnAccountPayment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OnAccountPayment $onAccountPayment)
    {
        $this->onAccountPayment[] = $onAccountPayment;
        return $this;
    }

    /**
     * isset onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnAccountPayment($index)
    {
        return isset($this->onAccountPayment[$index]);
    }

    /**
     * unset onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnAccountPayment($index)
    {
        unset($this->onAccountPayment[$index]);
    }

    /**
     * Gets as onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OnAccountPayment[]
     */
    public function getOnAccountPayment()
    {
        return $this->onAccountPayment;
    }

    /**
     * Sets a new onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OnAccountPayment[] $onAccountPayment
     * @return self
     */
    public function setOnAccountPayment(?array $onAccountPayment = null)
    {
        $this->onAccountPayment = $onAccountPayment;
        return $this;
    }

    /**
     * Gets as consumption
     *
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Consumption
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Sets a new consumption
     *
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Consumption $consumption
     * @return self
     */
    public function setConsumption(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Consumption $consumption = null)
    {
        $this->consumption = $consumption;
        return $this;
    }

    /**
     * Adds as supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplierConsumption $supplierConsumption
     */
    public function addToSupplierConsumption(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplierConsumption $supplierConsumption)
    {
        $this->supplierConsumption[] = $supplierConsumption;
        return $this;
    }

    /**
     * isset supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplierConsumption($index)
    {
        return isset($this->supplierConsumption[$index]);
    }

    /**
     * unset supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplierConsumption($index)
    {
        unset($this->supplierConsumption[$index]);
    }

    /**
     * Gets as supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplierConsumption[]
     */
    public function getSupplierConsumption()
    {
        return $this->supplierConsumption;
    }

    /**
     * Sets a new supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupplierConsumption[] $supplierConsumption
     * @return self
     */
    public function setSupplierConsumption(?array $supplierConsumption = null)
    {
        $this->supplierConsumption = $supplierConsumption;
        return $this;
    }
}

