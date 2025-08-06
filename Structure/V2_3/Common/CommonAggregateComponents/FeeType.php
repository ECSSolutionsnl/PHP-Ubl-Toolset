<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing FeeType
 *
 * ABIE
 *  Fee. Details
 *  A class to describe a revenue.
 *  Fee
 *  In the case of concession, the revenue coming from the users of the concession (e.g. fees and fines) .
 * XSD Type: FeeType
 */
class FeeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Fee. Fee Type Code. Code
     *  A code signifying the type of this fee.
     *  0..1
     *  Fee
     *  Fee Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeTypeCode $feeTypeCode
     */
    private $feeTypeCode = null;

    /**
     * BBIE
     *  Fee. Fee_ Amount. Amount
     *  The amount of a fee.
     *  0..1
     *  Fee
     *  Fee
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount
     */
    private $feeAmount = null;

    /**
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
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
     * Gets as feeTypeCode
     *
     * BBIE
     *  Fee. Fee Type Code. Code
     *  A code signifying the type of this fee.
     *  0..1
     *  Fee
     *  Fee Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeTypeCode
     */
    public function getFeeTypeCode()
    {
        return $this->feeTypeCode;
    }

    /**
     * Sets a new feeTypeCode
     *
     * BBIE
     *  Fee. Fee Type Code. Code
     *  A code signifying the type of this fee.
     *  0..1
     *  Fee
     *  Fee Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeTypeCode $feeTypeCode
     * @return self
     */
    public function setFeeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeTypeCode $feeTypeCode = null)
    {
        $this->feeTypeCode = $feeTypeCode;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * BBIE
     *  Fee. Fee_ Amount. Amount
     *  The amount of a fee.
     *  0..1
     *  Fee
     *  Fee
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * BBIE
     *  Fee. Fee_ Amount. Amount
     *  The amount of a fee.
     *  0..1
     *  Fee
     *  Fee
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount
     * @return self
     */
    public function setFeeAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeAmount $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Fee. Fee Description. Text
     *  Text describing this fee.
     *  0..n
     *  Fee
     *  Fee Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }
}

