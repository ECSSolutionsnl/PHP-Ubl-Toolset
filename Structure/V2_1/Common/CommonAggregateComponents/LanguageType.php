<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing LanguageType
 *
 * ABIE
 *  Language. Details
 *  A class to describe a language.
 *  Language
 * XSD Type: LanguageType
 */
class LanguageType
{
    /**
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for this language.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Language. Name
     *  The name of this language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  A code signifying the locale in which this language is used.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\LocaleCode $localeCode = null)
    {
        $this->localeCode = $localeCode;
        return $this;
    }
}

