<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ResponseType
 *
 * ABIE
 *  Response. Details
 *  A class to describe an application-level response to a document.
 *  Response
 * XSD Type: ResponseType
 */
class ResponseType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReferenceID $referenceID
     */
    private $referenceID = null;

    /**
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $effectiveTime
     */
    private $effectiveTime = null;

    /**
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Status[] $status
     */
    private $status = [
        
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
     * Gets as referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReferenceID
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * BBIE
     *  Response. Reference. Identifier
     *  An identifier for the section (or line) of the document to which this response applies.
     *  0..1
     *  Response
     *  Reference
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReferenceID $referenceID
     * @return self
     */
    public function setReferenceID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ReferenceID $referenceID = null)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets a new responseCode
     *
     * BBIE
     *  Response. Response Code. Code
     *  A code signifying the type of response.
     *  0..1
     *  Response
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode
     * @return self
     */
    public function setResponseCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode = null)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     *  Response. Description. Text
     *  Text describing this response.
     *  0..n
     *  Response
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
     * Gets as effectiveDate
     *
     * BBIE
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * BBIE
     *  Response. Effective Date. Date
     *  The date upon which this response is valid.
     *  0..1
     *  Response
     *  Effective Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(?\DateTime $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as effectiveTime
     *
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    /**
     * Sets a new effectiveTime
     *
     * BBIE
     *  Response. Effective Time. Time
     *  The time at which this response is valid.
     *  0..1
     *  Response
     *  Effective Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $effectiveTime
     * @return self
     */
    public function setEffectiveTime(?\DateTime $effectiveTime = null)
    {
        $this->effectiveTime = $effectiveTime;
        return $this;
    }

    /**
     * Adds as status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Status $status
     */
    public function addToStatus(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * ASBIE
     *  Response. Status
     *  A status report associated with this response.
     *  0..n
     *  Response
     *  Status
     *  Status
     *  Status
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\Status[] $status
     * @return self
     */
    public function setStatus(?array $status = null)
    {
        $this->status = $status;
        return $this;
    }
}

