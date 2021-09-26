<?php
include_once "../entidad/perfil.entidad.php";
include_once "../modelo/perfil.modelo.php";

$idfacebook= $_POST['data'];
$email= $_POST['email'];
$name= $_POST['name'];

var_dump($idfacebook);
var_dump($email);
var_dump($name);


$perfilE = new \entidad\Perfil();
$perfilE ->setTipo_documento(9);
$perfilE ->setIdentificacion($idfacebook);
$perfilE ->setPrimer_nombre($name);
$perfilE ->setOtros_nombre('N/A');
$perfilE ->setPrimer_apellido('N/A');
$perfilE ->setOtros_apellido('N/A');
$perfilE ->setGenero('N/A');
$perfilE ->setUbicacion(1);
$perfilE ->setEmail($email);
$perfilE ->setPassword('N/A');
$perfilE ->setDireccion('N/A');
$perfilE ->setBarrio('N/A');
$perfilE ->setMunicipio('603');
$perfilE ->setTelefono('N/A');
$perfilE ->setCelular('N/A');
$perfilE ->setFecha_nacimiento('N/A');
$perfilE ->setFecha_expedicion('N/A');
$perfilE ->setRecupera('N/A');
$perfilE ->setIdface($idfacebook);
$perfilE ->setPregunta('N/A');
//$perfilE ->setUbicacion();

$perfilM = new \modelo\Perfil($perfilE);
$resultado = $perfilM->create();
unset($perfilE);
unset($perfilM);

echo json_encode($resultado);


?>