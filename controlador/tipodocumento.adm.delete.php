<?php


include_once "../entidad/documento.entidad.php";
include_once "../modelo/documento.modelo.php";
// include_once "../controlador/login.read.php";

$id_documento= $_POST['txttipoEli'];
$estado= $_POST['selctEstado'];


$documentoE = new \entidad\documento();
$documentoE ->setId_documento($id_documento);
$documentoE ->setEstado($estado);

$documentoM= new \modelo\documento($documentoE);

$resultado = $documentoM->cambio();

unset($documentoE);
unset($documentoM);

echo json_encode($resultado);


?>