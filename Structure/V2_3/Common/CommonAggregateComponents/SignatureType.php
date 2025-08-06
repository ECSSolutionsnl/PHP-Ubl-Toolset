<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing SignatureType
 *
 * ABIE
 *  Signature. Details
 *  A class to define a signature.
 *  Signature
 * XSD Type: SignatureType
 */
class SignatureType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature. Reason. Code
     *  A code defining the reason or purpose of this signature
     *  0..1
     *  Signature
     *  Reason
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReasonCode $reasonCode
     */
    private $reasonCode = null;

    /**
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     */
    private $digitalSignatureAttachment = null;

    /**
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     */
    private $originalDocumentReference = null;

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
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
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
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     * @return self
     */
    public function setID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as reasonCode
     *
     * BBIE
     *  Signature. Reason. Code
     *  A code defining the reason or purpose of this signature
     *  0..1
     *  Signature
     *  Reason
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReasonCode
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * BBIE
     *  Signature. Reason. Code
     *  A code defining the reason or purpose of this signature
     *  0..1
     *  Signature
     *  Reason
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReasonCode $reasonCode
     * @return self
     */
    public function setReasonCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReasonCode $reasonCode = null)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(?\DateTime $validationDate = null)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(?\DateTime $validationTime = null)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validatorID
     *
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID = null)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CanonicalizationMethod $canonicalizationMethod = null)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SignatureMethod $signatureMethod = null)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty = null)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }

    /**
     * Gets as digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachment()
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * Sets a new digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment = null)
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;
        return $this;
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference = null)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }
}

