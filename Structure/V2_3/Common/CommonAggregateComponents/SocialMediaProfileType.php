<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing SocialMediaProfileType
 *
 * ABIE
 *  Social Media Profile. Details
 *  A class to describe a social media profile.
 *  Social Media Profile
 * XSD Type: SocialMediaProfileType
 */
class SocialMediaProfileType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SocialMediaTypeCode $socialMediaTypeCode
     */
    private $socialMediaTypeCode = null;

    /**
     * BBIE
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

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
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
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
     *  Social Media Profile. Identifier
     *  An identifier for a specific social media.
     *  0..1
     *  Social Media Profile
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  FB
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
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
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
     *  Social Media Profile. Name
     *  The common name of the social media.
     *  0..1
     *  Social Media Profile
     *  Name
     *  Name
     *  Name. Type
     *  Facebook
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
     * Gets as socialMediaTypeCode
     *
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SocialMediaTypeCode
     */
    public function getSocialMediaTypeCode()
    {
        return $this->socialMediaTypeCode;
    }

    /**
     * Sets a new socialMediaTypeCode
     *
     * BBIE
     *  Social Media Profile. Social Media Type Code. Code
     *  A code that specifies the type of social media.
     *  0..1
     *  Social Media Profile
     *  Social Media Type Code
     *  Code
     *  Code. Type
     *  BusinessNetwork, SocialNetwork, ...
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SocialMediaTypeCode $socialMediaTypeCode
     * @return self
     */
    public function setSocialMediaTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SocialMediaTypeCode $socialMediaTypeCode = null)
    {
        $this->socialMediaTypeCode = $socialMediaTypeCode;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
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
     *  Social Media Profile. URI. Identifier
     *  The Uniform Resource Identifier (URI) of a party profile in the social media; i.e., its Uniform Resource Locator (URL).
     *  1
     *  Social Media Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  https://www.facebook.com/oasis.open/
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }
}

