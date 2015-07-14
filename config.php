<?php
//start session in all pages
if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
//if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'somepaypal_api.yahoo.co.uk'; //PayPal API Username
$PayPalApiPassword 		= '123456789'; //Paypal API password
$PayPalApiSignature 	= 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/paypal/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/paypal/cancel_url.php'; //Cancel URL if user clicks cancel
?>