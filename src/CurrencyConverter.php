<?php declare(strict_types=1);

namespace Money;

final class CurrencyConverter {

    private $amount;
    private $exchangeRate;

    private Currency $currency;

    public function __construct(Currency $currency = null, float $amount = 0, float $exchangeRate = 0)
    {
        $this->currency = $currency;
        $this->amount = $amount;
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * convert the price based on the exchange Rate and round it 
     *
     * @return float
     */
    
    private function convert(float $amount, float $exchangeRate) {

       return $finalPrice = round(( $amount * $exchangeRate), 2);
    }

    /**
     * return the monetary value represented by this object converted to its base units
     *
     * @return float
     */
    public function getConvertedValue() {

        return $convertedPrice = $this->convert($this->amount, $this->exchangeRate);
      
    }

    /**
     * Returns the monetary value represented by this object.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

     /**
     * Returns the currency of the monetary value represented by this
     * object.
     *
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Returns the converted Value of the monetary value.
     * 
     * 
     * @return float
     * 
     */

    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

  }



 



