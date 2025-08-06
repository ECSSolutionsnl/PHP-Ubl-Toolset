<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing PriceExtensionType
 *
 * ABIE
 *  Price Extension. Details
 *  A class to describe a price extension, calculated by multiplying the price per unit by the quantity of items.
 *  Price Extension
 * XSD Type: PriceExtensionType
 */
class PriceExtensionType
{
    /**
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * Gets as amount
     *
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }
}

