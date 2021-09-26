<?php

include_once("../entidad/educt_educa.entidad.php");
include_once("../modelo/economi_educa.modelo.php");

$datos =new \entidad\econo();
$datosE =new \modelo\econo($datos);
$retorno= $datosE->read();

unset($datos);
unset($datosE);

echo json_encode($retorno);




?>