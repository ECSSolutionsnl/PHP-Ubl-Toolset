<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing DutyType
 *
 * ABIE
 *  Duty. Details
 *  The charging rate used for both call charging and time dependent charging
 *  Duty
 * XSD Type: DutyType
 */
class DutyType
{
    /**
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Duty $duty
     */
    private $duty = null;

    /**
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DutyCode $dutyCode
     */
    private $dutyCode = null;

    /**
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
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
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
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
     * Gets as duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Duty
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Duty $duty
     * @return self
     */
    public function setDuty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Duty $duty = null)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DutyCode
     */
    public function getDutyCode()
    {
        return $this->dutyCode;
    }

    /**
     * Sets a new dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DutyCode $dutyCode
     * @return self
     */
    public function setDutyCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\DutyCode $dutyCode = null)
    {
        $this->dutyCode = $dutyCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
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
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
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
}

