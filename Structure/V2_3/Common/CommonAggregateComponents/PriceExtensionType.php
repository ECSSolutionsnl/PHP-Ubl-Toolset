<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

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
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

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
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Amount $amount
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
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
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
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Amount
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
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Amount $amount
     * @return self
     */
    public function setAmount(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Amount $amount)
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
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal $taxTotal)
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
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[]
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
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }
}

