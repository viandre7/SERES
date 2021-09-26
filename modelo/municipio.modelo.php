<?php
namespace modelo;
use PDO;
use Exception;

include_once '../entidad/municipio.entidad.php';
include_once '../entorno/conexion.php';

class Municipio{

    public  $id_municipio;
    public  $municipio;
    public  $codigo_dane;
    public  $id_departamento;
    public  $estado;
    

 // OTROS ATRIBUTOS //
 public $conexion;
 private $result;
 private $retorno;
 private $sql;

public function __construct(\entidad\Municipio $municipioE){

  $this->id_municipio = $municipioE-> getId_municipio();
  $this->municipio = $municipioE-> getMunicipio();
  $this->codigo_dane =$municipioE->getCodigo_dane();
  $this->id_departamento =$municipioE->getId_departamento();
  $this->estado =$municipioE->getEstado();
  
 

     $this->conexion = new \Conexion();
}



public function read()
{

  try {
       $this->sql = "SELECT * FROM municipio";
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
           
           $this->result = $this->conexion->conn->prepare("INSERT INTO municipio VALUES (NULL , :municipio, :codigo_dane, :id_departamento , 'A')");
           $this->result->bindParam(':municipio', $this->municipio);
           $this->result->bindParam(':codigo_dane', $this->codigo_dane);
           $this->result->bindParam(':id_departamento', $this->id_departamento);
           $this->result->execute();

           $this->retorno['ultimoId']= $this->conexion->ultimoId();
           $this->retorno['mensaje']= "Exito: Municipio Creado ";
 
      } catch (Exception $e) {
           $this->retorno['mensaje'] = $e->getMessage();
      }
           return $this->retorno;
  }


  public function readadm()
     {

     try {
          $this->sql = "SELECT
          mun.`id_municipio`,
          mun.`municipio`,
          mun.`codigo_dane`,
          mun.`estado`,
          dep.`codigo_dane` AS codigo_dep,
          dep.`departamento`,
          pais.`pais`
               
         FROM municipio AS mun
               
          INNER JOIN departamento AS dep ON mun.`id_departamento` = dep.`id_departamento`
          INNER JOIN pais AS pais ON dep.`id_pais` = pais.`id_pais`";
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
             $this->sql = "UPDATE municipio SET municipio='$this->municipio', codigo_dane='$this->codigo_dane',  id_departamento='$this->id_departamento' WHERE id_municipio=$this->id_municipio";
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = "Exito: Municipio Modificado";
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;
   }


   
   public function cambio()
   {

         try {
              $this->sql = "UPDATE municipio SET estado='$this->estado' WHERE id_municipio=$this->id_municipio";
              $this->result = $this->conexion->conn->query($this->sql);
              $this->retorno = "Exito: Municipio Modificado";
                   
         } catch (Exception $e) {
              $this->retorno = $e->getMessage();
         }
              return $this->retorno;
    }
   

 }
  ?>