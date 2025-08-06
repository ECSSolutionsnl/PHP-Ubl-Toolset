<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing ConsumptionType
 *
 * ABIE
 *  Consumption. Details
 *  A class to describe the consumption of a utility.
 *  Consumption
 * XSD Type: ConsumptionType
 */
class ConsumptionType
{
    /**
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     */
    private $utilityStatementTypeCode = null;

    /**
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainPeriod $mainPeriod
     */
    private $mainPeriod = null;

    /**
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\EnergyWaterSupply $energyWaterSupply
     */
    private $energyWaterSupply = null;

    /**
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TelecommunicationsSupply $telecommunicationsSupply
     */
    private $telecommunicationsSupply = null;

    /**
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * Gets as utilityStatementTypeCode
     *
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode
     */
    public function getUtilityStatementTypeCode()
    {
        return $this->utilityStatementTypeCode;
    }

    /**
     * Sets a new utilityStatementTypeCode
     *
     * BBIE
     *  Consumption. Utility Statement Type Code. Code
     *  A code identifying the type of the Utility Statement required for this consumption. Explains the kind of utility the statement is about, e.g.. "gas", "electricity", "telephone"
     *  0..1
     *  Consumption
     *  Utility Statement Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode
     * @return self
     */
    public function setUtilityStatementTypeCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\UtilityStatementTypeCode $utilityStatementTypeCode = null)
    {
        $this->utilityStatementTypeCode = $utilityStatementTypeCode;
        return $this;
    }

    /**
     * Gets as mainPeriod
     *
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainPeriod
     */
    public function getMainPeriod()
    {
        return $this->mainPeriod;
    }

    /**
     * Sets a new mainPeriod
     *
     * ASBIE
     *  Consumption. Main_ Period. Period
     *  The period of consumption.
     *  0..1
     *  Consumption
     *  Main
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainPeriod $mainPeriod
     * @return self
     */
    public function setMainPeriod(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\MainPeriod $mainPeriod = null)
    {
        $this->mainPeriod = $mainPeriod;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Consumption. Allowance Charge
     *  An allowance or charges that may apply with this consumption.
     *  0..n
     *  Consumption
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
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
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
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
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
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
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
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
     *  Consumption. Tax Total
     *  The total of taxes for each tax type covering the consumption.
     *  0..n
     *  Consumption
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

    /**
     * Gets as energyWaterSupply
     *
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\EnergyWaterSupply
     */
    public function getEnergyWaterSupply()
    {
        return $this->energyWaterSupply;
    }

    /**
     * Sets a new energyWaterSupply
     *
     * ASBIE
     *  Consumption. Energy Water Supply
     *  The details of any energy or water consumption.
     *  0..1
     *  Consumption
     *  Energy Water Supply
     *  Energy Water Supply
     *  Energy Water Supply
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\EnergyWaterSupply $energyWaterSupply
     * @return self
     */
    public function setEnergyWaterSupply(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\EnergyWaterSupply $energyWaterSupply = null)
    {
        $this->energyWaterSupply = $energyWaterSupply;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupply
     *
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TelecommunicationsSupply
     */
    public function getTelecommunicationsSupply()
    {
        return $this->telecommunicationsSupply;
    }

    /**
     * Sets a new telecommunicationsSupply
     *
     * ASBIE
     *  Consumption. Telecommunications Supply
     *  The details of any telecommunications consumption.
     *  0..1
     *  Consumption
     *  Telecommunications Supply
     *  Telecommunications Supply
     *  Telecommunications Supply
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TelecommunicationsSupply $telecommunicationsSupply
     * @return self
     */
    public function setTelecommunicationsSupply(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TelecommunicationsSupply $telecommunicationsSupply = null)
    {
        $this->telecommunicationsSupply = $telecommunicationsSupply;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Consumption. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on this consumption, including any allowances, charges, or taxes.
     *  1
     *  Consumption
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }
}

