<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/buscar.entidad.php';
include_once '../entorno/conexionSingleton.php';




class Buscar{
    
    public $oferta;
    public $id_categoria;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Buscar $buscarE)
   {
        $this->oferta = $buscarE->getOferta();
        $this->id_categoria = $buscarE->getId_categoria();
        $this->conexion = \Conexion::singleton();
   }

   

   public function read()
   {

     try {
          
          $this->sql = "SELECT
          
          ofr.`id_oferta`,
          ofr.`nombre_oferta`,
          ofr.`descripcion_oferta`,
          ofr.`valor_oferta`,
          ofr.`img_oferta`,
          ofr.`fecha_publicacion`,
          ct.`id_categoria`,
          ct.`categoria`,
          ofe.`descripcion_ofertante`,
          per.`primer_nombre`,
          per.`otros_nombre`,
          per.`primer_apellido`,
          per.`otros_apellido`,
          ub.`direccion`,   
          ub.`barrio`,  
          ub.`telefono`,
          ub.`celular`,
          ub.`email`,
          mu.`municipio`,
          dep.`departamento`,
          um.`nombre`,
          us.`img_usuario`
          
          FROM
               oferta AS ofr
          
          INNER JOIN categoria AS ct ON ofr.`id_categoria` = ct.`id_categoria`
          INNER JOIN ofertante AS ofe ON ofr.`id_ofertante` = ofe.`id_ofertante`
          INNER JOIN persona AS per ON ofe.`id_persona` = per.`id_persona`
          INNER JOIN ubicacion AS ub ON per.`id_ubicacion` = ub.`id_ubicacion`
          INNER JOIN municipio AS mu ON ub.`id_municipio` = mu.`id_municipio`
          INNER JOIN departamento AS dep ON mu.`id_departamento` = dep.`id_departamento`
          INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
          INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

          WHERE ofr.`descripcion_oferta` LIKE '%$this->oferta%' AND ofr.`estado`='A'
          ORDER BY ofr.`fecha_publicacion` DESC ";  

          $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }


     public function readcte()
     {
  
       try {
            
            $this->sql = "SELECT
            
            ofr.`id_oferta`,
            ofr.`nombre_oferta`,
            ofr.`descripcion_oferta`,
            ofr.`valor_oferta`,
            ofr.`img_oferta`,
            ofr.`fecha_publicacion`,
            ct.`id_categoria`,
            ct.`categoria`,
            ofe.`descripcion_ofertante`,
            per.`primer_nombre`,
            per.`otros_nombre`,
            per.`primer_apellido`,
            per.`otros_apellido`,
            ub.`direccion`,   
            ub.`barrio`,  
            ub.`telefono`,
            ub.`celular`,
            ub.`email`,
            mu.`municipio`,
            dep.`departamento`,
            um.`nombre`,
            us.`img_usuario`
            
            FROM
                 oferta AS ofr
            
            INNER JOIN categoria AS ct ON ofr.`id_categoria` = ct.`id_categoria`
            INNER JOIN ofertante AS ofe ON ofr.`id_ofertante` = ofe.`id_ofertante`
            INNER JOIN persona AS per ON ofe.`id_persona` = per.`id_persona`
            INNER JOIN ubicacion AS ub ON per.`id_ubicacion` = ub.`id_ubicacion`
            INNER JOIN municipio AS mu ON ub.`id_municipio` = mu.`id_municipio`
            INNER JOIN departamento AS dep ON mu.`id_departamento` = dep.`id_departamento`
            INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
            INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
  
            WHERE ct.`id_categoria` = '$this->id_categoria' AND ofr.`estado`='A'
            ORDER BY ofr.`fecha_publicacion` DESC ";  
  
            $this->result = $this->conexion->query($this->sql);
            $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }

}

?>