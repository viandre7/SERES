<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$id= $_POST['txtIdCatElm'];
$estado= $_POST['selctEstado'];

$datos =new \entidad\ocupa();
$datos->setIdOcupa($id);
$datos->setEstado($estado);


$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->delete();


unset($datos);
unset($datosE);

echo json_encode($retorno);

?>