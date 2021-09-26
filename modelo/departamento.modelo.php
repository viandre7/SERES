<?php
namespace modelo;
use PDO;
use Exception;

include_once '../entidad/departamento.entidad.php';
include_once '../entorno/conexion.php';

class Departamento{

    public  $id_departamento;
    public  $departamento;
    public  $codigo_dane;
    public  $id_pais;
    public  $estado;
    

 // OTROS ATRIBUTOS //
 public $conexion;
 private $result;
 private $retorno;
 private $sql;

public function __construct(\entidad\Departamento $departamentoE){

  $this->id_departamento = $departamentoE-> getId_departamento();
  $this->departamento = $departamentoE-> getDepartamento();
  $this->codigo_dane =$departamentoE->getCodigo_dane();
  $this->id_pais =$departamentoE->getid_pais();
  $this->estado =$departamentoE->getEstado();
  
 

     $this->conexion = new \Conexion();
}

public function create()
{

  try {
       $this->sql = "CALL create_user(1,'$this->t',$this->identificacion,
       '$this->id_pais','A')";
       $this->conexion->conn->query($this->sql);
       $this->retorno = "Exito: Usuario Creado";

  } catch (Exception $e) {
       $this->retorno = $e->getMessage();
  }
       return $this->retorno;
}

public function read()
{

  try {
       $this->sql = "SELECT * FROM departamento";
       $this->result = $this->conexion->conn->query($this->sql);
       $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
            
  } catch (Exception $e) {
       $this->retorno = $e->getMessage();
  }
       return $this->retorno;
  }

  
     public function readadm()
     {

     try {
          $this->sql = "SELECT

          dep.`departamento`,
          dep.`codigo_dane`,
          dep.`estado`,
          dep.`id_departamento`,
          dep.`id_pais`,
          pais.`id_pais`,
          pais.`pais`
          
          FROM departamento AS dep
          
          INNER JOIN pais ON dep.`id_pais` = pais.`id_pais`";
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
             $this->sql = "UPDATE departamento SET departamento='$this->departamento', codigo_dane='$this->codigo_dane',  id_pais='$this->id_pais' WHERE id_departamento=$this->id_departamento";
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = "Exito: Departamento Modificado";
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;
   }


   public function createadm()
      {
          try {
               
               $this->result = $this->conexion->conn->prepare("INSERT INTO departamento VALUES (NULL , :departamento, :codigo_dane, :id_pais , 'A')");
               $this->result->bindParam(':departamento', $this->departamento);
               $this->result->bindParam(':codigo_dane', $this->codigo_dane);
               $this->result->bindParam(':id_pais', $this->id_pais);
               $this->result->execute();

               $this->retorno['ultimoId']= $this->conexion->ultimoId();
               $this->retorno['mensaje']= "Exito: Departamento Creado ";
     
          } catch (Exception $e) {
               $this->retorno['mensaje'] = $e->getMessage();
          }
               return $this->retorno;
      }



      public function cambio()
      {
  
            try {
                 $this->sql = "UPDATE departamento SET estado='$this->estado' WHERE id_departamento=$this->id_departamento";
                 $this->result = $this->conexion->conn->query($this->sql);
                 $this->retorno = "Exito: Departamento Modificado";
                      
            } catch (Exception $e) {
                 $this->retorno = $e->getMessage();
            }
                 return $this->retorno;
       }
      


    }


  ?>