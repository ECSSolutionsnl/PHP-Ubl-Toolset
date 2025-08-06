<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing UnstructuredPriceType
 *
 * ABIE
 *  Unstructured Price. Details
 *  A simplified version of the Price class intended for applications such as telephone billing.
 *  Unstructured Price
 * XSD Type: UnstructuredPriceType
 */
class UnstructuredPriceType
{
    /**
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TimeAmount $timeAmount
     */
    private $timeAmount = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\PriceAmount $priceAmount = null)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TimeAmount
     */
    public function getTimeAmount()
    {
        return $this->timeAmount;
    }

    /**
     * Sets a new timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TimeAmount $timeAmount
     * @return self
     */
    public function setTimeAmount(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\TimeAmount $timeAmount = null)
    {
        $this->timeAmount = $timeAmount;
        return $this;
    }
}

