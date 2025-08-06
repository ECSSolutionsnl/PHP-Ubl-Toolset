<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing LegislationType
 *
 * ABIE
 *  Legislation. Details
 *  A class to describe a reference to a piece of legislation.
 *  Legislation
 * XSD Type: LegislationType
 */
class LegislationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Title[] $title
     */
    private $title = [
        
    ];

    /**
     * BBIE
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\JurisdictionLevel[] $jurisdictionLevel
     */
    private $jurisdictionLevel = [
        
    ];

    /**
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Article[] $article
     */
    private $article = [
        
    ];

    /**
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI[] $uRI
     */
    private $uRI = [
        
    ];

    /**
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
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
     *  Legislation. Identifier
     *  An identifier to refer to the legislation.
     *  0..1
     *  Legislation
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Adds as title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Title $title
     */
    public function addToTitle(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Title $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Title[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Legislation. Title. Text
     *  The title of the legislation.
     *  0..n
     *  Legislation
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Title[] $title
     * @return self
     */
    public function setTitle(?array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
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
     *  Legislation. Description. Text
     *  The textual description of the legislation.
     *  0..n
     *  Legislation
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\JurisdictionLevel $jurisdictionLevel
     */
    public function addToJurisdictionLevel(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\JurisdictionLevel $jurisdictionLevel)
    {
        $this->jurisdictionLevel[] = $jurisdictionLevel;
        return $this;
    }

    /**
     * isset jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionLevel($index)
    {
        return isset($this->jurisdictionLevel[$index]);
    }

    /**
     * unset jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionLevel($index)
    {
        unset($this->jurisdictionLevel[$index]);
    }

    /**
     * Gets as jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\JurisdictionLevel[]
     */
    public function getJurisdictionLevel()
    {
        return $this->jurisdictionLevel;
    }

    /**
     * Sets a new jurisdictionLevel
     *
     * BBIE
     *  Legislation. Jurisdiction Level. Text
     *  The jurisdiction level for the legislation.
     *  0..n
     *  Legislation
     *  Jurisdiction Level
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\JurisdictionLevel[] $jurisdictionLevel
     * @return self
     */
    public function setJurisdictionLevel(?array $jurisdictionLevel = null)
    {
        $this->jurisdictionLevel = $jurisdictionLevel;
        return $this;
    }

    /**
     * Adds as article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Article $article
     */
    public function addToArticle(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Article $article)
    {
        $this->article[] = $article;
        return $this;
    }

    /**
     * isset article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticle($index)
    {
        return isset($this->article[$index]);
    }

    /**
     * unset article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticle($index)
    {
        unset($this->article[$index]);
    }

    /**
     * Gets as article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Article[]
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Sets a new article
     *
     * BBIE
     *  Legislation. Article. Text
     *  The article of the legislation.
     *  0..n
     *  Legislation
     *  Article
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Article[] $article
     * @return self
     */
    public function setArticle(?array $article = null)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * Adds as uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     */
    public function addToURI(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI)
    {
        $this->uRI[] = $uRI;
        return $this;
    }

    /**
     * isset uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURI($index)
    {
        return isset($this->uRI[$index]);
    }

    /**
     * unset uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURI($index)
    {
        unset($this->uRI[$index]);
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI[]
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Legislation. URI. Identifier
     *  A URI to the legislation.
     *  0..n
     *  Legislation
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI[] $uRI
     * @return self
     */
    public function setURI(?array $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Adds as language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     */
    public function addToLanguage(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Legislation. Language
     *  The language of the legislation.
     *  0..n
     *  Legislation
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language[] $language
     * @return self
     */
    public function setLanguage(?array $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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
     *  Legislation. Jurisdiction Region_ Address. Address
     *  The geopolitical region in which this legislation applies.
     *  0..n
     *  Legislation
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
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

