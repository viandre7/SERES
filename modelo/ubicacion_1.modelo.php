<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/ubicacion.entidad.php';
include_once '../entorno/conexion.php';



class Ubicacion{
    
    public $municipio;
    public $departamento;


    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Ubicacion $ubicacionE)
   {
        $this->municipio = $ubicacionE->getmunicipio();
        $this->departamento = $ubicacionE->getDepartamento();
        $this->conexion =  new \Conexion();
   }

   public function read()
   {

     try {
          $this->sql = "SELECT 
               municipio.`id_municipio`,
               municipio.`municipio`,
               departamento.`departamento`
               FROM municipio
               INNER JOIN departamento
               ON municipio.`id_departamento`= departamento.`id_departamento`
               WHERE (municipio.`estado`='A') AND (departamento.`estado`='A')
               ORDER BY  municipio.`municipio` ASC ";  

          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

}

?>