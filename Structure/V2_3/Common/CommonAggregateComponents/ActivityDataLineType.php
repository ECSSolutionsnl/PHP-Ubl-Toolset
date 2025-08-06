<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ActivityDataLineType
 *
 * ABIE
 *  Activity Data Line. Details
 *  A class to associate a time period and locations (activity data) with an item for inventory planning purposes.
 *  Activity Data Line
 * XSD Type: ActivityDataLineType
 */
class ActivityDataLineType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     */
    private $activityPeriod = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation
     */
    private $activityOriginLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation
     */
    private $activityFinalLocation = null;

    /**
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SalesItem[] $salesItem
     */
    private $salesItem = [
        
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
     * Gets as iD
     *
     * BBIE
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
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
     *  Activity Data Line. Identifier
     *  An identifier for this activity data line.
     *  1
     *  Activity Data Line
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
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * BBIE
     *  Activity Data Line. Supply Chain Activity Type Code. Code
     *  A code signifying the type of supply chain activity.
     *  1
     *  Activity Data Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Activity Data Line. Buyer_ Customer Party. Customer Party
     *  The buyer of the item.
     *  0..1
     *  Activity Data Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty = null)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Activity Data Line. Seller_ Supplier Party. Supplier Party
     *  The seller of the item.
     *  0..1
     *  Activity Data Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty = null)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod
     */
    public function getActivityPeriod()
    {
        return $this->activityPeriod;
    }

    /**
     * Sets a new activityPeriod
     *
     * ASBIE
     *  Activity Data Line. Activity_ Period. Period
     *  The period during which the activity is realized.
     *  0..1
     *  Activity Data Line
     *  Activity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod
     * @return self
     */
    public function setActivityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityPeriod $activityPeriod = null)
    {
        $this->activityPeriod = $activityPeriod;
        return $this;
    }

    /**
     * Gets as activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityOriginLocation
     */
    public function getActivityOriginLocation()
    {
        return $this->activityOriginLocation;
    }

    /**
     * Sets a new activityOriginLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Origin_ Location. Location
     *  Either the location where the movement of goods is observed or the location from which the goods are moved.
     *  1
     *  Activity Data Line
     *  Activity Origin
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation
     * @return self
     */
    public function setActivityOriginLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityOriginLocation $activityOriginLocation)
    {
        $this->activityOriginLocation = $activityOriginLocation;
        return $this;
    }

    /**
     * Gets as activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityFinalLocation
     */
    public function getActivityFinalLocation()
    {
        return $this->activityFinalLocation;
    }

    /**
     * Sets a new activityFinalLocation
     *
     * ASBIE
     *  Activity Data Line. Activity Final_ Location. Location
     *  The location to which the goods are moved.
     *  0..1
     *  Activity Data Line
     *  Activity Final
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation
     * @return self
     */
    public function setActivityFinalLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ActivityFinalLocation $activityFinalLocation = null)
    {
        $this->activityFinalLocation = $activityFinalLocation;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SalesItem $salesItem
     */
    public function addToSalesItem(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Activity Data Line. Sales Item
     *  Sales information for an item to which this line applies.
     *  1..n
     *  Activity Data Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }
}

