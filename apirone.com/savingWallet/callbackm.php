<?php
$secret = "7j0ap91o99cxj8k9";

//receive JSON data
$data = file_get_contents('php://input');

if ($data) {
    $params = json_decode($data, true);

	// check your secret code
	if ($params["data"]["secret"] !== $secret) die();

	$invoice_id = $params["data"]["invoice_id"];
	$input_address = $params["input_address"];
	$input_transaction_hash = $params["input_transaction_hash"];
	$value_in_satoshi = $params["value"];

	//Save unconfirmed transaction and data to your Database.
    if ($params["confirmations"] == 0) {
	
		//Save invoice status - payment waiting confirmation.
		
	}
	
    if ($params["confirmations"] >= 3) {
		
		//Update invoice status - payment Done.
		//After respond *ok*, Gateway will stop to send callbacks for this task.
		
		echo "*ok*";
	}
}
/******
Receiving Callback - Code Example

Don't finish order with 0 confirmation! Because sender can create a new transaction with more fee to another receiver and network may confirm it. Then payment will never arrive. Just update your order and wait for confirmation.

Finish order or top-up user's account balance within 1-6 confirmations, recommended 3. And you will be sure that each payment arrives to you. Second PHP example demonstrates it.
*******/
?>