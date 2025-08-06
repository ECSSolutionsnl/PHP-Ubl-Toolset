<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DigitalCollaborationType
 *
 * ABIE
 *  Digital Collaboration. Details
 *  A class to describe a digital trade collaboration.
 *  Digital Collaboration
 *  Business Collaboration
 * XSD Type: DigitalCollaborationType
 */
class DigitalCollaborationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingDigitalService $sendingDigitalService
     */
    private $sendingDigitalService = null;

    /**
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceivingDigitalService $receivingDigitalService
     */
    private $receivingDigitalService = null;

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
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
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
     *  Digital Collaboration. Identifier
     *  An identifier for the digital collaboration.
     *  0..1
     *  Digital Collaboration
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
     * Gets as sendingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingDigitalService
     */
    public function getSendingDigitalService()
    {
        return $this->sendingDigitalService;
    }

    /**
     * Sets a new sendingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Sending_ Digital Service. Digital Service
     *  The sending digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Sending
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingDigitalService $sendingDigitalService
     * @return self
     */
    public function setSendingDigitalService(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SendingDigitalService $sendingDigitalService = null)
    {
        $this->sendingDigitalService = $sendingDigitalService;
        return $this;
    }

    /**
     * Gets as receivingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceivingDigitalService
     */
    public function getReceivingDigitalService()
    {
        return $this->receivingDigitalService;
    }

    /**
     * Sets a new receivingDigitalService
     *
     * ASBIE
     *  Digital Collaboration. Receiving_ Digital Service. Digital Service
     *  The receiving digital service associated with this digital collaboration.
     *  0..1
     *  Digital Collaboration
     *  Receiving
     *  Digital Service
     *  Digital Service
     *  Digital Service
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceivingDigitalService $receivingDigitalService
     * @return self
     */
    public function setReceivingDigitalService(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ReceivingDigitalService $receivingDigitalService = null)
    {
        $this->receivingDigitalService = $receivingDigitalService;
        return $this;
    }
}

