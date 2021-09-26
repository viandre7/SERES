<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$id =$_POST['id'];
$nombre=$_POST['txtact'];
$codigo=$_POST['txtcode'];

$datos =new \entidad\ocupa();
$datos->setIdOcupa($id);
$datos->setOcupa($nombre);
$datos->setCode($codigo);



$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->update();


unset($datos);
unset($datosE);

echo json_encode($retorno);

echo "<script> window.location.href = '../vista/admin/niveleducativo.php'</script>";

?>