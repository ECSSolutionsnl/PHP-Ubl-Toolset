<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing PartyNameType
 *
 * ABIE
 *  Party Name. Details
 *  A class for defining the name of a party.
 *  Party Name
 * XSD Type: PartyNameType
 */
class PartyNameType
{
    /**
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Party Name. Name
     *  The name of the party.
     *  1
     *  Party Name
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }
}

