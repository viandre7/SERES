<?php
namespace modelo;
use PDO;
use Exception;

include_once '../entidad/pais.entidad.php';
include_once '../entorno/conexion.php';

class Pais{

public $id_pais;
public $pais;
public $codigo_dane;
public $estado;


 // OTROS ATRIBUTOS //
 public $conexion;
 private $result;
 private $retorno;
 private $sql;

public function __construct(\entidad\Pais $paisE){

  $this->id_pais = $paisE-> getId_pais();
  $this->pais = $paisE->getPais();
  $this->codigo_dane =$paisE->getCodigo_dane();
  $this->estado = $paisE->getEstado();
 

     $this->conexion = new \Conexion();
}



public function read()
{

  try {
       $this->sql = "SELECT * FROM pais";
       $this->result = $this->conexion->conn->query($this->sql);
       $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
            
  } catch (Exception $e) {
       $this->retorno = $e->getMessage();
  }
       return $this->retorno;
  }

  
// public function readadm()
// {

//   try {
//        $this->sql = "SELECT * FROM pais";
//        $this->result = $this->conexion->conn->query($this->sql);
//        $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
            
//   } catch (Exception $e) {
//        $this->retorno = $e->getMessage();
//   }
//        return $this->retorno;
//   }

  public function readadm()
  {

    try {
         $this->sql = "SELECT * FROM pais ";
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


    public function updateadm()
    {

          try {
               $this->sql = "UPDATE pais SET pais='$this->pais', codigo_dane='$this->codigo_dane' WHERE id_pais=$this->id_pais";
               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = "Exito: Pais Modificado";
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
     }


     public function createadm()
      {
          try {
               
               $this->result = $this->conexion->conn->prepare("INSERT INTO pais VALUES (NULL , :pais, :codigo_dane , 'A')");
               $this->result->bindParam(':pais', $this->pais);
               $this->result->bindParam(':codigo_dane', $this->codigo_dane);
               $this->result->execute();

               $this->retorno['ultimoId']= $this->conexion->ultimoId();
               $this->retorno['mensaje']= "Exito: Pais Creado ";
     
          } catch (Exception $e) {
               $this->retorno['mensaje'] = $e->getMessage();
          }
               return $this->retorno;
      }

      public function cambio()
      {
  
            try {
                 $this->sql = "UPDATE pais SET estado='$this->estado' WHERE id_pais=$this->id_pais";
                 $this->result = $this->conexion->conn->query($this->sql);
                 $this->retorno = "Exito: Pais Modificado";
                      
            } catch (Exception $e) {
                 $this->retorno = $e->getMessage();
            }
                 return $this->retorno;
       }

       



    }

    


  ?>