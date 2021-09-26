<?php
namespace entidad;

class MisOfertas {

    
    public $descripcion;
    public $precioOfer;
    public $UnidadMedida;
    public $id_Oferta;

    public $idCategoria;
    public $categoria;
    public $idSubCategoria;
    public $SubCategoria;
    public $idOfertante;
    public $nomOferta;
    public $imagen;
    
    


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
     * Get the value of precioOfer
     */ 
    public function getPrecioOfer()
    {
        return $this->precioOfer;
    }

    /**
     * Set the value of precioOfer
     *
     * @return  self
     */ 
    public function setPrecioOfer($precioOfer)
    {
        $this->precioOfer = $precioOfer;

        return $this;
    }

    /**
     * Get the value of UnidadMedida
     */ 
    public function getUnidadMedida()
    {
        return $this->UnidadMedida;
    }

    /**
     * Set the value of UnidadMedida
     *
     * @return  self
     */ 
    public function setUnidadMedida($UnidadMedida)
    {
        $this->UnidadMedida = $UnidadMedida;

        return $this;
    }

    /**
     * Get the value of id_Oferta
     */ 
    public function getId_Oferta()
    {
        return $this->id_Oferta;
    }

    /**
     * Set the value of id_Oferta
     *
     * @return  self
     */ 
    public function setId_Oferta($id_Oferta)
    {
        $this->id_Oferta = $id_Oferta;

        return $this;
    }

    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of idSubCategoria
     */ 
    public function getIdSubCategoria()
    {
        return $this->idSubCategoria;
    }

    /**
     * Set the value of idSubCategoria
     *
     * @return  self
     */ 
    public function setIdSubCategoria($idSubCategoria)
    {
        $this->idSubCategoria = $idSubCategoria;

        return $this;
    }

    /**
     * Get the value of SubCategoria
     */ 
    public function getSubCategoria()
    {
        return $this->SubCategoria;
    }

    /**
     * Set the value of SubCategoria
     *
     * @return  self
     */ 
    public function setSubCategoria($SubCategoria)
    {
        $this->SubCategoria = $SubCategoria;

        return $this;
    }

    

    /**
     * Get the value of idOfertante
     */ 
    public function getIdOfertante()
    {
        return $this->idOfertante;
    }

    /**
     * Set the value of idOfertante
     *
     * @return  self
     */ 
    public function setIdOfertante($idOfertante)
    {
        $this->idOfertante = $idOfertante;

        return $this;
    }

    /**
     * Get the value of nomOferta
     */ 
    public function getNomOferta()
    {
        return $this->nomOferta;
    }

    /**
     * Set the value of nomOferta
     *
     * @return  self
     */ 
    public function setNomOferta($nomOferta)
    {
        $this->nomOferta = $nomOferta;

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
}


?>
