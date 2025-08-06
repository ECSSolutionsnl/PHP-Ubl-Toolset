<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema;

/**
 * Class representing FieldIDType
 *
 *
 * XSD Type: FieldIDType
 */
class FieldIDType
{
    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Prime $prime
     */
    private $prime = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\TnB $tnB
     */
    private $tnB = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\PnB $pnB
     */
    private $pnB = null;

    /**
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\GnB $gnB
     */
    private $gnB = null;

    /**
     * Gets as prime
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Prime
     */
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * Sets a new prime
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Prime $prime
     * @return self
     */
    public function setPrime(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\Prime $prime = null)
    {
        $this->prime = $prime;
        return $this;
    }

    /**
     * Gets as tnB
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\TnB
     */
    public function getTnB()
    {
        return $this->tnB;
    }

    /**
     * Sets a new tnB
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\TnB $tnB
     * @return self
     */
    public function setTnB(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\TnB $tnB = null)
    {
        $this->tnB = $tnB;
        return $this;
    }

    /**
     * Gets as pnB
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\PnB
     */
    public function getPnB()
    {
        return $this->pnB;
    }

    /**
     * Sets a new pnB
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\PnB $pnB
     * @return self
     */
    public function setPnB(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\PnB $pnB = null)
    {
        $this->pnB = $pnB;
        return $this;
    }

    /**
     * Gets as gnB
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\GnB
     */
    public function getGnB()
    {
        return $this->gnB;
    }

    /**
     * Sets a new gnB
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\GnB $gnB
     * @return self
     */
    public function setGnB(?\ECSSolutions\UblToolset\Structure\V2_3\Common\XmldsigCoreSchema\GnB $gnB = null)
    {
        $this->gnB = $gnB;
        return $this;
    }
}

