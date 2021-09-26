<?php

    include_once "../entidad/misOfertas.entidad.php";
    include_once "../modelo/misOfertas.modelo.php";
 
    // $id_cate= $_POST['inIdCategoria'];
    
    $misOfertasE = new \entidad\MisOfertas();
    // $misOfertasE ->setIdCategoria($id_cate);    

    $misOfertasM = new  \modelo\MisOfertas($misOfertasE);   
    $resultado = $misOfertasM->buscarSubCat();


    unset($misOfertasE);
    unset($misOfertasM);


    echo json_encode($resultado);
    
    
   
?>