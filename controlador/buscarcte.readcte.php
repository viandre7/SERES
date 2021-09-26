<?php

include_once "../entidad/buscar.entidad.php";
include_once "../modelo/buscar.modelo.php";
// include_once "../controlador/login.read.php";

$id_catego = $_POST['numcatego'];



$buscarE = new \entidad\Buscar();
$buscarE ->setId_categoria($id_catego);

$buscarM= new \modelo\Buscar($buscarE);
$resultado = $buscarM->readcte();

unset($buscarE);
unset($buscarM);

echo json_encode($resultado);


?>