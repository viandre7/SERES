<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/educt_educa.entidad.php';
include_once '../entorno/conexion.php';

class econo{
    
     
  
    private $idEcon;
    private $ecoNombre;
    private $codigo;
    private $estado;

    ///educativo
    private $idNivel;
    private $nivel;

    

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\econo $datosE){
        $this->idEcon = $datosE->getIdEcon();
        $this->ecoNombre = $datosE->getEcoNombre();
        $this->codigo = $datosE->getCodigo();
        $this->estado = $datosE->getEstado();
        $this->idNivel = $datosE->getIdNivel();
        $this->nivel = $datosE->getNivel();
  
        $this->conexion = new \Conexion();
   }
   public function create()
   {
    try{
        $this->sql="INSERT INTO actividad_economica VALUES(NULL,'$this->ecoNombre','$this->codigo','A')";
        $this->result=$this->conexion->conn->query($this->sql);
        $this->retorno="creado con Exito";
        }catch(Exception $e){
            $this->retorno= $e->getMessage();

        }
        return $this->retorno;
   }

//    public function read()
//    {

//      try {
//           $this->sql = "SELECT * FROM actividad_economica ";
//           $this->result = $this->conexion->conn->query($this->sql);
//           $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
//      } catch (Exception $e) {
//           $this->retorno = $e->getMessage();
//      }
//           return $this->retorno;
//     }

    public function read()
    {
        $dato=array();
      try {
           $this->sql = "SELECT * FROM actividad_economica ";
           $this->result = $this->conexion->conn->query($this->sql);
           $this->retorno= $this->result->execute();
           while ($fila =  $this->retorno=$this->result->fetch(PDO::FETCH_ASSOC)) {
               $dato[]=$fila;
           }
           $this->retorno=$dato;
           
      } catch (Exception $e) {
           $this->retorno = $e->getMessage();
      }
           return $this->retorno;
     }
 


    public function update(){
        try {
            $this->sql="UPDATE actividad_economica SET actividad_economica='$this->ecoNombre', codigo_dian='$this->codigo'
            WHERE id_actividad_economica='$this->idEcon' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }
    public function delete(){
        try {
            $this->sql="UPDATE actividad_economica SET estado='$this->estado'
            WHERE id_actividad_economica='$this->idEcon' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }
    ///////////////////Parte de Nivel Educativo !!!!!!!!!!


    public function educa()
    {
     try{
         $this->sql="INSERT INTO nivel_educativo VALUES(NULL,'$this->nivel','A')";
         $this->result=$this->conexion->conn->query($this->sql);
         $this->retorno="creado con Exito";
         }catch(Exception $e){
             $this->retorno= $e->getMessage();
 
         }
         return $this->retorno;
    }
    public function readN()
    {
 
      try {
           $this->sql = "SELECT * FROM nivel_educativo ";
           $this->result = $this->conexion->conn->query($this->sql);
           $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                
      } catch (Exception $e) {
           $this->retorno = $e->getMessage();
      }
           return $this->retorno;
     }

     public function updateN(){
        try {
            $this->sql="UPDATE nivel_educativo SET nivel_educativo='$this->nivel'
            WHERE id_nivel_educativo='$this->idNivel' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }
    
    public function deleteN(){
        try {
            $this->sql="UPDATE nivel_educativo SET estado='$this->estado'
            WHERE id_nivel_educativo='$this->idNivel' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }
    //////////////////////Fin nivel Educativo

  

}

?>