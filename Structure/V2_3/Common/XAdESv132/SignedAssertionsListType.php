<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132;

/**
 * Class representing SignedAssertionsListType
 *
 *
 * XSD Type: SignedAssertionsListType
 */
class SignedAssertionsListType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[] $signedAssertion
     */
    private $signedAssertion = [
        
    ];

    /**
     * Adds as signedAssertion
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion $signedAssertion
     */
    public function addToSignedAssertion(\ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion $signedAssertion)
    {
        $this->signedAssertion[] = $signedAssertion;
        return $this;
    }

    /**
     * isset signedAssertion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignedAssertion($index)
    {
        return isset($this->signedAssertion[$index]);
    }

    /**
     * unset signedAssertion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignedAssertion($index)
    {
        unset($this->signedAssertion[$index]);
    }

    /**
     * Gets as signedAssertion
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[]
     */
    public function getSignedAssertion()
    {
        return $this->signedAssertion;
    }

    /**
     * Sets a new signedAssertion
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv132\SignedAssertion[] $signedAssertion
     * @return self
     */
    public function setSignedAssertion(array $signedAssertion)
    {
        $this->signedAssertion = $signedAssertion;
        return $this;
    }
}

