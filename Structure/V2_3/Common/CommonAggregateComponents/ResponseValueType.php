<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ResponseValueType
 *
 * ABIE
 *  Response Value. Details
 *  A class to describe the criterion requirement response value.
 *  Response Value
 * XSD Type: ResponseValueType
 */
class ResponseValueType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Response[] $response
     */
    private $response = [
        
    ];

    /**
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseAmount $responseAmount
     */
    private $responseAmount = null;

    /**
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseBinaryObject $responseBinaryObject
     */
    private $responseBinaryObject = null;

    /**
     * BBIE
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseCode $responseCode
     */
    private $responseCode = null;

    /**
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $responseDate
     */
    private $responseDate = null;

    /**
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseID $responseID
     */
    private $responseID = null;

    /**
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $responseIndicator
     */
    private $responseIndicator = null;

    /**
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseMeasure $responseMeasure
     */
    private $responseMeasure = null;

    /**
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseNumeric $responseNumeric
     */
    private $responseNumeric = null;

    /**
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseQuantity $responseQuantity
     */
    private $responseQuantity = null;

    /**
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $responseTime
     */
    private $responseTime = null;

    /**
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseURI $responseURI
     */
    private $responseURI = null;

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
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
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
     *  Response Value. Identifier
     *  An identifier to refer to the criterion requirement response value.
     *  0..1
     *  Response Value
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
     * Adds as description
     *
     * BBIE
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     *  Response Value. Description. Text
     *  A description of the response value to the criterion requirement.
     *  0..n
     *  Response Value
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
     * Adds as response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Response $response
     */
    public function addToResponse(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Response $response)
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * isset response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponse($index)
    {
        return isset($this->response[$index]);
    }

    /**
     * unset response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponse($index)
    {
        unset($this->response[$index]);
    }

    /**
     * Gets as response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Response[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * BBIE
     *  Response Value. Response Text. Text
     *  A text or name used as a reply to the criterion requirement.
     *  0..n
     *  Response Value
     *  Response Text
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Response[] $response
     * @return self
     */
    public function setResponse(?array $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as responseAmount
     *
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseAmount
     */
    public function getResponseAmount()
    {
        return $this->responseAmount;
    }

    /**
     * Sets a new responseAmount
     *
     * BBIE
     *  Response Value. Response Amount. Amount
     *  An amount used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Amount
     *  Amount
     *  Amount. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseAmount $responseAmount
     * @return self
     */
    public function setResponseAmount(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseAmount $responseAmount = null)
    {
        $this->responseAmount = $responseAmount;
        return $this;
    }

    /**
     * Gets as responseBinaryObject
     *
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseBinaryObject
     */
    public function getResponseBinaryObject()
    {
        return $this->responseBinaryObject;
    }

    /**
     * Sets a new responseBinaryObject
     *
     * BBIE
     *  Response Value. Response Binary Object. Binary Object
     *  A binary graphic, picture, sound or video object used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Binary Object
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseBinaryObject $responseBinaryObject
     * @return self
     */
    public function setResponseBinaryObject(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseBinaryObject $responseBinaryObject = null)
    {
        $this->responseBinaryObject = $responseBinaryObject;
        return $this;
    }

    /**
     * Gets as responseCode
     *
     * BBIE
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
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
     *  Response Value. Response Code. Code
     *  A code used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
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
     * Gets as responseDate
     *
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Sets a new responseDate
     *
     * BBIE
     *  Response Value. Response Date. Date
     *  A date used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $responseDate
     * @return self
     */
    public function setResponseDate(?\DateTime $responseDate = null)
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Gets as responseID
     *
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseID
     */
    public function getResponseID()
    {
        return $this->responseID;
    }

    /**
     * Sets a new responseID
     *
     * BBIE
     *  Response Value. Response Identifier. Identifier
     *  An identifier used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseID $responseID
     * @return self
     */
    public function setResponseID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseID $responseID = null)
    {
        $this->responseID = $responseID;
        return $this;
    }

    /**
     * Gets as responseIndicator
     *
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getResponseIndicator()
    {
        return $this->responseIndicator;
    }

    /**
     * Sets a new responseIndicator
     *
     * BBIE
     *  Response Value. Response Indicator. Indicator
     *  An indicator used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $responseIndicator
     * @return self
     */
    public function setResponseIndicator($responseIndicator)
    {
        $this->responseIndicator = $responseIndicator;
        return $this;
    }

    /**
     * Gets as responseMeasure
     *
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseMeasure
     */
    public function getResponseMeasure()
    {
        return $this->responseMeasure;
    }

    /**
     * Sets a new responseMeasure
     *
     * BBIE
     *  Response Value. Response Measure. Measure
     *  A measure used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Measure
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseMeasure $responseMeasure
     * @return self
     */
    public function setResponseMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseMeasure $responseMeasure = null)
    {
        $this->responseMeasure = $responseMeasure;
        return $this;
    }

    /**
     * Gets as responseNumeric
     *
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseNumeric
     */
    public function getResponseNumeric()
    {
        return $this->responseNumeric;
    }

    /**
     * Sets a new responseNumeric
     *
     * BBIE
     *  Response Value. Response Numeric. Numeric
     *  A number, rate or percent used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Numeric
     *  Numeric
     *  Numeric. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseNumeric $responseNumeric
     * @return self
     */
    public function setResponseNumeric(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseNumeric $responseNumeric = null)
    {
        $this->responseNumeric = $responseNumeric;
        return $this;
    }

    /**
     * Gets as responseQuantity
     *
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseQuantity
     */
    public function getResponseQuantity()
    {
        return $this->responseQuantity;
    }

    /**
     * Sets a new responseQuantity
     *
     * BBIE
     *  Response Value. Response Quantity. Quantity
     *  A quantity used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseQuantity $responseQuantity
     * @return self
     */
    public function setResponseQuantity(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseQuantity $responseQuantity = null)
    {
        $this->responseQuantity = $responseQuantity;
        return $this;
    }

    /**
     * Gets as responseTime
     *
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getResponseTime()
    {
        return $this->responseTime;
    }

    /**
     * Sets a new responseTime
     *
     * BBIE
     *  Response Value. Response Time. Time
     *  A time used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $responseTime
     * @return self
     */
    public function setResponseTime(?\DateTime $responseTime = null)
    {
        $this->responseTime = $responseTime;
        return $this;
    }

    /**
     * Gets as responseURI
     *
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseURI
     */
    public function getResponseURI()
    {
        return $this->responseURI;
    }

    /**
     * Sets a new responseURI
     *
     * BBIE
     *  Response Value. Response URI. Identifier
     *  A URI value used as a reply to the criterion requirement.
     *  0..1
     *  Response Value
     *  Response URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseURI $responseURI
     * @return self
     */
    public function setResponseURI(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ResponseURI $responseURI = null)
    {
        $this->responseURI = $responseURI;
        return $this;
    }
}

