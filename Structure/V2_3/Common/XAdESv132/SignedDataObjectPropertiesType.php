<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing SignedDataObjectPropertiesType
 *
 *
 * XSD Type: SignedDataObjectPropertiesType
 */
class SignedDataObjectPropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DataObjectFormat[] $dataObjectFormat
     */
    private $dataObjectFormat = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CommitmentTypeIndication[] $commitmentTypeIndication
     */
    private $commitmentTypeIndication = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AllDataObjectsTimeStamp[] $allDataObjectsTimeStamp
     */
    private $allDataObjectsTimeStamp = [
        
    ];

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IndividualDataObjectsTimeStamp[] $individualDataObjectsTimeStamp
     */
    private $individualDataObjectsTimeStamp = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as dataObjectFormat
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DataObjectFormat $dataObjectFormat
     */
    public function addToDataObjectFormat(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DataObjectFormat $dataObjectFormat)
    {
        $this->dataObjectFormat[] = $dataObjectFormat;
        return $this;
    }

    /**
     * isset dataObjectFormat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataObjectFormat($index)
    {
        return isset($this->dataObjectFormat[$index]);
    }

    /**
     * unset dataObjectFormat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataObjectFormat($index)
    {
        unset($this->dataObjectFormat[$index]);
    }

    /**
     * Gets as dataObjectFormat
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DataObjectFormat[]
     */
    public function getDataObjectFormat()
    {
        return $this->dataObjectFormat;
    }

    /**
     * Sets a new dataObjectFormat
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\DataObjectFormat[] $dataObjectFormat
     * @return self
     */
    public function setDataObjectFormat(?array $dataObjectFormat = null)
    {
        $this->dataObjectFormat = $dataObjectFormat;
        return $this;
    }

    /**
     * Adds as commitmentTypeIndication
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CommitmentTypeIndication $commitmentTypeIndication
     */
    public function addToCommitmentTypeIndication(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CommitmentTypeIndication $commitmentTypeIndication)
    {
        $this->commitmentTypeIndication[] = $commitmentTypeIndication;
        return $this;
    }

    /**
     * isset commitmentTypeIndication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeIndication($index)
    {
        return isset($this->commitmentTypeIndication[$index]);
    }

    /**
     * unset commitmentTypeIndication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeIndication($index)
    {
        unset($this->commitmentTypeIndication[$index]);
    }

    /**
     * Gets as commitmentTypeIndication
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CommitmentTypeIndication[]
     */
    public function getCommitmentTypeIndication()
    {
        return $this->commitmentTypeIndication;
    }

    /**
     * Sets a new commitmentTypeIndication
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\CommitmentTypeIndication[] $commitmentTypeIndication
     * @return self
     */
    public function setCommitmentTypeIndication(?array $commitmentTypeIndication = null)
    {
        $this->commitmentTypeIndication = $commitmentTypeIndication;
        return $this;
    }

    /**
     * Adds as allDataObjectsTimeStamp
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AllDataObjectsTimeStamp $allDataObjectsTimeStamp
     */
    public function addToAllDataObjectsTimeStamp(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AllDataObjectsTimeStamp $allDataObjectsTimeStamp)
    {
        $this->allDataObjectsTimeStamp[] = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllDataObjectsTimeStamp($index)
    {
        return isset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * unset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllDataObjectsTimeStamp($index)
    {
        unset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as allDataObjectsTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AllDataObjectsTimeStamp[]
     */
    public function getAllDataObjectsTimeStamp()
    {
        return $this->allDataObjectsTimeStamp;
    }

    /**
     * Sets a new allDataObjectsTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AllDataObjectsTimeStamp[] $allDataObjectsTimeStamp
     * @return self
     */
    public function setAllDataObjectsTimeStamp(?array $allDataObjectsTimeStamp = null)
    {
        $this->allDataObjectsTimeStamp = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * Adds as individualDataObjectsTimeStamp
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IndividualDataObjectsTimeStamp $individualDataObjectsTimeStamp
     */
    public function addToIndividualDataObjectsTimeStamp(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IndividualDataObjectsTimeStamp $individualDataObjectsTimeStamp)
    {
        $this->individualDataObjectsTimeStamp[] = $individualDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndividualDataObjectsTimeStamp($index)
    {
        return isset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * unset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndividualDataObjectsTimeStamp($index)
    {
        unset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as individualDataObjectsTimeStamp
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IndividualDataObjectsTimeStamp[]
     */
    public function getIndividualDataObjectsTimeStamp()
    {
        return $this->individualDataObjectsTimeStamp;
    }

    /**
     * Sets a new individualDataObjectsTimeStamp
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\IndividualDataObjectsTimeStamp[] $individualDataObjectsTimeStamp
     * @return self
     */
    public function setIndividualDataObjectsTimeStamp(?array $individualDataObjectsTimeStamp = null)
    {
        $this->individualDataObjectsTimeStamp = $individualDataObjectsTimeStamp;
        return $this;
    }
}

