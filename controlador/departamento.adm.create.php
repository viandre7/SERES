<?php

include_once "../entidad/departamento.entidad.php";
include_once "../modelo/departamento.modelo.php";
// include_once "../controlador/login.read.php";

$departamento = $_POST['txtNombreDeparta'];
$codigo_dane = $_POST['txtCodigoDane'];
$id_pais = $_POST['txtPaiss'];

$departamentoE = new \entidad\Departamento();
$departamentoE ->setDepartamento($departamento);
$departamentoE ->setCodigo_dane($codigo_dane);
$departamentoE ->setId_pais($id_pais);

$departamentoM= new \modelo\Departamento($departamentoE);

$resultado = $departamentoM->createadm();

unset($departamentoE);
unset($departamentoM);

echo json_encode($resultado);


?>