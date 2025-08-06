<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing OrderLineReferenceType
 *
 * ABIE
 *  Order Line Reference. Details
 *  A class to define a reference to an order line.
 *  Order Line Reference
 * XSD Type: OrderLineReferenceType
 */
class OrderLineReferenceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineID $lineID
     */
    private $lineID = null;

    /**
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderLineID $salesOrderLineID
     */
    private $salesOrderLineID = null;

    /**
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

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
     * Gets as lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineID $lineID
     * @return self
     */
    public function setLineID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderLineID
     */
    public function getSalesOrderLineID()
    {
        return $this->salesOrderLineID;
    }

    /**
     * Sets a new salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderLineID $salesOrderLineID
     * @return self
     */
    public function setSalesOrderLineID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SalesOrderLineID $salesOrderLineID = null)
    {
        $this->salesOrderLineID = $salesOrderLineID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID
     * @return self
     */
    public function setUUID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineStatusCode $lineStatusCode = null)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OrderReference $orderReference = null)
    {
        $this->orderReference = $orderReference;
        return $this;
    }
}

