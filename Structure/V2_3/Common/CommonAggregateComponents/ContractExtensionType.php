<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ContractExtensionType
 *
 * ABIE
 *  Contract Extension. Details
 *  A class to describe possible extensions to a contract.
 *  Contract Extension
 * XSD Type: ContractExtensionType
 */
class ContractExtensionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OptionsDescription[] $optionsDescription
     */
    private $optionsDescription = [
        
    ];

    /**
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumNumberNumeric $minimumNumberNumeric
     */
    private $minimumNumberNumeric = null;

    /**
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumNumberNumeric $maximumNumberNumeric
     */
    private $maximumNumberNumeric = null;

    /**
     * BBIE
     *  Contract Extension. Renewals. Indicator
     *  Indicates that the contract can be extended using renewals.
     *  0..1
     *  Contract Extension
     *  Renewals
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $renewalsIndicator
     */
    private $renewalsIndicator = null;

    /**
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod
     */
    private $optionValidityPeriod = null;

    /**
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Renewal[] $renewal
     */
    private $renewal = [
        
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
     * Adds as optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OptionsDescription $optionsDescription
     */
    public function addToOptionsDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OptionsDescription $optionsDescription)
    {
        $this->optionsDescription[] = $optionsDescription;
        return $this;
    }

    /**
     * isset optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOptionsDescription($index)
    {
        return isset($this->optionsDescription[$index]);
    }

    /**
     * unset optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOptionsDescription($index)
    {
        unset($this->optionsDescription[$index]);
    }

    /**
     * Gets as optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OptionsDescription[]
     */
    public function getOptionsDescription()
    {
        return $this->optionsDescription;
    }

    /**
     * Sets a new optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OptionsDescription[] $optionsDescription
     * @return self
     */
    public function setOptionsDescription(?array $optionsDescription = null)
    {
        $this->optionsDescription = $optionsDescription;
        return $this;
    }

    /**
     * Gets as minimumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumNumberNumeric
     */
    public function getMinimumNumberNumeric()
    {
        return $this->minimumNumberNumeric;
    }

    /**
     * Sets a new minimumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumNumberNumeric $minimumNumberNumeric
     * @return self
     */
    public function setMinimumNumberNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MinimumNumberNumeric $minimumNumberNumeric = null)
    {
        $this->minimumNumberNumeric = $minimumNumberNumeric;
        return $this;
    }

    /**
     * Gets as maximumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumNumberNumeric
     */
    public function getMaximumNumberNumeric()
    {
        return $this->maximumNumberNumeric;
    }

    /**
     * Sets a new maximumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumNumberNumeric $maximumNumberNumeric
     * @return self
     */
    public function setMaximumNumberNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumNumberNumeric $maximumNumberNumeric = null)
    {
        $this->maximumNumberNumeric = $maximumNumberNumeric;
        return $this;
    }

    /**
     * Gets as renewalsIndicator
     *
     * BBIE
     *  Contract Extension. Renewals. Indicator
     *  Indicates that the contract can be extended using renewals.
     *  0..1
     *  Contract Extension
     *  Renewals
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRenewalsIndicator()
    {
        return $this->renewalsIndicator;
    }

    /**
     * Sets a new renewalsIndicator
     *
     * BBIE
     *  Contract Extension. Renewals. Indicator
     *  Indicates that the contract can be extended using renewals.
     *  0..1
     *  Contract Extension
     *  Renewals
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $renewalsIndicator
     * @return self
     */
    public function setRenewalsIndicator($renewalsIndicator)
    {
        $this->renewalsIndicator = $renewalsIndicator;
        return $this;
    }

    /**
     * Gets as optionValidityPeriod
     *
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OptionValidityPeriod
     */
    public function getOptionValidityPeriod()
    {
        return $this->optionValidityPeriod;
    }

    /**
     * Sets a new optionValidityPeriod
     *
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod
     * @return self
     */
    public function setOptionValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod = null)
    {
        $this->optionValidityPeriod = $optionValidityPeriod;
        return $this;
    }

    /**
     * Adds as renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Renewal $renewal
     */
    public function addToRenewal(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Renewal $renewal)
    {
        $this->renewal[] = $renewal;
        return $this;
    }

    /**
     * isset renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRenewal($index)
    {
        return isset($this->renewal[$index]);
    }

    /**
     * unset renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRenewal($index)
    {
        unset($this->renewal[$index]);
    }

    /**
     * Gets as renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Renewal[]
     */
    public function getRenewal()
    {
        return $this->renewal;
    }

    /**
     * Sets a new renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Renewal[] $renewal
     * @return self
     */
    public function setRenewal(?array $renewal = null)
    {
        $this->renewal = $renewal;
        return $this;
    }
}

