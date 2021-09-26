<?php

namespace entidad;

class econo 
{
    private $idEcon;
    private $ecoNombre;
    private $codigo;
    private $estado;

    /////////////// Nivel Educativo //////////777

    private $idNivel;
    private $nivel;

    ///////////7 Ocupacion/////////////7

    private $idOcupa;
    private $ocupa;
    private $code;
    

    /**
     * Get the value of idEcon
     */ 
    public function getIdEcon()
    {
        return $this->idEcon;
    }

    /**
     * Set the value of idEcon
     *
     * @return  self
     */ 
    public function setIdEcon($idEcon)
    {
        $this->idEcon = $idEcon;

        return $this;
    }

    /**
     * Get the value of ecoNombre
     */ 
    public function getEcoNombre()
    {
        return $this->ecoNombre;
    }

    /**
     * Set the value of ecoNombre
     *
     * @return  self
     */ 
    public function setEcoNombre($ecoNombre)
    {
        $this->ecoNombre = $ecoNombre;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
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

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }
    ///////////////// Nivel educativo gett y sett
    

    /**
     * Get the value of idNivel
     */ 
    public function getIdNivel()
    {
        return $this->idNivel;
    }

    /**
     * Set the value of idNivel
     *
     * @return  self
     */ 
    public function setIdNivel($idNivel)
    {
        $this->idNivel = $idNivel;

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

    /////////////////Ocupacion //////////////////777

    

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
}




?>