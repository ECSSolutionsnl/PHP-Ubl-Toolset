<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing AuthorizationType
 *
 * ABIE
 *  Authorization. Details
 *  A class to define an authorization that as been issued
 *  Authorization
 * XSD Type: AuthorizationType
 */
class AuthorizationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Authorization. Purpose_ Code. Code
     *  A code defining the business purpose or scope of this authorization
     *  0..1
     *  Authorization
     *  Purpose
     *  Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode
     */
    private $purposeCode = null;

    /**
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[] $purpose
     */
    private $purpose = [
        
    ];

    /**
     * ASBIE
     *  Authorization. Validity_ Period. Period
     *  The period during which this authorization is valid
     *  0..1
     *  Authorization
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
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[] $certificate
     */
    private $certificate = [
        
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
     * Gets as purposeCode
     *
     * BBIE
     *  Authorization. Purpose_ Code. Code
     *  A code defining the business purpose or scope of this authorization
     *  0..1
     *  Authorization
     *  Purpose
     *  Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode
     */
    public function getPurposeCode()
    {
        return $this->purposeCode;
    }

    /**
     * Sets a new purposeCode
     *
     * BBIE
     *  Authorization. Purpose_ Code. Code
     *  A code defining the business purpose or scope of this authorization
     *  0..1
     *  Authorization
     *  Purpose
     *  Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode
     * @return self
     */
    public function setPurposeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PurposeCode $purposeCode = null)
    {
        $this->purposeCode = $purposeCode;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose $purpose
     */
    public function addToPurpose(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurpose($index)
    {
        return isset($this->purpose[$index]);
    }

    /**
     * unset purpose
     *
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurpose($index)
    {
        unset($this->purpose[$index]);
    }

    /**
     * Gets as purpose
     *
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * BBIE
     *  Authorization. Purpose. Text
     *  The purpose or scope of this authorization expressed as a text
     *  0..n
     *  Authorization
     *  Purpose
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Purpose[] $purpose
     * @return self
     */
    public function setPurpose(?array $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Authorization. Validity_ Period. Period
     *  The period during which this authorization is valid
     *  0..1
     *  Authorization
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
     *  Authorization. Validity_ Period. Period
     *  The period during which this authorization is valid
     *  0..1
     *  Authorization
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
     * Adds as certificate
     *
     * ASBIE
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate $certificate
     */
    public function addToCertificate(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate $certificate)
    {
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * isset certificate
     *
     * ASBIE
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificate($index)
    {
        return isset($this->certificate[$index]);
    }

    /**
     * unset certificate
     *
     * ASBIE
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificate($index)
    {
        unset($this->certificate[$index]);
    }

    /**
     * Gets as certificate
     *
     * ASBIE
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Sets a new certificate
     *
     * ASBIE
     *  Authorization. Certificate
     *  One or more certificates related to this authorization
     *  0..n
     *  Authorization
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Certificate[] $certificate
     * @return self
     */
    public function setCertificate(?array $certificate = null)
    {
        $this->certificate = $certificate;
        return $this;
    }
}

