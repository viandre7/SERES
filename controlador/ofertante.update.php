<?php

    include_once("../entidad/ofertante.entidad.php");
    include_once("../modelo/ofertante.modelo.php");


    $idtext =$_POST['idText'];
    $descripcion=$_POST['txtareaSobreMi'];
    $ofertante =new \entidad\ofertante();
    $ofertante->setIdOfertante($idtext);
    $ofertante->setDescripcion($descripcion);
    $ofertanteM= new \modelo\ofertante($ofertante);
    $retorno = $ofertanteM->update();

    unset($ofertante);
    unset($ofertanteM);

    echo json_encode($retorno);

    echo "<script> window.location.href = '../vista/mi_perfil.frm.php'</script>";




?>