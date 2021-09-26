<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/comentario.entidad.php';
include_once '../entorno/conexionSingleton.php';



class Comentario{
    
    public $idOferta;
    public $usuarioComentario;
    public $comentario;
    public $calificacion;
    public $id_servicio;
    public $estado;

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Comentario $comentarioE)
   {
        $this->idOferta = $comentarioE->getidOferta();
        $this->usuarioComentario = $comentarioE->getusuarioComentario();
        $this->comentario = $comentarioE->getComentario();
        $this->calificacion = $comentarioE->getCalificacion();
        $this->id_servicio = $comentarioE->getId_servicio();
        $this->estado = $comentarioE->getEstado();
        $this->conexion = \Conexion::singleton();
   }

   public function create()
   {
       try{

            $this->result = $this->conexion->prepare("INSERT INTO servicio VALUES (NULL , :idOferta , :calificacion, :comentario , CURDATE(), :usuarioComentario, 'A')");
            $this->result->bindParam(':idOferta', $this->idOferta);
            $this->result->bindParam(':calificacion', $this->calificacion);
            $this->result->bindParam(':comentario', $this->comentario);
            $this->result->bindParam(':usuarioComentario', $this->usuarioComentario);
            $this->result->execute();

            $this->retorno = "Comentario Registrado, ¡Muchas Gracias!";
            
        } catch (Exception $e) {
        
            $this->retorno = $e->getMessage();
        }
            return $this->retorno;
   }
   
   
   public function read()
   {

     try {
          $this->sql = "SELECT
            svr.id_servicio,
            svr.comentario,
            svr.calificacion,
            svr.fecha_registro,
            svr.usuario,
            svr.estado,
            ofr.nombre_oferta,
            prs.primer_nombre,
            prs.otros_nombre,
            prs.primer_apellido,
            prs.otros_apellido
            
            FROM servicio AS svr
            
            INNER JOIN oferta AS ofr ON svr.id_oferta = ofr.id_oferta
            INNER JOIN ofertante AS oft ON ofr.`id_ofertante`=oft.`id_ofertante`
            INNER JOIN persona AS prs ON oft.`id_persona`=prs.`id_persona` ";
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
            $this->sql = "UPDATE servicio SET  estado='$this->estado' WHERE id_servicio=$this->id_servicio";
            $this->result = $this->conexion->query($this->sql);
            $this->retorno = "Exito: Comentario Modificado";
                 
       } catch (Exception $e) {
            $this->retorno = $e->getMessage();
       }
            return $this->retorno;
       }

       public function contar()
       {
    
         try {
              $this->sql = "SELECT estado, COUNT(*) AS total FROM servicio GROUP BY estado";
              $this->result = $this->conexion->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);;
                   
         } catch (Exception $e) {
              $this->retorno = $e->getMessage();
         }
              return $this->retorno;
         }

}

?>