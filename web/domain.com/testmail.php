<?php
	$test_text=htmlspecialchars($_REQUEST['text']);
$to      = 'username@domain.com';
$subject = 'the subject test';

$headers = 'From: username@domain.com' . "\r\n" .
    'Reply-To: username@domain.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = "Line 1 Во первых строках своего письма хочу сказать вот что...\r\nLine 2 Во второй сроке значит вот как\r\nLine 3 Ну а третья строка всем строкам строка, только сказать то уже и нечего :) Такой вот тест\r\n А вот текст для теста: ".$test_text."";

$message = wordwrap($message, 70, "\r\n");

echo"Начинаем отправку";

if (mail($to, $subject, $message, $headers)) {
    echo "Sent";
    echo"<BR>    функция отработала!<br>отправили!!<br>";
  } else {
    echo "Error";
  }


?>

