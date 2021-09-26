<?php

include_once "../entidad/departamento.entidad.php";
include_once "../modelo/departamento.modelo.php";
// include_once "../controlador/login.read.php";

$id_departamento= $_POST['txtDeparElm'];
$estado=$_POST['selctEstado'];


$departamentoE = new \entidad\Departamento();
$departamentoE ->setId_departamento($id_departamento);
$departamentoE ->setEstado($estado);

$departamentoM= new \modelo\Departamento($departamentoE);

$resultado = $departamentoM->cambio();

unset($departamentoE);
unset($departamentoM);

echo json_encode($resultado);


?>