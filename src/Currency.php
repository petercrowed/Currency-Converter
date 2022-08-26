<?php declare(strict_types=1);

namespace Money;

/**
 * Currency Value Object.
 */

final class Currency implements \JsonSerializable
{
    /**
     * Currency code.
     *
     * @var string
     */
    private $code;

    /**
     * @param string $code
     */
    public function __construct(string $code)
    {

        if (!is_string($code)) {
            throw new \InvalidArgumentException('Currency code should be string');
        }

        $this->code = $code;
    }

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Checks whether this currency is the same as an other.
     *
     * @param Currency $other
     *
     * @return bool
     */
    public function equals(Currency $other)
    {
        return $this->code === $other->code;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCode();
    }

    /**
     *
     * @return string
     */
    public function jsonSerialize()
    {
        return $this->code;
    }
}