<?php

include_once "../entidad/misOfertas.entidad.php";
include_once "../modelo/misOfertas.modelo.php";
include_once "../controlador/logueo.read.php";

    $idOfertante = $_SESSION ['id_ofertante']; 
   
    $misOfertasE = new \entidad\misOfertas();
    $misOfertasE->setIdOfertante($idOfertante);

    $misOfertasM = new  \modelo\MisOfertas($misOfertasE);
    $resultado = $misOfertasM->read();

    unset($misOfertasE);
    unset($misOfertasM);
   
    echo json_encode($resultado);
    // var_dump($resultado)
    
   
?>