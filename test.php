<?php 
// include send sms class
include 'sendsms.php'; 
// create object of class
$sendsms=new sendsms("http://alerts.springedge.com/api", "API key HERE", "sender ID HERE");

// call send sms function
$response = $sendsms->send_sms("99xxxxxxxx", "MESSAGE BODY HERE", "", "xml");
$sendsms->status("MESSAGE_ID_HERE");  // extract message id from $response and pass in status () function

?>