<?php

include_once "../entidad/subcategoria.entidad.php";
include_once "../modelo/subcategoria.modelo.php";
// include_once "../controlador/login.read.php";

$subcategoria = $_POST['txtNombreSubCat'];
$id_categoria = $_POST['txtCategorias'];

$subcategoriaE = new \entidad\Subcategoria();
$subcategoriaE ->setSubcategoria($subcategoria);
$subcategoriaE ->setId_categoria($id_categoria);

$subcategoriaM= new \modelo\Subcategoria($subcategoriaE);

$resultado = $subcategoriaM->create();

unset($subcategoriaE);
unset($subcategoriaM);

echo json_encode($resultado);


?>