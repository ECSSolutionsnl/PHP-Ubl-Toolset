<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing GoodsItemPassportCounterfoilType
 *
 * ABIE
 *  Goods Item Passport Counterfoil. Details
 *  A class describing a Goods Item Passport or ATA Carnet Counterfoil
 *  Goods Item Passport Counterfoil
 *  ATA Carnet Counterfoil
 * XSD Type: GoodsItemPassportCounterfoilType
 */
class GoodsItemPassportCounterfoilType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Goods Item Passport Counterfoil. Identifier
     *  This identifier for this Goods Item Passport Counterfoil
     *  1
     *  Goods Item Passport Counterfoil
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item Passport Counterfoil. Goods Item Passport Identifier. Identifier
     *  The identifier of the Goods Item Passport or ATA Carnet of this counterfoil, usually the number on the upper part of the orange hazard placard required on the means of transport
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *  ATA Carnet number
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID
     */
    private $goodsItemPassportID = null;

    /**
     * BBIE
     *  Goods Item Passport Counterfoil. Final_ Reexportation Date. Date
     *  Final date of re-exportation, if less than the overall validity period of te Goods Item Passport or ATA Carnet
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Final
     *  Reexportation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $finalReexportationDate
     */
    private $finalReexportationDate = null;

    /**
     * BBIE
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Customs Office_ Location. Location
     *  The location of the customs office to where the counterfoil has been presented
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Customs Office
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsOfficeLocation $customsOfficeLocation
     */
    private $customsOfficeLocation = null;

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Goods Item
     *  A goods item associated with this counterfoil
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItem $goodsItem
     */
    private $goodsItem = null;

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportationDocumentReference[] $exportationDocumentReference
     */
    private $exportationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportationDocumentReference[] $importationDocumentReference
     */
    private $importationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReexportationDocumentReference[] $reexportationDocumentReference
     */
    private $reexportationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReimportationDocumentReference[] $reimportationDocumentReference
     */
    private $reimportationDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\VoucherDocumentReference[] $voucherDocumentReference
     */
    private $voucherDocumentReference = [
        
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
     *  Goods Item Passport Counterfoil. Identifier
     *  This identifier for this Goods Item Passport Counterfoil
     *  1
     *  Goods Item Passport Counterfoil
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
     *  Goods Item Passport Counterfoil. Identifier
     *  This identifier for this Goods Item Passport Counterfoil
     *  1
     *  Goods Item Passport Counterfoil
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
     * Gets as goodsItemPassportID
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Goods Item Passport Identifier. Identifier
     *  The identifier of the Goods Item Passport or ATA Carnet of this counterfoil, usually the number on the upper part of the orange hazard placard required on the means of transport
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *  ATA Carnet number
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID
     */
    public function getGoodsItemPassportID()
    {
        return $this->goodsItemPassportID;
    }

    /**
     * Sets a new goodsItemPassportID
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Goods Item Passport Identifier. Identifier
     *  The identifier of the Goods Item Passport or ATA Carnet of this counterfoil, usually the number on the upper part of the orange hazard placard required on the means of transport
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item Passport Identifier
     *  Identifier
     *  Identifier. Type
     *  ATA Carnet number
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID
     * @return self
     */
    public function setGoodsItemPassportID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\GoodsItemPassportID $goodsItemPassportID = null)
    {
        $this->goodsItemPassportID = $goodsItemPassportID;
        return $this;
    }

    /**
     * Gets as finalReexportationDate
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Final_ Reexportation Date. Date
     *  Final date of re-exportation, if less than the overall validity period of te Goods Item Passport or ATA Carnet
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Final
     *  Reexportation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getFinalReexportationDate()
    {
        return $this->finalReexportationDate;
    }

    /**
     * Sets a new finalReexportationDate
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Final_ Reexportation Date. Date
     *  Final date of re-exportation, if less than the overall validity period of te Goods Item Passport or ATA Carnet
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Final
     *  Reexportation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $finalReexportationDate
     * @return self
     */
    public function setFinalReexportationDate(?\DateTime $finalReexportationDate = null)
    {
        $this->finalReexportationDate = $finalReexportationDate;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
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
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
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
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Goods Item Passport Counterfoil. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as customsOfficeLocation
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Customs Office_ Location. Location
     *  The location of the customs office to where the counterfoil has been presented
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Customs Office
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsOfficeLocation
     */
    public function getCustomsOfficeLocation()
    {
        return $this->customsOfficeLocation;
    }

    /**
     * Sets a new customsOfficeLocation
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Customs Office_ Location. Location
     *  The location of the customs office to where the counterfoil has been presented
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Customs Office
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsOfficeLocation $customsOfficeLocation
     * @return self
     */
    public function setCustomsOfficeLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsOfficeLocation $customsOfficeLocation = null)
    {
        $this->customsOfficeLocation = $customsOfficeLocation;
        return $this;
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Goods Item
     *  A goods item associated with this counterfoil
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItem
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Goods Item
     *  A goods item associated with this counterfoil
     *  0..1
     *  Goods Item Passport Counterfoil
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItem $goodsItem
     * @return self
     */
    public function setGoodsItem(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\GoodsItem $goodsItem = null)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as exportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportationDocumentReference $exportationDocumentReference
     */
    public function addToExportationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportationDocumentReference $exportationDocumentReference)
    {
        $this->exportationDocumentReference[] = $exportationDocumentReference;
        return $this;
    }

    /**
     * isset exportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExportationDocumentReference($index)
    {
        return isset($this->exportationDocumentReference[$index]);
    }

    /**
     * unset exportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExportationDocumentReference($index)
    {
        unset($this->exportationDocumentReference[$index]);
    }

    /**
     * Gets as exportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportationDocumentReference[]
     */
    public function getExportationDocumentReference()
    {
        return $this->exportationDocumentReference;
    }

    /**
     * Sets a new exportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Exportation_ Document Reference. Document Reference
     *  A reference to a document used for the export of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Exportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExportationDocumentReference[] $exportationDocumentReference
     * @return self
     */
    public function setExportationDocumentReference(?array $exportationDocumentReference = null)
    {
        $this->exportationDocumentReference = $exportationDocumentReference;
        return $this;
    }

    /**
     * Adds as importationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportationDocumentReference $importationDocumentReference
     */
    public function addToImportationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportationDocumentReference $importationDocumentReference)
    {
        $this->importationDocumentReference[] = $importationDocumentReference;
        return $this;
    }

    /**
     * isset importationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImportationDocumentReference($index)
    {
        return isset($this->importationDocumentReference[$index]);
    }

    /**
     * unset importationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImportationDocumentReference($index)
    {
        unset($this->importationDocumentReference[$index]);
    }

    /**
     * Gets as importationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportationDocumentReference[]
     */
    public function getImportationDocumentReference()
    {
        return $this->importationDocumentReference;
    }

    /**
     * Sets a new importationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Importation_ Document Reference. Document Reference
     *  A reference to a document used for the import of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Importation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ImportationDocumentReference[] $importationDocumentReference
     * @return self
     */
    public function setImportationDocumentReference(?array $importationDocumentReference = null)
    {
        $this->importationDocumentReference = $importationDocumentReference;
        return $this;
    }

    /**
     * Adds as reexportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReexportationDocumentReference $reexportationDocumentReference
     */
    public function addToReexportationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReexportationDocumentReference $reexportationDocumentReference)
    {
        $this->reexportationDocumentReference[] = $reexportationDocumentReference;
        return $this;
    }

    /**
     * isset reexportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReexportationDocumentReference($index)
    {
        return isset($this->reexportationDocumentReference[$index]);
    }

    /**
     * unset reexportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReexportationDocumentReference($index)
    {
        unset($this->reexportationDocumentReference[$index]);
    }

    /**
     * Gets as reexportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReexportationDocumentReference[]
     */
    public function getReexportationDocumentReference()
    {
        return $this->reexportationDocumentReference;
    }

    /**
     * Sets a new reexportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reexportation_ Document Reference. Document Reference
     *  A reference to a document used for the re-exportation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reexportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReexportationDocumentReference[] $reexportationDocumentReference
     * @return self
     */
    public function setReexportationDocumentReference(?array $reexportationDocumentReference = null)
    {
        $this->reexportationDocumentReference = $reexportationDocumentReference;
        return $this;
    }

    /**
     * Adds as reimportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReimportationDocumentReference $reimportationDocumentReference
     */
    public function addToReimportationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReimportationDocumentReference $reimportationDocumentReference)
    {
        $this->reimportationDocumentReference[] = $reimportationDocumentReference;
        return $this;
    }

    /**
     * isset reimportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReimportationDocumentReference($index)
    {
        return isset($this->reimportationDocumentReference[$index]);
    }

    /**
     * unset reimportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReimportationDocumentReference($index)
    {
        unset($this->reimportationDocumentReference[$index]);
    }

    /**
     * Gets as reimportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReimportationDocumentReference[]
     */
    public function getReimportationDocumentReference()
    {
        return $this->reimportationDocumentReference;
    }

    /**
     * Sets a new reimportationDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Reimportation_ Document Reference. Document Reference
     *  A reference to a document used for re-importation of the goods related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Reimportation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReimportationDocumentReference[] $reimportationDocumentReference
     * @return self
     */
    public function setReimportationDocumentReference(?array $reimportationDocumentReference = null)
    {
        $this->reimportationDocumentReference = $reimportationDocumentReference;
        return $this;
    }

    /**
     * Adds as voucherDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\VoucherDocumentReference $voucherDocumentReference
     */
    public function addToVoucherDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\VoucherDocumentReference $voucherDocumentReference)
    {
        $this->voucherDocumentReference[] = $voucherDocumentReference;
        return $this;
    }

    /**
     * isset voucherDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVoucherDocumentReference($index)
    {
        return isset($this->voucherDocumentReference[$index]);
    }

    /**
     * unset voucherDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVoucherDocumentReference($index)
    {
        unset($this->voucherDocumentReference[$index]);
    }

    /**
     * Gets as voucherDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\VoucherDocumentReference[]
     */
    public function getVoucherDocumentReference()
    {
        return $this->voucherDocumentReference;
    }

    /**
     * Sets a new voucherDocumentReference
     *
     * ASBIE
     *  Goods Item Passport Counterfoil. Voucher_ Document Reference. Document Reference
     *  A reference to a voucher related to this counterfoil
     *  0..n
     *  Goods Item Passport Counterfoil
     *  Voucher
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\VoucherDocumentReference[] $voucherDocumentReference
     * @return self
     */
    public function setVoucherDocumentReference(?array $voucherDocumentReference = null)
    {
        $this->voucherDocumentReference = $voucherDocumentReference;
        return $this;
    }
}

