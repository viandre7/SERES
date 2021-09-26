<?php

include_once "../entidad/comentario.entidad.php";
include_once "../modelo/comentarioC.modelo.php";


$idOferta = $_POST['txtIdOfertaCom'];
$usuarioComentario = $_POST['txtUsuarioComento'];
$comentario = $_POST['txtComentario'];
$calificacion = $_POST['selCalificacion'];

$comentarioE = new \entidad\Comentario();
$comentarioE ->setidOferta($idOferta);
$comentarioE ->setUsuarioComentario($usuarioComentario);
$comentarioE ->setComentario($comentario);
$comentarioE ->setCalificacion($calificacion);

$comentarioM = new \modelo\Comentario($comentarioE);
$resultado = $comentarioM->create();

unset($comentarioE);
unset($comentarioM);

echo json_encode($resultado);

?>