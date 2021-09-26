<?php

include_once "../entidad/pais.entidad.php";
include_once "../modelo/pais.modelo.php";

$paisE = new \entidad\Pais();
$paisM= new \modelo\Pais($paisE);

$resultado = $paisM->readadm();

unset($paisE);
unset($paisM);

echo json_encode($resultado);




?>