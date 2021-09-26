<?php

include_once "../entidad/pais.entidad.php";
include_once "../modelo/pais.modelo.php";
// include_once "../controlador/login.read.php";

$id_pais= $_POST['txtIdPaisElm'];
$estado=$_POST['selctEstado'];


$paisE = new \entidad\Pais();
$paisE ->setId_pais($id_pais);
$paisE ->setEstado($estado);

$paisM= new \modelo\pais($paisE);

$resultado = $paisM->cambio();

unset($paisE);
unset($paisM);

echo json_encode($resultado);


?>