<?php

include_once("../entidad/usuario.entidad.php");
include_once("../modelo/login.modelo.php");

$usuarioE =new \entidad\usuario();
$usuarioM = new \modelo\usuario($usuarioE);
$retorno =$usuarioM->read();

unset($usuarioE);
unset($usuarioM);

echo json_encode($retorno);


