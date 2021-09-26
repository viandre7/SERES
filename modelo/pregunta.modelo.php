<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/pregunta.entidad.php';
include_once '../entorno/conexion.php';

class Pregunta {
    
     
    public $id_pregunta;
    public $nombre;
    public $estado;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Pregunta $preguntaE){

        $this->conexion = new \Conexion();
   }

  
   public function read()
   {

     try {
          $this->sql = " SELECT * FROM pregunta ";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

    
    

}

?>