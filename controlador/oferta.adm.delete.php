<?php

include_once "../entidad/oferta.entidad.php";
include_once "../modelo/oferta.modelo.php";

$id_oferta=$_POST['txtidofertael'];
$estado=$_POST['selctEstado'];


$ofertaE = new \entidad\Oferta();
$ofertaE->setId_Oferta($id_oferta);
$ofertaE->setEstado($estado);

$ofertaM = new \modelo\Oferta($ofertaE);
$resultado = $ofertaM->cambio();

unset($ofertaE);
unset($ofertaM);

echo json_encode($resultado);

?>