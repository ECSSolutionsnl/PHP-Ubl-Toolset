<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ShipStoreArticleType
 *
 * ABIE
 *  Ship Store Article. Details
 *  An article in the ship's stores during a shipment stage.
 *  Ship Store Article
 * XSD Type: ShipStoreArticleType
 */
class ShipStoreArticleType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Ship Store Article. Identifier
     *  An indentifier for this ship store article.
     *  1
     *  Ship Store Article
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Ship Store Article. Name
     *  A name for this ship store article.
     *  0..1
     *  Ship Store Article
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Ship Store Article. Quantity
     *  The quantity of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OfficialUse[] $officialUse
     */
    private $officialUse = [
        
    ];

    /**
     * ASBIE
     *  Ship Store Article. Stowage
     *  The stowage or location on board of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Stowage $stowage
     */
    private $stowage = null;

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
     *  Ship Store Article. Identifier
     *  An indentifier for this ship store article.
     *  1
     *  Ship Store Article
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
     *  Ship Store Article. Identifier
     *  An indentifier for this ship store article.
     *  1
     *  Ship Store Article
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Ship Store Article. Name
     *  A name for this ship store article.
     *  0..1
     *  Ship Store Article
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Ship Store Article. Name
     *  A name for this ship store article.
     *  0..1
     *  Ship Store Article
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Ship Store Article. Quantity
     *  The quantity of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Ship Store Article. Quantity
     *  The quantity of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as officialUse
     *
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OfficialUse $officialUse
     */
    public function addToOfficialUse(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OfficialUse $officialUse)
    {
        $this->officialUse[] = $officialUse;
        return $this;
    }

    /**
     * isset officialUse
     *
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfficialUse($index)
    {
        return isset($this->officialUse[$index]);
    }

    /**
     * unset officialUse
     *
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfficialUse($index)
    {
        unset($this->officialUse[$index]);
    }

    /**
     * Gets as officialUse
     *
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OfficialUse[]
     */
    public function getOfficialUse()
    {
        return $this->officialUse;
    }

    /**
     * Sets a new officialUse
     *
     * BBIE
     *  Ship Store Article. Official Use. Text
     *  A text describing the official use of this ship store article.
     *  0..n
     *  Ship Store Article
     *  Official Use
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\OfficialUse[] $officialUse
     * @return self
     */
    public function setOfficialUse(?array $officialUse = null)
    {
        $this->officialUse = $officialUse;
        return $this;
    }

    /**
     * Gets as stowage
     *
     * ASBIE
     *  Ship Store Article. Stowage
     *  The stowage or location on board of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Stowage
     */
    public function getStowage()
    {
        return $this->stowage;
    }

    /**
     * Sets a new stowage
     *
     * ASBIE
     *  Ship Store Article. Stowage
     *  The stowage or location on board of this ship store article.
     *  0..1
     *  Ship Store Article
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Stowage $stowage
     * @return self
     */
    public function setStowage(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Stowage $stowage = null)
    {
        $this->stowage = $stowage;
        return $this;
    }
}

