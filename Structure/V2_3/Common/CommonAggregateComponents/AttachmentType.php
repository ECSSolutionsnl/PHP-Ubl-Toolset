<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing AttachmentType
 *
 * ABIE
 *  Attachment. Details
 *  A class to describe an attached document. An attachment can refer to an external document or be included with the document being exchanged.
 *  Attachment
 * XSD Type: AttachmentType
 */
class AttachmentType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * BBIE
     *  Attachment. Embedded_ Document. Text
     *  A clear text object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocument $embeddedDocument
     */
    private $embeddedDocument = null;

    /**
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExternalReference $externalReference
     */
    private $externalReference = null;

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
     * Gets as embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject = null)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as embeddedDocument
     *
     * BBIE
     *  Attachment. Embedded_ Document. Text
     *  A clear text object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocument
     */
    public function getEmbeddedDocument()
    {
        return $this->embeddedDocument;
    }

    /**
     * Sets a new embeddedDocument
     *
     * BBIE
     *  Attachment. Embedded_ Document. Text
     *  A clear text object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocument $embeddedDocument
     * @return self
     */
    public function setEmbeddedDocument(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EmbeddedDocument $embeddedDocument = null)
    {
        $this->embeddedDocument = $embeddedDocument;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ExternalReference $externalReference = null)
    {
        $this->externalReference = $externalReference;
        return $this;
    }
}

