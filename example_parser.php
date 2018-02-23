<?php 
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) && isset($_POST['k']) && isset($_POST['s'])){
$n = $_POST['n']; // HINT: use preg_replace() to filter the data
$e = $_POST['e']; 
$m = nl2br($_POST['m']); 
$to = "raminfocse@gmail.com"; 
$from = $e; 
$subject = 'Contact Form Message'; 
$message = '<b>Name:</b> '.$n.' '.$k.'<br><b>Email:</b> '.$e.' <p>'.$m.'</p>'; 
$headers = "From: $from\n"; 
$headers .= "MIME-Version: 1.0\n"; 
$headers .= "Content-type: text/html; 
charset=iso-8859-1\n"; 
if( mail($to, $subject, $message, $headers) ){ echo "success"; } 
else { echo "The server failed to send the message. Please try again later."; } } ?>
