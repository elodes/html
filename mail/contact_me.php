<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'erin@erinmakes.com';
$email_subject = "Contact:  $name";
$email_body = "New message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@erinmakes.com\r\n";
$headers .= "Reply-To: $email_address\r\n";
$headers .= "Return-Path: erin@erinmakes.com\r\n";
$headers .= "CC: mike@erinmakes.com\r\n";
$headers .= "BCC: hidden@erinmakes.com\r\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>