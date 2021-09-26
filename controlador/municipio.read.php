<?php

include_once "../entidad/municipio.entidad.php";
include_once "../modelo/municipio.modelo.php";

$municipioE = new \entidad\Municipio();
$municipioM= new \modelo\Municipio($municipioE);

$resultado = $municipioM->read();

unset($municipioE);
unset($municipioM);

echo json_encode($resultado);




?>