<?php

include_once "../entidad/pais.entidad.php";
include_once "../modelo/pais.modelo.php";
// include_once "../controlador/login.read.php";


$pais = $_POST['txtPais'];
$codigo_dane = $_POST['txtCodigoDane'];

$paisE = new \entidad\Pais();
$paisE ->setPais($pais);
$paisE ->setCodigo_dane($codigo_dane);

$paisM= new \modelo\pais($paisE);

$resultado = $paisM->createadm();

unset($paisE);
unset($paisM);

echo json_encode($resultado);


?>