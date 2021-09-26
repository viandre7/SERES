<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/subcategoria.entidad.php';
include_once '../entorno/conexion.php';

class Subcategoria{
    
     public $id_subcategoria;
     public $subcategoria;
     public $id_categoria;
     public $estado;
     
    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Subcategoria $subcategoriaE)
   {
        $this->id_subcategoria = $subcategoriaE->getId_subcategoria();
        $this->subcategoria = $subcategoriaE->getSubcategoria();
        $this->categoria = $subcategoriaE->getId_categoria();
        $this->estado = $subcategoriaE->getEstado();

        $this->conexion = new \Conexion ();
   }

   public function create()
      {
          try {
               
               $this->result = $this->conexion->conn->prepare("INSERT INTO subcategoria VALUES (NULL , :subcategoria, :categoria , 'A')");
               $this->result->bindParam(':subcategoria', $this->subcategoria);
               $this->result->bindParam(':categoria', $this->categoria);
               $this->result->execute();

               $this->retorno['ultimoId']= $this->conexion->ultimoId();
               $this->retorno['mensaje']= "Exito: Subcategoria Creada ";
     
          } catch (Exception $e) {
               $this->retorno['mensaje'] = $e->getMessage();
          }
               return $this->retorno;
      }


   public function autocomplete()
   {

     try {
          $this->sql = "SELECT * 
          
          FROM subcategoria
          
          WHERE subcategoria LIKE CONCAT('%',$this->subcategoria,'%') AND estado='A'";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);

          foreach ($this->retorno as $key => $value) {
               $this->informacion[] = array(
                    "id_subcategoria" => $value['id_subcategoria'],
                    "subcategoria" =>  $value['subcategoria'],
                    "label" => $value['subcategoria'],
                    "id_categoria" =>  $value['id_categoria']);

          }
     } catch (Exception $e) {
          $this->informacion = $e->getMessage();
     }
          return $this->informacion;
     }

     public function read()
     {
  
       try {
            $this->sql = "SELECT 
               subcategoria.`subcategoria`,
               categoria.`categoria`

               FROM 
                    subcategoria 
                    
               INNER JOIN categoria ON subcategoria.`categoria`= categoria.`id_categoria`
               
               WHERE subcategoria.estado='A'
               ORDER BY categoria.`id_categoria` ASC";
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
                 subcategoria.`id_subcategoria`,
                 subcategoria.`estado`,
                 subcategoria.`subcategoria`,
                 categoria.`categoria`
  
                 FROM 
                      subcategoria 
                      
                 INNER JOIN categoria ON subcategoria.`categoria`= categoria.`id_categoria`
               
                 ORDER BY categoria.`id_categoria` ASC";
              $this->result = $this->conexion->conn->query($this->sql);
              $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                   
         } catch (Exception $e) {
              $this->retorno = $e->getMessage();
         }
              return $this->retorno;
         }


         public function update()
     {
  
          try {
               $this->sql = "UPDATE subcategoria SET subcategoria='$this->subcategoria', categoria=$this->categoria WHERE id_subcategoria=$this->id_subcategoria";
               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = "Exito: Cliente Modificado";
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
       }

       
     public function cambio()
     {
 
           try {
                $this->sql = "UPDATE subcategoria SET estado='$this->estado' WHERE id_subcategoria=$this->id_subcategoria";
                $this->result = $this->conexion->conn->query($this->sql);
                $this->retorno = "Exito: Subcategoria Modificada";
                     
           } catch (Exception $e) {
                $this->retorno = $e->getMessage();
           }
                return $this->retorno;
      }

      public function contar()
      { 
           try {
                $this->sql =
                     "SELECT estado, COUNT(*) AS total FROM subcategoria GROUP BY estado";   
                
                $this->result = $this->conexion->conn->query($this->sql);
                $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                     
           } catch (Exception $e) {
                $this->retorno = $e->getMessage();
           }
                return $this->retorno;         
      } 


}

?>