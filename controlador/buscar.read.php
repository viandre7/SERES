<?php

include_once "../entidad/buscar.entidad.php";
include_once "../modelo/buscar.modelo.php";
// include_once "../controlador/login.read.php";

$oferta = $_POST['txtBuscarOferta'];


$buscarE = new \entidad\Buscar();
$buscarE ->setOferta($oferta);

$buscarM= new \modelo\Buscar($buscarE);
$resultado = $buscarM->read();

unset($buscarE);
unset($buscarM);

echo json_encode($resultado);


?>