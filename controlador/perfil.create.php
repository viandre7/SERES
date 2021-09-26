<?php

include_once "../entidad/perfil.entidad.php";
include_once "../modelo/perfil.modelo.php";

$email = $_POST['txtemail'];
$primernombre = $_POST['txtnombre'];
$otros = $_POST['txtotros'];
$primerapellido = $_POST['txtprimerapellido'];
$otrosapellidos = $_POST['txtotroapellidos'];
$calendario = $_POST['txtcalendario'];
$genero = $_POST['txtgenero'];
$cedula=$_POST['txtcedula'];
$tipodoc=$_POST['txtdocumento'];
$password=$_POST['txtPassword'];
$direccion=$_POST['txtdireccion'];
$barrio=$_POST['txtbarrio'];
$municipio=$_POST['txtmunicipio'];
$telefono=$_POST['txttelefono'];
$celular=$_POST['txtcelular'];
$fechaexpedicion =$_POST['txtexpedicion'];
$recupera = $_POST['recupera'];
$pregunta = $_POST['cuestion'];




$perfilE = new \entidad\Perfil();
$perfilE ->setTipo_documento($tipodoc);
$perfilE ->setIdentificacion($cedula);
$perfilE ->setPrimer_nombre($primernombre);
$perfilE ->setOtros_nombre($otros);
$perfilE ->setPrimer_apellido($primerapellido);
$perfilE ->setOtros_apellido($otrosapellidos);
$perfilE ->setGenero($genero);
$perfilE ->setUbicacion('1');
$perfilE ->setEmail($email);
$perfilE ->setPassword($password);
$perfilE ->setDireccion($direccion);
$perfilE ->setBarrio($barrio);
$perfilE ->setMunicipio($municipio);
$perfilE ->setTelefono($telefono);
$perfilE ->setCelular($celular);
$perfilE ->setFecha_nacimiento($calendario);
$perfilE ->setFecha_expedicion($fechaexpedicion);
$perfilE ->setIdface('NULL');
$perfilE ->setRecupera($recupera);
$perfilE ->setPregunta($pregunta);

//$perfilE ->setUbicacion();

$perfilM = new \modelo\Perfil($perfilE);
$resultado = $perfilM->create();

unset($perfilE);
unset($perfilM);

echo json_encode($resultado);

?>