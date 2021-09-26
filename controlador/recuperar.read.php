<?php
    include_once("../entidad/usuario.entidad.php");
    include_once("../modelo/recupera.modal.php");
    

    $usuario=$_POST['txtemail'];
        
    $recupera=$_POST['txtrecu'];

    $usuarioE =new \entidad\usuario();
    $usuarioE->setUsuario($usuario);
    $usuarioE->setRecupera($recupera);
    
    $usuarioM = new \modelo\usuario($usuarioE);
    $retorno =$usuarioM->readRecupera(); 
    
    unset($usuario);
    unset($usuarioM);
    echo json_encode($retorno);
?>