<?php

include_once "../entidad/categoria.entidad.php";
include_once "../modelo/categoria.modelo.php";

$categoria = $_POST['txtNombreCat'];

$directorio = "../componente/img/categorias/";
$nombre = $_FILES['imgCategoria']['name'];
$img_categoria=$_FILES["imgCategoria"]["tmp_name"];
move_uploaded_file($_FILES['imgCategoria']['tmp_name'],$directorio.$nombre);

// (isset($img_categoria)); 
// (empty($img_categoria['imgCategoria']));


$categoriaE = new \entidad\Categoria();
$categoriaE ->setCategoria($categoria);
$categoriaE ->setImg_categoria($nombre);

$categoriaM = new \modelo\Categoria($categoriaE);
$resultado = $categoriaM->create();

unset($categoriaE);
unset($categoriaM);

echo '<script language="javascript">alert("Categoria Creada");</script>';
echo "<script> window.location.href = '../vista/admin/categoria.adm.frm.php'</script>";

?>