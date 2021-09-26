<?php

include_once "../entidad/comentario.entidad.php";
include_once "../modelo/comentarioC.modelo.php";

  
$comentarioE = new \entidad\Comentario();
$comentarioM = new  \modelo\Comentario($comentarioE);       
$resultado = $comentarioM->read();

    unset($comentarioE);
    unset($comentarioM);
   
    echo json_encode($resultado);
    
   
?>