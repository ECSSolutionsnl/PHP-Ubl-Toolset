<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  A class to describe a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value
     */
    private $value = null;

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
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ChannelCode $channelCode = null)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Channel $channel
     * @return self
     */
    public function setChannel(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Channel $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value
     * @return self
     */
    public function setValue(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }
}

