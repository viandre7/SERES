<?php

include_once "../entidad/municipio.entidad.php";
include_once "../modelo/municipio.modelo.php";

$municipioE = new \entidad\municipio();
$municipioM= new \modelo\municipio($municipioE);

$resultado = $municipioM->readadm();

unset($municipioE);
unset($municipioM);

echo json_encode($resultado);




?>