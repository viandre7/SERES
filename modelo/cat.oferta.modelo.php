<?php
namespace modelo;
include_once '../entidad/publicarOferta.entidad.php';
include_once '../entorno/conexion.php';
use PDO;
use FFI\Exception;

class Oferta{

     public $id_oferta;
     public $nombre_oferta;
     public $descripcion_oferta;
     public $valor_oferta;
     private $imagen;
     public $id_unidad_medida;
     public $id_ofertante;
     public $id_subcategoria;
     public $id_categoria;

   // OTROS ATRIBUTOS //
   private  $result;
   private  $retorno;
   private  $respuesta;
   private  $conexion;
   private  $sql;

   
  public function __construct(\entidad\Oferta $ofertaE){

       $this->id_categoria=$ofertaE->getId_categoria();
       $this->id_subcategoria=$ofertaE->getId_subcategoria();
       $this->conexion = new \Conexion();
  }
 
  public function read()
  {

    try {
         $this->sql = "SELECT id_subcategoria, subcategoria, categoria FROM subcategoria ";
         $this->result = $this->conexion->conn->query($this->sql);
         $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
              
    } catch (Exception $e) {
         $this->retorno = $e->getMessage();
    }
         return $this->retorno;
    }

    
   public function buscarCat()
     {
   
        try {
          $this->sql = "SELECT * FROM categoria  ";
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;  
            
     } 
     public function unidad()
     {
   
        try {
             $this->sql = "SELECT * FROM unidad_medida WHERE estado = 'A'";      
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;  
            
     } 
}
?>