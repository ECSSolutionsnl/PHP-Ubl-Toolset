<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PrizeType
 *
 * ABIE
 *  Prize. Details
 *  A class to describe something valuable offered or striven for in competition.
 *  Prize
 * XSD Type: PrizeType
 */
class PrizeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Prize. Rank Code. Code
     *  The relative position in the competition associated with a prize.
     *  1
     *  Prize
     *  Rank Code
     *  Code
     *  Code. Type
     *  e.g. "1, 2, 3 +
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RankCode $rankCode
     */
    private $rankCode = null;

    /**
     * BBIE
     *  Prize. Value. Amount
     *  The monetary value amount of a prize.
     *  0..1
     *  Prize
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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
     * Gets as rankCode
     *
     * BBIE
     *  Prize. Rank Code. Code
     *  The relative position in the competition associated with a prize.
     *  1
     *  Prize
     *  Rank Code
     *  Code
     *  Code. Type
     *  e.g. "1, 2, 3 +
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RankCode
     */
    public function getRankCode()
    {
        return $this->rankCode;
    }

    /**
     * Sets a new rankCode
     *
     * BBIE
     *  Prize. Rank Code. Code
     *  The relative position in the competition associated with a prize.
     *  1
     *  Prize
     *  Rank Code
     *  Code
     *  Code. Type
     *  e.g. "1, 2, 3 +
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RankCode $rankCode
     * @return self
     */
    public function setRankCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RankCode $rankCode)
    {
        $this->rankCode = $rankCode;
        return $this;
    }

    /**
     * Gets as valueAmount
     *
     * BBIE
     *  Prize. Value. Amount
     *  The monetary value amount of a prize.
     *  0..1
     *  Prize
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Prize. Value. Amount
     *  The monetary value amount of a prize.
     *  0..1
     *  Prize
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValueAmount $valueAmount = null)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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
     *  Prize. Description. Text
     *  Text providing more information about this prize.
     *  0..n
     *  Prize
     *  Description
     *  Text
     *  Text. Type
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

