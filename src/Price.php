<?php declare(strict_types=1);

namespace Money;

/**
 * Price Value Object.
 */

final class Price
{

    /** @var float */
    private $amount;

    /** @var Currency */
    private Currency $currency;

    public function __construct(float $amount, Currency $currency)
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Amount should be a positive value: {$amount}.");
        }

        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * return the monetary value represented by this object converted to its base units
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Returns the currency of the monetary value represented by this
     * object.
     *
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }
}
