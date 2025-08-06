<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing EndorserPartyType
 *
 * ABIE
 *  Endorser Party. Details
 *  A class to describe the party endorsing a document.
 *  Endorser Party
 * XSD Type: EndorserPartyType
 */
class EndorserPartyType
{
    /**
     * BBIE
     *  Endorser Party. Role Code. Code
     *  A code specifying the role of the party providing the endorsement (e.g., issuer, embassy, insurance, etc.).
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * BBIE
     *  Endorser Party. Sequence. Numeric
     *  A number indicating the order of the endorsement provided by this party in the sequence in which endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * ASBIE
     *  Endorser Party. Party
     *  The party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  The individual representing the exporter who signs the Certificate of Origin application before submitting it to the issuer party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SignatoryContact $signatoryContact
     */
    private $signatoryContact = null;

    /**
     * Gets as roleCode
     *
     * BBIE
     *  Endorser Party. Role Code. Code
     *  A code specifying the role of the party providing the endorsement (e.g., issuer, embassy, insurance, etc.).
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * BBIE
     *  Endorser Party. Role Code. Code
     *  A code specifying the role of the party providing the endorsement (e.g., issuer, embassy, insurance, etc.).
     *  1
     *  Endorser Party
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\RoleCode $roleCode)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Endorser Party. Sequence. Numeric
     *  A number indicating the order of the endorsement provided by this party in the sequence in which endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Endorser Party. Sequence. Numeric
     *  A number indicating the order of the endorsement provided by this party in the sequence in which endorsements are to be applied.
     *  1
     *  Endorser Party
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Endorser Party. Party
     *  The party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Endorser Party. Party
     *  The party endorsing the application.
     *  1
     *  Endorser Party
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as signatoryContact
     *
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  The individual representing the exporter who signs the Certificate of Origin application before submitting it to the issuer party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SignatoryContact
     */
    public function getSignatoryContact()
    {
        return $this->signatoryContact;
    }

    /**
     * Sets a new signatoryContact
     *
     * ASBIE
     *  Endorser Party. Signatory_ Contact. Contact
     *  The individual representing the exporter who signs the Certificate of Origin application before submitting it to the issuer party.
     *  1
     *  Endorser Party
     *  Signatory
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SignatoryContact $signatoryContact
     * @return self
     */
    public function setSignatoryContact(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\SignatoryContact $signatoryContact)
    {
        $this->signatoryContact = $signatoryContact;
        return $this;
    }
}

