<?php

include_once("../entidad/usuario.entidad.php");
include_once("../modelo/usuario.modelo.php");

$id=$_POST["txtid"];
$foto=$_FILES["tx"]["tmp_name"];
$tipo =$_FILES['tx']['type'];
$tamaño =$_FILES['tx']['size'];

$archivos_disp_ar = array('jpg', 'jpeg', 'png');

if($tipo = $_FILES["tx"]["type"] == "image/jpeg" || $tipo = $_FILES["tx"]["type"] == "image/png"  ||  $tipo = $_FILES["tx"]["type"] == "image/jpg"){
   if($tamaño = $_FILES["tx"]["size"] <= 10000000){
       $directorio = "../imagenes/";
       $nombre = $_FILES['tx']['name'];
    move_uploaded_file($_FILES['tx']['tmp_name'],$directorio.$nombre);
    $usuario =new \entidad\usuario();
    $usuario->setIdUsuario($id);
    $usuario->setImg($nombre);
    $usuarioM =new \modelo\usuario($usuario);

    $retorno =$usuarioM->update();


    unset($usuario);
    unset($usuarioM);

    echo "<script> window.location.href = '../vista/mi_perfil.frm.php'</script>";

   }
   else{
        echo "<script> alert('tamaño no aceptado')</script>";
        echo "<script> window.location.href = '../vista/mi_perfil.frm.php'</script>";

   }

}
else{
    echo "<script>alert('tipo de Imagen no valida los permitisos son: png, jpeg, jpg')</script>";
    echo "<script> window.location.href = '../vista/mi_perfil.frm.php'</script>";


}




?>