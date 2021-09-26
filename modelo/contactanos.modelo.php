<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/contactanos.entidad.php';
include_once '../entorno/conexion.php';


class Contactanos
{

    public $nombre_completo;
    public $email;
    public $mensaje;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $retorn;
    private $sql;


        public function __construct(\entidad\Contactanos $contactanosE)
    {
        $this->nombre_completo = $contactanosE->getNombre_completo();
        $this->email = $contactanosE->getEmail();
        $this->mensaje = $contactanosE->getMensaje();
       
        $this->conexion = new \conexion();
    }


    public function read()
    { 
          try {
               $this->sql =
                    "SELECT 
                    *                                                              
               FROM 
                    contactanos ";   

               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;         
     } 


     public function create()
   { 
     try {
          $this->sql="INSERT INTO contactanos VALUES(NULL,'$this->nombre_completo', '$this->email', '$this->mensaje','A')";
          $this->result=$this->conexion->conn->query($this->sql);
          $this->retorno="Gracias";

     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
   }

    
}

?>