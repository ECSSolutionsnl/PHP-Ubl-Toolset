<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing DigitalAgreementTermsType
 *
 * ABIE
 *  Digital Agreement Terms. Details
 *  A class to describe the terms and conditions of a digital agreement.
 *  Digital Agreement Terms
 *  Trading Partner Agreement Terms
 * XSD Type: DigitalAgreementTermsType
 */
class DigitalAgreementTermsType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdoptionPeriod $adoptionPeriod
     */
    private $adoptionPeriod = null;

    /**
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceLevelAgreement[] $serviceLevelAgreement
     */
    private $serviceLevelAgreement = [
        
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
     * Adds as description
     *
     * BBIE
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Description. Text
     *  Text describing the terms and conditions of a digital agreement.
     *  1..n
     *  Digital Agreement Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
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
     *  Digital Agreement Terms. Validity_ Period. Period
     *  The period of time for which this digital agreement is valid.
     *  0..1
     *  Digital Agreement Terms
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
     * Gets as adoptionPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdoptionPeriod
     */
    public function getAdoptionPeriod()
    {
        return $this->adoptionPeriod;
    }

    /**
     * Sets a new adoptionPeriod
     *
     * ASBIE
     *  Digital Agreement Terms. Adoption_ Period. Period
     *  The period during which a digital agreement must be adopted.
     *  0..1
     *  Digital Agreement Terms
     *  Adoption
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdoptionPeriod $adoptionPeriod
     * @return self
     */
    public function setAdoptionPeriod(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\AdoptionPeriod $adoptionPeriod = null)
    {
        $this->adoptionPeriod = $adoptionPeriod;
        return $this;
    }

    /**
     * Adds as serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceLevelAgreement $serviceLevelAgreement
     */
    public function addToServiceLevelAgreement(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceLevelAgreement $serviceLevelAgreement)
    {
        $this->serviceLevelAgreement[] = $serviceLevelAgreement;
        return $this;
    }

    /**
     * isset serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceLevelAgreement($index)
    {
        return isset($this->serviceLevelAgreement[$index]);
    }

    /**
     * unset serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceLevelAgreement($index)
    {
        unset($this->serviceLevelAgreement[$index]);
    }

    /**
     * Gets as serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceLevelAgreement[]
     */
    public function getServiceLevelAgreement()
    {
        return $this->serviceLevelAgreement;
    }

    /**
     * Sets a new serviceLevelAgreement
     *
     * ASBIE
     *  Digital Agreement Terms. Service Level Agreement
     *  The service level agreement which regulates the quality, availability and responsibilities of digital services.
     *  0..n
     *  Digital Agreement Terms
     *  Service Level Agreement
     *  Service Level Agreement
     *  Service Level Agreement
     *  SLA
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\ServiceLevelAgreement[] $serviceLevelAgreement
     * @return self
     */
    public function setServiceLevelAgreement(?array $serviceLevelAgreement = null)
    {
        $this->serviceLevelAgreement = $serviceLevelAgreement;
        return $this;
    }
}

