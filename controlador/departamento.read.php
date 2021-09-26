<?php

include_once "../entidad/departamento.entidad.php";
include_once "../modelo/departamento.modelo.php";

$departamentoE = new \entidad\Departamento();
$departamentoM= new \modelo\Departamento($departamentoE);

$resultado = $departamentoM->read();

unset($departamentoE);
unset($departamentoM);

echo json_encode($resultado);




?>