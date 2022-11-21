<?php
//Сurrency of exchange
//USD, EUR, GBP, RUB.
// prints amount in BTC
// value = amount
  $data = file_get_contents("https://apirone.com/api/v1/tobtc?currency=USD&value=100");
  echo $data;
?>