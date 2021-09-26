<?php
namespace entidad;

class Categoria {

    public $id_servicio;
    public $id_oferta;
    public $calificacion;
    public $comentario;
    public $fecha_registro;

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
     * Get the value of id_oferta
     */ 
    public function getId_oferta()
    {
        return $this->id_oferta;
    }

    /**
     * Set the value of id_oferta
     *
     * @return  self
     */ 
    public function setId_oferta($id_oferta)
    {
        $this->id_oferta = $id_oferta;

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
     * Get the value of fecha_registro
     */ 
    public function getFecha_registro()
    {
        return $this->fecha_registro;
    }

    /**
     * Set the value of fecha_registro
     *
     * @return  self
     */ 
    public function setFecha_registro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;

        return $this;
    }
}


?>
