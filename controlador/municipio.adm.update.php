<?php

include_once "../entidad/municipio.entidad.php";
include_once "../modelo/municipio.modelo.php";
// include_once "../controlador/login.read.php";

$id_municipio=  $_POST['txtIdMunicipio'];
$municipio = $_POST['txtMunicipioMod'];
$id_departamento = $_POST['txtNuevoDep'];
$codigo_dane = $_POST['txtCodigoDaneMod'];

$municipioE = new \entidad\Municipio();
$municipioE ->setId_municipio($id_municipio);
$municipioE ->setmunicipio($municipio);
$municipioE ->setCodigo_dane($codigo_dane);
$municipioE ->setId_departamento($id_departamento);

$municipioM= new \modelo\municipio($municipioE);

$resultado = $municipioM->updateadm();

unset($municipioE);
unset($municipioM);

echo json_encode($resultado);


?>