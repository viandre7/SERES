<?php

include_once("../entidad/persona.entidad.php");
include_once("../modelo/per.modelo.php");

$personaE =new \entidad\persona();
$personaM =new \modelo\persona($personaE);
$retorno =$personaM->read();

unset($personaE);
unset($personaM);

echo json_encode($retorno);






?>