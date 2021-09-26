<?php

include_once "../entidad/ofertante.entidad.php";
include_once "../modelo/ofertante.modelo.php";

$id_ofertante= $_POST['txtidofertael'];
$estado= $_POST['selctEstado'];


$ofertanteE = new \entidad\Ofertante();
$ofertanteE->setIdOfertante($id_ofertante);
$ofertanteE->setEstado($estado);

$ofertanteM = new \modelo\Ofertante($ofertanteE);
$resultado = $ofertanteM->cambio();

unset($ofertanteE);
unset($ofertanteM);

echo json_encode($resultado);
?>