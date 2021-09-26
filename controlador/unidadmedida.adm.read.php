<?php

include_once "../entidad/unidadmedida.entidad.php";
include_once "../modelo/unidadmedida.modelo.php";

  
$unidadmedidaE = new \entidad\Unidadmedida();
$unidadmedidaM = new  \modelo\Unidadmedida($unidadmedidaE);       
$resultado = $unidadmedidaM->read();

unset($unidadmedidaE);
unset($unidadmedidaM);

echo json_encode($resultado);
    
   
?>