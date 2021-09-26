<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$id =$_POST['txtIdCatElm'];
$nomO=$_POST['selctEstado'];

$datos =new \entidad\ocupa();
$datos->setIdProfe($id);
$datos->setEstado($nomO);



$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->dele();


unset($datos);
unset($datosE);

echo json_encode($retorno);

?>