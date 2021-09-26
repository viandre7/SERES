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
        $this->id_oferta=$ofertaE->getId_oferta();
        $this->nombre_oferta=$ofertaE->getNombre_oferta();
        $this->descripcion_oferta=$ofertaE->getDescripcion_oferta(); 
        $this->valor_oferta=$ofertaE->getValor_oferta();
        $this->id_unidad_medida=$ofertaE->getId_unidad_medida();
        $this->imagen=$ofertaE->getImagen();
        $this->id_categoria=$ofertaE->getId_categoria();
        $this->id_subcategoria=$ofertaE->getId_subcategoria();
        $this->id_ofertante = $ofertaE->getId_ofertante();
        $this->conexion = new \Conexion();
   }
   
   public function create()
   { 
     try {
          $this->sql="INSERT INTO oferta VALUES(NULL,'$this->nombre_oferta', '$this->descripcion_oferta',
           '$this->valor_oferta', '$this->id_unidad_medida' ,'$this->imagen', '$this->id_ofertante', '$this->id_subcategoria', '$this->id_categoria',null,CURRENT_TIMESTAMP(),'A')";
          $this->result=$this->conexion->conn->query($this->sql);
          // $this->retorno="";

     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
   }

}
?>