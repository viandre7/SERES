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
    public $idface;
    
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
        $this->idface         = $usuario->getIdface();
        $this-> conexion =new \conexion();
    }

    public function readU(){
        try {
            $this->sql="SELECT usuario.id_usuario, usuario.usuario,(AES_DECRYPT(usuario.contrasena, '1906756')) , usuario.img_usuario, usuario.id_rol,
            persona.id_persona, persona.primer_nombre, persona.otros_nombre,persona.primer_apellido, ofertante.id_ofertante, ofertante.descripcion_ofertante ,
             persona.otros_apellido, ubicacion.id_ubicacion, ubicacion.direccion, ubicacion.celular, ubicacion.telefono,
             ubicacion.email, municipio.municipio, departamento.departamento,pais.pais
                         FROM usuario  
                         INNER JOIN persona ON usuario.id_persona =persona.id_persona
                         INNER JOIN ofertante ON ofertante.id_persona =persona.id_persona
                         
                         INNER JOIN ubicacion ON persona.id_ubicacion = ubicacion.id_ubicacion
                         INNER JOIN municipio ON ubicacion.id_municipio= municipio.id_municipio
                         INNER JOIN departamento ON municipio.id_departamento= departamento.id_departamento
                         INNER JOIN pais ON departamento.id_pais= pais.id_pais
                                     WHERE usuario.usuario ='$this->Usuario' AND usuario.contrasena = AES_ENCRYPT('$this->contrasena','1906756') ";
                      if ($this->sql===[]){
                            echo "su madres gran hjputa";
                      }
    
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno= $this->result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $this->retorno= $e->getMessage();
        }
        return $this->retorno;
    
        
    }
    public function update(){
        try {
            $this->sql="UPDATE usuario SET  img_usuario='$this->img'
            WHERE id_usuario='$this->idUsuario' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    }
    public function readRecupera(){
        try {
            $this->sql="SELECT usuario , recupera FROM usuario WHERE usuario.usuario =  '$this->Usuario' AND usuario.recupera = '$this->recupera'";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    }
    public function readF(){
        try {
            $this->sql="SELECT usuario.id_usuario, usuario.usuario,(AES_DECRYPT(usuario.contrasena, '1906756')) , usuario.img_usuario, usuario.id_rol,
            persona.id_persona, persona.primer_nombre, persona.otros_nombre,persona.primer_apellido, ofertante.id_ofertante, ofertante.descripcion_ofertante ,
             persona.otros_apellido, ubicacion.id_ubicacion, ubicacion.direccion, ubicacion.celular,
             ubicacion.email, municipio.municipio, departamento.departamento,pais.pais
                         FROM usuario  
                         INNER JOIN persona ON usuario.id_persona =persona.id_persona
                         INNER JOIN ofertante ON ofertante.id_persona =persona.id_persona
                         
                         INNER JOIN ubicacion ON persona.id_ubicacion = ubicacion.id_ubicacion
                         INNER JOIN municipio ON ubicacion.id_municipio= municipio.id_municipio
                         INNER JOIN departamento ON municipio.id_departamento= departamento.id_departamento
                         INNER JOIN pais ON departamento.id_pais= pais.id_pais
                                     WHERE usuario.idface ='$this->idface'  ";
                      if ($this->sql===[]){
                            echo "su madres gran hjputa";
                      }
    
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno= $this->result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $this->retorno= $e->getMessage();
        }
        return $this->retorno;
    
        
    }
   


} 

?>