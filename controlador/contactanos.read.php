<?php

include_once "../entidad/contactanos.entidad.php";
include_once "../modelo/contactanos.modelo.php";

   
    $contactanosE = new \entidad\Contactanos();

    $contactanosM = new  \modelo\Contactanos($contactanosE);
    $resultado = $contactanosM->read();

    unset($contactanosE);
    unset($contactanosM);
   
    echo json_encode($resultado);
    // var_dump($resultado)
    
   
?>