<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "icatarina2011@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: catarinaac.17@gmail.com";
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	

		
	
	}




?>