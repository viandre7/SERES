<?php

include_once "../entidad/comentario.entidad.php";
include_once "../modelo/comentarioC.modelo.php";
// include_once "../controlador/login.read.php";

$id_servicio= $_POST['txtComEli'];
$estado=$_POST['selctEstado'];


$comentarioE = new \entidad\Comentario();
$comentarioE ->setId_Servicio($id_servicio);
$comentarioE ->setEstado($estado);

$comentarioM= new \modelo\Comentario($comentarioE);

$resultado = $comentarioM->cambio();

unset($comentarioE);
unset($comentarioM);

echo json_encode($resultado);


?>