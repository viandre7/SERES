<?php

include_once "../entidad/misOfertas.entidad.php";
include_once "../modelo/misOfertas.modelo.php";

$idOfertaMod = $_POST['numIdOferta'];
$idCategoriaMod = $_POST['txtIdCategoria'];
$idSubCategoriaMod = $_POST['txtIdSubCategoria'];;
$nombreOfertaMod = $_POST['txtIdNombreOfertaMod'];
$descripcionMod = $_POST['txtIdDescripcion'];
$precioOfeMod = $_POST['txtIdPrecioOfeMod'];
$UnidadMedidaMod = $_POST['txtUniMedi'];
$imagen = $_FILES['txOf']['tmp_name'];
$tipo =$_FILES['txOf']['type'];
$tamaño =$_FILES['txOf']['size'];

if($tipo = $_FILES["txOf"]["type"] == "image/jpeg" || $tipo = $_FILES["txOf"]["type"] == "image/png"  ||  $tipo = $_FILES["txOf"]["type"] == "image/jpg"){
    if($tamaño = $_FILES["txOf"]["size"] <= 10000000){
        $directorio = "../componente/img/oferta/";
        $nombre = $_FILES['txOf']['name'];
        move_uploaded_file($_FILES['txOf']['tmp_name'],$directorio.$nombre);

        $misOfertasE = new \entidad\MisOfertas();
        $misOfertasE->setId_Oferta($idOfertaMod);
        $misOfertasE->setIdCategoria($idCategoriaMod);
        $misOfertasE->setIdSubCategoria($idSubCategoriaMod);
        $misOfertasE ->setImagen($nombre);
        $misOfertasE->setNomOferta($nombreOfertaMod);
        $misOfertasE->setDescripcion($descripcionMod);
        $misOfertasE->setPrecioOfer($precioOfeMod);
        $misOfertasE->setUnidadMedida($UnidadMedidaMod);
        
        
        $misOfertasM = new \modelo\MisOfertas($misOfertasE);
        $resultado = $misOfertasM->update();
        
        unset($misOfertasE);
        unset($misOfertasM);
        
        // echo json_encode($resultado);
        echo "<script> alert('Oferta Modificada ')</script>";
         echo "<script> window.location.href = '../vista/misOfertas.frm.php'</script>";


    }
    else{
        echo "<script> alert('tamaño de imagen invalio')</script>";
        echo "<script> window.location.href = '../vista/misOfertas.frm.php'</script>";


    }
}
{
     echo "<script> alert('tipo de imagen no permitido ')</script>";
    echo "<script> window.location.href = '../vista/misOfertas.frm.php'</script>";


}


  



?>