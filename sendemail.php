<?php

//Recipient
$from = 'monu642858@gmail.com';
$to = 'manii.s4141@gmail.com';
//Subject
$subject = 'This is our test email';
//Message
$message = '<h1>Hi there.</h1><p>Thanks for testing</p>';
//Headers
$headers = "From:".$from;
$headers .= "Reply: replyto@monu642858@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
mail($to, $subject, $message, $headers );
?>
