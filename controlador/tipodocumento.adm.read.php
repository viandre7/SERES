<?php

include_once "../entidad/documento.entidad.php";
include_once "../modelo/documento.modelo.php";

  
$documentoE = new \entidad\Documento();
$documentoM = new  \modelo\Documento($documentoE);       
$resultado = $documentoM->readadm();

unset($documentoE);
unset($documentoM);

echo json_encode($resultado);
    
   
?>