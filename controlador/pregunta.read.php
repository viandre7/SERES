<?php

include_once "../entidad/pregunta.entidad.php";
include_once "../modelo/pregunta.modelo.php";

$preguntaE = new \entidad\Pregunta();
$preguntaM= new \modelo\Pregunta($preguntaE);

$resultado = $preguntaM->read();

unset($preguntaE);
unset($preguntaM);

echo json_encode($resultado);




?>