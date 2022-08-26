<?php

namespace Money;

require_once('classes.php');


  $req_url = __DIR__.'/currency.json';
  $response_json = file_get_contents($req_url);

  if(false !== $response_json) {

      try {

      $response_object = json_decode($response_json);
      $base_price = 10.0; 
 
      $currency_object_value = new Currency($response_object->baseCurrency);

      
      $convertedPrice = new CurrencyConverter( $currency_object_value , $base_price, $response_object->exchangeRates->USD);


      $finalConvertedPrice =  new Price($convertedPrice->getConvertedValue(), $currency_object_value);


      $data = array("Currency" => $currency_object_value, "Price" => $base_price, "Exchange Rate" => $response_object->exchangeRates->USD, "Converted Price" =>   $finalConvertedPrice->getAmount() );
 
   
      header("Content-Type: application/json");
      echo json_encode($data);
   
      }

      catch(Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
  }


?>
