<?php
namespace entidad;

class Filtro {

    public $id_categoria;
    public $id_municipio;
    public $calificacion;
    public $valor_oferta;
    

  

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
     * Get the value of id_municipio
     */ 
    public function getId_municipio()
    {
        return $this->id_municipio;
    }

    /**
     * Set the value of id_municipio
     *
     * @return  self
     */ 
    public function setId_municipio($id_municipio)
    {
        $this->id_municipio = $id_municipio;

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
}


?>