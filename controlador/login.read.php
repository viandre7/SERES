<?php

    include_once("../entidad/usuario.entidad.php");
    include_once("../modelo/usuario.modelo.php");
    
    session_start();

    $usuario=$_POST['txtUsuario'];
    $clave=$_POST['txtClave'];

    $usuarioE =new \entidad\usuario();
    $usuarioE->setUsuario($usuario);
    $usuarioE->setContrasena($clave);
    
    $usuarioM = new \modelo\usuario($usuarioE);
    $retorno =$usuarioM->readU();
      
    if(!empty($retorno)){
        if(array_key_exists('usuario',$retorno[0])){
            $_SESSION['id_usuario']=$retorno[0]['id_usuario'];
            $_SESSION['usuario']=$retorno[0]['usuario'];
            $_SESSION['id_rol']=$retorno[0]['id_rol'];
            $_SESSION['img_usuario']=$retorno[0]['img_usuario'];
            $_SESSION['municipio']=$retorno[0]['municipio'];
            $_SESSION['departamento']=$retorno[0]['departamento'];
            $_SESSION['pais']=$retorno[0]['pais'];
            $_SESSION['direccion']=$retorno[0]['direccion'];
            $_SESSION['celular']=$retorno[0]['celular'];
            $_SESSION['email']=$retorno[0]['email'];
            $_SESSION['telefono']=$retorno[0]['telefono'];
            $_SESSION['id_persona']=$retorno[0]['id_persona'];
            $_SESSION['primer_nombre']=$retorno[0]['primer_nombre'];
            $_SESSION['otros_nombre']=$retorno[0]['otros_nombre'];
            $_SESSION['primer_apellido']=$retorno[0]['primer_apellido'];
            $_SESSION['otros_apellido']=$retorno[0]['otros_apellido'];
            $_SESSION['id_ubicacion']=$retorno[0]['id_ubicacion'];
            $_SESSION['id_ofertante']=$retorno[0]['id_ofertante'];
            $_SESSION['descripcion_ofertante']=$retorno[0]['descripcion_ofertante'];
        }
       
    }
    
    unset($usuario);
    unset($usuarioM);
    echo json_encode($retorno);
?>