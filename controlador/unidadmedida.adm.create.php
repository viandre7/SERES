<?php

include_once "../entidad/unidadmedida.entidad.php";
include_once "../modelo/unidadmedida.modelo.php";
// include_once "../controlador/login.read.php";

$nombre = $_POST['txtunidadMedida'];
$nomenclatura = $_POST['txtNomUnidadM'];

$unidadmedidaE = new \entidad\unidadmedida();
$unidadmedidaE ->setNombre($nombre);
$unidadmedidaE ->setNomenclatura($nomenclatura);


$unidadmedidaM= new \modelo\unidadmedida($unidadmedidaE);

$resultado = $unidadmedidaM->createadm();

unset($unidadmedidaE);
unset($unidadmedidaM);

echo json_encode($resultado);


?>