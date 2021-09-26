<?php

include_once "../entidad/subcategoria.entidad.php";
include_once "../modelo/categoria.modelo.php";
// include_once "../controlador/login.read.php";

$categoriaE = new \entidad\Categoria();
$categoriaM= new \modelo\Categoria($categoriaE);

$resultado = $categoriaM->readadm();

unset($categoriaE);
unset($categoriaM);

echo json_encode($resultado);


?>