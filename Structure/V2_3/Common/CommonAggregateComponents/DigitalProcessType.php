<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DigitalProcessType
 *
 * ABIE
 *  Digital Process. Details
 *  A class to describe a digital trade process.
 *  Digital Process
 *  Business Process
 * XSD Type: DigitalProcessType
 */
class DigitalProcessType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCollaboration[] $digitalCollaboration
     */
    private $digitalCollaboration = [
        
    ];

    /**
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificationDocumentReference[] $certificationDocumentReference
     */
    private $certificationDocumentReference = [
        
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
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
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
     *  Digital Process. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Process
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
     * Adds as description
     *
     * BBIE
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     *  Digital Process. Description. Text
     *  Text describing the digital process.
     *  0..n
     *  Digital Process
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
     * Gets as profileID
     *
     * BBIE
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Digital Process. Profile Identifier. Identifier
     *  Identifies a user-defined profile of this digital process (e.g. an UBL profile).
     *  0..1
     *  Digital Process
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:profile:bii05:ver2.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID
     * @return self
     */
    public function setProfileID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProfileID $profileID = null)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Adds as digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCollaboration $digitalCollaboration
     */
    public function addToDigitalCollaboration(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCollaboration $digitalCollaboration)
    {
        $this->digitalCollaboration[] = $digitalCollaboration;
        return $this;
    }

    /**
     * isset digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDigitalCollaboration($index)
    {
        return isset($this->digitalCollaboration[$index]);
    }

    /**
     * unset digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDigitalCollaboration($index)
    {
        unset($this->digitalCollaboration[$index]);
    }

    /**
     * Gets as digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCollaboration[]
     */
    public function getDigitalCollaboration()
    {
        return $this->digitalCollaboration;
    }

    /**
     * Sets a new digitalCollaboration
     *
     * ASBIE
     *  Digital Process. Digital Collaboration
     *  The digital collaboration associated with this digital process.
     *  0..n
     *  Digital Process
     *  Digital Collaboration
     *  Digital Collaboration
     *  Digital Collaboration
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCollaboration[] $digitalCollaboration
     * @return self
     */
    public function setDigitalCollaboration(?array $digitalCollaboration = null)
    {
        $this->digitalCollaboration = $digitalCollaboration;
        return $this;
    }

    /**
     * Adds as certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificationDocumentReference $certificationDocumentReference
     */
    public function addToCertificationDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificationDocumentReference $certificationDocumentReference)
    {
        $this->certificationDocumentReference[] = $certificationDocumentReference;
        return $this;
    }

    /**
     * isset certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertificationDocumentReference($index)
    {
        return isset($this->certificationDocumentReference[$index]);
    }

    /**
     * unset certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertificationDocumentReference($index)
    {
        unset($this->certificationDocumentReference[$index]);
    }

    /**
     * Gets as certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificationDocumentReference[]
     */
    public function getCertificationDocumentReference()
    {
        return $this->certificationDocumentReference;
    }

    /**
     * Sets a new certificationDocumentReference
     *
     * ASBIE
     *  Digital Process. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital process.
     *  0..n
     *  Digital Process
     *  Certification
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CertificationDocumentReference[] $certificationDocumentReference
     * @return self
     */
    public function setCertificationDocumentReference(?array $certificationDocumentReference = null)
    {
        $this->certificationDocumentReference = $certificationDocumentReference;
        return $this;
    }
}

