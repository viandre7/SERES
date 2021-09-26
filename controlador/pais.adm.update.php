<?php

include_once "../entidad/pais.entidad.php";
include_once "../modelo/pais.modelo.php";
// include_once "../controlador/login.read.php";

$id_pais=  $_POST['txtIPaisMod'];
$pais = $_POST['txtNombPaisMod'];
$codigo_dane = $_POST['txtCodigoDaneMod'];

$paisE = new \entidad\Pais();
$paisE ->setId_pais($id_pais);
$paisE ->setPais($pais);
$paisE ->setCodigo_dane($codigo_dane);

$paisM= new \modelo\pais($paisE);

$resultado = $paisM->updateadm();

unset($paisE);
unset($paisM);

echo json_encode($resultado);


?>