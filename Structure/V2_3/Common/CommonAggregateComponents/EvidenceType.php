<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing EvidenceType
 *
 * ABIE
 *  Evidence. Details
 *  A class to describe an item of evidentiary support for representations of capabilities or the ability to meet tendering requirements, which an economic operator must provide for acceptance into a tendering process.
 *  Evidence
 * XSD Type: EvidenceType
 */
class EvidenceType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvidenceTypeCode $evidenceTypeCode
     */
    private $evidenceTypeCode = null;

    /**
     * BBIE
     *  Evidence. Name
     *  The name of the evidence.
     *  0..1
     *  Evidence
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CandidateStatement[] $candidateStatement
     */
    private $candidateStatement = [
        
    ];

    /**
     * BBIE
     *  Evidence. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of this evidence.
     *  0..1
     *  Evidence
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode
     */
    private $confidentialityLevelCode = null;

    /**
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceIssuingParty $evidenceIssuingParty
     */
    private $evidenceIssuingParty = null;

    /**
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     */
    private $language = null;

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
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
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
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
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
     * Gets as evidenceTypeCode
     *
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvidenceTypeCode
     */
    public function getEvidenceTypeCode()
    {
        return $this->evidenceTypeCode;
    }

    /**
     * Sets a new evidenceTypeCode
     *
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvidenceTypeCode $evidenceTypeCode
     * @return self
     */
    public function setEvidenceTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EvidenceTypeCode $evidenceTypeCode = null)
    {
        $this->evidenceTypeCode = $evidenceTypeCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Evidence. Name
     *  The name of the evidence.
     *  0..1
     *  Evidence
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
     *  Evidence. Name
     *  The name of the evidence.
     *  0..1
     *  Evidence
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
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
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
     * Adds as candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CandidateStatement $candidateStatement
     */
    public function addToCandidateStatement(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CandidateStatement $candidateStatement)
    {
        $this->candidateStatement[] = $candidateStatement;
        return $this;
    }

    /**
     * isset candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCandidateStatement($index)
    {
        return isset($this->candidateStatement[$index]);
    }

    /**
     * unset candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCandidateStatement($index)
    {
        unset($this->candidateStatement[$index]);
    }

    /**
     * Gets as candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CandidateStatement[]
     */
    public function getCandidateStatement()
    {
        return $this->candidateStatement;
    }

    /**
     * Sets a new candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\CandidateStatement[] $candidateStatement
     * @return self
     */
    public function setCandidateStatement(?array $candidateStatement = null)
    {
        $this->candidateStatement = $candidateStatement;
        return $this;
    }

    /**
     * Gets as confidentialityLevelCode
     *
     * BBIE
     *  Evidence. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of this evidence.
     *  0..1
     *  Evidence
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode
     */
    public function getConfidentialityLevelCode()
    {
        return $this->confidentialityLevelCode;
    }

    /**
     * Sets a new confidentialityLevelCode
     *
     * BBIE
     *  Evidence. Confidentiality Level Code. Code
     *  A code specifying the confidentiality level of this evidence.
     *  0..1
     *  Evidence
     *  Confidentiality Level Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode
     * @return self
     */
    public function setConfidentialityLevelCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ConfidentialityLevelCode $confidentialityLevelCode = null)
    {
        $this->confidentialityLevelCode = $confidentialityLevelCode;
        return $this;
    }

    /**
     * Gets as evidenceIssuingParty
     *
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceIssuingParty
     */
    public function getEvidenceIssuingParty()
    {
        return $this->evidenceIssuingParty;
    }

    /**
     * Sets a new evidenceIssuingParty
     *
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceIssuingParty $evidenceIssuingParty
     * @return self
     */
    public function setEvidenceIssuingParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\EvidenceIssuingParty $evidenceIssuingParty = null)
    {
        $this->evidenceIssuingParty = $evidenceIssuingParty;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..n
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language
     * @return self
     */
    public function setLanguage(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Language $language = null)
    {
        $this->language = $language;
        return $this;
    }
}

