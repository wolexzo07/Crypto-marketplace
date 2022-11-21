<?php
//https://apirone.com/api/v1/rate?currency={currency}&timestamp={timestamp}&crypto={crypto}
// History Rate Based on timestamp
  $data = file_get_contents("https://apirone.com/api/v1/rate?currency=USD&timestamp=1562609674&crypto=btc");
  echo $data;

?>