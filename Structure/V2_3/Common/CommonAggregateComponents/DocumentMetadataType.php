<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DocumentMetadataType
 *
 * ABIE
 *  Document Metadata. Details
 *  A class to describe the metadata of a specific business document based on any document format (e.g. UBL, EDIFACT, ...).
 *  Document Metadata
 * XSD Type: DocumentMetadataType
 */
class DocumentMetadataType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatID $formatID
     */
    private $formatID = null;

    /**
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SchemaURI $schemaURI
     */
    private $schemaURI = null;

    /**
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

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
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
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
     *  Document Metadata. Identifier
     *  An identifier for the document.
     *  0..1
     *  Document Metadata
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
     * Gets as formatID
     *
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatID
     */
    public function getFormatID()
    {
        return $this->formatID;
    }

    /**
     * Sets a new formatID
     *
     * BBIE
     *  Document Metadata. Format Identifier. Identifier
     *  An identifier for the document format (e.g. standard business vocabularies).
     *  1
     *  Document Metadata
     *  Format Identifier
     *  Identifier
     *  Identifier. Type
     *  UBL, ISO20022, EDIFACT
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatID $formatID
     * @return self
     */
    public function setFormatID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\FormatID $formatID)
    {
        $this->formatID = $formatID;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Document Metadata. Version Identifier. Identifier
     *  An identifier for a precise version of a document format.
     *  1
     *  Document Metadata
     *  Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.2
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID
     * @return self
     */
    public function setVersionID(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as schemaURI
     *
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SchemaURI
     */
    public function getSchemaURI()
    {
        return $this->schemaURI;
    }

    /**
     * Sets a new schemaURI
     *
     * BBIE
     *  Document Metadata. Schema URI. Identifier
     *  The Uniform Resource Identifier (URI) of a schema definition for the business document (e.g. a namespace URI for XML schemas, a message ID for non-xml legacy documents).
     *  0..1
     *  Document Metadata
     *  Schema URI
     *  Identifier
     *  Identifier. Type
     *  urn:oasis:names:specification:ubl:schema:xsd:Invoice-2, INVOIC
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SchemaURI $schemaURI
     * @return self
     */
    public function setSchemaURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\SchemaURI $schemaURI = null)
    {
        $this->schemaURI = $schemaURI;
        return $this;
    }

    /**
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Metadata. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Metadata
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode = null)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }
}

