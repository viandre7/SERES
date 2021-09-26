<?php

namespace modelo;

include_once("../entidad/usuario.entidad.php");
include_once("../entorno/conexion.php");

use FFI\Exception;
use PDO;

class usuario{

    public $idUsuario;
    public $Usuario;
    public $contrasena;
    public $img;
    public $recupera;
    public $usuario_persona;
    public $idrol;
    
    public  $result;
    public  $retorno;
    public  $respuesta;
    public  $conexion;
    public  $sql;

    public function __construct(\entidad\usuario $usuario){
        $this->idUsuario     = $usuario->getIdUsuario();
        $this->Usuario       = $usuario->getUsuario();
        $this->contrasena    = $usuario->getContrasena();
        $this->img           = $usuario->getImg();
        $this->recupera      = $usuario->getRecupera();
        $this->usuario_persona= $usuario->getUsuario_persona();
        $this->idrol          = $usuario->getIdrol();
        $this-> conexion =new \conexion();
    }

  
   
    public function readRecupera(){
        try {
            $this->sql="SELECT recupera.pregunta, recupera.respuesta, usuario.usuario, usuario.id_usuario FROM recupera
            INNER JOIN usuario ON usuario.id_usuario = recupera.idrecupera  
            WHERE usuario.usuario='$this->Usuario' AND recupera.respuesta='$this->recupera'";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno= $this->result->fetchAll(PDO::FETCH_ASSOC);


        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    }
    public function newpass(){
        try {
            $this->sql="UPDATE usuario SET  contrasena = AES_ENCRYPT('$this->contrasena','1906756')
            WHERE id_usuario = '$this->idUsuario'";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="madre";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
}
   


} 

?>