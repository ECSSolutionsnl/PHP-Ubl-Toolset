<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CustomsDeclarationType
 *
 * ABIE
 *  Customs Declaration. Details
 *  A class describing identifiers or references relating to customs procedures.
 *  Customs Declaration
 *  Movement Reference Number, Local Reference Number
 * XSD Type: CustomsDeclarationType
 */
class CustomsDeclarationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Customs Declaration. Validity_ Period. Period
     *  The period during which this customs declaration is valid
     *  0..1
     *  Customs Declaration
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Customs Declaration. Applicable Territory_ Address. Address
     *  The area or region where this customs declaration applies
     *  0..1
     *  Customs Declaration
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     */
    private $applicableTerritoryAddress = null;

    /**
     * ASBIE
     *  Customs Declaration. Shipment
     *  A reference to the shipment of goods being declared
     *  0..1
     *  Customs Declaration
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Customs Declaration. Customs Exit Office_ Location. Location
     *  The location of the exit office from where the goods will leave or have left the customs territory
     *  0..1
     *  Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *  Customs office of exit
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation
     */
    private $customsExitOfficeLocation = null;

    /**
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Customs Declaration. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Customs Declaration
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty
     */
    private $consignorParty = null;

    /**
     * ASBIE
     *  Customs Declaration. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Customs Declaration
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty
     */
    private $consigneeParty = null;

    /**
     * ASBIE
     *  Customs Declaration. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Customs Declaration
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Customs Declaration. Customs_ Party. Party
     *  The authority responsible for processing this customs declaration
     *  0..1
     *  Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty
     */
    private $customsParty = null;

    /**
     * ASBIE
     *  Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previous version of this customs declaration
     *  0..1
     *  Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration
     */
    private $previousCustomsDeclaration = null;

    /**
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
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
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
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
     *  Customs Declaration. Identifier
     *  An identifier associated with customs related procedures.
     *  1
     *  Customs Declaration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CUST001 3333-44-123
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
     * Gets as validityPeriod
     *
     * ASBIE
     *  Customs Declaration. Validity_ Period. Period
     *  The period during which this customs declaration is valid
     *  0..1
     *  Customs Declaration
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Customs Declaration. Validity_ Period. Period
     *  The period during which this customs declaration is valid
     *  0..1
     *  Customs Declaration
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as applicableTerritoryAddress
     *
     * ASBIE
     *  Customs Declaration. Applicable Territory_ Address. Address
     *  The area or region where this customs declaration applies
     *  0..1
     *  Customs Declaration
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress
     */
    public function getApplicableTerritoryAddress()
    {
        return $this->applicableTerritoryAddress;
    }

    /**
     * Sets a new applicableTerritoryAddress
     *
     * ASBIE
     *  Customs Declaration. Applicable Territory_ Address. Address
     *  The area or region where this customs declaration applies
     *  0..1
     *  Customs Declaration
     *  Applicable Territory
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress
     * @return self
     */
    public function setApplicableTerritoryAddress(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ApplicableTerritoryAddress $applicableTerritoryAddress = null)
    {
        $this->applicableTerritoryAddress = $applicableTerritoryAddress;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Customs Declaration. Shipment
     *  A reference to the shipment of goods being declared
     *  0..1
     *  Customs Declaration
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
     *  Customs Declaration. Shipment
     *  A reference to the shipment of goods being declared
     *  0..1
     *  Customs Declaration
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as customsExitOfficeLocation
     *
     * ASBIE
     *  Customs Declaration. Customs Exit Office_ Location. Location
     *  The location of the exit office from where the goods will leave or have left the customs territory
     *  0..1
     *  Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *  Customs office of exit
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation
     */
    public function getCustomsExitOfficeLocation()
    {
        return $this->customsExitOfficeLocation;
    }

    /**
     * Sets a new customsExitOfficeLocation
     *
     * ASBIE
     *  Customs Declaration. Customs Exit Office_ Location. Location
     *  The location of the exit office from where the goods will leave or have left the customs territory
     *  0..1
     *  Customs Declaration
     *  Customs Exit Office
     *  Location
     *  Location
     *  Location
     *  Customs office of exit
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation
     * @return self
     */
    public function setCustomsExitOfficeLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsExitOfficeLocation $customsExitOfficeLocation = null)
    {
        $this->customsExitOfficeLocation = $customsExitOfficeLocation;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Customs Declaration. Issuer_ Party. Party
     *  Describes the party issuing the customs declaration.
     *  0..1
     *  Customs Declaration
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Customs Declaration. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Customs Declaration
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty
     */
    public function getConsignorParty()
    {
        return $this->consignorParty;
    }

    /**
     * Sets a new consignorParty
     *
     * ASBIE
     *  Customs Declaration. Consignor_ Party. Party
     *  The party, usually the seller, who is responsible for the consignment
     *  0..1
     *  Customs Declaration
     *  Consignor
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty
     * @return self
     */
    public function setConsignorParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsignorParty $consignorParty = null)
    {
        $this->consignorParty = $consignorParty;
        return $this;
    }

    /**
     * Gets as consigneeParty
     *
     * ASBIE
     *  Customs Declaration. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Customs Declaration
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty
     */
    public function getConsigneeParty()
    {
        return $this->consigneeParty;
    }

    /**
     * Sets a new consigneeParty
     *
     * ASBIE
     *  Customs Declaration. Consignee_ Party. Party
     *  The party, usually the buyer, who will receive the goods
     *  0..1
     *  Customs Declaration
     *  Consignee
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty
     * @return self
     */
    public function setConsigneeParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ConsigneeParty $consigneeParty = null)
    {
        $this->consigneeParty = $consigneeParty;
        return $this;
    }

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Customs Declaration. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Customs Declaration
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Customs Declaration. Freight Forwarder_ Party. Party
     *  The freight forwarder or the forwarding agent responsible for the transportation of the goods
     *  0..1
     *  Customs Declaration
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty = null)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as customsParty
     *
     * ASBIE
     *  Customs Declaration. Customs_ Party. Party
     *  The authority responsible for processing this customs declaration
     *  0..1
     *  Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty
     */
    public function getCustomsParty()
    {
        return $this->customsParty;
    }

    /**
     * Sets a new customsParty
     *
     * ASBIE
     *  Customs Declaration. Customs_ Party. Party
     *  The authority responsible for processing this customs declaration
     *  0..1
     *  Customs Declaration
     *  Customs
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty
     * @return self
     */
    public function setCustomsParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CustomsParty $customsParty = null)
    {
        $this->customsParty = $customsParty;
        return $this;
    }

    /**
     * Gets as previousCustomsDeclaration
     *
     * ASBIE
     *  Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previous version of this customs declaration
     *  0..1
     *  Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration
     */
    public function getPreviousCustomsDeclaration()
    {
        return $this->previousCustomsDeclaration;
    }

    /**
     * Sets a new previousCustomsDeclaration
     *
     * ASBIE
     *  Customs Declaration. Previous_ Customs Declaration. Customs Declaration
     *  A reference to a previous version of this customs declaration
     *  0..1
     *  Customs Declaration
     *  Previous
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration
     * @return self
     */
    public function setPreviousCustomsDeclaration(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PreviousCustomsDeclaration $previousCustomsDeclaration = null)
    {
        $this->previousCustomsDeclaration = $previousCustomsDeclaration;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Customs Declaration. Additional_ Document Reference. Document Reference
     *  A reference to additional documents relevant or related to this customs declaration
     *  0..n
     *  Customs Declaration
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(?array $additionalDocumentReference = null)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }
}

