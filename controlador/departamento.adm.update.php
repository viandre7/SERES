<?php

include_once "../entidad/departamento.entidad.php";
include_once "../modelo/departamento.modelo.php";
// include_once "../controlador/login.read.php";

$id_departamento=  $_POST['txtIdDepartamento'];
$departamento = $_POST['txtDepartamentoMod'];
$id_pais = $_POST['txtNuevoPais'];
$codigo_dane = $_POST['txtCodigoDaneMod'];

$departamentoE = new \entidad\departamento();
$departamentoE ->setId_departamento($id_departamento);
$departamentoE ->setdepartamento($departamento);
$departamentoE ->setCodigo_dane($codigo_dane);
$departamentoE ->setId_pais($id_pais);

$departamentoM= new \modelo\departamento($departamentoE);

$resultado = $departamentoM->updateadm();

unset($departamentoE);
unset($departamentoM);

echo json_encode($resultado);


?>