<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/misOfertas.entidad.php';
include_once '../entorno/conexion.php';
//include_once '../controlador/logueo.read.php';

class MisOfertas
{

    public $descripcion;
    public $precioOfer;
    public $unidadMedida;
    public $idOferta;

    public $idCategoria;
    public $categoria;
    public $idSubCategoria;
    public $subCategoria;
    public $idUnidadMedida;
    public $idOfertante;
    public $nombreOferta;
    public $imagen;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $retorn;
    private $sql;


        public function __construct(\entidad\MisOfertas $misOfertasE)
    {
        $this->descripcion = $misOfertasE->getDescripcion();
        $this->precioOfer = $misOfertasE->getPrecioOfer();
        $this->unidadMedida = $misOfertasE->getUnidadMedida();
        $this->idOferta = $misOfertasE->getId_Oferta();
        $this->idCategoria = $misOfertasE->getIdCategoria();
        $this->categoria = $misOfertasE->getCategoria();
        $this->idSubCategoria = $misOfertasE->getIdSubCategoria();
        $this->subCategoria = $misOfertasE->getSubCategoria();    
        $this->idUnidadMedida = $misOfertasE->getUnidadMedida();  
        $this->idOfertante = $misOfertasE->getIdOfertante();  
        $this->nombreOferta = $misOfertasE->getNomOferta(); 
        $this->img_oferta = $misOfertasE->getimagen(); 
        $this->conexion = new \conexion();
    }


    public function read()
    { 
          try {
               $this->sql =
                    "SELECT 
                    ofr.`id_oferta`
                    ,ofr.`nombre_oferta`
                    ,ofr.`descripcion_oferta`
                    ,ofr.`valor_oferta`
                    ,ofr.`id_unidad_medida`
                    ,ofr.`img_oferta`
                    ,ofr.`id_categoria`
                    ,ofr.`id_subcategoria`
                    ,cat.`categoria`
                    ,scat.`subcategoria` 
                    ,um.`nombre` AS nombre_um
                    ,um.`nomenclatura` AS nomenclatura_um                                                                  
               FROM 
                    oferta AS ofr
               INNER JOIN categoria AS cat ON ofr.`id_categoria`= cat.`id_categoria`
               INNER JOIN subcategoria AS scat ON ofr.`id_subcategoria`=scat.`id_subcategoria` 
               INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida`= um.`id_unidad_medida`                     
               WHERE ofr.`id_ofertante` = '$this->idOfertante'  AND ofr.`estado`='A'";   // OJO QUE LLAME AL OFERTANTE QUE HAYA INICIADO SESION///
                    
                    // LIKE CONCAT('%',2,'%')

               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;         
     } 


     public function readComentario()
    { 
      try {
           $this->sql =               
               "SELECT 
                    ofr.`id_oferta` 
                    ,ser.`comentario`
                    ,ser.`calificacion` 
                    ,ser.`Usuario`       

                    -- ,per.`primer_nombre` 
                    -- ,per.`otros_nombre`
                    -- ,per.`primer_apellido` 
                    -- ,per.`otros_apellido`   
               FROM           
                    oferta AS ofr     
     
                    INNER JOIN servicio AS ser ON ofr.`id_oferta` = ser.`id_oferta`
                    INNER JOIN ofertante AS oft ON ofr.`id_ofertante` = oft.`id_ofertante`  

                    -- INNER JOIN persona AS per ON ser.`idpersona` = per.`id_persona`               
     
               WHERE ofr.`id_oferta` ='$this->idOferta'"; 

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
             $this->sql = "SELECT * FROM categoria WHERE estado = 'A'";      
  
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;  
            
     } 
     
     
        

     public function buscarSubCat()
     {
   
        try {
          //    $this->sql = "SELECT * FROM subcategoria WHERE categoria = '$this->idCategoria'  AND estado = 'A'"; 
          $this->sql = "SELECT * FROM subcategoria WHERE estado = 'A'";      
       
          //    categoria = '$this->idCategoria' AND 
             $this->result = $this->conexion->conn->query($this->sql);
             $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                  
        } catch (Exception $e) {
             $this->retorno = $e->getMessage();
        }
             return $this->retorno;  
            
     } 


     public function buscarUnidadMedida()
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


     public function update()
     {
  
       try {
            $this->sql =
            
            "UPDATE oferta SET nombre_oferta='$this->nombreOferta', descripcion_oferta='$this->descripcion', valor_oferta='$this->precioOfer', id_unidad_medida='$this->idUnidadMedida', img_oferta='$this->img_oferta',
             id_categoria=' $this->idCategoria', id_subcategoria=' $this->idSubCategoria' WHERE id_oferta='$this->idOferta'";

            $this->result = $this->conexion->conn->query($this->sql);
          //   $this->retorno = "Exito: Oferta modificada";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
     }


     public function delete()
     {

          try {
               $this->sql = "UPDATE oferta SET estado='I' WHERE id_oferta= $this->idOferta";
               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = "Exito: Oferta Eliminada";
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;
     }
    
}

?>