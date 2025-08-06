<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing BudgetAccountType
 *
 * ABIE
 *  Budget Account. Details
 *  A class to define a budget account.
 *  Budget Account
 * XSD Type: BudgetAccountType
 */
class BudgetAccountType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BudgetYearNumeric $budgetYearNumeric
     */
    private $budgetYearNumeric = null;

    /**
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredClassificationScheme $requiredClassificationScheme
     */
    private $requiredClassificationScheme = null;

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
     * Gets as iD
     *
     * BBIE
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Budget Account. Identifier
     *  An identifier for the budget account, typically an internal accounting reference.
     *  0..1
     *  Budget Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as budgetYearNumeric
     *
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BudgetYearNumeric
     */
    public function getBudgetYearNumeric()
    {
        return $this->budgetYearNumeric;
    }

    /**
     * Sets a new budgetYearNumeric
     *
     * BBIE
     *  Budget Account. Budget Year. Numeric
     *  The number of the year for this budget account, e.g. 2012
     *  0..1
     *  Budget Account
     *  Budget Year
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BudgetYearNumeric $budgetYearNumeric
     * @return self
     */
    public function setBudgetYearNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\BudgetYearNumeric $budgetYearNumeric = null)
    {
        $this->budgetYearNumeric = $budgetYearNumeric;
        return $this;
    }

    /**
     * Gets as requiredClassificationScheme
     *
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredClassificationScheme
     */
    public function getRequiredClassificationScheme()
    {
        return $this->requiredClassificationScheme;
    }

    /**
     * Sets a new requiredClassificationScheme
     *
     * ASBIE
     *  Budget Account. Required_ Classification Scheme. Classification Scheme
     *  A classification scheme required for this budget account.
     *  0..1
     *  Budget Account
     *  Required
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredClassificationScheme $requiredClassificationScheme
     * @return self
     */
    public function setRequiredClassificationScheme(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RequiredClassificationScheme $requiredClassificationScheme = null)
    {
        $this->requiredClassificationScheme = $requiredClassificationScheme;
        return $this;
    }
}

