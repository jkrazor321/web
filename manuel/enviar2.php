<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['coments'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensajeCompleto = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensajeCompleto .= "Su e-mail es: " . $mail . " \r\n";
$mensajeCompleto .= "Asunto: " . $asunto . " \r\n";
$mensajeCompleto .= "Mensaje: " . $mensaje . " \r\n";
$mensajeCompleto .= "Enviado el " . date('d/m/Y', time());

$para = 'anaf27286@gmail.com';
$asuntoCorreo = 'Mensaje de mi sitio web';

mail($para, $asuntoCorreo, utf8_decode($mensajeCompleto), $header);

header("Location:index2.html");
?>
