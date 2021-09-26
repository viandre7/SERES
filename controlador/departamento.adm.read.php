<?php

include_once "../entidad/departamento.entidad.php";
include_once "../modelo/departamento.modelo.php";

$departamentoE = new \entidad\departamento();
$departamentoM= new \modelo\departamento($departamentoE);

$resultado = $departamentoM->readadm();

unset($departamentoE);
unset($departamentoM);

echo json_encode($resultado);




?>