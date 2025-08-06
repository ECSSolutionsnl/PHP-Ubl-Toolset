<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing TendererPartyQualificationType
 *
 * ABIE
 *  Tenderer Party Qualification. Details
 *  A class to describe the qualifications of a tenderer party.
 *  Tenderer Party Qualification
 * XSD Type: TendererPartyQualificationType
 */
class TendererPartyQualificationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     */
    private $interestedProcurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty
     */
    private $mainQualifyingParty = null;

    /**
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     */
    private $additionalQualifyingParty = [
        
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
     * Adds as interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot
     */
    public function addToInterestedProcurementProjectLot(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot)
    {
        $this->interestedProcurementProjectLot[] = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * isset interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterestedProcurementProjectLot($index)
    {
        return isset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * unset interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterestedProcurementProjectLot($index)
    {
        unset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * Gets as interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedProcurementProjectLot[]
     */
    public function getInterestedProcurementProjectLot()
    {
        return $this->interestedProcurementProjectLot;
    }

    /**
     * Sets a new interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     * @return self
     */
    public function setInterestedProcurementProjectLot(?array $interestedProcurementProjectLot = null)
    {
        $this->interestedProcurementProjectLot = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * Gets as mainQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainQualifyingParty
     */
    public function getMainQualifyingParty()
    {
        return $this->mainQualifyingParty;
    }

    /**
     * Sets a new mainQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty
     * @return self
     */
    public function setMainQualifyingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty)
    {
        $this->mainQualifyingParty = $mainQualifyingParty;
        return $this;
    }

    /**
     * Adds as additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty
     */
    public function addToAdditionalQualifyingParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty)
    {
        $this->additionalQualifyingParty[] = $additionalQualifyingParty;
        return $this;
    }

    /**
     * isset additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalQualifyingParty($index)
    {
        return isset($this->additionalQualifyingParty[$index]);
    }

    /**
     * unset additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalQualifyingParty($index)
    {
        unset($this->additionalQualifyingParty[$index]);
    }

    /**
     * Gets as additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalQualifyingParty[]
     */
    public function getAdditionalQualifyingParty()
    {
        return $this->additionalQualifyingParty;
    }

    /**
     * Sets a new additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     * @return self
     */
    public function setAdditionalQualifyingParty(?array $additionalQualifyingParty = null)
    {
        $this->additionalQualifyingParty = $additionalQualifyingParty;
        return $this;
    }
}

