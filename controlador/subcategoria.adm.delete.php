<?php

include_once "../entidad/subcategoria.entidad.php";
include_once "../modelo/subcategoria.modelo.php";

$id_subcategoria= $_POST['txtIdCatElm'];
$estado= $_POST['selctEstado'];


$subcategoriaE = new \entidad\subcategoria();
$subcategoriaE->setId_subcategoria($id_subcategoria);
$subcategoriaE->setEstado($estado);

$subcategoriaM = new \modelo\subcategoria($subcategoriaE);
$resultado = $subcategoriaM->cambio();

unset($subcategoriaE);
unset($subcategoriaM);

echo json_encode($resultado);
?>