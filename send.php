<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$to = "nati_ferrero@hotmail.com"; // Nuestro correo de contacto

// recogeremos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']);

if($nombre == ""){
	echo '<div class="alert alert-danger">Todos los campos son requeridos para el envionombre</div>';
	}
else if($email == ""){
    echo '<div class="alert alert-danger">Todos los campos son requeridos para el envioemail</div>';
}else if($asunto == ""){
    echo '<div class="alert alert-danger">Todos los campos son requeridos para el enviotel</div>';
}else if($mensaje == ""){
    echo '<div class="alert alert-danger">Todos los campos son requeridos para el enviomensaje</div>';
}
else{

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->Subject = $asunto;
	$mail->isHtml(true);
	$mail->Body = '<strong>'.$nombre.'</strong> le ha contactado desde su web, y le ha enviado el siguiente mensaje: <br><p>'.$mensaje.'</p>';
    //echo '<div class="alert alert-danger">todos los campos han sido enviados</div>';
	$mail->CharSet = 'UTF-8';
	$mail->send();
	//echo '<div class="alert alert-danger">mail iupi</div>';

}

?>
