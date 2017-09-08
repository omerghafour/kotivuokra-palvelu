<?php

	$name = trim($_POST['name']);
    $number = trim($_POST['number']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	$emailTo = 'umerghafour@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Message from your website.';
	}
	$body = "Name: $name \nNumber: $number \nEmail: $email \nMessage:\n$message";
	$headers = 'From: '.$email."\n" .
        'Reply-To: '.$email."\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('submit');

?>
