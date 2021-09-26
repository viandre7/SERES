<?php

include_once "../entidad/unidadmedida.entidad.php";
include_once "../modelo/unidadmedida.modelo.php";
// include_once "../controlador/login.read.php";

$id_unidadmedida=  $_POST['txtUniMedMod'];
$nombre= $_POST['txtUnMedMod'];
$nomenclatura = $_POST['txtNomeMod'];

$unidadmedidaE = new \entidad\Unidadmedida();
$unidadmedidaE ->setId_unidad_medida($id_unidadmedida);
$unidadmedidaE ->setNombre($nombre);
$unidadmedidaE ->setNomenclatura($nomenclatura);

$unidadmedidaM= new \modelo\Unidadmedida($unidadmedidaE);

$resultado = $unidadmedidaM->updateadm();

unset($unidadmedidaE);
unset($unidadmedidaM);

echo json_encode($resultado);


?>

<?php