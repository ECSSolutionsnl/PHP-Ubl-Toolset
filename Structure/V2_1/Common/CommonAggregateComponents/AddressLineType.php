<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing AddressLineType
 *
 * ABIE
 *  Address Line. Details
 *  A class to define an unstructured address line.
 *  Address Line
 * XSD Type: AddressLineType
 */
class AddressLineType
{
    /**
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Line $line
     */
    private $line = null;

    /**
     * Gets as line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * BBIE
     *  Address Line. Line. Text
     *  An address line expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  123 Standard Chartered Tower
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Line $line
     * @return self
     */
    public function setLine(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Line $line)
    {
        $this->line = $line;
        return $this;
    }
}

