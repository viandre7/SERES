<?php

include_once "../entidad/misOfertas.entidad.php";
include_once "../modelo/misOfertas.modelo.php";


    
    $idOfertaEli = $_POST['txtIdOferElm'];

    $misOfertasE = new \entidad\MisOfertas();

    $misOfertasE->setId_Oferta($idOfertaEli);

    $misOfertasM = new \modelo\MisOfertas($misOfertasE);
    $resultado = $misOfertasM->delete();  

    unset($misOfertasE);
    unset($misOfertasM);

    echo json_encode($resultado);
   
   
?>