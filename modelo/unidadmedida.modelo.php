<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/unidadmedida.entidad.php';
include_once '../entorno/conexionSingleton.php';



class Unidadmedida{
    
     public $id_unidad_medida;
     public $nombre;
     public $nomenclatura;
     public $estado;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Unidadmedida $unidadmedidaE)
   {
        $this->id_unidad_medida = $unidadmedidaE->getId_unidad_medida();
        $this->nombre = $unidadmedidaE->getNombre();
        $this->nomenclatura = $unidadmedidaE->getNomenclatura();
        $this->estado = $unidadmedidaE->getEstado();
        $this->conexion = \Conexion::singleton();
   }

   public function createadm()
   {
       try{

            $this->result = $this->conexion->prepare("INSERT INTO unidad_medida VALUES (NULL , :nombre , :nomenclatura, 'A')");
            $this->result->bindParam(':nombre', $this->nombre);
            $this->result->bindParam(':nomenclatura', $this->nomenclatura);

            $this->result->execute();

            $this->retorno = "Unidad de Medida Registrada";
            
        } catch (Exception $e) {
        
            $this->retorno = $e->getMessage();
        }
            return $this->retorno;
   }
   
   
   public function read()
   {

     try {
          $this->sql = "SELECT * FROM unidad_medida";
          $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }
   
     public function updateadm()
     {
  
       try {
            $this->sql = "UPDATE unidad_medida SET  nombre='$this->nombre', nomenclatura='$this->nomenclatura' WHERE id_unidad_medida=$this->id_unidad_medida";
            $this->result = $this->conexion->query($this->sql);
            $this->retorno = "Exito: Unidad de Medida Modificada";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }

     public function cambio()
     {
  
       try {
            $this->sql = "UPDATE unidad_medida SET  estado='$this->estado' WHERE id_unidad_medida=$this->id_unidad_medida";
            $this->result = $this->conexion->query($this->sql);
            $this->retorno = "Exito: Unidad de Medida Modificada";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }


}

?>