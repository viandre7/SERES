<?php

include_once("../entidad/ubicacion.entidad.php");
include_once("../modelo/ubicacion.modelo.php");
    

    $idUbicacion=$_POST['idubicacion'];
    $celular=$_POST['numIdCel'];
    $email=$_POST['emailIdUsuario'];
    $direccion=$_POST['Direc'];



    $ubicacion =new \entidad\ubicacion();
    $ubicacion->setIdUbicacion($idUbicacion);
    $ubicacion->setCelular($celular);
    $ubicacion->setEmail($email);
    $ubicacion->setDireccion($direccion);


    $ubicacionM =new \modelo\ubicacion($ubicacion);

    $retorno = $ubicacionM->update();

    unset($ubicacion);
    unset($ubicacionM);

    

    header('Location: ../vista/mi_perfil.frm.php');

?>