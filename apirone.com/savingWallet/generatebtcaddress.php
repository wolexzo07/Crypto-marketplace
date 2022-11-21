<?php
  $json_data = array (
    "callback" => array(
        'url'=> 'http://example.com/callback',
        'data' => array (
            'invoice_id' => "1234",
            'secret' => "7j0ap91o99cxj8k9"
        )
    )
  );
  
  $wallet = "btc-acd85a4de79bb9a912fc56b0a4712682";
  $api_base = "https://apirone.com/api/v2/wallet/". $wallet ."/address";
 
  $curl = curl_init($api_base);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json_data));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $response = curl_exec($curl);
  curl_close($curl);
 

  $decoded = json_decode($response, true);
  echo "New BTC Address: " .
  $decoded["address"];
  
  /****
  WALLET RESPONSE 
{ "wallet": "btc-1aee83487b65b690305201fb4b42a081", "address": "3EJZhukHaxSvW5YxKy6npyHzxQxGqAo7fY", "type": "p2sh-p2wpkh", "callback": { "url": "http://example.com/callback", "data": { "invoice_id": "1234", "secret": "7j0ap91o99cxj8k9" } }, "currency": "btc" }

  ****/
?>