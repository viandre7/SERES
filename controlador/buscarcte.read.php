<?php

include_once "../entidad/buscar.entidad.php";
include_once "../modelo/buscar.modelo.php";
// include_once "../controlador/login.read.php";

$que_busca = $_POST['txtBuscarOferta'];



$buscarE = new \entidad\Buscar();
$buscarE ->setOferta($que_busca);

$buscarM= new \modelo\Buscar($buscarE);
$resultado = $buscarM->readcte();

unset($buscarE);
unset($buscarM);

echo json_encode($resultado);


?>