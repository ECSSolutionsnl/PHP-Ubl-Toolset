<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PaymentType
 *
 * ABIE
 *  Payment. Details
 *  A class to describe a payment.
 *  Payment
 * XSD Type: PaymentType
 */
class PaymentType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaidAmount $paidAmount
     */
    private $paidAmount = null;

    /**
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $paidDate
     */
    private $paidDate = null;

    /**
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InstructionID $instructionID
     */
    private $instructionID = null;

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
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
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
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
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
     * Gets as paidAmount
     *
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaidAmount
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Sets a new paidAmount
     *
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaidAmount $paidAmount
     * @return self
     */
    public function setPaidAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PaidAmount $paidAmount = null)
    {
        $this->paidAmount = $paidAmount;
        return $this;
    }

    /**
     * Gets as receivedDate
     *
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Sets a new receivedDate
     *
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $receivedDate
     * @return self
     */
    public function setReceivedDate(?\DateTime $receivedDate = null)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * Gets as paidDate
     *
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Sets a new paidDate
     *
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $paidDate
     * @return self
     */
    public function setPaidDate(?\DateTime $paidDate = null)
    {
        $this->paidDate = $paidDate;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(?\DateTime $paidTime = null)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as instructionID
     *
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InstructionID
     */
    public function getInstructionID()
    {
        return $this->instructionID;
    }

    /**
     * Sets a new instructionID
     *
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\InstructionID $instructionID = null)
    {
        $this->instructionID = $instructionID;
        return $this;
    }
}

