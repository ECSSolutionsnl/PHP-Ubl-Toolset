<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing ECValidationDataType
 *
 *
 * XSD Type: ECValidationDataType
 */
class ECValidationDataType
{
    /**
     * @var string $hashAlgorithm
     */
    private $hashAlgorithm = null;

    /**
     * @var string $seed
     */
    private $seed = null;

    /**
     * Gets as hashAlgorithm
     *
     * @return string
     */
    public function getHashAlgorithm()
    {
        return $this->hashAlgorithm;
    }

    /**
     * Sets a new hashAlgorithm
     *
     * @param string $hashAlgorithm
     * @return self
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->hashAlgorithm = $hashAlgorithm;
        return $this;
    }

    /**
     * Gets as seed
     *
     * @return string
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Sets a new seed
     *
     * @param string $seed
     * @return self
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;
        return $this;
    }
}

