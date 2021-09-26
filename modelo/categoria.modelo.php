<?php

namespace modelo;
use PDO;
use FFI\Exception;

include_once '../entidad/categoria.entidad.php';
include_once '../entorno/conexionSingleton.php';



class Categoria{
    
    public $id_categoria;
    public $categoria;
    public $img_categoria;
    public $estado;


    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Categoria $categoriaE)
   {
        $this->id_categoria = $categoriaE->getId_categoria();
        $this->categoria = $categoriaE->getCategoria();
        $this->img_categoria = $categoriaE->getImg_categoria();
        $this->estado = $categoriaE->getEstado();
        $this->conexion = \Conexion::singleton();
   }

   public function create()
   {

     try {
 
          $this->sql = "INSERT INTO categoria VALUES (NULL ,'$this->categoria','$this->img_categoria','A')";
          $this->conexion->query($this->sql);
          $this->retorno = "Exito: Categoria Creada";
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
   }

   public function read()
   {

     try {
          $this->sql = "SELECT * FROM categoria WHERE estado='A'";
          $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

   public function readOfr()
   {

     try {
          $this->sql = "SELECT 
          ct.`id_categoria`,
          ct.`categoria`,
          ct.`estado`,
          ct.`img_categoria`,
          COUNT(ofr.`id_categoria`) AS total
          
          FROM
          
          categoria AS ct
          
          INNER JOIN oferta AS ofr ON ct.`id_categoria` = ofr.`id_categoria`
          WHERE ct.`estado` = 'A' AND ofr.`estado`='A'
          GROUP BY ct.`id_categoria`";
          $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

   public function readadm()
   {

          try {
               $this->sql = "SELECT * FROM categoria ";
               $this->result = $this->conexion->query($this->sql);
               $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
     }


    public function update()
    {

          try {
               $this->sql = "UPDATE categoria SET categoria='$this->categoria', img_categoria='$this->img_categoria' WHERE id_categoria=$this->id_categoria";
               $this->result = $this->conexion->query($this->sql);
               // $this->retorno = "Exito: Categoria Modificada";
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
     }

     public function cambio()
    {

          try {
               $this->sql = "UPDATE categoria SET estado='$this->estado' WHERE id_categoria=$this->id_categoria";
               $this->result = $this->conexion->query($this->sql);
               $this->retorno = "Exito: Categoria Modificada";
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
     }

     public function contar()
     {
  
       try {
            $this->sql = "SELECT estado, COUNT(*) AS total FROM categoria GROUP BY estado";
            $this->result = $this->conexion->query($this->sql);
        $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);;
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }

}

?>