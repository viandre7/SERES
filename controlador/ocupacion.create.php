<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$nom=$_POST['txtNombre'];
$code=$_POST['txtCodigo'];

$datos =new \entidad\ocupa();
$datos->setOcupa($nom);
$datos->setCode($code);


$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->create();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/niveleducativo.php'</script>";

?>