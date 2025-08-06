<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing LotIdentificationType
 *
 * ABIE
 *  Lot Identification. Details
 *  A class for defining a lot identifier (the identifier of a set of item instances that would be used in case of a recall of that item).
 *  Lot Identification
 * XSD Type: LotIdentificationType
 */
class LotIdentificationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LotNumberID $lotNumberID
     */
    private $lotNumberID = null;

    /**
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
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
     * Gets as lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LotNumberID
     */
    public function getLotNumberID()
    {
        return $this->lotNumberID;
    }

    /**
     * Sets a new lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LotNumberID $lotNumberID
     * @return self
     */
    public function setLotNumberID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LotNumberID $lotNumberID = null)
    {
        $this->lotNumberID = $lotNumberID;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(?\DateTime $expiryDate = null)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(?array $additionalItemProperty = null)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }
}

