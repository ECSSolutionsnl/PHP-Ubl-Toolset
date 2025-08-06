<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EncryptionDataType
 *
 * ABIE
 *  Encryption Data. Details
 *  Details of an encryption process
 *  Encryption Data
 * XSD Type: EncryptionDataType
 */
class EncryptionDataType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MessageFormat $messageFormat
     */
    private $messageFormat = null;

    /**
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificateAttachment $encryptionCertificateAttachment
     */
    private $encryptionCertificateAttachment = null;

    /**
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificatePathChain[] $encryptionCertificatePathChain
     */
    private $encryptionCertificatePathChain = [
        
    ];

    /**
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionSymmetricAlgorithm[] $encryptionSymmetricAlgorithm
     */
    private $encryptionSymmetricAlgorithm = [
        
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
     * Gets as messageFormat
     *
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MessageFormat
     */
    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    /**
     * Sets a new messageFormat
     *
     * BBIE
     *  Encryption Data. Message Format. Text
     *  The format of the encrypted message.
     *  1
     *  Encryption Data
     *  Message Format
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MessageFormat $messageFormat
     * @return self
     */
    public function setMessageFormat(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MessageFormat $messageFormat)
    {
        $this->messageFormat = $messageFormat;
        return $this;
    }

    /**
     * Gets as encryptionCertificateAttachment
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificateAttachment
     */
    public function getEncryptionCertificateAttachment()
    {
        return $this->encryptionCertificateAttachment;
    }

    /**
     * Sets a new encryptionCertificateAttachment
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate_ Attachment. Attachment
     *  A reference to the certificate used in the encryption process.
     *  0..1
     *  Encryption Data
     *  Encryption Certificate
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificateAttachment $encryptionCertificateAttachment
     * @return self
     */
    public function setEncryptionCertificateAttachment(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificateAttachment $encryptionCertificateAttachment = null)
    {
        $this->encryptionCertificateAttachment = $encryptionCertificateAttachment;
        return $this;
    }

    /**
     * Adds as encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificatePathChain $encryptionCertificatePathChain
     */
    public function addToEncryptionCertificatePathChain(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificatePathChain $encryptionCertificatePathChain)
    {
        $this->encryptionCertificatePathChain[] = $encryptionCertificatePathChain;
        return $this;
    }

    /**
     * isset encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncryptionCertificatePathChain($index)
    {
        return isset($this->encryptionCertificatePathChain[$index]);
    }

    /**
     * unset encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncryptionCertificatePathChain($index)
    {
        unset($this->encryptionCertificatePathChain[$index]);
    }

    /**
     * Gets as encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificatePathChain[]
     */
    public function getEncryptionCertificatePathChain()
    {
        return $this->encryptionCertificatePathChain;
    }

    /**
     * Sets a new encryptionCertificatePathChain
     *
     * ASBIE
     *  Encryption Data. Encryption Certificate Path Chain
     *  A reference to the path chain defined for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *  Encryption Certificate Path Chain
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionCertificatePathChain[] $encryptionCertificatePathChain
     * @return self
     */
    public function setEncryptionCertificatePathChain(?array $encryptionCertificatePathChain = null)
    {
        $this->encryptionCertificatePathChain = $encryptionCertificatePathChain;
        return $this;
    }

    /**
     * Adds as encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionSymmetricAlgorithm $encryptionSymmetricAlgorithm
     */
    public function addToEncryptionSymmetricAlgorithm(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionSymmetricAlgorithm $encryptionSymmetricAlgorithm)
    {
        $this->encryptionSymmetricAlgorithm[] = $encryptionSymmetricAlgorithm;
        return $this;
    }

    /**
     * isset encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncryptionSymmetricAlgorithm($index)
    {
        return isset($this->encryptionSymmetricAlgorithm[$index]);
    }

    /**
     * unset encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncryptionSymmetricAlgorithm($index)
    {
        unset($this->encryptionSymmetricAlgorithm[$index]);
    }

    /**
     * Gets as encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionSymmetricAlgorithm[]
     */
    public function getEncryptionSymmetricAlgorithm()
    {
        return $this->encryptionSymmetricAlgorithm;
    }

    /**
     * Sets a new encryptionSymmetricAlgorithm
     *
     * ASBIE
     *  Encryption Data. Encryption Symmetric Algorithm
     *  A reference to the symmetric algorithm used for the encryption process.
     *  0..n
     *  Encryption Data
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *  Encryption Symmetric Algorithm
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EncryptionSymmetricAlgorithm[] $encryptionSymmetricAlgorithm
     * @return self
     */
    public function setEncryptionSymmetricAlgorithm(?array $encryptionSymmetricAlgorithm = null)
    {
        $this->encryptionSymmetricAlgorithm = $encryptionSymmetricAlgorithm;
        return $this;
    }
}

