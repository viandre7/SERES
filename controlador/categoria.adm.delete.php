<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$id_categoria= $_POST['txtIdCatElm'];
$estado= $_POST['selctEstado'];


$categoriaE = new \entidad\Categoria();
$categoriaE->setId_categoria($id_categoria);
$categoriaE->setEstado($estado);

$categoriaM = new \modelo\Categoria($categoriaE);
$resultado = $categoriaM->cambio();

unset($categoriaE);
unset($categoriaM);

echo json_encode($resultado);
?>