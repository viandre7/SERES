<?php

include_once "../entidad/misOfertas.entidad.php";
include_once "../modelo/comentario.modelo.php";

  
$idOfertaBus = $_POST['numIdVerMas'];   

$misOfertasE = new \entidad\MisOfertas();
$misOfertasE->setId_Oferta($idOfertaBus);

$misOfertasM = new  \modelo\MisOfertas($misOfertasE);   
$resultado = $misOfertasM->readComentario();

    unset($misOfertasE);
    unset($misOfertasM);
   
    echo json_encode($resultado);
    
   
?>