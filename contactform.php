<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$names = $_POST['names'];
	$subject = $_POST['subject'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailto = "hithisisram@engineer.com";
	$headers = "FROM:".$mailfrom;
	$txt = "YOU HAVE RECEIVED AN E-MAIL FROM ".$name."MESSAGE".$message;
	
	
	mail($mailto, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}
?>