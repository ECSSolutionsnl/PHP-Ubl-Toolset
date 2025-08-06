<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\SignatureAggregateComponents;

/**
 * Class representing SignatureInformationType
 *
 * ABIE
 *  Signature Information. Details
 *  This class captures a single signature and optionally associates to a signature in the document with the corresponding identifier.
 *  Signature Information
 * XSD Type: SignatureInformationType
 */
class SignatureInformationType
{
    /**
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     */
    private $referencedSignatureID = null;

    /**
     * This is a single digital signature as defined by the W3C specification.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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
     * Gets as referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\SignatureBasicComponents\ReferencedSignatureID
     */
    public function getReferencedSignatureID()
    {
        return $this->referencedSignatureID;
    }

    /**
     * Sets a new referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     * @return self
     */
    public function setReferencedSignatureID(?\ECSSolutions\UblToolset\Structure\V2_1\Common\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID = null)
    {
        $this->referencedSignatureID = $referencedSignatureID;
        return $this;
    }

    /**
     * Gets as signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature
     * @return self
     */
    public function setSignature(?\ECSSolutions\UblToolset\Structure\V2_1\Common\XmldsigCoreSchema\Signature $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

