<?php

include_once "../entidad/publicarOferta.entidad.php";
include_once "../modelo/publicarOferta.modelo.php";


$nombre_oferta= $_POST['txtoferta'];
$descripcion_oferta = $_POST['descripcion_oferta'];
$idofertante = $_POST['idofertante'];
$valor_oferta= $_POST['valor_oferta'];
$id_subcategoria= $_POST['subcategorias'];
$id_categoria= $_POST['categorias'];
$unidad= $_POST['unidad'];
$imagen = $_FILES['txtImagen']['tmp_name'];
$tipo =$_FILES['txtImagen']['type'];
$tamaño =$_FILES['txtImagen']['size'];

if($tipo = $_FILES["txtImagen"]["type"] == "image/jpeg" || $tipo = $_FILES["txtImagen"]["type"] == "image/png"  ||  $tipo = $_FILES["txtImagen"]["type"] == "image/jpg"){
    if($tamaño = $_FILES["txtImagen"]["size"] <= 10000000){
        $directorio = "../componente/img/oferta/";
        $nombre = $_FILES['txtImagen']['name'];
        move_uploaded_file($_FILES['txtImagen']['tmp_name'],$directorio.$nombre);
        $ofertaE = new \entidad\Oferta();
        $ofertaE ->setNombre_oferta($nombre_oferta);
        $ofertaE ->setDescripcion_oferta($descripcion_oferta);
        $ofertaE ->setValor_oferta($valor_oferta);
        $ofertaE ->setImagen($nombre);
        $ofertaE ->setId_unidad_medida($unidad);
        $ofertaE ->setId_ofertante($idofertante);
        $ofertaE ->setId_subcategoria($id_subcategoria);
        $ofertaE ->setId_categoria($id_categoria);


        $ofertaM = new \modelo\Oferta($ofertaE);
        $resultado = $ofertaM->create();

        unset($ofertaE);
        unset($ofertaM);
        // echo json_encode($resultado);
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

//header("location:SERES-main/vista/misOfertas.frm.php");
?>