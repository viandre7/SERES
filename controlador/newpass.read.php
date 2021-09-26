<?php
    include_once("../entidad/usuario.entidad.php");
    include_once("../modelo/recupera.modal.php");
    

    $email=$_POST['contrasena'];
    $contraseña=$_POST['pass1'];


    $usuarioE =new \entidad\usuario();
    $usuarioE->setIdUsuario($email);
    $usuarioE->setContrasena($contraseña);
    
    $usuarioM = new \modelo\usuario($usuarioE);
    $retorno =$usuarioM->newpass(); 
    
    unset($usuario);
    unset($usuarioM);
    echo json_encode($retorno);
?>