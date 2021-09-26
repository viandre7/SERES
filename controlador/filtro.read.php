<?php

include_once "../entidad/filtro.entidad.php";
include_once "../modelo/filtro.modelo.php";
// include_once "../controlador/login.read.php";

if (isset($_POST['cat']))
{
    $id_categoria = $_POST['cat'];
}
else{
    $id_categoria = NULL ;
}

 if (isset($_POST['txtubicacion']))
{
    $id_municipio = $_POST['txtubicacion'];
}
else{
    $id_municipio = NULL ;
}

if (isset($_POST['numtarifaMaxima']))
{
    $valor_oferta = $_POST['numtarifaMaxima'];
}
else{
    $valor_oferta = NULL ;
}
 
 if (isset($_POST['ckestrellas']))
 {
     $calificacion = $_POST['ckestrellas'];
 }
 else{
     $calificacion = "0";
 }
 
$filtroE = new \entidad\Filtro();
$filtroE ->SetId_categoria($id_categoria);
$filtroE ->setId_municipio($id_municipio);
$filtroE ->setValor_oferta($valor_oferta);
$filtroE ->setCalificacion($calificacion);

$filtroM= new \modelo\Filtro($filtroE);
$resultado = $filtroM->read();

unset($filtroE);
unset($filtroM);

echo json_encode($resultado);


?>