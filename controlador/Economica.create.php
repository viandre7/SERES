<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$nombre=$_POST['txtNombre'];
$codigo=$_POST['txtCodigo'];

$datos =new \entidad\econo();
$datos->setEcoNombre($nombre);
$datos->setCodigo($codigo);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->create();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/ActividadEconomiaca.php'</script>";


?>