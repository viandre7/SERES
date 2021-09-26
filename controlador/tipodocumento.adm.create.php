<?php

include_once "../entidad/documento.entidad.php";
include_once "../modelo/documento.modelo.php";
// include_once "../controlador/login.read.php";

$nombre = $_POST['txtTipdocumento'];
$nomenclatura = $_POST['txtTipoDocumentoM'];

$documentoE = new \entidad\documento();
$documentoE ->setNombre($nombre);
$documentoE ->setNomenclatura($nomenclatura);


$documentoM= new \modelo\documento($documentoE);

$resultado = $documentoM->createadm();

unset($documentoE);
unset($documentoM);

echo json_encode($resultado);


?>