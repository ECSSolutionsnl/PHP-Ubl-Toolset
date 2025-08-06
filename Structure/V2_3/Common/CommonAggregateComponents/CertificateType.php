<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CertificateType
 *
 * ABIE
 *  Certificate. Details
 *  A class to define a certificate applied to the item. Certificated can be a requirement to sell goods or services in a jurisdiction.
 *  Certificate
 * XSD Type: CertificateType
 */
class CertificateType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  0..1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateTypeCode $certificateTypeCode
     */
    private $certificateTypeCode = null;

    /**
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateType[] $certificateType
     */
    private $certificateType = [
        
    ];

    /**
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  0..1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
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
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
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
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
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
     * Gets as certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  0..1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateTypeCode
     */
    public function getCertificateTypeCode()
    {
        return $this->certificateTypeCode;
    }

    /**
     * Sets a new certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  0..1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateTypeCode $certificateTypeCode
     * @return self
     */
    public function setCertificateTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateTypeCode $certificateTypeCode = null)
    {
        $this->certificateTypeCode = $certificateTypeCode;
        return $this;
    }

    /**
     * Adds as certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateType $certificateType
     */
    public function addToCertificateType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateType $certificateType)
    {
        $this->certificateType[] = $certificateType;
        return $this;
    }

    /**
     * isset certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificateType($index)
    {
        return isset($this->certificateType[$index]);
    }

    /**
     * unset certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificateType($index)
    {
        unset($this->certificateType[$index]);
    }

    /**
     * Gets as certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateType[]
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a text.
     *  0..n
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CertificateType[] $certificateType
     * @return self
     */
    public function setCertificateType(?array $certificateType = null)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks $remarks
     */
    public function addToRemarks(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  0..1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  0..1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(?array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

