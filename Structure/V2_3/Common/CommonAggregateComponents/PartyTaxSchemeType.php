<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PartyTaxSchemeType
 *
 * ABIE
 *  Party Tax Scheme. Details
 *  A class to describe a taxation scheme applying to a party.
 *  Party Tax Scheme
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxLevelCode $taxLevelCode
     */
    private $taxLevelCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReasonCode $exemptionReasonCode
     */
    private $exemptionReasonCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReason[] $exemptionReason
     */
    private $exemptionReason = [
        
    ];

    /**
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

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
     * Gets as registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\RegistrationName $registrationName = null)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CompanyID $companyID = null)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxLevelCode
     */
    public function getTaxLevelCode()
    {
        return $this->taxLevelCode;
    }

    /**
     * Sets a new taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxLevelCode $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\TaxLevelCode $taxLevelCode = null)
    {
        $this->taxLevelCode = $taxLevelCode;
        return $this;
    }

    /**
     * Gets as exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReasonCode
     */
    public function getExemptionReasonCode()
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets a new exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReasonCode $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReasonCode $exemptionReasonCode = null)
    {
        $this->exemptionReasonCode = $exemptionReasonCode;
        return $this;
    }

    /**
     * Adds as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReason $exemptionReason
     */
    public function addToExemptionReason(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReason $exemptionReason)
    {
        $this->exemptionReason[] = $exemptionReason;
        return $this;
    }

    /**
     * isset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExemptionReason($index)
    {
        return isset($this->exemptionReason[$index]);
    }

    /**
     * unset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExemptionReason($index)
    {
        unset($this->exemptionReason[$index]);
    }

    /**
     * Gets as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReason[]
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * Sets a new exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ExemptionReason[] $exemptionReason
     * @return self
     */
    public function setExemptionReason(?array $exemptionReason = null)
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RegistrationAddress
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RegistrationAddress $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\RegistrationAddress $registrationAddress = null)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }
}

