<?php

include_once "../entidad/documento.entidad.php";
include_once "../modelo/documento.modelo.php";
// include_once "../controlador/login.read.php";

$id_documento=  $_POST['txttipoDocMod'];
$nombre= $_POST['txtdocmentMod'];
$nomenclatura = $_POST['txtNomeMod'];

$documentoE = new \entidad\documento();
$documentoE ->setId_documento($id_documento);
$documentoE ->setNombre($nombre);
$documentoE ->setNomenclatura($nomenclatura);

$documentoM= new \modelo\documento($documentoE);

$resultado = $documentoM->updateadm();

unset($documentoE);
unset($documentoM);

echo json_encode($resultado);


?>

<?php