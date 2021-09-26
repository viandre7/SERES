<?php
namespace modelo;

include_once("../entidad/ofertante.entidad.php");
include_once("../entorno/conexion.php");

use FFI\Exception;
use PDO;

class ofertante
{
    public $idOfertante;
    public $persona;
    public $descripcion;
    public $estado;

    public  $result;
    public  $retorno;
    public  $conexion;
    public  $sql;

    public function __construct(\entidad\ofertante $ofertante){

        $this->idOfertante=$ofertante->getIdOfertante();
        $this->persona=$ofertante->getPersona();
        $this->descripcion=$ofertante->getDescripcion();
        $this->estado=$ofertante->getEstado();
        $this-> conexion = new \conexion();

    }

    // Edward para administrador//

    public function read()
    { 
          try {
               $this->sql =
                    "SELECT 
                         prs.`id_persona`,
                         prs.`identificacion`,
                         prs.`primer_nombre`,
                         prs.`otros_nombre`,
                         prs.`primer_apellido`,
                         prs.`otros_apellido`,
                         prs.`genero`,
                         prs.`fecha_nacimiento`,
                         prs.`fecha_expedicion`,
                         prs.`estado`,
                         doc.`nombre`,
                         usu.`usuario`,
                         usu.`img_usuario`,
                         usu.`fecha_creacion`,
                         usu.`fecha_inactivacion`,
                         ubc.`telefono`,
                         ubc.`celular`,
                         ubc.`email`,
                         ubc.`direccion`,
                         ubc.`barrio`,
                         mun.`municipio`,
                         dep.`departamento`,
                         pais.`pais`
                         
                    FROM 
                         persona AS prs
                         
                         INNER JOIN tipo_documento AS doc ON prs.`id_documento`= doc.`id_documento`
                         INNER JOIN usuario AS usu ON prs.`id_persona`= usu.`id_persona`
                         INNER JOIN ubicacion AS ubc ON prs.`id_ubicacion` = ubc.`id_ubicacion`
                         INNER JOIN municipio AS mun ON ubc.`id_municipio` = mun.`id_municipio`
                         INNER JOIN departamento AS dep ON mun.`id_departamento` = dep.`id_departamento`
	                    INNER JOIN pais AS pais ON dep.`id_pais` = pais.`id_pais`";   
               
               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;         
     } 

    public function update(){
    
            try {
                $this->sql="UPDATE ofertante SET descripcion_ofertante='$this->descripcion'
                WHERE id_ofertante='$this->idOfertante' ";
                $this->result=$this->conexion->conn->query($this->sql);
                $this->retorno="actualizado";
    
            } catch (Exception $e) {
                $this->retorno =$e->getMessage();
            }
            return $this->retorno;
        
    }


    public function cambio(){
    
     try {
         $this->sql="UPDATE
                    persona AS prs
               
                    INNER JOIN usuario AS usu ON prs.`id_persona` =  usu.`id_persona`
                    INNER JOIN ofertante AS ofrt ON prs.`id_persona` = ofrt.`id_persona`
                    
                    SET
                         prs.`estado`= '$this->estado', usu.`estado`= '$this->estado', usu.`fecha_inactivacion`=CURDATE() ,ofrt.`estado`= '$this->estado'
                    
                    WHERE prs.`id_persona`='$this->idOfertante' ";
         $this->result=$this->conexion->conn->query($this->sql);
         $this->retorno="actualizado";

     } catch (Exception $e) {
         $this->retorno =$e->getMessage();
     }
     return $this->retorno;
 
}


     public function contar()
     { 
          try {
               $this->sql =
                    "SELECT estado, COUNT(*) AS total FROM ofertante GROUP BY estado";   
               
               $this->result = $this->conexion->conn->query($this->sql);
               $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                    
          } catch (Exception $e) {
               $this->retorno = $e->getMessage();
          }
               return $this->retorno;         
     } 

}

?>