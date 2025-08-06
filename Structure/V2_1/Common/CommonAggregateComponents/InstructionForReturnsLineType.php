<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing InstructionForReturnsLineType
 *
 * ABIE
 *  Instruction For Returns Line. Details
 *  A class to define a line in an Instruction for Returns.
 *  Instruction For Returns Line
 * XSD Type: InstructionForReturnsLineType
 */
class InstructionForReturnsLineType
{
    /**
     * BBIE
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ManufacturerParty $manufacturerParty
     */
    private $manufacturerParty = null;

    /**
     * ASBIE
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
     *  Item
     *  Item
     *  Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Instruction For Returns Line. Identifier
     *  An identifier for this instruction for returns line.
     *  1
     *  Instruction For Returns Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Instruction For Returns Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Instruction For Returns Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Instruction For Returns Line. Quantity
     *  The quantity of goods being returned.
     *  1
     *  Instruction For Returns Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as manufacturerParty
     *
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ManufacturerParty
     */
    public function getManufacturerParty()
    {
        return $this->manufacturerParty;
    }

    /**
     * Sets a new manufacturerParty
     *
     * ASBIE
     *  Instruction For Returns Line. Manufacturer_ Party. Party
     *  The manufacturer of the goods being returned.
     *  0..1
     *  Instruction For Returns Line
     *  Manufacturer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ManufacturerParty $manufacturerParty
     * @return self
     */
    public function setManufacturerParty(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\ManufacturerParty $manufacturerParty = null)
    {
        $this->manufacturerParty = $manufacturerParty;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
     *  Item
     *  Item
     *  Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Instruction For Returns Line. Item
     *  A description of the item being returned.
     *  1
     *  Instruction For Returns Line
     *  Item
     *  Item
     *  Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Item $item
     * @return self
     */
    public function setItem(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }
}

