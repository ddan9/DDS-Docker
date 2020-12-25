<?php

	$test_text=htmlspecialchars($_REQUEST['text']);
	$to      = 'username@domain.com';
	$subject = 'the subject test';

	$headers = 'From: username@domain.com' . "\r\n" .
		'Reply-To: username@domain.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$message = " Line 1...\r\nLine 2...\r\nLine 3... :) There was a mailtest\r\n Sample text ".$test_text."";

	$message = wordwrap($message, 70, "\r\n");

	echo "Sending: ";

	if (mail($to, $subject, $message, $headers)) 

	{

		echo "Message was sent \n";

	} 

	else 

	{

		echo "Error \n";

	}

?>
