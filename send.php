<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'ileana_tarin@yahoo.com.mx';
$subject = $subject.' De '.$name;
$message = 'Telefono: '.$phone.' \r\n Mensaje: '.$message;
$headers = 'From: '.$email. "Bcc: ventas@productoszapata.com.mx\r\n".'X-Mailer: PHP/' . phpversion();

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    $headers = 'From: '."ventas@productoszapata.com.mx". "\r\n".'X-Mailer: PHP/' . phpversion();
    mail($email, $subject, "Esta es una copia de tu mensaje: \r\n".$message, $headers); //This method sends the mail.
	echo 'Recibirás una copia de este correo, gracias!!! '; // success message
}else{
	echo "Invalid Email, please provide an correct email.";
}

?>