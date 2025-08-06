<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  A class to describe an ordered shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Package[] $package
     */
    private $package = [
        
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
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Package $package
     */
    public function addToPackage(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Package[] $package
     * @return self
     */
    public function setPackage(?array $package = null)
    {
        $this->package = $package;
        return $this;
    }
}

