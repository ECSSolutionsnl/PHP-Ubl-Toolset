<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing PartyType
 *
 * ABIE
 *  Party. Details
 *  A class to describe an organization, sub-organization, or individual fulfilling a role in a business process.
 *  Party
 * XSD Type: PartyType
 */
class PartyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markCareIndicator
     */
    private $markCareIndicator = null;

    /**
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markAttentionIndicator
     */
    private $markAttentionIndicator = null;

    /**
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebsiteURI $websiteURI
     */
    private $websiteURI = null;

    /**
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID
     */
    private $logoReferenceID = null;

    /**
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointID $endpointID
     */
    private $endpointID = null;

    /**
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode
     */
    private $industryClassificationCode = null;

    /**
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     */
    private $partyIdentification = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyName[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     */
    private $language = null;

    /**
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostalAddress $postalAddress
     */
    private $postalAddress = null;

    /**
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     */
    private $partyTaxScheme = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     */
    private $partyLegalEntity = [
        
    ];

    /**
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person[] $person
     */
    private $person = [
        
    ];

    /**
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     */
    private $serviceProviderParty = [
        
    ];

    /**
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     */
    private $powerOfAttorney = [
        
    ];

    /**
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyAuthorization[] $partyAuthorization
     */
    private $partyAuthorization = [
        
    ];

    /**
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalWebSite[] $additionalWebSite
     */
    private $additionalWebSite = [
        
    ];

    /**
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SocialMediaProfile[] $socialMediaProfile
     */
    private $socialMediaProfile = [
        
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
     * Gets as markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkCareIndicator()
    {
        return $this->markCareIndicator;
    }

    /**
     * Sets a new markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markCareIndicator
     * @return self
     */
    public function setMarkCareIndicator($markCareIndicator)
    {
        $this->markCareIndicator = $markCareIndicator;
        return $this;
    }

    /**
     * Gets as markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkAttentionIndicator()
    {
        return $this->markAttentionIndicator;
    }

    /**
     * Sets a new markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markAttentionIndicator
     * @return self
     */
    public function setMarkAttentionIndicator($markAttentionIndicator)
    {
        $this->markAttentionIndicator = $markAttentionIndicator;
        return $this;
    }

    /**
     * Gets as websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebsiteURI
     */
    public function getWebsiteURI()
    {
        return $this->websiteURI;
    }

    /**
     * Sets a new websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebsiteURI $websiteURI
     * @return self
     */
    public function setWebsiteURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebsiteURI $websiteURI = null)
    {
        $this->websiteURI = $websiteURI;
        return $this;
    }

    /**
     * Gets as logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LogoReferenceID
     */
    public function getLogoReferenceID()
    {
        return $this->logoReferenceID;
    }

    /**
     * Sets a new logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID
     * @return self
     */
    public function setLogoReferenceID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\LogoReferenceID $logoReferenceID = null)
    {
        $this->logoReferenceID = $logoReferenceID;
        return $this;
    }

    /**
     * Gets as endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointID
     */
    public function getEndpointID()
    {
        return $this->endpointID;
    }

    /**
     * Sets a new endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointID $endpointID
     * @return self
     */
    public function setEndpointID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointID $endpointID = null)
    {
        $this->endpointID = $endpointID;
        return $this;
    }

    /**
     * Gets as industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IndustryClassificationCode
     */
    public function getIndustryClassificationCode()
    {
        return $this->industryClassificationCode;
    }

    /**
     * Sets a new industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode
     * @return self
     */
    public function setIndustryClassificationCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\IndustryClassificationCode $industryClassificationCode = null)
    {
        $this->industryClassificationCode = $industryClassificationCode;
        return $this;
    }

    /**
     * Adds as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyIdentification $partyIdentification
     */
    public function addToPartyIdentification(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyIdentification $partyIdentification)
    {
        $this->partyIdentification[] = $partyIdentification;
        return $this;
    }

    /**
     * isset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyIdentification($index)
    {
        return isset($this->partyIdentification[$index]);
    }

    /**
     * unset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyIdentification($index)
    {
        unset($this->partyIdentification[$index]);
    }

    /**
     * Gets as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyIdentification[]
     */
    public function getPartyIdentification()
    {
        return $this->partyIdentification;
    }

    /**
     * Sets a new partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     * @return self
     */
    public function setPartyIdentification(?array $partyIdentification = null)
    {
        $this->partyIdentification = $partyIdentification;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyName $partyName
     */
    public function addToPartyName(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyName $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyName[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyName[] $partyName
     * @return self
     */
    public function setPartyName(?array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     * @return self
     */
    public function setLanguage(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostalAddress $postalAddress
     * @return self
     */
    public function setPostalAddress(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PostalAddress $postalAddress = null)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PhysicalLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PhysicalLocation $physicalLocation = null)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Adds as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme
     */
    public function addToPartyTaxScheme(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme)
    {
        $this->partyTaxScheme[] = $partyTaxScheme;
        return $this;
    }

    /**
     * isset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyTaxScheme($index)
    {
        return isset($this->partyTaxScheme[$index]);
    }

    /**
     * unset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyTaxScheme($index)
    {
        unset($this->partyTaxScheme[$index]);
    }

    /**
     * Gets as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyTaxScheme[]
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * Sets a new partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     * @return self
     */
    public function setPartyTaxScheme(?array $partyTaxScheme = null)
    {
        $this->partyTaxScheme = $partyTaxScheme;
        return $this;
    }

    /**
     * Adds as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity
     */
    public function addToPartyLegalEntity(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity)
    {
        $this->partyLegalEntity[] = $partyLegalEntity;
        return $this;
    }

    /**
     * isset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyLegalEntity($index)
    {
        return isset($this->partyLegalEntity[$index]);
    }

    /**
     * unset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyLegalEntity($index)
    {
        unset($this->partyLegalEntity[$index]);
    }

    /**
     * Gets as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyLegalEntity[]
     */
    public function getPartyLegalEntity()
    {
        return $this->partyLegalEntity;
    }

    /**
     * Sets a new partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     * @return self
     */
    public function setPartyLegalEntity(?array $partyLegalEntity = null)
    {
        $this->partyLegalEntity = $partyLegalEntity;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contact $contact
     * @return self
     */
    public function setContact(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person $person
     */
    public function addToPerson(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Person[] $person
     * @return self
     */
    public function setPerson(?array $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgentParty
     */
    public function getAgentParty()
    {
        return $this->agentParty;
    }

    /**
     * Sets a new agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgentParty $agentParty
     * @return self
     */
    public function setAgentParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AgentParty $agentParty = null)
    {
        $this->agentParty = $agentParty;
        return $this;
    }

    /**
     * Adds as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty
     */
    public function addToServiceProviderParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty)
    {
        $this->serviceProviderParty[] = $serviceProviderParty;
        return $this;
    }

    /**
     * isset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderParty($index)
    {
        return isset($this->serviceProviderParty[$index]);
    }

    /**
     * unset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderParty($index)
    {
        unset($this->serviceProviderParty[$index]);
    }

    /**
     * Gets as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceProviderParty[]
     */
    public function getServiceProviderParty()
    {
        return $this->serviceProviderParty;
    }

    /**
     * Sets a new serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     * @return self
     */
    public function setServiceProviderParty(?array $serviceProviderParty = null)
    {
        $this->serviceProviderParty = $serviceProviderParty;
        return $this;
    }

    /**
     * Adds as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney
     */
    public function addToPowerOfAttorney(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney)
    {
        $this->powerOfAttorney[] = $powerOfAttorney;
        return $this;
    }

    /**
     * isset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPowerOfAttorney($index)
    {
        return isset($this->powerOfAttorney[$index]);
    }

    /**
     * unset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPowerOfAttorney($index)
    {
        unset($this->powerOfAttorney[$index]);
    }

    /**
     * Gets as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PowerOfAttorney[]
     */
    public function getPowerOfAttorney()
    {
        return $this->powerOfAttorney;
    }

    /**
     * Sets a new powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     * @return self
     */
    public function setPowerOfAttorney(?array $powerOfAttorney = null)
    {
        $this->powerOfAttorney = $powerOfAttorney;
        return $this;
    }

    /**
     * Adds as partyAuthorization
     *
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyAuthorization $partyAuthorization
     */
    public function addToPartyAuthorization(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyAuthorization $partyAuthorization)
    {
        $this->partyAuthorization[] = $partyAuthorization;
        return $this;
    }

    /**
     * isset partyAuthorization
     *
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyAuthorization($index)
    {
        return isset($this->partyAuthorization[$index]);
    }

    /**
     * unset partyAuthorization
     *
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyAuthorization($index)
    {
        unset($this->partyAuthorization[$index]);
    }

    /**
     * Gets as partyAuthorization
     *
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyAuthorization[]
     */
    public function getPartyAuthorization()
    {
        return $this->partyAuthorization;
    }

    /**
     * Sets a new partyAuthorization
     *
     * ASBIE
     *  Party. Party_ Authorization. Authorization
     *  An authorization issued to this party
     *  0..n
     *  Party
     *  Party
     *  Authorization
     *  Authorization
     *  Authorization
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\PartyAuthorization[] $partyAuthorization
     * @return self
     */
    public function setPartyAuthorization(?array $partyAuthorization = null)
    {
        $this->partyAuthorization = $partyAuthorization;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\FinancialAccount $financialAccount = null)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }

    /**
     * Adds as additionalWebSite
     *
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalWebSite $additionalWebSite
     */
    public function addToAdditionalWebSite(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalWebSite $additionalWebSite)
    {
        $this->additionalWebSite[] = $additionalWebSite;
        return $this;
    }

    /**
     * isset additionalWebSite
     *
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalWebSite($index)
    {
        return isset($this->additionalWebSite[$index]);
    }

    /**
     * unset additionalWebSite
     *
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalWebSite($index)
    {
        unset($this->additionalWebSite[$index]);
    }

    /**
     * Gets as additionalWebSite
     *
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalWebSite[]
     */
    public function getAdditionalWebSite()
    {
        return $this->additionalWebSite;
    }

    /**
     * Sets a new additionalWebSite
     *
     * ASBIE
     *  Party. Additional_ Web Site. Web Site
     *  An additional web site associated with this party (e.g. a satellite web site).
     *  0..n
     *  Party
     *  Additional
     *  Web Site
     *  Web Site
     *  Web Site
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdditionalWebSite[] $additionalWebSite
     * @return self
     */
    public function setAdditionalWebSite(?array $additionalWebSite = null)
    {
        $this->additionalWebSite = $additionalWebSite;
        return $this;
    }

    /**
     * Adds as socialMediaProfile
     *
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SocialMediaProfile $socialMediaProfile
     */
    public function addToSocialMediaProfile(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SocialMediaProfile $socialMediaProfile)
    {
        $this->socialMediaProfile[] = $socialMediaProfile;
        return $this;
    }

    /**
     * isset socialMediaProfile
     *
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocialMediaProfile($index)
    {
        return isset($this->socialMediaProfile[$index]);
    }

    /**
     * unset socialMediaProfile
     *
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocialMediaProfile($index)
    {
        unset($this->socialMediaProfile[$index]);
    }

    /**
     * Gets as socialMediaProfile
     *
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SocialMediaProfile[]
     */
    public function getSocialMediaProfile()
    {
        return $this->socialMediaProfile;
    }

    /**
     * Sets a new socialMediaProfile
     *
     * ASBIE
     *  Party. Social Media Profile
     *  A social media profile associated with this party.
     *  0..n
     *  Party
     *  Social Media Profile
     *  Social Media Profile
     *  Social Media Profile
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SocialMediaProfile[] $socialMediaProfile
     * @return self
     */
    public function setSocialMediaProfile(?array $socialMediaProfile = null)
    {
        $this->socialMediaProfile = $socialMediaProfile;
        return $this;
    }
}

