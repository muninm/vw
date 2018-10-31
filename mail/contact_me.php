<?php
/*// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@matiaspatissier.com.ar'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto Web:  $name";
$email_body = "Recibiste un contacto desde la pagina web.\n\n"."Los datos son:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
$headers = "From: noreply@matiasrissepatissier.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;      */


/*
	ini_set("include_path", '/home/matiasri/php:' . ini_get("include_path") );	
	include('/home/matiasri/php/Mail2.php');
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Falta completar campos!";
   return false;
   }

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

 	$from_name = strip_tags(htmlspecialchars($_POST['name']));
    $to_name = 'info@matiaspatissier.com';
    $subject = "Contacto Web:  $name";
    $mailmsg ="Recibiste un contacto desde la pagina web.\n\n"."Los datos son:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";; 
     
    $From = "From:  <info@matiaspatissier.com>"; 
    $To = "To:  <info@matiaspatissier.com>"; 

    $recipients = "info@matiaspatissier.com"; 
    $headers["From"] = $From; 
    $headers["To"] = $To; 
    $headers["Subject"] = $subject; 
    $headers["Reply-To"] = $email_address; 
     
    $smtpinfo["host"] = "mail.matiasrisepatissier.com"; 
    $smtpinfo["port"] = "25"; 
    $smtpinfo["auth"] = true; 
    $smtpinfo["username"] = "info@matiasrisepatissier.com"; 
    $smtpinfo["password"] = "MatiPati-*"; 

    $mail_object =Mail2::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $mailmsg);*/
    return false;
?>
