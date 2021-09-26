<?php

include_once "../entidad/subcategoria.entidad.php";
include_once "../modelo/subcategoria.modelo.php";
// include_once "../controlador/login.read.php";

$subcategoriaE = new \entidad\Subcategoria();
$subcategoriaM= new \modelo\Subcategoria($subcategoriaE);

$resultado = $subcategoriaM->read();

unset($subcategoriaE);
unset($subcategoriaM);

echo json_encode($resultado);


?>