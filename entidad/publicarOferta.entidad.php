<?php
namespace entidad;

class Oferta {

    public $id_oferta;
    public $nombre_oferta;
    public $descripcion_oferta;
    public $valor_oferta;
    public $id_unidad_medida;
    private $imagen;
    public $id_ofertante;
    public $id_subcategoria;
    public $id_categoria;
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
     * Get the value of descripcion_oferta
     */ 
    public function getDescripcion_oferta()
    {
        return $this->descripcion_oferta;
    }

    /**
     * Set the value of descripcion_oferta
     *
     * @return  self
     */ 
    public function setDescripcion_oferta($descripcion_oferta)
    {
        $this->descripcion_oferta = $descripcion_oferta;

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
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

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
     * Get the value of id_categoria
     */ 
    public function getId_categoria()
    {
        return $this->id_categoria;
    }

    /**
     * Set the value of id_categoria
     *
     * @return  self
     */ 
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }

    /**
     * Get the value of nombre_oferta
     */ 
    public function getNombre_oferta()
    {
        return $this->nombre_oferta;
    }

    /**
     * Set the value of nombre_oferta
     *
     * @return  self
     */ 
    public function setNombre_oferta($nombre_oferta)
    {
        $this->nombre_oferta = $nombre_oferta;

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
}
?>
