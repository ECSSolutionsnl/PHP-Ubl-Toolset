<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EnergyTaxReportType
 *
 * ABIE
 *  Energy Tax Report. Details
 *  A class to describe energy taxes.
 *  Energy Tax Report
 * XSD Type: EnergyTaxReportType
 */
class EnergyTaxReportType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount
     */
    private $taxEnergyAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     */
    private $taxEnergyOnAccountAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     */
    private $taxEnergyBalanceAmount = null;

    /**
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

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
     * Gets as taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyAmount
     */
    public function getTaxEnergyAmount()
    {
        return $this->taxEnergyAmount;
    }

    /**
     * Sets a new taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyAmount $taxEnergyAmount = null)
    {
        $this->taxEnergyAmount = $taxEnergyAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmount()
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * Sets a new taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount = null)
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmount()
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * Sets a new taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxEnergyBalanceAmount $taxEnergyBalanceAmount = null)
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

