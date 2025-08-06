<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ExchangeRateType
 *
 * ABIE
 *  Exchange Rate. Details
 *  A class to define an exchange rate.
 *  Exchange Rate
 * XSD Type: ExchangeRateType
 */
class ExchangeRateType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyCode $sourceCurrencyCode
     */
    private $sourceCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyBaseRate $sourceCurrencyBaseRate
     */
    private $sourceCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyCode $targetCurrencyCode
     */
    private $targetCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyBaseRate $targetCurrencyBaseRate
     */
    private $targetCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMarketID $exchangeMarketID
     */
    private $exchangeMarketID = null;

    /**
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CalculationRate $calculationRate
     */
    private $calculationRate = null;

    /**
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MathematicOperatorCode $mathematicOperatorCode
     */
    private $mathematicOperatorCode = null;

    /**
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForeignExchangeContract $foreignExchangeContract
     */
    private $foreignExchangeContract = null;

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
     * Gets as sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyCode
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * Sets a new sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyCode $sourceCurrencyCode
     * @return self
     */
    public function setSourceCurrencyCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyCode $sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }

    /**
     * Gets as sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyBaseRate
     */
    public function getSourceCurrencyBaseRate()
    {
        return $this->sourceCurrencyBaseRate;
    }

    /**
     * Sets a new sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyBaseRate $sourceCurrencyBaseRate
     * @return self
     */
    public function setSourceCurrencyBaseRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SourceCurrencyBaseRate $sourceCurrencyBaseRate = null)
    {
        $this->sourceCurrencyBaseRate = $sourceCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyCode
     */
    public function getTargetCurrencyCode()
    {
        return $this->targetCurrencyCode;
    }

    /**
     * Sets a new targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyCode $targetCurrencyCode
     * @return self
     */
    public function setTargetCurrencyCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyCode $targetCurrencyCode)
    {
        $this->targetCurrencyCode = $targetCurrencyCode;
        return $this;
    }

    /**
     * Gets as targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyBaseRate
     */
    public function getTargetCurrencyBaseRate()
    {
        return $this->targetCurrencyBaseRate;
    }

    /**
     * Sets a new targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyBaseRate $targetCurrencyBaseRate
     * @return self
     */
    public function setTargetCurrencyBaseRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TargetCurrencyBaseRate $targetCurrencyBaseRate = null)
    {
        $this->targetCurrencyBaseRate = $targetCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMarketID
     */
    public function getExchangeMarketID()
    {
        return $this->exchangeMarketID;
    }

    /**
     * Sets a new exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMarketID $exchangeMarketID
     * @return self
     */
    public function setExchangeMarketID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExchangeMarketID $exchangeMarketID = null)
    {
        $this->exchangeMarketID = $exchangeMarketID;
        return $this;
    }

    /**
     * Gets as calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CalculationRate
     */
    public function getCalculationRate()
    {
        return $this->calculationRate;
    }

    /**
     * Sets a new calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CalculationRate $calculationRate
     * @return self
     */
    public function setCalculationRate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CalculationRate $calculationRate = null)
    {
        $this->calculationRate = $calculationRate;
        return $this;
    }

    /**
     * Gets as mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MathematicOperatorCode
     */
    public function getMathematicOperatorCode()
    {
        return $this->mathematicOperatorCode;
    }

    /**
     * Sets a new mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MathematicOperatorCode $mathematicOperatorCode
     * @return self
     */
    public function setMathematicOperatorCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MathematicOperatorCode $mathematicOperatorCode = null)
    {
        $this->mathematicOperatorCode = $mathematicOperatorCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForeignExchangeContract
     */
    public function getForeignExchangeContract()
    {
        return $this->foreignExchangeContract;
    }

    /**
     * Sets a new foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForeignExchangeContract $foreignExchangeContract
     * @return self
     */
    public function setForeignExchangeContract(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ForeignExchangeContract $foreignExchangeContract = null)
    {
        $this->foreignExchangeContract = $foreignExchangeContract;
        return $this;
    }
}

