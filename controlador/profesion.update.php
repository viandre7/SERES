<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$id =$_POST['id'];
$nomO=$_POST['txtCatMod'];
$Nivel=$_POST['Nivel'];

$datos =new \entidad\ocupa();
$datos->setIdProfe($id);
$datos->setProfe($nomO);
$datos->setNivel($Nivel);



$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->updated();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/profesion.php'</script>";
?>