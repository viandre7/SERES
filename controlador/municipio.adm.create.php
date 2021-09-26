<?php

include_once "../entidad/municipio.entidad.php";
include_once "../modelo/municipio.modelo.php";
// include_once "../controlador/login.read.php";

$municipio = $_POST['txtNombreMun'];
$codigo_dane = $_POST['txtCodigoDane'];
$id_departamento = $_POST['txtDepartamentos'];

$municipioE = new \entidad\Municipio();
$municipioE ->setmunicipio($municipio);
$municipioE ->setCodigo_dane($codigo_dane);
$municipioE ->setId_Departamento($id_departamento);

$municipioM= new \modelo\Municipio($municipioE);

$resultado = $municipioM->createadm();

unset($municipioE);
unset($municipioM);

echo json_encode($resultado);


?>