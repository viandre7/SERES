<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/filtro.entidad.php';
include_once '../entorno/conexionSingleton.php';




class Filtro{

     public $id_categoria;
     public $id_municipio;
     public $calificacion;
     public $valor_oferta;
     

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Filtro $filtroE)
   {
        $this->id_categoria = $filtroE->getId_categoria();
        $this->id_municipio = $filtroE->getId_municipio();
        $this->calificacion = $filtroE->getCalificacion();
        $this->valor_oferta = $filtroE->getValor_oferta();
        $this->conexion = \Conexion::singleton();
   }
   
   public function read()
   {

     try {

          if (!empty($this->id_categoria) && empty($this->id_municipio) &&  empty($this->valor_oferta) &&  empty($this->calificacion))  
          {
               $this->sql = "SELECT
               
                    ofr.`id_oferta`,
                    ofr.`nombre_oferta`,
                    ofr.`descripcion_oferta`,
                    ofr.`valor_oferta`,
                    ofr.`img_oferta`,
                    ofr.`fecha_publicacion`,
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

                    WHERE ofr.`id_categoria`= '$this->id_categoria' AND ofr.`estado`='A'
                    ORDER BY ofr.`fecha_publicacion` DESC ";

          }
          
          if (empty($this->id_categoria) && !empty($this->id_municipio) && empty($this->valor_oferta)  &&  empty($this->calificacion) )
          {
               $this->sql = "SELECT 

                    ofr.`id_oferta`,
                    ofr.`nombre_oferta`,
                    ofr.`descripcion_oferta`,
                    ofr.`valor_oferta`,
                    ofr.`img_oferta`,
                    ofr.`fecha_publicacion`,
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

                    WHERE mu.`id_municipio` = '$this->id_municipio' AND ofr.`estado`='A'
                    ORDER BY ofr.`fecha_publicacion` DESC";

          }

          if (empty($this->id_categoria) && empty($this->id_municipio) &&  !empty($this->valor_oferta) &&  empty($this->calificacion))
          {
               $this->sql = "SELECT 

                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
          
                    WHERE ofr.`estado`='A'  AND ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC ";
               }
         
           if (empty($this->id_categoria) && empty($this->id_municipio) && empty($this->valor_oferta) &&  !empty($this->calificacion))
          {
               $this->sql = "SELECT 

                    ofr.`id_oferta`,
                    ofr.`nombre_oferta`,
                    ofr.`descripcion_oferta`,
                    ofr.`valor_oferta`,
                    ofr.`img_oferta`,
                    ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

                    WHERE sr.`calificacion`= '$this->calificacion' AND ofr.`estado`='A'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          if (!empty($this->id_categoria) && !empty($this->id_municipio) && empty($this->valor_oferta) &&  empty($this->calificacion))  
          {
               $this->sql = "SELECT 

                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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

                         WHERE ofr.`id_categoria`= '$this->id_categoria' AND mu.`id_municipio` = '$this->id_municipio' AND ofr.`estado`='A'
                         ORDER BY ofr.`fecha_publicacion` DESC ";

          }

          if (!empty($this->id_categoria) && empty($this->id_municipio) && !empty($this->valor_oferta) &&  empty($this->calificacion) )  
     {
               $this->sql = "SELECT 

                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    WHERE ofr.`id_categoria`= '$this->id_categoria' AND ofr.`estado`='A' AND ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta' 
                    ORDER BY ofr.`fecha_publicacion` DESC ";

          }

          if (!empty($this->id_categoria) && empty($this->id_municipio) && empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
                    
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

                    WHERE ofr.`id_categoria`= '$this->id_categoria'  AND sr.`calificacion`= '$this->calificacion'  AND ofr.`estado`='A'
                    ORDER BY ofr.`fecha_publicacion` DESC";
     }


          if (empty($this->id_categoria) && !empty($this->id_municipio) && !empty($this->valor_oferta) &&  empty($this->calificacion) )
          {
               $this->sql = "SELECT 

                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    WHERE mu.`id_municipio` = '$this->id_municipio' AND ofr.`estado`='A' AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";

          }

          if (empty($this->id_categoria) && !empty($this->id_municipio) && empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
                    WHERE sr.`calificacion`= '$this->calificacion' AND   mu.`id_municipio` = '$this->id_municipio'  AND ofr.`estado`='A'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          if (empty($this->id_categoria) && empty($this->id_municipio) && !empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
                    WHERE sr.`calificacion`= '$this->calificacion' AND ofr.`estado`='A' AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          if (!empty($this->id_categoria) && !empty($this->id_municipio) && !empty($this->valor_oferta) &&  empty($this->calificacion))  
     {
               $this->sql = "SELECT 

                    ofr.`id_oferta`,
                    ofr.`nombre_oferta`,
                    ofr.`descripcion_oferta`,
                    ofr.`valor_oferta`,
                    ofr.`img_oferta`,
                    ofr.`fecha_publicacion`,
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
                    WHERE ofr.`id_categoria`= '$this->id_categoria' AND mu.`id_municipio` = '$this->id_municipio' AND ofr.`estado`='A'  AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";

          }

          if (!empty($this->id_categoria) && !empty($this->id_municipio) && empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

                    WHERE ofr.`id_categoria`= '$this->id_categoria'  AND sr.`calificacion`= '$this->calificacion' AND ofr.`estado`='A' AND  mu.`id_municipio` = '$this->id_municipio'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          if (!empty($this->id_categoria) && empty($this->id_municipio) && !empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`
                    WHERE ofr.`id_categoria`= '$this->id_categoria'  AND sr.`calificacion`= '$this->calificacion' AND ofr.`estado`='A' AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }


          if (empty($this->id_categoria) && !empty($this->id_municipio) && !empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

                    WHERE sr.`calificacion`= '$this->calificacion' AND   mu.`id_municipio` = '$this->id_municipio'  AND ofr.`estado`='A' AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          if (!empty($this->id_categoria) && !empty($this->id_municipio) && !empty($this->valor_oferta) && !empty($this->calificacion))
          {
               $this->sql = "SELECT 
               
                         ofr.`id_oferta`,
                         ofr.`nombre_oferta`,
                         ofr.`descripcion_oferta`,
                         ofr.`valor_oferta`,
                         ofr.`img_oferta`,
                         ofr.`fecha_publicacion`,
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
                    INNER JOIN servicio AS sr ON ofr.`id_oferta` = sr.`id_oferta`
                    INNER JOIN unidad_medida AS um ON ofr.`id_unidad_medida` = um.`id_unidad_medida`
                    INNER JOIN usuario AS us ON per.`id_persona` = us.`id_persona`

                    WHERE ofr.`id_categoria`= '$this->id_categoria'  AND sr.`calificacion`= '$this->calificacion' AND   mu.`id_municipio` = '$this->id_municipio'  AND ofr.`estado`='A' AND  ofr.`valor_oferta` BETWEEN 0 AND '$this->valor_oferta'
                    ORDER BY ofr.`fecha_publicacion` DESC";
          }

          $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

     

}

?>