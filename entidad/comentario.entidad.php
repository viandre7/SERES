<?php
namespace entidad;

class Comentario {

    public $idOferta;
    public $usuarioComentario;
    public $comentario;
    public $calificacion;
    public $id_servicio;
    public $estado;


    /**
     * Get the value of idOferta
     */ 
    public function getIdOferta()
    {
        return $this->idOferta;
    }

    /**
     * Set the value of idOferta
     *
     * @return  self
     */ 
    public function setIdOferta($idOferta)
    {
        $this->idOferta = $idOferta;

        return $this;
    }

    /**
     * Get the value of usuarioComentario
     */ 
    public function getUsuarioComentario()
    {
        return $this->usuarioComentario;
    }

    /**
     * Set the value of usuarioComentario
     *
     * @return  self
     */ 
    public function setUsuarioComentario($usuarioComentario)
    {
        $this->usuarioComentario = $usuarioComentario;

        return $this;
    }

    /**
     * Get the value of comentario
     */ 
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     *
     * @return  self
     */ 
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get the value of calificacion
     */ 
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set the value of calificacion
     *
     * @return  self
     */ 
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get the value of id_servicio
     */ 
    public function getId_servicio()
    {
        return $this->id_servicio;
    }

    /**
     * Set the value of id_servicio
     *
     * @return  self
     */ 
    public function setId_servicio($id_servicio)
    {
        $this->id_servicio = $id_servicio;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}

