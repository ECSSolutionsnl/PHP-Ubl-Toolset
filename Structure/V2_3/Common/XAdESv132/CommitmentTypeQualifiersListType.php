<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing CommitmentTypeQualifiersListType
 *
 *
 * XSD Type: CommitmentTypeQualifiersListType
 */
class CommitmentTypeQualifiersListType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $commitmentTypeQualifier
     */
    private $commitmentTypeQualifier = [
        
    ];

    /**
     * Adds as commitmentTypeQualifier
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $commitmentTypeQualifier
     */
    public function addToCommitmentTypeQualifier(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType $commitmentTypeQualifier)
    {
        $this->commitmentTypeQualifier[] = $commitmentTypeQualifier;
        return $this;
    }

    /**
     * isset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeQualifier($index)
    {
        return isset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * unset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeQualifier($index)
    {
        unset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * Gets as commitmentTypeQualifier
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[]
     */
    public function getCommitmentTypeQualifier()
    {
        return $this->commitmentTypeQualifier;
    }

    /**
     * Sets a new commitmentTypeQualifier
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\AnyType[] $commitmentTypeQualifier
     * @return self
     */
    public function setCommitmentTypeQualifier(?array $commitmentTypeQualifier = null)
    {
        $this->commitmentTypeQualifier = $commitmentTypeQualifier;
        return $this;
    }
}

