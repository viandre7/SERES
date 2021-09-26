<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/oferta.entidad.php';
include_once '../entorno/conexionSingleton.php';




class Oferta{
    
     public $id_oferta;
     public $oferta;
     public $descripcion;
     public $valor_oferta;
     public $id_unidad_medida;
     public $fecha_publicacion;
     public $fecha_eliminacion;
     public $img_oferta;
     public $id_ofertante;
     public $id_subcategoria;
     public $id_catergoria;
     public $estado;


    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Oferta $ofertaE)
   {
        $this->id_oferta = $ofertaE->getId_oferta();
        $this->nombre_oferta = $ofertaE->getOferta();
        $this->descripcion_oferta = $ofertaE->getdescripcion();
        $this->valor_oferta = $ofertaE->getValor_oferta();
        $this->id_unidad_medida = $ofertaE->getid_unidad_medida();
        $this->img_oferta = $ofertaE->getImg_oferta();
        $this->id_ofertante = $ofertaE->getId_ofertante();
        $this->id_subcategoria = $ofertaE->getid_subcategoria();
        $this->id_catergoria = $ofertaE->getId_catergoria();
        $this->fecha_publicacion = $ofertaE->getfecha_publicacion();
        $this->fecha_eliminacion = $ofertaE->getFecha_eliminacion();
        $this->estado = $ofertaE->getEstado();
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
          ofr.`fecha_eliminacion`,
          ct.`categoria`,
          sct.`subcategoria`,
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
          pa.`pais`,
          um.`nombre`,
          us.`img_usuario`
          
      FROM
           oferta AS ofr
           
           INNER JOIN categoria AS ct ON ofr.`id_categoria` = ct.`id_categoria`
           INNER JOIN subcategoria AS sct ON ofr.`id_subcategoria` = sct.`id_subcategoria`
           INNER JOIN ofertante AS ofe ON ofr.`id_ofertante` = ofe.`id_ofertante`
           INNER JOIN persona AS per ON ofe.`id_persona` = per.`id_persona`
           INNER JOIN ubicacion AS ub ON per.`id_ubicacion` = ub.`id_ubicacion`
           INNER JOIN municipio AS mu ON ub.`id_municipio` = mu.`id_municipio`
           INNER JOIN departamento AS dep ON mu.`id_departamento` = dep.`id_departamento`
           INNER JOIN pais AS pa ON dep.`id_pais` = pa.`id_pais`
           INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
           INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
           WHERE ofr.`estado` = 'A'
           ORDER BY ofr.`id_oferta` desC";

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
            $this->sql = "SELECT
                    
                    ofr.`id_oferta`,
                    ofr.`nombre_oferta`,
                    ofr.`descripcion_oferta`,
                    ofr.`valor_oferta`,
                    ofr.`img_oferta`,
                    ofr.`fecha_publicacion`,
                    ofr.`fecha_eliminacion`,
                    ofr.`estado`,
                    ct.`categoria`,
                    sct.`subcategoria`,
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
                    pa.`pais`,
                    um.`nombre`,
                    us.`img_usuario`
                    
               FROM
                    oferta AS ofr
                    
                    INNER JOIN ofertante AS ofe ON ofr.`id_ofertante` = ofe.`id_ofertante`
                    INNER JOIN persona AS per ON ofe.`id_persona` = per.`id_persona`
                    INNER JOIN categoria AS ct ON ofr.`id_categoria` = ct.`id_categoria`
                    INNER JOIN subcategoria AS sct ON ofr.`id_subcategoria` = sct.`id_subcategoria`
                    INNER JOIN ubicacion AS ub ON per.`id_ubicacion` = ub.`id_ubicacion`
                    INNER JOIN municipio AS mu ON ub.`id_municipio` = mu.`id_municipio`
                    INNER JOIN departamento AS dep ON mu.`id_departamento` = dep.`id_departamento`
                    INNER JOIN pais AS pa ON dep.`id_pais` = pa.`id_pais`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
                    
                    
                    ORDER BY ofr.`fecha_publicacion` DESC";
  
            $this->result = $this->conexion->query($this->sql);
            $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }
  
       public function cambio()
       {
    
         try {
              $this->sql = "UPDATE oferta SET  estado='$this->estado' WHERE id_oferta=$this->id_oferta";
              $this->result = $this->conexion->query($this->sql);
              $this->retorno = "Exito: oferta Modificada";
                   
         } catch (Exception $e) {
              $this->retorno = $e->getMessage();
         }
              return $this->retorno;
         }

         public function contar()
         {
      
           try {
                $this->sql = "SELECT estado, COUNT(*) AS total FROM oferta GROUP BY estado";
                $this->result = $this->conexion->query($this->sql);
            $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);;
                     
           } catch (Exception $e) {
                $this->retorno = $e->getMessage();
           }
                return $this->retorno;
           }

           public function contar1()
           {
        
             try {
                  $this->sql = "SELECT estado, COUNT(*) AS total FROM oferta WHERE estado='A'";
                  $this->result = $this->conexion->query($this->sql);
              $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);;
                       
             } catch (Exception $e) {
                  $this->retorno = $e->getMessage();
             }
                  return $this->retorno;
             }

}

?>