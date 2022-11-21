<?php
//https://apirone.com/api/v1/ticker?currency=ltc (btc|ltc)
  $data = file_get_contents("https://apirone.com/api/v1/ticker?currency=btc");
  print_r($data);
  // $respond = json_decode($data,true);
  // $usd = $respond["USD"]["last"]; // Exchange rate bitcoin to USD
  // echo $usd;
  
  /*****
   { "GBP": { "last": 10242.38 }, "USD": { "last": 13273.19 }, "RUB": { "last": 1049955.14 }, "EUR": { "last": 11305.12 } } 
  *****/
?>