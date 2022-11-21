<?php
// CReating a saving wallet without normal gui reg
  $json_data = array (
    'type' => "saving",
    'currency' => "btc",
    'callback' => array(
        'url'=> "http://example.com/callback",
        'data' => array (
            'invoice_id' => "56456776"
        )
    )
  );
  
  $api_endpoint = "https://apirone.com/api/v2/wallet";
 
  $curl = curl_init($api_endpoint);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json_data));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($curl);
  $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);
 
  if ($http_status_code==200){
	  $decoded = json_decode($response, true);
	  echo "Wallet: " . $decoded["wallet"] . "<BR>";
	  echo "Key: " . $decoded["transfer_key"];
  } else {
      var_dump($response);
  }
  /******
HTTP RESPONSE
{ "wallet": "ltc-e0ae8a4b8fba280cfbc6b4494270eb62", "type": "saving", "transfer_key": "jEo0uJ2C8T6qBWsZOVAO53qbNLn7tQYZ", "callback": { "url": "http://example.com/callback", "data": { "invoice_id": "56456776" } } }
******/
?>