<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing ResultOfVerificationType
 *
 * ABIE
 *  Result Of Verification. Details
 *  A class to describe the result of an attempt to verify a signature.
 *  Result Of Verification
 * XSD Type: ResultOfVerificationType
 */
class ResultOfVerificationType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidationResultCode $validationResultCode
     */
    private $validationResultCode = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateProcess $validateProcess
     */
    private $validateProcess = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateTool $validateTool
     */
    private $validateTool = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateToolVersion $validateToolVersion
     */
    private $validateToolVersion = null;

    /**
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

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
     * Gets as validatorID
     *
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidatorID $validatorID = null)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidationResultCode
     */
    public function getValidationResultCode()
    {
        return $this->validationResultCode;
    }

    /**
     * Sets a new validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidationResultCode $validationResultCode
     * @return self
     */
    public function setValidationResultCode(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidationResultCode $validationResultCode = null)
    {
        $this->validationResultCode = $validationResultCode;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(?\DateTime $validationDate = null)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(?\DateTime $validationTime = null)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateProcess
     */
    public function getValidateProcess()
    {
        return $this->validateProcess;
    }

    /**
     * Sets a new validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateProcess $validateProcess
     * @return self
     */
    public function setValidateProcess(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateProcess $validateProcess = null)
    {
        $this->validateProcess = $validateProcess;
        return $this;
    }

    /**
     * Gets as validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateTool
     */
    public function getValidateTool()
    {
        return $this->validateTool;
    }

    /**
     * Sets a new validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateTool $validateTool
     * @return self
     */
    public function setValidateTool(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateTool $validateTool = null)
    {
        $this->validateTool = $validateTool;
        return $this;
    }

    /**
     * Gets as validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateToolVersion
     */
    public function getValidateToolVersion()
    {
        return $this->validateToolVersion;
    }

    /**
     * Sets a new validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateToolVersion $validateToolVersion
     * @return self
     */
    public function setValidateToolVersion(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\ValidateToolVersion $validateToolVersion = null)
    {
        $this->validateToolVersion = $validateToolVersion;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\SignatoryParty $signatoryParty = null)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }
}

