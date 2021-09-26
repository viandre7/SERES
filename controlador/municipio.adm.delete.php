<?php

include_once "../entidad/municipio.entidad.php";
include_once "../modelo/municipio.modelo.php";
// include_once "../controlador/login.read.php";

$id_municipio= $_POST['txtMunEli'];
$estado=$_POST['selctEstado'];


$municipioE = new \entidad\municipio();
$municipioE ->setId_municipio($id_municipio);
$municipioE ->setEstado($estado);

$municipioM= new \modelo\municipio($municipioE);

$resultado = $municipioM->cambio();

unset($municipioE);
unset($municipioM);

echo json_encode($resultado);


?>