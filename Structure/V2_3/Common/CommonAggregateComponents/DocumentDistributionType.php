<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DocumentDistributionType
 *
 * ABIE
 *  Document Distribution. Details
 *  A class to describe the distribution of a document to an interested party.
 *  Document Distribution
 * XSD Type: DocumentDistributionType
 */
class DocumentDistributionType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Document Distribution. Identifier
     *  An identifier for this document distribution.
     *  0..1
     *  Document Distribution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Document Distribution. Distribution Type Code. Code
     *  The type of distribution, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Distribution Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionTypeCode $distributionTypeCode
     */
    private $distributionTypeCode = null;

    /**
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionType[] $distributionType
     */
    private $distributionType = [
        
    ];

    /**
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party’s rights and limitations for distributing originals and copies of this document.
     *  0..1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrintQualifier $printQualifier
     */
    private $printQualifier = null;

    /**
     * BBIE
     *  Document Distribution. Copy_ Indicator. Indicator
     *  An indicator that the document in this ditribution is a copy (true) or the original (false).
     *  0..1
     *  Document Distribution
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric
     */
    private $maximumCopiesNumeric = null;

    /**
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumOriginalsNumeric $maximumOriginalsNumeric
     */
    private $maximumOriginalsNumeric = null;

    /**
     * ASBIE
     *  Document Distribution. Communication
     *  A Communication used for this document distribution.
     *  0..1
     *  Document Distribution
     *  Communication
     *  Communication
     *  Communication
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Communication $communication
     */
    private $communication = null;

    /**
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Party $party
     */
    private $party = null;

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
     *  Document Distribution. Identifier
     *  An identifier for this document distribution.
     *  0..1
     *  Document Distribution
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
     *  Document Distribution. Identifier
     *  An identifier for this document distribution.
     *  0..1
     *  Document Distribution
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
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
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
     *  Document Distribution. Document Type Code. Code
     *  The type of document, expressed as a code.
     *  0..1
     *  Document Distribution
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

    /**
     * Gets as distributionTypeCode
     *
     * BBIE
     *  Document Distribution. Distribution Type Code. Code
     *  The type of distribution, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Distribution Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionTypeCode
     */
    public function getDistributionTypeCode()
    {
        return $this->distributionTypeCode;
    }

    /**
     * Sets a new distributionTypeCode
     *
     * BBIE
     *  Document Distribution. Distribution Type Code. Code
     *  The type of distribution, expressed as a code.
     *  0..1
     *  Document Distribution
     *  Distribution Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionTypeCode $distributionTypeCode
     * @return self
     */
    public function setDistributionTypeCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionTypeCode $distributionTypeCode = null)
    {
        $this->distributionTypeCode = $distributionTypeCode;
        return $this;
    }

    /**
     * Adds as distributionType
     *
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionType $distributionType
     */
    public function addToDistributionType(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionType $distributionType)
    {
        $this->distributionType[] = $distributionType;
        return $this;
    }

    /**
     * isset distributionType
     *
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionType($index)
    {
        return isset($this->distributionType[$index]);
    }

    /**
     * unset distributionType
     *
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionType($index)
    {
        unset($this->distributionType[$index]);
    }

    /**
     * Gets as distributionType
     *
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionType[]
     */
    public function getDistributionType()
    {
        return $this->distributionType;
    }

    /**
     * Sets a new distributionType
     *
     * BBIE
     *  Document Distribution. Distribution Type. Text
     *  The type of distribution, expressed as text.
     *  0..n
     *  Document Distribution
     *  Distribution Type
     *  Text
     *  Text. Type
     *  "Collect", "Sent by courier", "Sent scanned copy"
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\DistributionType[] $distributionType
     * @return self
     */
    public function setDistributionType(?array $distributionType = null)
    {
        $this->distributionType = $distributionType;
        return $this;
    }

    /**
     * Gets as printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party’s rights and limitations for distributing originals and copies of this document.
     *  0..1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrintQualifier
     */
    public function getPrintQualifier()
    {
        return $this->printQualifier;
    }

    /**
     * Sets a new printQualifier
     *
     * BBIE
     *  Document Distribution. Print_ Qualifier. Text
     *  Text describing the interested party’s rights and limitations for distributing originals and copies of this document.
     *  0..1
     *  Document Distribution
     *  Print
     *  Qualifier
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrintQualifier $printQualifier
     * @return self
     */
    public function setPrintQualifier(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PrintQualifier $printQualifier = null)
    {
        $this->printQualifier = $printQualifier;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Document Distribution. Copy_ Indicator. Indicator
     *  An indicator that the document in this ditribution is a copy (true) or the original (false).
     *  0..1
     *  Document Distribution
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Document Distribution. Copy_ Indicator. Indicator
     *  An indicator that the document in this ditribution is a copy (true) or the original (false).
     *  0..1
     *  Document Distribution
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumCopiesNumeric
     */
    public function getMaximumCopiesNumeric()
    {
        return $this->maximumCopiesNumeric;
    }

    /**
     * Sets a new maximumCopiesNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Copies. Numeric
     *  The maximum number of printed copies of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Copies
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric
     * @return self
     */
    public function setMaximumCopiesNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumCopiesNumeric $maximumCopiesNumeric = null)
    {
        $this->maximumCopiesNumeric = $maximumCopiesNumeric;
        return $this;
    }

    /**
     * Gets as maximumOriginalsNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumOriginalsNumeric
     */
    public function getMaximumOriginalsNumeric()
    {
        return $this->maximumOriginalsNumeric;
    }

    /**
     * Sets a new maximumOriginalsNumeric
     *
     * BBIE
     *  Document Distribution. Maximum_ Originals. Numeric
     *  The maximum number of printed originals of the document that the interested party is allowed to make.
     *  0..1
     *  Document Distribution
     *  Maximum
     *  Originals
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumOriginalsNumeric $maximumOriginalsNumeric
     * @return self
     */
    public function setMaximumOriginalsNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\MaximumOriginalsNumeric $maximumOriginalsNumeric = null)
    {
        $this->maximumOriginalsNumeric = $maximumOriginalsNumeric;
        return $this;
    }

    /**
     * Gets as communication
     *
     * ASBIE
     *  Document Distribution. Communication
     *  A Communication used for this document distribution.
     *  0..1
     *  Document Distribution
     *  Communication
     *  Communication
     *  Communication
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Communication
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * ASBIE
     *  Document Distribution. Communication
     *  A Communication used for this document distribution.
     *  0..1
     *  Document Distribution
     *  Communication
     *  Communication
     *  Communication
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Communication $communication
     * @return self
     */
    public function setCommunication(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Communication $communication = null)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
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
     *  Document Distribution. Party
     *  The interested party to which the document should be distributed.
     *  1
     *  Document Distribution
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
}

