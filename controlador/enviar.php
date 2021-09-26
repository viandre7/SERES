<?php

// Llamar a los campos
$nombre_completo= $_POST['txtNombreContac'];
$email = $_POST['emailContac'];
$mensaje = $_POST['txtMensajeContac'];

// Datos para el correo
$destinatario = "viandregarcia@hotmail.com";
$asunto =  "Contacto desde nuestra web";

$email = "De: $nombre_completo \n";
$email .= "Correo: $email \n";
$email .= "Mensaje: $mensaje";

//Enviar mensaje
mail($destinatario, $asunto, $mensaje);

header('Location: ../vista/email_exitoso.frm.php');


?>