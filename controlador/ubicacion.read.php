<?php

include_once "../entidad/ubicacion.entidad.php";
include_once "../modelo/ubicacion_1.modelo.php";
// include_once "../controlador/login.read.php";

$ubicacionE = new \entidad\Ubicacion();
$ubicacionM= new \modelo\Ubicacion($ubicacionE);

$resultado = $ubicacionM->read();

unset($ubicacionE);
unset($ubicacionM);

echo json_encode($resultado);


?>