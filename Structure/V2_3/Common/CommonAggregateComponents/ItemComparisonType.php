<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ItemComparisonType
 *
 * ABIE
 *  Item Comparison. Details
 *  A class to provide information about price and quantity of an item for use in price comparisons based on price, quantity, or measurements.
 *  Item Comparison
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

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
     * Gets as priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PriceAmount $priceAmount = null)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }
}

