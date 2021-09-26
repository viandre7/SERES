<?php
include_once("../entidad/ocupacion.entidad.php");
include_once("../modelo/ocupa_profesion.modelo.php");

$nom=$_POST['txtNombre'];
$code=$_POST['txtNivel'];

$datos =new \entidad\ocupa();
$datos->setProfe($nom);
$datos->setNivel($code);


$datosE =new \modelo\ocupa($datos);
$retorno= $datosE->crea();


unset($datos);
unset($datosE);

echo json_encode($retorno);
echo "<script> window.location.href = '../vista/admin/profesion.php'</script>";

?>