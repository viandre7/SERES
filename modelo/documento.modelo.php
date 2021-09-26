<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/documento.entidad.php';
include_once '../entorno/conexion.php';

class Documento{
    
     
    public $id_documento;
    public $nombre;
    public $nomenclatura;
    public $estado;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Documento $documetoE){

     $this->id_documento = $documetoE-> getId_documento();
     $this->nombre = $documetoE-> getNombre();
     $this->nomenclatura =$documetoE->getNomenclatura();
     $this->estado =$documetoE->getEstado();
     

        $this->conexion = new \Conexion();
   }

  
   public function read()
   {

     try {
          $this->sql = "SELECT * FROM tipo_documento WHERE estado='A' ";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }


     public function createadm()
      {
          try {
               
               $this->result = $this->conexion->conn->prepare("INSERT INTO tipo_documento VALUES (NULL , :nombre, :nomenclatura, 'A')");
               $this->result->bindParam(':nombre', $this->nombre);
               $this->result->bindParam(':nomenclatura', $this->nomenclatura);
               $this->result->execute();

               $this->retorno['ultimoId']= $this->conexion->ultimoId();
               $this->retorno['mensaje']= "Exito: Tipo Documento Creado ";
     
          } catch (Exception $e) {
               $this->retorno['mensaje'] = $e->getMessage();
          }
               return $this->retorno;
      }

      
     public function readadm()
   {

     try {
          $this->sql = "SELECT * FROM tipo_documento ";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

     public function updateadm()
  {

        try {
             $this->sql = "UPDATE tipo_documento SET nombre='$this->nombre', nomenclatura='$this->nomenclatura' WHERE id_documento=$this->id_documento";
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = "Exito: Tipo Documento Modificado";
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;
   }

   public function cambio()
   {

         try {
              $this->sql = "UPDATE tipo_documento SET estado='$this->estado' WHERE id_documento=$this->id_documento";
              $this->result = $this->conexion->conn->query($this->sql);
              $this->retorno = "Exito: Tipo Documento Modificado";
                   
         } catch (Exception $e) {
              $this->retorno = $e->getMessage();
         }
              return $this->retorno;
    }
   

}

?>