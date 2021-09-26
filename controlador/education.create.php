<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$nombre=$_POST['txtEdu'];

$datos =new \entidad\econo();
$datos->setNivel($nombre);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->educa();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/niveleducativo.php'</script>";

?>