<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing SignedSignaturePropertiesType
 *
 *
 * XSD Type: SignedSignaturePropertiesType
 */
class SignedSignaturePropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $signingTime
     */
    private $signingTime = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDType[] $signingCertificate
     */
    private $signingCertificate = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $signingCertificateV2
     */
    private $signingCertificateV2 = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignaturePolicyIdentifier $signaturePolicyIdentifier
     */
    private $signaturePolicyIdentifier = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlace $signatureProductionPlace
     */
    private $signatureProductionPlace = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlaceV2 $signatureProductionPlaceV2
     */
    private $signatureProductionPlaceV2 = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRole $signerRole
     */
    private $signerRole = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRoleV2 $signerRoleV2
     */
    private $signerRoleV2 = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signingTime
     *
     * @return \DateTime
     */
    public function getSigningTime()
    {
        return $this->signingTime;
    }

    /**
     * Sets a new signingTime
     *
     * @param \DateTime $signingTime
     * @return self
     */
    public function setSigningTime(?\DateTime $signingTime = null)
    {
        $this->signingTime = $signingTime;
        return $this;
    }

    /**
     * Adds as cert
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDType $cert
     */
    public function addToSigningCertificate(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDType $cert)
    {
        $this->signingCertificate[] = $cert;
        return $this;
    }

    /**
     * isset signingCertificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigningCertificate($index)
    {
        return isset($this->signingCertificate[$index]);
    }

    /**
     * unset signingCertificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigningCertificate($index)
    {
        unset($this->signingCertificate[$index]);
    }

    /**
     * Gets as signingCertificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDType[]
     */
    public function getSigningCertificate()
    {
        return $this->signingCertificate;
    }

    /**
     * Sets a new signingCertificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDType[] $signingCertificate
     * @return self
     */
    public function setSigningCertificate(?array $signingCertificate = null)
    {
        $this->signingCertificate = $signingCertificate;
        return $this;
    }

    /**
     * Adds as cert
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert
     */
    public function addToSigningCertificateV2(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type $cert)
    {
        $this->signingCertificateV2[] = $cert;
        return $this;
    }

    /**
     * isset signingCertificateV2
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigningCertificateV2($index)
    {
        return isset($this->signingCertificateV2[$index]);
    }

    /**
     * unset signingCertificateV2
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigningCertificateV2($index)
    {
        unset($this->signingCertificateV2[$index]);
    }

    /**
     * Gets as signingCertificateV2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[]
     */
    public function getSigningCertificateV2()
    {
        return $this->signingCertificateV2;
    }

    /**
     * Sets a new signingCertificateV2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CertIDTypeV2Type[] $signingCertificateV2
     * @return self
     */
    public function setSigningCertificateV2(?array $signingCertificateV2 = null)
    {
        $this->signingCertificateV2 = $signingCertificateV2;
        return $this;
    }

    /**
     * Gets as signaturePolicyIdentifier
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignaturePolicyIdentifier
     */
    public function getSignaturePolicyIdentifier()
    {
        return $this->signaturePolicyIdentifier;
    }

    /**
     * Sets a new signaturePolicyIdentifier
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignaturePolicyIdentifier $signaturePolicyIdentifier
     * @return self
     */
    public function setSignaturePolicyIdentifier(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignaturePolicyIdentifier $signaturePolicyIdentifier = null)
    {
        $this->signaturePolicyIdentifier = $signaturePolicyIdentifier;
        return $this;
    }

    /**
     * Gets as signatureProductionPlace
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlace
     */
    public function getSignatureProductionPlace()
    {
        return $this->signatureProductionPlace;
    }

    /**
     * Sets a new signatureProductionPlace
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlace $signatureProductionPlace
     * @return self
     */
    public function setSignatureProductionPlace(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlace $signatureProductionPlace = null)
    {
        $this->signatureProductionPlace = $signatureProductionPlace;
        return $this;
    }

    /**
     * Gets as signatureProductionPlaceV2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlaceV2
     */
    public function getSignatureProductionPlaceV2()
    {
        return $this->signatureProductionPlaceV2;
    }

    /**
     * Sets a new signatureProductionPlaceV2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlaceV2 $signatureProductionPlaceV2
     * @return self
     */
    public function setSignatureProductionPlaceV2(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignatureProductionPlaceV2 $signatureProductionPlaceV2 = null)
    {
        $this->signatureProductionPlaceV2 = $signatureProductionPlaceV2;
        return $this;
    }

    /**
     * Gets as signerRole
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRole
     */
    public function getSignerRole()
    {
        return $this->signerRole;
    }

    /**
     * Sets a new signerRole
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRole $signerRole
     * @return self
     */
    public function setSignerRole(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRole $signerRole = null)
    {
        $this->signerRole = $signerRole;
        return $this;
    }

    /**
     * Gets as signerRoleV2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRoleV2
     */
    public function getSignerRoleV2()
    {
        return $this->signerRoleV2;
    }

    /**
     * Sets a new signerRoleV2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRoleV2 $signerRoleV2
     * @return self
     */
    public function setSignerRoleV2(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignerRoleV2 $signerRoleV2 = null)
    {
        $this->signerRoleV2 = $signerRoleV2;
        return $this;
    }
}

