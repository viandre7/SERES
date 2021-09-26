<?php

namespace entidad;

class ocupa
{


    private $idOcupa;
    private $ocupa;
    private $code;
    private $estado;

    ///////////77
    private $idProfe;
    private $profe;
    private $nivel;


    /**
     * Get the value of idOcupa
     */ 
    public function getIdOcupa()
    {
        return $this->idOcupa;
    }

    /**
     * Set the value of idOcupa
     *
     * @return  self
     */ 
    public function setIdOcupa($idOcupa)
    {
        $this->idOcupa = $idOcupa;

        return $this;
    }

    /**
     * Get the value of ocupa
     */ 
    public function getOcupa()
    {
        return $this->ocupa;
    }

    /**
     * Set the value of ocupa
     *
     * @return  self
     */ 
    public function setOcupa($ocupa)
    {
        $this->ocupa = $ocupa;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

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
    //////////////////////lor
    

    /**
     * Get the value of idProfe
     */ 
    public function getIdProfe()
    {
        return $this->idProfe;
    }

    /**
     * Set the value of idProfe
     *
     * @return  self
     */ 
    public function setIdProfe($idProfe)
    {
        $this->idProfe = $idProfe;

        return $this;
    }

    /**
     * Get the value of profe
     */ 
    public function getProfe()
    {
        return $this->profe;
    }

    /**
     * Set the value of profe
     *
     * @return  self
     */ 
    public function setProfe($profe)
    {
        $this->profe = $profe;

        return $this;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}




?>