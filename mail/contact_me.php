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
$message = $_POST['message'];
//  Parametros para enviar correo.
$to = 'ventas@stgsac.com'; // dirección de correo electrónico entre '' reemplazando sunombre@sudominio.com: aquí es a donde el formulario enviará un mensaje.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: ventas@stgsac.com\n"; // Esta es la dirección de correo electrónico de la que provendrá el mensaje generado. Recomendamos usar algo como noreply@tudominio.com.
mail($to,$email_subject,$email_body,$headers);
return true;			
?>