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
        $this->usuario_persona= $usuario->getUsuario_persona();
        $this->idrol          = $usuario->getIdrol();
        $this-> conexion =new \conexion();
    }

    public function read(){
        try {
            $this->sql="SELECT us.id_usuario, us.usuario, us.contrasena, us.img_usuario, us.id_rol, M.municipio, D.departamento, P.pais,
            U.direccion, U.celular, U.email, Per.primer_nombre, Per.otros_nombre, 
            Per.primer_apellido, Per.otros_apellido, Per.id_ubicacion, O.id_ofertante, O.descripcion_ofertante
            FROM usuario as us, municipio as M, 
            departamento as D, pais as P,     
            ubicacion as U, persona as Per, 
            ofertante O ";

            



            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno= $this->result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $this->retorno= $e->getMessage();
        }
        return $this->retorno;
    
        
    }
}

   

?>