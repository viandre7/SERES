<?php
namespace entidad;

class Oferta {

   
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
     * Get the value of oferta
     */ 
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set the value of oferta
     *
     * @return  self
     */ 
    public function setOferta($oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of valor_oferta
     */ 
    public function getValor_oferta()
    {
        return $this->valor_oferta;
    }

    /**
     * Set the value of valor_oferta
     *
     * @return  self
     */ 
    public function setValor_oferta($valor_oferta)
    {
        $this->valor_oferta = $valor_oferta;

        return $this;
    }

    /**
     * Get the value of id_unidad_medida
     */ 
    public function getId_unidad_medida()
    {
        return $this->id_unidad_medida;
    }

    /**
     * Set the value of id_unidad_medida
     *
     * @return  self
     */ 
    public function setId_unidad_medida($id_unidad_medida)
    {
        $this->id_unidad_medida = $id_unidad_medida;

        return $this;
    }

    /**
     * Get the value of fecha_publicacion
     */ 
    public function getFecha_publicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * Set the value of fecha_publicacion
     *
     * @return  self
     */ 
    public function setFecha_publicacion($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    /**
     * Get the value of fecha_eliminacion
     */ 
    public function getFecha_eliminacion()
    {
        return $this->fecha_eliminacion;
    }

    /**
     * Set the value of fecha_eliminacion
     *
     * @return  self
     */ 
    public function setFecha_eliminacion($fecha_eliminacion)
    {
        $this->fecha_eliminacion = $fecha_eliminacion;

        return $this;
    }

    /**
     * Get the value of img_oferta
     */ 
    public function getImg_oferta()
    {
        return $this->img_oferta;
    }

    /**
     * Set the value of img_oferta
     *
     * @return  self
     */ 
    public function setImg_oferta($img_oferta)
    {
        $this->img_oferta = $img_oferta;

        return $this;
    }

    /**
     * Get the value of id_ofertante
     */ 
    public function getId_ofertante()
    {
        return $this->id_ofertante;
    }

    /**
     * Set the value of id_ofertante
     *
     * @return  self
     */ 
    public function setId_ofertante($id_ofertante)
    {
        $this->id_ofertante = $id_ofertante;

        return $this;
    }

    /**
     * Get the value of id_subcategoria
     */ 
    public function getId_subcategoria()
    {
        return $this->id_subcategoria;
    }

    /**
     * Set the value of id_subcategoria
     *
     * @return  self
     */ 
    public function setId_subcategoria($id_subcategoria)
    {
        $this->id_subcategoria = $id_subcategoria;

        return $this;
    }

    /**
     * Get the value of id_catergoria
     */ 
    public function getId_catergoria()
    {
        return $this->id_catergoria;
    }

    /**
     * Set the value of id_catergoria
     *
     * @return  self
     */ 
    public function setId_catergoria($id_catergoria)
    {
        $this->id_catergoria = $id_catergoria;

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


?>
