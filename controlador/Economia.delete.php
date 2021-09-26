<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$id= $_POST['txtIdCatElm'];
$estado= $_POST['selctEstado'];

$datos =new \entidad\econo();
$datos->setIdEcon($id);
$datos->setEstado($estado);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->delete();


unset($datos);
unset($datosE);

echo json_encode($retorno);




?>