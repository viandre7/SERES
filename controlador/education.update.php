<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$id =$_POST['id'];
$nom=$_POST['txtnom'];

$datos =new \entidad\econo();
$datos->setIdNivel($id);
$datos->setNivel($nom);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->updateN();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/niveleducativo.php'</script>";

?>