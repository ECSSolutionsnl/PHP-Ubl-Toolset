<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PropertyIdentificationType
 *
 * ABIE
 *  Property Identification. Details
 *  A class for assigning identifying information for a property
 *  Property Identification
 * XSD Type: PropertyIdentificationType
 */
class PropertyIdentificationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Property Identification. Identifier
     *  An Identifier for the property.
     *  1
     *  Property Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Property Identification. Issuer_ Scope Identifier. Identifier
     *  A scope within which the issuer has assigned this identifier.
     *  0..1
     *  Property Identification
     *  Issuer
     *  Scope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IssuerScopeID $issuerScopeID
     */
    private $issuerScopeID = null;

    /**
     * ASBIE
     *  Property Identification. Issuer_ Party. Party
     *  The party that issued this property identifier.
     *  0..1
     *  Property Identification
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

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
     *  Property Identification. Identifier
     *  An Identifier for the property.
     *  1
     *  Property Identification
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
     *  Property Identification. Identifier
     *  An Identifier for the property.
     *  1
     *  Property Identification
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
     * Gets as issuerScopeID
     *
     * BBIE
     *  Property Identification. Issuer_ Scope Identifier. Identifier
     *  A scope within which the issuer has assigned this identifier.
     *  0..1
     *  Property Identification
     *  Issuer
     *  Scope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IssuerScopeID
     */
    public function getIssuerScopeID()
    {
        return $this->issuerScopeID;
    }

    /**
     * Sets a new issuerScopeID
     *
     * BBIE
     *  Property Identification. Issuer_ Scope Identifier. Identifier
     *  A scope within which the issuer has assigned this identifier.
     *  0..1
     *  Property Identification
     *  Issuer
     *  Scope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IssuerScopeID $issuerScopeID
     * @return self
     */
    public function setIssuerScopeID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IssuerScopeID $issuerScopeID = null)
    {
        $this->issuerScopeID = $issuerScopeID;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Property Identification. Issuer_ Party. Party
     *  The party that issued this property identifier.
     *  0..1
     *  Property Identification
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
     *  Property Identification. Issuer_ Party. Party
     *  The party that issued this property identifier.
     *  0..1
     *  Property Identification
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
}

