<?php

include_once "../entidad/oferta.entidad.php";
include_once "../modelo/oferta.modelo.php";
// include_once "../controlador/login.read.php";

$ofertaE = new \entidad\Oferta();
$ofertaM= new \modelo\Oferta($ofertaE);

$resultado = $ofertaM->contar();

unset($ofertaE);
unset($ofertaM);

echo json_encode($resultado);


?>