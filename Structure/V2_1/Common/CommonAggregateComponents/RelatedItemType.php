<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing RelatedItemType
 *
 * ABIE
 *  Related Item. Details
 *  A class to describe the relationship to an item different from the item associated with the item line in which RelatedItem is used.
 *  Related Item
 * XSD Type: RelatedItemType
 */
class RelatedItemType
{
    /**
     * BBIE
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
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
     *  Related Item. Identifier
     *  An identifier for the related item.
     *  0..1
     *  Related Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  First , Second
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
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
     *  Related Item. Quantity
     *  The quantity that applies to the relationship.
     *  0..1
     *  Related Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  6 , 10mg per Kilo
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
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
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
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
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Related Item. Description. Text
     *  Text describing the relationship.
     *  0..n
     *  Related Item
     *  Description
     *  Text
     *  Text. Type
     *  If used in wet conditions or extreme environments
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

