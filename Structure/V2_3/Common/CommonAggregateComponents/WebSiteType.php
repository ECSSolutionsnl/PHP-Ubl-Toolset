<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing WebSiteType
 *
 * ABIE
 *  Web Site. Details
 *  A class to describe a web site.
 *  Web Site
 * XSD Type: WebSiteType
 */
class WebSiteType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebSiteTypeCode $webSiteTypeCode
     */
    private $webSiteTypeCode = null;

    /**
     * BBIE
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WebSiteAccess[] $webSiteAccess
     */
    private $webSiteAccess = [
        
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
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
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
     *  Web Site. Identifier
     *  An identifier for a specific web site.
     *  0..1
     *  Web Site
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL
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
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
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
     *  Web Site. Name
     *  The common name of the web site.
     *  0..1
     *  Web Site
     *  Name
     *  Name
     *  Name. Type
     *  UBL Online Community
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
     * Adds as description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Web Site. Description. Text
     *  Text describing the web site.
     *  0..n
     *  Web Site
     *  Description
     *  Text
     *  Text. Type
     *  Online community for the Universal Business Language (UBL) OASIS Standard
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as webSiteTypeCode
     *
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebSiteTypeCode
     */
    public function getWebSiteTypeCode()
    {
        return $this->webSiteTypeCode;
    }

    /**
     * Sets a new webSiteTypeCode
     *
     * BBIE
     *  Web Site. Web Site Type Code. Code
     *  A code that specifies the type web site.
     *  0..1
     *  Web Site
     *  Web Site Type Code
     *  Code
     *  Code. Type
     *  Satellite, Portal, Operative, Industry, ...
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebSiteTypeCode $webSiteTypeCode
     * @return self
     */
    public function setWebSiteTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\WebSiteTypeCode $webSiteTypeCode = null)
    {
        $this->webSiteTypeCode = $webSiteTypeCode;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Web Site. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the web site; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Web Site
     *  URI
     *  Identifier
     *  Identifier. Type
     *  http://ubl.xml.org/
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Adds as webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WebSiteAccess $webSiteAccess
     */
    public function addToWebSiteAccess(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WebSiteAccess $webSiteAccess)
    {
        $this->webSiteAccess[] = $webSiteAccess;
        return $this;
    }

    /**
     * isset webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWebSiteAccess($index)
    {
        return isset($this->webSiteAccess[$index]);
    }

    /**
     * unset webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWebSiteAccess($index)
    {
        unset($this->webSiteAccess[$index]);
    }

    /**
     * Gets as webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WebSiteAccess[]
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * ASBIE
     *  Web Site. Web Site Access
     *  Access information for the website (e.g. guest credentials).
     *  0..n
     *  Web Site
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\WebSiteAccess[] $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(?array $webSiteAccess = null)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }
}

