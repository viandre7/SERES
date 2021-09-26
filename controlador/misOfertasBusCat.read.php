<?php

    include_once "../entidad/misOfertas.entidad.php";
    include_once "../modelo/misOfertas.modelo.php";
 

    $misOfertasE = new \entidad\MisOfertas();
    $misOfertasM = new  \modelo\MisOfertas($misOfertasE);
   
    $resultado = $misOfertasM->buscarCat();
    // $resultado_1 = $misOfertasM->buscarSubCat();


    unset($misOfertasE);
    unset($misOfertasM);
    // $x=array($resultado,$resultado_1);

    echo json_encode($resultado);
    // echo json_encode($x);
    
    
   
?>