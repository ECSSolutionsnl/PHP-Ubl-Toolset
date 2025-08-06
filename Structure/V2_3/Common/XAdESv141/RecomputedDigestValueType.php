<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\XAdESv141;

/**
 * Class representing RecomputedDigestValueType
 *
 *
 * XSD Type: RecomputedDigestValueType
 */
class RecomputedDigestValueType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}

