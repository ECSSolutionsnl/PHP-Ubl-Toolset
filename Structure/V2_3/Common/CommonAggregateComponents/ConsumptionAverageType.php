<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ConsumptionAverageType
 *
 * ABIE
 *  Consumption Average. Details
 *  A class to define an average consumption as a monetary amount.
 *  Consumption Average
 * XSD Type: ConsumptionAverageType
 */
class ConsumptionAverageType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AverageAmount $averageAmount
     */
    private $averageAmount = null;

    /**
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
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
     * Gets as averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AverageAmount
     */
    public function getAverageAmount()
    {
        return $this->averageAmount;
    }

    /**
     * Sets a new averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AverageAmount $averageAmount
     * @return self
     */
    public function setAverageAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\AverageAmount $averageAmount = null)
    {
        $this->averageAmount = $averageAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

