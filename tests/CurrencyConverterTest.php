<?php declare(strict_types=1);

namespace Money;

require __DIR__ . "/../src/classes.php";


use PHPUnit\Framework\TestCase;

final class CurrencyConverterTest extends TestCase
{

    protected function setUp(): void 
    {
        $this->currency = new Currency("PLN");
    }

    public function testClassConstructorCurrencyConverter() {
     
        $currencyConverter = new CurrencyConverter($this->currency, 12.0, 0.98);

        $this->assertSame(12.0, $currencyConverter->getAmount());
        $this->assertSame(0.98, $currencyConverter->getExchangeRate());
    }
    
    public function testClassConstructorCurrency() {
    
        $this->assertSame( $this->currency->getcode() , "PLN");
   
    }

       
    public function testClassConstructorPrice() {
     
        $price = new Price(40.0, $this->currency);

        $this->assertSame(40.0, $price->getAmount());
        $this->assertSame($this->currency, $price->getCurrency());
    }
    
}
