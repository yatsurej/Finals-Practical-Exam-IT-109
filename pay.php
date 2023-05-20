<?php
session_start();
//include the authnet PHP file
require 'authnet_aim.php';

//*********** UPDATE $authnet_api_login and $authnet_api_trans FROM YOU ACCOUNT ****************
// Create Transaction Key when you go to Accounts (top Menu) then "API Credentials and Key"
//initialize API
$authnet_api_login 	 = "7M9Fb9Fbrh"; 		 // <--- API Login goes here from your auithnet account
$authnet_api_trans   = "4p5A5r9QN7a6Dj7k"; 		 // <--- API key goes here from your auithnet account
//initialize API
//*********** UPDATE $authnet_api_login and $authnet_api_trans FROM YOU ACCOUNT ****************

//instantiate the class using API
$aim = new AuthnetAIM( $authnet_api_login, $authnet_api_trans, true );

// Prepare Payment Details
	$pay_details = array(
		// leave this details as is
	    "x_delim_data"     => "TRUE",
	    "x_delim_char"     => "|",
	    "x_relay_response" => "FALSE",
	    "x_url"            => "FALSE",
	    "x_version"        => "3.1",
	    "x_method"         => "CC",
	    "x_type"           => "AUTH_CAPTURE",
	    "x_po_num"         => NULL ,
	    "x_tax"            => NULL ,

	    //start your details here
	    "x_card_num"       => "370000000000002" , // the credit card number. Card Number for testing is here https://developer.authorize.net/hello_world/testing_guide/
	    "x_exp_date"       => "08/18", //credit card expiration date, (for testing any FUTURE date will do in mm/yy format )
	    "x_card_code"      => "115", // C V V of credit card, (for testing any 3 digit will work)
	    "x_amount"         => $_POST['price'], //<-- Price goes here
	    "x_description"    => $_POST['description'], // <-- name of product

	    "x_first_name"     => $_SESSION['firstName'] ,
	    "x_last_name"      => $_SESSION['lastName'] ,
	    "x_email"          => "froizelrej@gmail.com" ,
	);

	$sctxnid = false; //<-- initialize transaction ID variable

	$aim->do_apicall( $pay_details ); //<-- do the api call

	if ( $aim->isApproved() ) { //<-- check if approved
	    $sctxnid = $aim->getTransactionID(); // <--get the transaction id
	}

	if ( $sctxnid ) {
		echo "Payment successfull, your transaction id is: " .$sctxnid;
	} else {
		echo "Payment Failed!";
	}

	//Transactions starts as "Unsettled", you can check it in "HOME" (Top Menu), then "Unsettled Transactions" (Left Menu)
?>