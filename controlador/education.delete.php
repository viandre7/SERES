<?php
include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$id= $_POST['txtId'];
$estado= $_POST['selctEstado'];

$datos =new \entidad\econo();
$datos->setIdNivel($id);
$datos->setEstado($estado);


$datosE =new \modelo\econo($datos);
$retorno= $datosE->deleteN();


unset($datos);
unset($datosE);

echo json_encode($retorno);

?>