<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$plan = $_POST['plan'];
$formcontent="From: $name \n Plan: $plan \n Message: $message";
$recipient = "contacto@verifydoc.com.ar";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:http://verifydoc.com.ar/");
?>