<?php

include_once "../entidad/contactanos.entidad.php";
include_once "../modelo/contactanos.modelo.php";


$nombre_completo= $_POST['txtNombreContac'];
$email = $_POST['emailContac'];
$mensaje = $_POST['txtMensajeContac'];



$contactanosE = new \entidad\Contactanos();
$contactanosE ->setNombre_completo($nombre_completo);
$contactanosE ->setEmail($email);
$contactanosE ->setMensaje($mensaje);



$contactanosM = new \modelo\Contactanos($contactanosE);
$resultado = $contactanosM->create();

unset($contactanosE);
unset($contactanosM);

echo json_encode($resultado);

?>