<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ParticipantPartyType
 *
 * ABIE
 *  Participant Party. Details
 *  A class to describe a participant party.
 *  Participant Party
 * XSD Type: ParticipantPartyType
 */
class ParticipantPartyType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $initiatingPartyIndicator
     */
    private $initiatingPartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $privatePartyIndicator
     */
    private $privatePartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $publicPartyIndicator
     */
    private $publicPartyIndicator = null;

    /**
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $serviceProviderPartyIndicator
     */
    private $serviceProviderPartyIndicator = null;

    /**
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalContact $legalContact
     */
    private $legalContact = null;

    /**
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalContact $technicalContact
     */
    private $technicalContact = null;

    /**
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupportContact $supportContact
     */
    private $supportContact = null;

    /**
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommercialContact $commercialContact
     */
    private $commercialContact = null;

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
     * Gets as initiatingPartyIndicator
     *
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getInitiatingPartyIndicator()
    {
        return $this->initiatingPartyIndicator;
    }

    /**
     * Sets a new initiatingPartyIndicator
     *
     * BBIE
     *  Participant Party. Initiating Party_ Indicator. Indicator
     *  An indicator that this party is playing the role of the initiator within a transaction (true) or not (false).
     *  0..1
     *  Participant Party
     *  Initiating Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $initiatingPartyIndicator
     * @return self
     */
    public function setInitiatingPartyIndicator($initiatingPartyIndicator)
    {
        $this->initiatingPartyIndicator = $initiatingPartyIndicator;
        return $this;
    }

    /**
     * Gets as privatePartyIndicator
     *
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrivatePartyIndicator()
    {
        return $this->privatePartyIndicator;
    }

    /**
     * Sets a new privatePartyIndicator
     *
     * BBIE
     *  Participant Party. Private Party_ Indicator. Indicator
     *  An indicator that this party is a private entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Private Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $privatePartyIndicator
     * @return self
     */
    public function setPrivatePartyIndicator($privatePartyIndicator)
    {
        $this->privatePartyIndicator = $privatePartyIndicator;
        return $this;
    }

    /**
     * Gets as publicPartyIndicator
     *
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPublicPartyIndicator()
    {
        return $this->publicPartyIndicator;
    }

    /**
     * Sets a new publicPartyIndicator
     *
     * BBIE
     *  Participant Party. Public Party_ Indicator. Indicator
     *  An indicator that this party is a public (governmental) entity (true) or not (false).
     *  0..1
     *  Participant Party
     *  Public Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $publicPartyIndicator
     * @return self
     */
    public function setPublicPartyIndicator($publicPartyIndicator)
    {
        $this->publicPartyIndicator = $publicPartyIndicator;
        return $this;
    }

    /**
     * Gets as serviceProviderPartyIndicator
     *
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getServiceProviderPartyIndicator()
    {
        return $this->serviceProviderPartyIndicator;
    }

    /**
     * Sets a new serviceProviderPartyIndicator
     *
     * BBIE
     *  Participant Party. Service Provider Party_ Indicator. Indicator
     *  An indicator that this party is a service provider (true) or not (false).
     *  0..1
     *  Participant Party
     *  Service Provider Party
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $serviceProviderPartyIndicator
     * @return self
     */
    public function setServiceProviderPartyIndicator($serviceProviderPartyIndicator)
    {
        $this->serviceProviderPartyIndicator = $serviceProviderPartyIndicator;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Participant Party. Party
     *  The participant party itself.
     *  1
     *  Participant Party
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as legalContact
     *
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalContact
     */
    public function getLegalContact()
    {
        return $this->legalContact;
    }

    /**
     * Sets a new legalContact
     *
     * ASBIE
     *  Participant Party. Legal_ Contact. Contact
     *  A legal contact associated to this participant for sending legal notices.
     *  0..1
     *  Participant Party
     *  Legal
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalContact $legalContact
     * @return self
     */
    public function setLegalContact(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\LegalContact $legalContact = null)
    {
        $this->legalContact = $legalContact;
        return $this;
    }

    /**
     * Gets as technicalContact
     *
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalContact
     */
    public function getTechnicalContact()
    {
        return $this->technicalContact;
    }

    /**
     * Sets a new technicalContact
     *
     * ASBIE
     *  Participant Party. Technical_ Contact. Contact
     *  A technical contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Technical
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalContact $technicalContact
     * @return self
     */
    public function setTechnicalContact(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\TechnicalContact $technicalContact = null)
    {
        $this->technicalContact = $technicalContact;
        return $this;
    }

    /**
     * Gets as supportContact
     *
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupportContact
     */
    public function getSupportContact()
    {
        return $this->supportContact;
    }

    /**
     * Sets a new supportContact
     *
     * ASBIE
     *  Participant Party. Support_ Contact. Contact
     *  A support contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Support
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupportContact $supportContact
     * @return self
     */
    public function setSupportContact(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SupportContact $supportContact = null)
    {
        $this->supportContact = $supportContact;
        return $this;
    }

    /**
     * Gets as commercialContact
     *
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommercialContact
     */
    public function getCommercialContact()
    {
        return $this->commercialContact;
    }

    /**
     * Sets a new commercialContact
     *
     * ASBIE
     *  Participant Party. Commercial_ Contact. Contact
     *  A commercial contact associated to this participant.
     *  0..1
     *  Participant Party
     *  Commercial
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommercialContact $commercialContact
     * @return self
     */
    public function setCommercialContact(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CommercialContact $commercialContact = null)
    {
        $this->commercialContact = $commercialContact;
        return $this;
    }
}

