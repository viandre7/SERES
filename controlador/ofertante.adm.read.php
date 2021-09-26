<?php

include_once "../entidad/ofertante.entidad.php";
include_once "../modelo/ofertante.modelo.php";
// include_once "../controlador/login.read.php";

$ofertanteE = new \entidad\Ofertante();
$ofertanteM= new \modelo\ofertante($ofertanteE);

$resultado = $ofertanteM->read();

unset($ofertanteE);
unset($ofertanteM);

echo json_encode($resultado);


?>