<?php
  $wallet = "5484e54ec0bb35c95b79d7338399900f";
  $data = file_get_contents("https://apirone.com/api/v2/wallet/".$wallet."/balance");
  $respond = json_decode($data,true);
  $total = $respond["total"];
  echo "total: " . $respond["total"] . " satoshies<br/>";
  echo "Currency: " . $respond["currency"];
  /****
  {
    "confirmed": 49382493,
    "unconfirmed": 0,
    "available": 49382493,
    "total": 49382493,
    "currency": "btc"
}
  ****/
?>