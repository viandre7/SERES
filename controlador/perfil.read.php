<?php

include_once "../entidad/perfil.entidad.php";
include_once "../modelo/perfil.modelo.php";

$perfilE = new \entidad\Perfil();
$perfilM= new \modelo\Perfil($perfilE);

$resultado = $perfilM->read();

unset($perfilE);
unset($perfilM);

echo json_encode($resultado);




?>