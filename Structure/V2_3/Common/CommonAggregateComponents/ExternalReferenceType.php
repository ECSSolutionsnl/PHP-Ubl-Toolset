<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ExternalReferenceType
 *
 * ABIE
 *  External Reference. Details
 *  A class to describe an external object, such as a document stored at a remote location.
 *  External Reference
 * XSD Type: ExternalReferenceType
 */
class ExternalReferenceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentHash $documentHash
     */
    private $documentHash = null;

    /**
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HashAlgorithmMethod $hashAlgorithmMethod
     */
    private $hashAlgorithmMethod = null;

    /**
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $expiryTime
     */
    private $expiryTime = null;

    /**
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MimeCode $mimeCode
     */
    private $mimeCode = null;

    /**
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatCode $formatCode
     */
    private $formatCode = null;

    /**
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EncodingCode $encodingCode
     */
    private $encodingCode = null;

    /**
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CharacterSetCode $characterSetCode
     */
    private $characterSetCode = null;

    /**
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FileName $fileName
     */
    private $fileName = null;

    /**
     * BBIE
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
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
     * Gets as uRI
     *
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
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
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI
     * @return self
     */
    public function setURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\URI $uRI = null)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentHash
     */
    public function getDocumentHash()
    {
        return $this->documentHash;
    }

    /**
     * Sets a new documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentHash $documentHash
     * @return self
     */
    public function setDocumentHash(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentHash $documentHash = null)
    {
        $this->documentHash = $documentHash;
        return $this;
    }

    /**
     * Gets as hashAlgorithmMethod
     *
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HashAlgorithmMethod
     */
    public function getHashAlgorithmMethod()
    {
        return $this->hashAlgorithmMethod;
    }

    /**
     * Sets a new hashAlgorithmMethod
     *
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HashAlgorithmMethod $hashAlgorithmMethod
     * @return self
     */
    public function setHashAlgorithmMethod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\HashAlgorithmMethod $hashAlgorithmMethod = null)
    {
        $this->hashAlgorithmMethod = $hashAlgorithmMethod;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(?\DateTime $expiryDate = null)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * Sets a new expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $expiryTime
     * @return self
     */
    public function setExpiryTime(?\DateTime $expiryTime = null)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }

    /**
     * Gets as mimeCode
     *
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MimeCode
     */
    public function getMimeCode()
    {
        return $this->mimeCode;
    }

    /**
     * Sets a new mimeCode
     *
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MimeCode $mimeCode
     * @return self
     */
    public function setMimeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MimeCode $mimeCode = null)
    {
        $this->mimeCode = $mimeCode;
        return $this;
    }

    /**
     * Gets as formatCode
     *
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatCode
     */
    public function getFormatCode()
    {
        return $this->formatCode;
    }

    /**
     * Sets a new formatCode
     *
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatCode $formatCode
     * @return self
     */
    public function setFormatCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatCode $formatCode = null)
    {
        $this->formatCode = $formatCode;
        return $this;
    }

    /**
     * Gets as encodingCode
     *
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EncodingCode
     */
    public function getEncodingCode()
    {
        return $this->encodingCode;
    }

    /**
     * Sets a new encodingCode
     *
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EncodingCode $encodingCode
     * @return self
     */
    public function setEncodingCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EncodingCode $encodingCode = null)
    {
        $this->encodingCode = $encodingCode;
        return $this;
    }

    /**
     * Gets as characterSetCode
     *
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CharacterSetCode
     */
    public function getCharacterSetCode()
    {
        return $this->characterSetCode;
    }

    /**
     * Sets a new characterSetCode
     *
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CharacterSetCode $characterSetCode
     * @return self
     */
    public function setCharacterSetCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CharacterSetCode $characterSetCode = null)
    {
        $this->characterSetCode = $characterSetCode;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FileName
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FileName $fileName
     * @return self
     */
    public function setFileName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FileName $fileName = null)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

