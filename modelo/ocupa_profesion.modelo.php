<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/ocupacion.entidad.php';
include_once '../entorno/conexion.php';

class ocupa{
    
     

    ///Ocupacion
    private $idOcupa;
    private $ocupa;
    private $code;
    private $estado;
    ////////profesion
    private $idProfe;
    private $profe;
    private $nivel;

    

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\ocupa $datosE){
   
        $this->idOcupa = $datosE->getIdOcupa();
        $this->ocupa = $datosE->getOcupa();
        $this->code = $datosE->getCode();
        $this->estado = $datosE->getEstado();
        $this->idProfe = $datosE->getIdProfe();
        $this->profe = $datosE->getProfe();
        $this->nivel = $datosE->getNivel();
        $this->estado = $datosE->getEstado();

        $this->conexion = new \Conexion();
   }
 

    ///////////////create Ocupacioncreate
    public function create()
    {
        try{
            $this->sql="INSERT INTO ocupacion VALUES(NULL,'$this->ocupa','$this->code','A')";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="creado con Exito";
            }catch(Exception $e){
                $this->retorno= $e->getMessage();
    
            }
            return $this->retorno;
    }
    public function read()
    {
 
      try {
           $this->sql = "SELECT * FROM ocupacion ORDER BY codigo_dane ASC";
           $this->result = $this->conexion->conn->query($this->sql);
           $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                
      } catch (Exception $e) {
           $this->retorno = $e->getMessage();
      }
           return $this->retorno;
     }

     public function update(){
          try {
              $this->sql="UPDATE ocupacion SET  ocupacion='$this->ocupa', codigo_dane='$this->code'
              WHERE id_ocupacion='$this->idOcupa' ";
              $this->result=$this->conexion->conn->query($this->sql);
              $this->retorno="actualizado";
  
          } catch (Exception $e) {
              $this->retorno =$e->getMessage();
          }
          return $this->retorno;
      
      }
      public function delete(){
        try {
            $this->sql="UPDATE ocupacion SET estado='$this->estado'
            WHERE id_ocupacion='$this->idOcupa' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }

    ///////////////profesion
    public function crea()
    {
        try{
            $this->sql="INSERT INTO profesion VALUES(NULL,'$this->profe','$this->nivel','A')";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="creado con Exito";
            }catch(Exception $e){
                $this->retorno= $e->getMessage();
    
            }
            return $this->retorno;
    }
    public function leer()
    {
 
      try {
           $this->sql = "SELECT nivel_educativo.`nivel_educativo`,profesion.`profesion`, profesion.`estado`, profesion.`id_profesion` FROM profesion
           INNER JOIN nivel_educativo ON nivel_educativo.`id_nivel_educativo` = profesion.`id_nivel_educativo`";
           $this->result = $this->conexion->conn->query($this->sql);
           $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                
      } catch (Exception $e) {
           $this->retorno = $e->getMessage();
      }
           return $this->retorno;
     }

     public function updated(){
        try {
            $this->sql="UPDATE profesion SET  profesion='$this->profe', id_nivel_educativo='$this->nivel'
            WHERE id_profesion='$this->idProfe' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }


    public function dele(){
        try {
            $this->sql="UPDATE profesion SET estado='$this->estado'
            WHERE id_profesion='$this->$idProfe' ";
            $this->result=$this->conexion->conn->query($this->sql);
            $this->retorno="actualizado";

        } catch (Exception $e) {
            $this->retorno =$e->getMessage();
        }
        return $this->retorno;
    
    }


}

?>