<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$id =$_POST['id'];
$nombre=$_POST['txtact'];
$codigo=$_POST['txtcode'];

$datos =new \entidad\econo();
$datos->setIdEcon($id);
$datos->setEcoNombre($nombre);
$datos->setCodigo($codigo);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->update();


unset($datos);
unset($datosE);

echo json_encode($retorno);


echo "<script> window.location.href = '../vista/admin/ActividadEconomiaca.php'</script>";

?>