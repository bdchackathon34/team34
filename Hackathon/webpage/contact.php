<?php

$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];

$subject = "Message from Website";

$text = "You received a message from: " + $name + "\nEmail: " + $email + "\n\nBody: " + $msg + "\n";
//send mail
  mail("jiming89@gmail.com", $subject,$text);
  ?>