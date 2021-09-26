<?php

include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$datos =new \entidad\ocupa();
$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->leer();

unset($datos);
unset($datosE);

echo json_encode($retorno);




?>