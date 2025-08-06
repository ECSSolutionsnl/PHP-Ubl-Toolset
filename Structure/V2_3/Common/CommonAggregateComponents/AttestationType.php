<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing AttestationType
 *
 * ABIE
 *  Attestation. Details
 *  A class describing an attestation made for an item
 *  Attestation
 * XSD Type: AttestationType
 */
class AttestationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Attestation. Identifier
     *  An identifier for this attestation.
     *  0..1
     *  Attestation
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Attestation. Name
     *  A name of this attestation.
     *  0..1
     *  Attestation
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Attestation. Acceptance Indicator. Indicator
     *  Indicates whether the attestation has been accepted or not.
     *  0..1
     *  Attestation
     *  Acceptance Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $acceptanceIndicator
     */
    private $acceptanceIndicator = null;

    /**
     * ASBIE
     *  Attestation. Validity_ Period. Period
     *  The period during which this attestation is valid
     *  0..1
     *  Attestation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Attestation. Issuer_ Party. Party
     *  The party issuing this attestation
     *  0..1
     *  Attestation
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AttestationLine[] $attestationLine
     */
    private $attestationLine = [
        
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
     *  Attestation. Identifier
     *  An identifier for this attestation.
     *  0..1
     *  Attestation
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
     *  Attestation. Identifier
     *  An identifier for this attestation.
     *  0..1
     *  Attestation
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
     * Gets as name
     *
     * BBIE
     *  Attestation. Name
     *  A name of this attestation.
     *  0..1
     *  Attestation
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Attestation. Name
     *  A name of this attestation.
     *  0..1
     *  Attestation
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     *  Attestation. Description. Text
     *  A textual description of this attestation.
     *  0..n
     *  Attestation
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
     * Adds as note
     *
     * BBIE
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note
     */
    public function addToNote(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Attestation. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Attestation
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as acceptanceIndicator
     *
     * BBIE
     *  Attestation. Acceptance Indicator. Indicator
     *  Indicates whether the attestation has been accepted or not.
     *  0..1
     *  Attestation
     *  Acceptance Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAcceptanceIndicator()
    {
        return $this->acceptanceIndicator;
    }

    /**
     * Sets a new acceptanceIndicator
     *
     * BBIE
     *  Attestation. Acceptance Indicator. Indicator
     *  Indicates whether the attestation has been accepted or not.
     *  0..1
     *  Attestation
     *  Acceptance Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $acceptanceIndicator
     * @return self
     */
    public function setAcceptanceIndicator($acceptanceIndicator)
    {
        $this->acceptanceIndicator = $acceptanceIndicator;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Attestation. Validity_ Period. Period
     *  The period during which this attestation is valid
     *  0..1
     *  Attestation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Attestation. Validity_ Period. Period
     *  The period during which this attestation is valid
     *  0..1
     *  Attestation
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Attestation. Issuer_ Party. Party
     *  The party issuing this attestation
     *  0..1
     *  Attestation
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Attestation. Issuer_ Party. Party
     *  The party issuing this attestation
     *  0..1
     *  Attestation
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Adds as attestationLine
     *
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AttestationLine $attestationLine
     */
    public function addToAttestationLine(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AttestationLine $attestationLine)
    {
        $this->attestationLine[] = $attestationLine;
        return $this;
    }

    /**
     * isset attestationLine
     *
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttestationLine($index)
    {
        return isset($this->attestationLine[$index]);
    }

    /**
     * unset attestationLine
     *
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttestationLine($index)
    {
        unset($this->attestationLine[$index]);
    }

    /**
     * Gets as attestationLine
     *
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AttestationLine[]
     */
    public function getAttestationLine()
    {
        return $this->attestationLine;
    }

    /**
     * Sets a new attestationLine
     *
     * ASBIE
     *  Attestation. Attestation Line
     *  An attestation or statement made and which forms part of this attestation
     *  1..n
     *  Attestation
     *  Attestation Line
     *  Attestation Line
     *  Attestation Line
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AttestationLine[] $attestationLine
     * @return self
     */
    public function setAttestationLine(array $attestationLine)
    {
        $this->attestationLine = $attestationLine;
        return $this;
    }
}

