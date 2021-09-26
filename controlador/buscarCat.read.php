<?php

    include_once "../entidad/misOfertas.entidad.php";
    include_once "../modelo/misOfertas.modelo.php";
 
    $misOfertasE = new \entidad\MisOfertas();
    $misOfertasM = new  \modelo\MisOfertas($misOfertasE);
   
    $resultado = $misOfertasM->buscarCat();


    unset($misOfertasE);
    unset($misOfertasM);


    echo json_encode($resultado);
    
    
   
?>