<?php

include_once "../entidad/perfil.entidad.php";
include_once "../modelo/perfil.modelo.php";


if (isset($_POST['txt']))
{
    $idPersona=$_POST['txt'];
}
else{
    $idPersona="NULL";
}

if (isset($_POST['txtPriNom']))
{
    $pri_nombre=$_POST['txtPriNom'];
}
else{
    $pri_nombre="NULL";
}
if (isset($_POST['txtSegNom']))
{
    $seg_nombre=$_POST['txtSegNom'];
}
else{
    $seg_nombre="NULL";
}
if (isset($_POST['txtPriApel']))
{
    $pri_apellido=$_POST['txtPriApel'];
}
else{
    $pri_apellido="NULL";
}
if (isset($_POST['txtSegApel']))
{
    $seg_apellido=$_POST['txtSegApel'];
}
else{
    $seg_apellido="NULL";
}
if (isset($_POST['municipio'])) {
    $ubicacion = $_POST['municipio'];
}else{
    $ubicacion="NULL";
}


$perfilE = new \entidad\Perfil();
$perfilE->setId_persona($idPersona);
$perfilE->setPrimer_nombre($pri_nombre);
$perfilE->setOtros_nombre($seg_nombre);
$perfilE->setPrimer_apellido($pri_apellido);
$perfilE->setOtros_apellido($seg_apellido);
$perfilE->setMunicipio($ubicacion);


$perfilM =new \modelo\Perfil($perfilE);

$retorno =$perfilM->update();

unset($persona);
unset($personaM);

echo "<script> window.location.href = '../vista/mi_perfil.frm.php'</script>";





?>