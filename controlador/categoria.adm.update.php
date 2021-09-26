<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$id_categoria= $_POST['txtIdCatMod'];
$categoria = $_POST['txtCatMod'];

$directorio = "../componente/img/categorias/";
$nombre = $_FILES['imgImagenCatMod']['name'];
$img_categoria=$_FILES["imgImagenCatMod"]["tmp_name"];
move_uploaded_file($_FILES['imgImagenCatMod']['tmp_name'],$directorio.$nombre);

// (isset($img_categoria)); 
// (empty($img_categoria['imgImagenCatMod']));


$categoriaE = new \entidad\Categoria();
$categoriaE->setId_categoria($id_categoria);
$categoriaE ->setCategoria($categoria);
$categoriaE ->setImg_categoria($nombre);

$categoriaM = new \modelo\Categoria($categoriaE);
$resultado = $categoriaM->update();

unset($categoriaE);
unset($categoriaM);

// echo json_encode($resultado);

echo '<script language="javascript">alert("Categoria Modificada");</script>';
echo "<script> window.location.href = '../vista/admin/categoria.adm.frm.php'</script>";

?>