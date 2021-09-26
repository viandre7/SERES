<?php

include_once "../entidad/subcategoria.entidad.php";
include_once "../modelo/subcategoria.modelo.php";
// include_once "../controlador/login.read.php";

$id_subcategoria=  $_POST['txtIdSubcategoria'];
$subcategoria = $_POST['txtNombresubcategoriaMod'];
$id_categoria = $_POST['txtNuevaCategoria'];

$subcategoriaE = new \entidad\Subcategoria();
$subcategoriaE ->setId_subcategoria($id_subcategoria);
$subcategoriaE ->setSubcategoria($subcategoria);
$subcategoriaE ->setId_categoria($id_categoria);

$subcategoriaM= new \modelo\Subcategoria($subcategoriaE);

$resultado = $subcategoriaM->update();

unset($subcategoriaE);
unset($subcategoriaM);

echo json_encode($resultado);


?>