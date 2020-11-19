<?php
	// variable setting
	$userName = $_POST['name'];
	$userEmail = $_POST['email'];
	$messageSubject = $_POST['subject'];
	$message = $_POST['message'];

	// Check input fields
	if (empty($userName) || empty($userEmail) || empty($message)) {
	    echo "Please fill all the fields";
	}
	else {
	    $to = "mbvadevs@gmail.com";
	    $body = "";
	        
	    $body .= "From: ".$userName."\r\n";
	    $body .= "Email: ".$userEmail."\r\n";
	    $body .= "Message: ".$message."\r\n";
	        
	    mail($to, $messageSubject, $body);
	}
?>