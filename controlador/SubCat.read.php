<?php

    include_once '../entidad/publicarOferta.entidad.php';
    include_once '../modelo/cat.oferta.modelo.php';
   
    

    $ofertaE = new \entidad\Oferta();

    $ofertaM= new \modelo\Oferta($ofertaE);
    $resultado = $ofertaM->read();

    

    unset($ofertaE);
    unset($ofertaM);


    echo json_encode($resultado);
    
    
   
?>