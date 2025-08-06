<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DeliveryChannelType
 *
 * ABIE
 *  Delivery Channel. Details
 *  A class to describe a delivery channel.
 *  Delivery Channel
 * XSD Type: DeliveryChannelType
 */
class DeliveryChannelType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetworkID $networkID
     */
    private $networkID = null;

    /**
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParticipantID $participantID
     */
    private $participantID = null;

    /**
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $testIndicator
     */
    private $testIndicator = null;

    /**
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCertificate $digitalCertificate
     */
    private $digitalCertificate = null;

    /**
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalMessageDelivery $digitalMessageDelivery
     */
    private $digitalMessageDelivery = null;

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
     * Gets as networkID
     *
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetworkID
     */
    public function getNetworkID()
    {
        return $this->networkID;
    }

    /**
     * Sets a new networkID
     *
     * BBIE
     *  Delivery Channel. Network Identifier. Identifier
     *  An identifier for the network where messages are delivered (e.g. a business network).
     *  0..1
     *  Delivery Channel
     *  Network Identifier
     *  Identifier
     *  Identifier. Type
     *  OpenPEPPOL
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetworkID $networkID
     * @return self
     */
    public function setNetworkID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NetworkID $networkID = null)
    {
        $this->networkID = $networkID;
        return $this;
    }

    /**
     * Gets as participantID
     *
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParticipantID
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * BBIE
     *  Delivery Channel. Participant Identifier. Identifier
     *  An identifier for a registered participant in the network (e.g. according a precise scheme such as IT:VAT, DK:CVR, GLN).
     *  0..1
     *  Delivery Channel
     *  Participant Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParticipantID $participantID
     * @return self
     */
    public function setParticipantID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ParticipantID $participantID = null)
    {
        $this->participantID = $participantID;
        return $this;
    }

    /**
     * Gets as testIndicator
     *
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getTestIndicator()
    {
        return $this->testIndicator;
    }

    /**
     * Sets a new testIndicator
     *
     * BBIE
     *  Delivery Channel. Test_ Indicator. Indicator
     *  An indicator that the channel is a test channel (true).
     *  0..1
     *  Delivery Channel
     *  Test
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $testIndicator
     * @return self
     */
    public function setTestIndicator($testIndicator)
    {
        $this->testIndicator = $testIndicator;
        return $this;
    }

    /**
     * Gets as digitalCertificate
     *
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCertificate
     */
    public function getDigitalCertificate()
    {
        return $this->digitalCertificate;
    }

    /**
     * Sets a new digitalCertificate
     *
     * ASBIE
     *  Delivery Channel. Digital_ Certificate. Certificate
     *  A digital certificate associated with this delivery channel.
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Certificate
     *  Certificate
     *  Certificate
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCertificate $digitalCertificate
     * @return self
     */
    public function setDigitalCertificate(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalCertificate $digitalCertificate = null)
    {
        $this->digitalCertificate = $digitalCertificate;
        return $this;
    }

    /**
     * Gets as digitalMessageDelivery
     *
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalMessageDelivery
     */
    public function getDigitalMessageDelivery()
    {
        return $this->digitalMessageDelivery;
    }

    /**
     * Sets a new digitalMessageDelivery
     *
     * ASBIE
     *  Delivery Channel. Digital_ Message Delivery. Message Delivery
     *  A digital message delivery associated with this delivery channel (aka routing information).
     *  0..1
     *  Delivery Channel
     *  Digital
     *  Message Delivery
     *  Message Delivery
     *  Message Delivery
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalMessageDelivery $digitalMessageDelivery
     * @return self
     */
    public function setDigitalMessageDelivery(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DigitalMessageDelivery $digitalMessageDelivery = null)
    {
        $this->digitalMessageDelivery = $digitalMessageDelivery;
        return $this;
    }
}

