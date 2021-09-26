<?php


include_once "../entidad/unidadmedida.entidad.php";
include_once "../modelo/unidadmedida.modelo.php";
// include_once "../controlador/login.read.php";

$id_unidadmedida= $_POST['txtMunEli'];
$estado= $_POST['selctEstado'];


$unidadmedidaE = new \entidad\Unidadmedida();
$unidadmedidaE ->setId_unidad_medida($id_unidadmedida);
$unidadmedidaE ->setEstado($estado);

$unidadmedidaM= new \modelo\Unidadmedida($unidadmedidaE);

$resultado = $unidadmedidaM->cambio();

unset($unidadmedidaE);
unset($unidadmedidaM);

echo json_encode($resultado);


?>