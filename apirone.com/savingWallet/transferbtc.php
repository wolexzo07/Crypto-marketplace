<?php
  $WalletID = "btc-acd85a4de79bb9a912fc56b0a4712682";
  $json_data =
  array ( 
    'transfer_key' => "DonotPguft52HCLPtNXGR1L60SJpFQAS", 
    'destinations' => array (        
        array('address' => "1apiKcJM95jENZeom2dQo8ShK7dUQkRaS", 'amount' => 40330),
        array('address' => "1ApiwpetcWnBbkpU7cb7biPfc6Tiucasf8", 'amount' => 40330)
    )
  );
  $api_endpoint = "https://apirone.com/api/v2/wallet/" .
        $WalletID . "/transfer";
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
    echo "Transaction sent. Hash: " . $decoded["txs"][0];
  } else {
      var_dump($response);
  }
?>
