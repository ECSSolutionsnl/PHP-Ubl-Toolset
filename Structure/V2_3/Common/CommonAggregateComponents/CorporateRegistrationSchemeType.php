<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CorporateRegistrationSchemeType
 *
 * ABIE
 *  Corporate Registration Scheme. Details
 *  A class to describe a scheme for corporate registration.
 *  Corporate Registration Scheme
 * XSD Type: CorporateRegistrationSchemeType
 */
class CorporateRegistrationSchemeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     */
    private $corporateRegistrationTypeCode = null;

    /**
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
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
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
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
     *  Corporate Registration Scheme. Identifier
     *  An identifier for this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ASIC in Australia
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
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
     *  Corporate Registration Scheme. Name
     *  The name of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Australian Securities and Investment Commission in Australia
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
     * Gets as corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CorporateRegistrationTypeCode
     */
    public function getCorporateRegistrationTypeCode()
    {
        return $this->corporateRegistrationTypeCode;
    }

    /**
     * Sets a new corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  A code signifying the type of this registration scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  ACN
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     * @return self
     */
    public function setCorporateRegistrationTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CorporateRegistrationTypeCode $corporateRegistrationTypeCode = null)
    {
        $this->corporateRegistrationTypeCode = $corporateRegistrationTypeCode;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this registration scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *  England , Wales
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(?array $jurisdictionRegionAddress = null)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }
}

