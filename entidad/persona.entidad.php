<?php

namespace entidad;

class persona{

    public $idPersona;
    public $tipoD;
    public $identificacion;
    public $pri_nombre;
    public $seg_nombre;
    public $pri_Apellido;
    public $seg_Apellido;
    public $genero;
    public $fecha_nacimiento;
    public $fecha_Expedicion;
    public $ubicacion;


    /**
     * Get the value of idPersona
     */ 
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set the value of idPersona
     *
     * @return  self
     */ 
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get the value of tipoD
     */ 
    public function getTipoD()
    {
        return $this->tipoD;
    }

    /**
     * Set the value of tipoD
     *
     * @return  self
     */ 
    public function setTipoD($tipoD)
    {
        $this->tipoD = $tipoD;

        return $this;
    }

    /**
     * Get the value of identificacion
     */ 
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set the value of identificacion
     *
     * @return  self
     */ 
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get the value of pri_nombre
     */ 
    public function getPri_nombre()
    {
        return $this->pri_nombre;
    }

    /**
     * Set the value of pri_nombre
     *
     * @return  self
     */ 
    public function setPri_nombre($pri_nombre)
    {
        $this->pri_nombre = $pri_nombre;

        return $this;
    }

    /**
     * Get the value of seg_nombre
     */ 
    public function getSeg_nombre()
    {
        return $this->seg_nombre;
    }

    /**
     * Set the value of seg_nombre
     *
     * @return  self
     */ 
    public function setSeg_nombre($seg_nombre)
    {
        $this->seg_nombre = $seg_nombre;

        return $this;
    }

    /**
     * Get the value of pri_Apellido
     */ 
    public function getPri_Apellido()
    {
        return $this->pri_Apellido;
    }

    /**
     * Set the value of pri_Apellido
     *
     * @return  self
     */ 
    public function setPri_Apellido($pri_Apellido)
    {
        $this->pri_Apellido = $pri_Apellido;

        return $this;
    }

    /**
     * Get the value of seg_Apellido
     */ 
    public function getSeg_Apellido()
    {
        return $this->seg_Apellido;
    }

    /**
     * Set the value of seg_Apellido
     *
     * @return  self
     */ 
    public function setSeg_Apellido($seg_Apellido)
    {
        $this->seg_Apellido = $seg_Apellido;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of fecha_nacimiento
     */ 
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set the value of fecha_nacimiento
     *
     * @return  self
     */ 
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of fecha_Expedicion
     */ 
    public function getFecha_Expedicion()
    {
        return $this->fecha_Expedicion;
    }

    /**
     * Set the value of fecha_Expedicion
     *
     * @return  self
     */ 
    public function setFecha_Expedicion($fecha_Expedicion)
    {
        $this->fecha_Expedicion = $fecha_Expedicion;

        return $this;
    }

    /**
     * Get the value of ubicacion
     */ 
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set the value of ubicacion
     *
     * @return  self
     */ 
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }
}

?>