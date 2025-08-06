<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing MonetaryTotalType
 *
 * ABIE
 *  Monetary Total. Details
 *  A class to define a monetary total.
 *  Monetary Total
 * XSD Type: MonetaryTotalType
 */
class MonetaryTotalType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxExclusiveAmount $taxExclusiveAmount
     */
    private $taxExclusiveAmount = null;

    /**
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxInclusiveAmount $taxInclusiveAmount
     */
    private $taxInclusiveAmount = null;

    /**
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AllowanceTotalAmount $allowanceTotalAmount
     */
    private $allowanceTotalAmount = null;

    /**
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChargeTotalAmount $chargeTotalAmount
     */
    private $chargeTotalAmount = null;

    /**
     * BBIE
     *  Monetary Total. Withholding Tax_ Total Amount. Amount
     *  The total withholding tax amount.
     *  0..1
     *  Monetary Total
     *  Withholding Tax
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WithholdingTaxTotalAmount $withholdingTaxTotalAmount
     */
    private $withholdingTaxTotalAmount = null;

    /**
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrepaidAmount $prepaidAmount
     */
    private $prepaidAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableRoundingAmount $payableRoundingAmount
     */
    private $payableRoundingAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAmount $payableAmount
     */
    private $payableAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAlternativeAmount $payableAlternativeAmount
     */
    private $payableAlternativeAmount = null;

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
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxExclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxExclusiveAmount
     */
    public function getTaxExclusiveAmount()
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * Sets a new taxExclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxExclusiveAmount $taxExclusiveAmount
     * @return self
     */
    public function setTaxExclusiveAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxExclusiveAmount $taxExclusiveAmount = null)
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
        return $this;
    }

    /**
     * Gets as taxInclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxInclusiveAmount
     */
    public function getTaxInclusiveAmount()
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * Sets a new taxInclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxInclusiveAmount $taxInclusiveAmount
     * @return self
     */
    public function setTaxInclusiveAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxInclusiveAmount $taxInclusiveAmount = null)
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
        return $this;
    }

    /**
     * Gets as allowanceTotalAmount
     *
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AllowanceTotalAmount
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * Sets a new allowanceTotalAmount
     *
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AllowanceTotalAmount $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AllowanceTotalAmount $allowanceTotalAmount = null)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * Gets as chargeTotalAmount
     *
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChargeTotalAmount
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * Sets a new chargeTotalAmount
     *
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChargeTotalAmount $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChargeTotalAmount $chargeTotalAmount = null)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        return $this;
    }

    /**
     * Gets as withholdingTaxTotalAmount
     *
     * BBIE
     *  Monetary Total. Withholding Tax_ Total Amount. Amount
     *  The total withholding tax amount.
     *  0..1
     *  Monetary Total
     *  Withholding Tax
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WithholdingTaxTotalAmount
     */
    public function getWithholdingTaxTotalAmount()
    {
        return $this->withholdingTaxTotalAmount;
    }

    /**
     * Sets a new withholdingTaxTotalAmount
     *
     * BBIE
     *  Monetary Total. Withholding Tax_ Total Amount. Amount
     *  The total withholding tax amount.
     *  0..1
     *  Monetary Total
     *  Withholding Tax
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WithholdingTaxTotalAmount $withholdingTaxTotalAmount
     * @return self
     */
    public function setWithholdingTaxTotalAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WithholdingTaxTotalAmount $withholdingTaxTotalAmount = null)
    {
        $this->withholdingTaxTotalAmount = $withholdingTaxTotalAmount;
        return $this;
    }

    /**
     * Gets as prepaidAmount
     *
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrepaidAmount
     */
    public function getPrepaidAmount()
    {
        return $this->prepaidAmount;
    }

    /**
     * Sets a new prepaidAmount
     *
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrepaidAmount $prepaidAmount
     * @return self
     */
    public function setPrepaidAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrepaidAmount $prepaidAmount = null)
    {
        $this->prepaidAmount = $prepaidAmount;
        return $this;
    }

    /**
     * Gets as payableRoundingAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableRoundingAmount
     */
    public function getPayableRoundingAmount()
    {
        return $this->payableRoundingAmount;
    }

    /**
     * Sets a new payableRoundingAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableRoundingAmount $payableRoundingAmount
     * @return self
     */
    public function setPayableRoundingAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableRoundingAmount $payableRoundingAmount = null)
    {
        $this->payableRoundingAmount = $payableRoundingAmount;
        return $this;
    }

    /**
     * Gets as payableAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAmount
     */
    public function getPayableAmount()
    {
        return $this->payableAmount;
    }

    /**
     * Sets a new payableAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAmount $payableAmount
     * @return self
     */
    public function setPayableAmount(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAmount $payableAmount)
    {
        $this->payableAmount = $payableAmount;
        return $this;
    }

    /**
     * Gets as payableAlternativeAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAlternativeAmount
     */
    public function getPayableAlternativeAmount()
    {
        return $this->payableAlternativeAmount;
    }

    /**
     * Sets a new payableAlternativeAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAlternativeAmount $payableAlternativeAmount
     * @return self
     */
    public function setPayableAlternativeAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PayableAlternativeAmount $payableAlternativeAmount = null)
    {
        $this->payableAlternativeAmount = $payableAlternativeAmount;
        return $this;
    }
}

