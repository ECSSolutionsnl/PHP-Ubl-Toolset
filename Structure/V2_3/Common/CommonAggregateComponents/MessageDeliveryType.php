<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing MessageDeliveryType
 *
 * ABIE
 *  Message Delivery. Details
 *  A class to describe how a message is delivered (routed).
 *  Message Delivery
 * XSD Type: MessageDeliveryType
 */
class MessageDeliveryType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProtocolID $protocolID
     */
    private $protocolID = null;

    /**
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EnvelopeTypeCode $envelopeTypeCode
     */
    private $envelopeTypeCode = null;

    /**
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointURI $endpointURI
     */
    private $endpointURI = null;

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
     * Gets as protocolID
     *
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProtocolID
     */
    public function getProtocolID()
    {
        return $this->protocolID;
    }

    /**
     * Sets a new protocolID
     *
     * BBIE
     *  Message Delivery. Protocol Identifier. Identifier
     *  An identifier for the protocol to be used within this message delivery.
     *  0..1
     *  Message Delivery
     *  Protocol Identifier
     *  Identifier
     *  Identifier. Type
     *  AS2, ebMS2, AS4, WS-RM
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProtocolID $protocolID
     * @return self
     */
    public function setProtocolID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ProtocolID $protocolID = null)
    {
        $this->protocolID = $protocolID;
        return $this;
    }

    /**
     * Gets as envelopeTypeCode
     *
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EnvelopeTypeCode
     */
    public function getEnvelopeTypeCode()
    {
        return $this->envelopeTypeCode;
    }

    /**
     * Sets a new envelopeTypeCode
     *
     * BBIE
     *  Message Delivery. Envelope Type Code. Code
     *  A code signifying the type of envelope to be used within this message delivery (e.g. OASIS BDX Business Document Envelope).
     *  0..1
     *  Message Delivery
     *  Envelope Type Code
     *  Code
     *  Code. Type
     *  BDE
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EnvelopeTypeCode $envelopeTypeCode
     * @return self
     */
    public function setEnvelopeTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EnvelopeTypeCode $envelopeTypeCode = null)
    {
        $this->envelopeTypeCode = $envelopeTypeCode;
        return $this;
    }

    /**
     * Gets as endpointURI
     *
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointURI
     */
    public function getEndpointURI()
    {
        return $this->endpointURI;
    }

    /**
     * Sets a new endpointURI
     *
     * BBIE
     *  Message Delivery. Endpoint URI. Identifier
     *  The Uniform Resource Identifier (URI) of the access point (e.g. an HTTP URL including the port).
     *  0..1
     *  Message Delivery
     *  Endpoint URI
     *  Identifier
     *  Identifier. Type
     *  https://services.enterprise.com/participant-id/rx
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointURI $endpointURI
     * @return self
     */
    public function setEndpointURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EndpointURI $endpointURI = null)
    {
        $this->endpointURI = $endpointURI;
        return $this;
    }
}

