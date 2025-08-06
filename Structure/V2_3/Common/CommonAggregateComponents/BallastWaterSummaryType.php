<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing BallastWaterSummaryType
 *
 * ABIE
 *  Ballast Water Summary. Details
 *  A class to summarize the ballast water management of a vessel.
 *  Ballast Water Summary
 * XSD Type: BallastWaterSummaryType
 */
class BallastWaterSummaryType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Ballast Water Summary. Identifier
     *  An identification of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Ballast Water Summary. Management Plan On Board_ Indicator. Indicator
     *  An indication of whether a waste water management plan is on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $managementPlanOnBoardIndicator
     */
    private $managementPlanOnBoardIndicator = null;

    /**
     * BBIE
     *  Ballast Water Summary. Management Plan Implemented_ Indicator. Indicator
     *  An indication of whether a waste water management plan has been implemented (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan Implemented
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $managementPlanImplementedIndicator
     */
    private $managementPlanImplementedIndicator = null;

    /**
     * BBIE
     *  Ballast Water Summary. IMO Guidelines On Board_ Indicator. Indicator
     *  An indication of whether International Maritime Organization (IMO) ballast water guidelines are on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  IMO Guidelines On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $iMOGuidelinesOnBoardIndicator
     */
    private $iMOGuidelinesOnBoardIndicator = null;

    /**
     * BBIE
     *  Ballast Water Summary. Total Ballast Tanks On Board_ Quantity. Quantity
     *  The total number of ballast tanks on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Tanks On Board
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastTanksOnBoardQuantity $totalBallastTanksOnBoardQuantity
     */
    private $totalBallastTanksOnBoardQuantity = null;

    /**
     * BBIE
     *  Ballast Water Summary. Tanks In Ballast_ Quantity. Quantity
     *  The number of tanks in the ballast of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Tanks In Ballast
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksInBallastQuantity $tanksInBallastQuantity
     */
    private $tanksInBallastQuantity = null;

    /**
     * BBIE
     *  Ballast Water Summary. Tanks Exchanged_ Quantity. Quantity
     *  The number of tanks being exchanged as part of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksExchangedQuantity $tanksExchangedQuantity
     */
    private $tanksExchangedQuantity = null;

    /**
     * BBIE
     *  Ballast Water Summary. Tanks Not Exchanged_ Quantity. Quantity
     *  The quantity of tanks not being exchanged.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Not Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksNotExchangedQuantity $tanksNotExchangedQuantity
     */
    private $tanksNotExchangedQuantity = null;

    /**
     * BBIE
     *  Ballast Water Summary. Total Ballast Water On Board_ Measure. Measure
     *  The messure of the total ballast water on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water On Board
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterOnBoardMeasure $totalBallastWaterOnBoardMeasure
     */
    private $totalBallastWaterOnBoardMeasure = null;

    /**
     * BBIE
     *  Ballast Water Summary. Total Ballast Water_ Capacity Measure. Measure
     *  The total ballast water capacity of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water
     *  Capacity Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterCapacityMeasure $totalBallastWaterCapacityMeasure
     */
    private $totalBallastWaterCapacityMeasure = null;

    /**
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherControlActions[] $otherControlActions
     */
    private $otherControlActions = [
        
    ];

    /**
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoControlActionsReason[] $noControlActionsReason
     */
    private $noControlActionsReason = [
        
    ];

    /**
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UptakeBallastWaterTransaction[] $uptakeBallastWaterTransaction
     */
    private $uptakeBallastWaterTransaction = [
        
    ];

    /**
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeBallastWaterTransaction[] $exchangeBallastWaterTransaction
     */
    private $exchangeBallastWaterTransaction = [
        
    ];

    /**
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DischargeBallastWaterTransaction[] $dischargeBallastWaterTransaction
     */
    private $dischargeBallastWaterTransaction = [
        
    ];

    /**
     * ASBIE
     *  Ballast Water Summary. Responsible Officer_ Person. Person
     *  The officer responsible for this ballast water summery.
     *  0..1
     *  Ballast Water Summary
     *  Responsible Officer
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleOfficerPerson $responsibleOfficerPerson
     */
    private $responsibleOfficerPerson = null;

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
     *  Ballast Water Summary. Identifier
     *  An identification of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
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
     *  Ballast Water Summary. Identifier
     *  An identification of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
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
     * Gets as managementPlanOnBoardIndicator
     *
     * BBIE
     *  Ballast Water Summary. Management Plan On Board_ Indicator. Indicator
     *  An indication of whether a waste water management plan is on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getManagementPlanOnBoardIndicator()
    {
        return $this->managementPlanOnBoardIndicator;
    }

    /**
     * Sets a new managementPlanOnBoardIndicator
     *
     * BBIE
     *  Ballast Water Summary. Management Plan On Board_ Indicator. Indicator
     *  An indication of whether a waste water management plan is on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $managementPlanOnBoardIndicator
     * @return self
     */
    public function setManagementPlanOnBoardIndicator($managementPlanOnBoardIndicator)
    {
        $this->managementPlanOnBoardIndicator = $managementPlanOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as managementPlanImplementedIndicator
     *
     * BBIE
     *  Ballast Water Summary. Management Plan Implemented_ Indicator. Indicator
     *  An indication of whether a waste water management plan has been implemented (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan Implemented
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getManagementPlanImplementedIndicator()
    {
        return $this->managementPlanImplementedIndicator;
    }

    /**
     * Sets a new managementPlanImplementedIndicator
     *
     * BBIE
     *  Ballast Water Summary. Management Plan Implemented_ Indicator. Indicator
     *  An indication of whether a waste water management plan has been implemented (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  Management Plan Implemented
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $managementPlanImplementedIndicator
     * @return self
     */
    public function setManagementPlanImplementedIndicator($managementPlanImplementedIndicator)
    {
        $this->managementPlanImplementedIndicator = $managementPlanImplementedIndicator;
        return $this;
    }

    /**
     * Gets as iMOGuidelinesOnBoardIndicator
     *
     * BBIE
     *  Ballast Water Summary. IMO Guidelines On Board_ Indicator. Indicator
     *  An indication of whether International Maritime Organization (IMO) ballast water guidelines are on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  IMO Guidelines On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getIMOGuidelinesOnBoardIndicator()
    {
        return $this->iMOGuidelinesOnBoardIndicator;
    }

    /**
     * Sets a new iMOGuidelinesOnBoardIndicator
     *
     * BBIE
     *  Ballast Water Summary. IMO Guidelines On Board_ Indicator. Indicator
     *  An indication of whether International Maritime Organization (IMO) ballast water guidelines are on board (true) or not (false).
     *  0..1
     *  Ballast Water Summary
     *  IMO Guidelines On Board
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $iMOGuidelinesOnBoardIndicator
     * @return self
     */
    public function setIMOGuidelinesOnBoardIndicator($iMOGuidelinesOnBoardIndicator)
    {
        $this->iMOGuidelinesOnBoardIndicator = $iMOGuidelinesOnBoardIndicator;
        return $this;
    }

    /**
     * Gets as totalBallastTanksOnBoardQuantity
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Tanks On Board_ Quantity. Quantity
     *  The total number of ballast tanks on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Tanks On Board
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastTanksOnBoardQuantity
     */
    public function getTotalBallastTanksOnBoardQuantity()
    {
        return $this->totalBallastTanksOnBoardQuantity;
    }

    /**
     * Sets a new totalBallastTanksOnBoardQuantity
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Tanks On Board_ Quantity. Quantity
     *  The total number of ballast tanks on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Tanks On Board
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastTanksOnBoardQuantity $totalBallastTanksOnBoardQuantity
     * @return self
     */
    public function setTotalBallastTanksOnBoardQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastTanksOnBoardQuantity $totalBallastTanksOnBoardQuantity = null)
    {
        $this->totalBallastTanksOnBoardQuantity = $totalBallastTanksOnBoardQuantity;
        return $this;
    }

    /**
     * Gets as tanksInBallastQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks In Ballast_ Quantity. Quantity
     *  The number of tanks in the ballast of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Tanks In Ballast
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksInBallastQuantity
     */
    public function getTanksInBallastQuantity()
    {
        return $this->tanksInBallastQuantity;
    }

    /**
     * Sets a new tanksInBallastQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks In Ballast_ Quantity. Quantity
     *  The number of tanks in the ballast of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Tanks In Ballast
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksInBallastQuantity $tanksInBallastQuantity
     * @return self
     */
    public function setTanksInBallastQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksInBallastQuantity $tanksInBallastQuantity = null)
    {
        $this->tanksInBallastQuantity = $tanksInBallastQuantity;
        return $this;
    }

    /**
     * Gets as tanksExchangedQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks Exchanged_ Quantity. Quantity
     *  The number of tanks being exchanged as part of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksExchangedQuantity
     */
    public function getTanksExchangedQuantity()
    {
        return $this->tanksExchangedQuantity;
    }

    /**
     * Sets a new tanksExchangedQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks Exchanged_ Quantity. Quantity
     *  The number of tanks being exchanged as part of this ballast water summary.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksExchangedQuantity $tanksExchangedQuantity
     * @return self
     */
    public function setTanksExchangedQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksExchangedQuantity $tanksExchangedQuantity = null)
    {
        $this->tanksExchangedQuantity = $tanksExchangedQuantity;
        return $this;
    }

    /**
     * Gets as tanksNotExchangedQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks Not Exchanged_ Quantity. Quantity
     *  The quantity of tanks not being exchanged.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Not Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksNotExchangedQuantity
     */
    public function getTanksNotExchangedQuantity()
    {
        return $this->tanksNotExchangedQuantity;
    }

    /**
     * Sets a new tanksNotExchangedQuantity
     *
     * BBIE
     *  Ballast Water Summary. Tanks Not Exchanged_ Quantity. Quantity
     *  The quantity of tanks not being exchanged.
     *  0..1
     *  Ballast Water Summary
     *  Tanks Not Exchanged
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksNotExchangedQuantity $tanksNotExchangedQuantity
     * @return self
     */
    public function setTanksNotExchangedQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TanksNotExchangedQuantity $tanksNotExchangedQuantity = null)
    {
        $this->tanksNotExchangedQuantity = $tanksNotExchangedQuantity;
        return $this;
    }

    /**
     * Gets as totalBallastWaterOnBoardMeasure
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Water On Board_ Measure. Measure
     *  The messure of the total ballast water on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water On Board
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterOnBoardMeasure
     */
    public function getTotalBallastWaterOnBoardMeasure()
    {
        return $this->totalBallastWaterOnBoardMeasure;
    }

    /**
     * Sets a new totalBallastWaterOnBoardMeasure
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Water On Board_ Measure. Measure
     *  The messure of the total ballast water on board the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water On Board
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterOnBoardMeasure $totalBallastWaterOnBoardMeasure
     * @return self
     */
    public function setTotalBallastWaterOnBoardMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterOnBoardMeasure $totalBallastWaterOnBoardMeasure = null)
    {
        $this->totalBallastWaterOnBoardMeasure = $totalBallastWaterOnBoardMeasure;
        return $this;
    }

    /**
     * Gets as totalBallastWaterCapacityMeasure
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Water_ Capacity Measure. Measure
     *  The total ballast water capacity of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water
     *  Capacity Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterCapacityMeasure
     */
    public function getTotalBallastWaterCapacityMeasure()
    {
        return $this->totalBallastWaterCapacityMeasure;
    }

    /**
     * Sets a new totalBallastWaterCapacityMeasure
     *
     * BBIE
     *  Ballast Water Summary. Total Ballast Water_ Capacity Measure. Measure
     *  The total ballast water capacity of the vessel.
     *  0..1
     *  Ballast Water Summary
     *  Total Ballast Water
     *  Capacity Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterCapacityMeasure $totalBallastWaterCapacityMeasure
     * @return self
     */
    public function setTotalBallastWaterCapacityMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TotalBallastWaterCapacityMeasure $totalBallastWaterCapacityMeasure = null)
    {
        $this->totalBallastWaterCapacityMeasure = $totalBallastWaterCapacityMeasure;
        return $this;
    }

    /**
     * Adds as otherControlActions
     *
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherControlActions $otherControlActions
     */
    public function addToOtherControlActions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherControlActions $otherControlActions)
    {
        $this->otherControlActions[] = $otherControlActions;
        return $this;
    }

    /**
     * isset otherControlActions
     *
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherControlActions($index)
    {
        return isset($this->otherControlActions[$index]);
    }

    /**
     * unset otherControlActions
     *
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherControlActions($index)
    {
        unset($this->otherControlActions[$index]);
    }

    /**
     * Gets as otherControlActions
     *
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherControlActions[]
     */
    public function getOtherControlActions()
    {
        return $this->otherControlActions;
    }

    /**
     * Sets a new otherControlActions
     *
     * BBIE
     *  Ballast Water Summary. Other Control_ Actions Text. Text
     *  A text describing any other control actions that are part of this ballast water summary.
     *  0..n
     *  Ballast Water Summary
     *  Other Control
     *  Actions Text
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OtherControlActions[] $otherControlActions
     * @return self
     */
    public function setOtherControlActions(?array $otherControlActions = null)
    {
        $this->otherControlActions = $otherControlActions;
        return $this;
    }

    /**
     * Adds as noControlActionsReason
     *
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoControlActionsReason $noControlActionsReason
     */
    public function addToNoControlActionsReason(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoControlActionsReason $noControlActionsReason)
    {
        $this->noControlActionsReason[] = $noControlActionsReason;
        return $this;
    }

    /**
     * isset noControlActionsReason
     *
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNoControlActionsReason($index)
    {
        return isset($this->noControlActionsReason[$index]);
    }

    /**
     * unset noControlActionsReason
     *
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNoControlActionsReason($index)
    {
        unset($this->noControlActionsReason[$index]);
    }

    /**
     * Gets as noControlActionsReason
     *
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoControlActionsReason[]
     */
    public function getNoControlActionsReason()
    {
        return $this->noControlActionsReason;
    }

    /**
     * Sets a new noControlActionsReason
     *
     * BBIE
     *  Ballast Water Summary. No Control_ Actions Reason. Text
     *  A textual description of the reason if no control actions are being taken.
     *  0..n
     *  Ballast Water Summary
     *  No Control
     *  Actions Reason
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NoControlActionsReason[] $noControlActionsReason
     * @return self
     */
    public function setNoControlActionsReason(?array $noControlActionsReason = null)
    {
        $this->noControlActionsReason = $noControlActionsReason;
        return $this;
    }

    /**
     * Adds as uptakeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UptakeBallastWaterTransaction $uptakeBallastWaterTransaction
     */
    public function addToUptakeBallastWaterTransaction(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UptakeBallastWaterTransaction $uptakeBallastWaterTransaction)
    {
        $this->uptakeBallastWaterTransaction[] = $uptakeBallastWaterTransaction;
        return $this;
    }

    /**
     * isset uptakeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUptakeBallastWaterTransaction($index)
    {
        return isset($this->uptakeBallastWaterTransaction[$index]);
    }

    /**
     * unset uptakeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUptakeBallastWaterTransaction($index)
    {
        unset($this->uptakeBallastWaterTransaction[$index]);
    }

    /**
     * Gets as uptakeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UptakeBallastWaterTransaction[]
     */
    public function getUptakeBallastWaterTransaction()
    {
        return $this->uptakeBallastWaterTransaction;
    }

    /**
     * Sets a new uptakeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Uptake_ Ballast Water Transaction. Ballast Water Transaction
     *  The uptake ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Uptake
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\UptakeBallastWaterTransaction[] $uptakeBallastWaterTransaction
     * @return self
     */
    public function setUptakeBallastWaterTransaction(?array $uptakeBallastWaterTransaction = null)
    {
        $this->uptakeBallastWaterTransaction = $uptakeBallastWaterTransaction;
        return $this;
    }

    /**
     * Adds as exchangeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeBallastWaterTransaction $exchangeBallastWaterTransaction
     */
    public function addToExchangeBallastWaterTransaction(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeBallastWaterTransaction $exchangeBallastWaterTransaction)
    {
        $this->exchangeBallastWaterTransaction[] = $exchangeBallastWaterTransaction;
        return $this;
    }

    /**
     * isset exchangeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchangeBallastWaterTransaction($index)
    {
        return isset($this->exchangeBallastWaterTransaction[$index]);
    }

    /**
     * unset exchangeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchangeBallastWaterTransaction($index)
    {
        unset($this->exchangeBallastWaterTransaction[$index]);
    }

    /**
     * Gets as exchangeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeBallastWaterTransaction[]
     */
    public function getExchangeBallastWaterTransaction()
    {
        return $this->exchangeBallastWaterTransaction;
    }

    /**
     * Sets a new exchangeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Exchange_ Ballast Water Transaction. Ballast Water Transaction
     *  The exchange ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Exchange
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExchangeBallastWaterTransaction[] $exchangeBallastWaterTransaction
     * @return self
     */
    public function setExchangeBallastWaterTransaction(?array $exchangeBallastWaterTransaction = null)
    {
        $this->exchangeBallastWaterTransaction = $exchangeBallastWaterTransaction;
        return $this;
    }

    /**
     * Adds as dischargeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DischargeBallastWaterTransaction $dischargeBallastWaterTransaction
     */
    public function addToDischargeBallastWaterTransaction(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DischargeBallastWaterTransaction $dischargeBallastWaterTransaction)
    {
        $this->dischargeBallastWaterTransaction[] = $dischargeBallastWaterTransaction;
        return $this;
    }

    /**
     * isset dischargeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDischargeBallastWaterTransaction($index)
    {
        return isset($this->dischargeBallastWaterTransaction[$index]);
    }

    /**
     * unset dischargeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDischargeBallastWaterTransaction($index)
    {
        unset($this->dischargeBallastWaterTransaction[$index]);
    }

    /**
     * Gets as dischargeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DischargeBallastWaterTransaction[]
     */
    public function getDischargeBallastWaterTransaction()
    {
        return $this->dischargeBallastWaterTransaction;
    }

    /**
     * Sets a new dischargeBallastWaterTransaction
     *
     * ASBIE
     *  Ballast Water Summary. Discharge_ Ballast Water Transaction. Ballast Water Transaction
     *  The discharge ballast water transaction.
     *  0..n
     *  Ballast Water Summary
     *  Discharge
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *  Ballast Water Transaction
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DischargeBallastWaterTransaction[] $dischargeBallastWaterTransaction
     * @return self
     */
    public function setDischargeBallastWaterTransaction(?array $dischargeBallastWaterTransaction = null)
    {
        $this->dischargeBallastWaterTransaction = $dischargeBallastWaterTransaction;
        return $this;
    }

    /**
     * Gets as responsibleOfficerPerson
     *
     * ASBIE
     *  Ballast Water Summary. Responsible Officer_ Person. Person
     *  The officer responsible for this ballast water summery.
     *  0..1
     *  Ballast Water Summary
     *  Responsible Officer
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleOfficerPerson
     */
    public function getResponsibleOfficerPerson()
    {
        return $this->responsibleOfficerPerson;
    }

    /**
     * Sets a new responsibleOfficerPerson
     *
     * ASBIE
     *  Ballast Water Summary. Responsible Officer_ Person. Person
     *  The officer responsible for this ballast water summery.
     *  0..1
     *  Ballast Water Summary
     *  Responsible Officer
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleOfficerPerson $responsibleOfficerPerson
     * @return self
     */
    public function setResponsibleOfficerPerson(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ResponsibleOfficerPerson $responsibleOfficerPerson = null)
    {
        $this->responsibleOfficerPerson = $responsibleOfficerPerson;
        return $this;
    }
}

