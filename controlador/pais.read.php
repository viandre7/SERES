<?php

include_once "../entidad/pais.entidad.php";
include_once "../modelo/pais.modelo.php";

$paisE = new \entidad\Pais();
$paisM= new \modelo\Pais($paisE);

$resultado = $paisM->read();

unset($paisE);
unset($paisM);

echo json_encode($resultado);




?>