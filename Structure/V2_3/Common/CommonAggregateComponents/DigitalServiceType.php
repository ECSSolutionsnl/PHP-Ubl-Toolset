<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DigitalServiceType
 *
 * ABIE
 *  Digital Service. Details
 *  A class to describe a specific digital trade service supported by an organization for either sending or receiving business documents on different formats (e.g. UBL, ISO20022, EDIFACT, ...).
 *  Digital Service
 *  Business Transaction
 * XSD Type: DigitalServiceType
 */
class DigitalServiceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Service. Identifier
     *  An identifier for the digital service (aka transaction ID).
     *  0..1
     *  Digital Service
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Digital Service. Customization Identifier. Identifier
     *  Identifies a user-defined customization of this digital service (e.g. a PEPPOL customization).
     *  0..1
     *  Digital Service
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0:extended:urn:www.peppol.eu:bis:peppol5a:ver2.0
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDocumentMetadata[] $digitalDocumentMetadata
     */
    private $digitalDocumentMetadata = [
        
    ];

    /**
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDeliveryChannel[] $digitalDeliveryChannel
     */
    private $digitalDeliveryChannel = [
        
    ];

    /**
     * ASBIE
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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
     *  Digital Service. Identifier
     *  An identifier for the digital service (aka transaction ID).
     *  0..1
     *  Digital Service
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0
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
     *  Digital Service. Identifier
     *  An identifier for the digital service (aka transaction ID).
     *  0..1
     *  Digital Service
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0
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
     * Gets as customizationID
     *
     * BBIE
     *  Digital Service. Customization Identifier. Identifier
     *  Identifies a user-defined customization of this digital service (e.g. a PEPPOL customization).
     *  0..1
     *  Digital Service
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0:extended:urn:www.peppol.eu:bis:peppol5a:ver2.0
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Digital Service. Customization Identifier. Identifier
     *  Identifies a user-defined customization of this digital service (e.g. a PEPPOL customization).
     *  0..1
     *  Digital Service
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  urn:www.cenbii.eu:transaction:biitrns010:ver2.0:extended:urn:www.peppol.eu:bis:peppol5a:ver2.0
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CustomizationID $customizationID = null)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Adds as digitalDocumentMetadata
     *
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDocumentMetadata $digitalDocumentMetadata
     */
    public function addToDigitalDocumentMetadata(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDocumentMetadata $digitalDocumentMetadata)
    {
        $this->digitalDocumentMetadata[] = $digitalDocumentMetadata;
        return $this;
    }

    /**
     * isset digitalDocumentMetadata
     *
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDigitalDocumentMetadata($index)
    {
        return isset($this->digitalDocumentMetadata[$index]);
    }

    /**
     * unset digitalDocumentMetadata
     *
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDigitalDocumentMetadata($index)
    {
        unset($this->digitalDocumentMetadata[$index]);
    }

    /**
     * Gets as digitalDocumentMetadata
     *
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDocumentMetadata[]
     */
    public function getDigitalDocumentMetadata()
    {
        return $this->digitalDocumentMetadata;
    }

    /**
     * Sets a new digitalDocumentMetadata
     *
     * ASBIE
     *  Digital Service. Digital_ Document Metadata. Document Metadata
     *  The digital document metadata associated with this digital service.
     *  1..n
     *  Digital Service
     *  Digital
     *  Document Metadata
     *  Document Metadata
     *  Document Metadata
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDocumentMetadata[] $digitalDocumentMetadata
     * @return self
     */
    public function setDigitalDocumentMetadata(array $digitalDocumentMetadata)
    {
        $this->digitalDocumentMetadata = $digitalDocumentMetadata;
        return $this;
    }

    /**
     * Adds as digitalDeliveryChannel
     *
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDeliveryChannel $digitalDeliveryChannel
     */
    public function addToDigitalDeliveryChannel(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDeliveryChannel $digitalDeliveryChannel)
    {
        $this->digitalDeliveryChannel[] = $digitalDeliveryChannel;
        return $this;
    }

    /**
     * isset digitalDeliveryChannel
     *
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDigitalDeliveryChannel($index)
    {
        return isset($this->digitalDeliveryChannel[$index]);
    }

    /**
     * unset digitalDeliveryChannel
     *
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDigitalDeliveryChannel($index)
    {
        unset($this->digitalDeliveryChannel[$index]);
    }

    /**
     * Gets as digitalDeliveryChannel
     *
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDeliveryChannel[]
     */
    public function getDigitalDeliveryChannel()
    {
        return $this->digitalDeliveryChannel;
    }

    /**
     * Sets a new digitalDeliveryChannel
     *
     * ASBIE
     *  Digital Service. Digital_ Delivery Channel. Delivery Channel
     *  The digital delivery channel associated with this digital service.
     *  0..n
     *  Digital Service
     *  Digital
     *  Delivery Channel
     *  Delivery Channel
     *  Delivery Channel
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalDeliveryChannel[] $digitalDeliveryChannel
     * @return self
     */
    public function setDigitalDeliveryChannel(?array $digitalDeliveryChannel = null)
    {
        $this->digitalDeliveryChannel = $digitalDeliveryChannel;
        return $this;
    }

    /**
     * Adds as certificationDocumentReference
     *
     * ASBIE
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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
     *  Digital Service. Certification_ Document Reference. Document Reference
     *  A reference to a certification document associated with this digital service.
     *  0..n
     *  Digital Service
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

