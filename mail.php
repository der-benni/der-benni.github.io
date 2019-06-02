<?php

if (iiset($_POST['submit'])) {
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$mailFrom = $_POST['email'];
	$message = $_POST['nachricht'];
	$subject = "Test";
	
	$mailTo = "benedikt.scholz99@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "Message: ".$nachricht;
	
	mail($mailTo, $subject, $message, $headers);
	
}