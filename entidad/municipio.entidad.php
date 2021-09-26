<?php
namespace entidad;

class Municipio {

    public  $id_municipio;
    public  $municipio;
    public  $codigo_dane;
    public  $id_departamento;
    public  $estado;
    



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
     * Get the value of municipio
     */ 
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set the value of municipio
     *
     * @return  self
     */ 
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get the value of codigo_dane
     */ 
    public function getCodigo_dane()
    {
        return $this->codigo_dane;
    }

    /**
     * Set the value of codigo_dane
     *
     * @return  self
     */ 
    public function setCodigo_dane($codigo_dane)
    {
        $this->codigo_dane = $codigo_dane;

        return $this;
    }

    /**
     * Get the value of id_departamento
     */ 
    public function getId_departamento()
    {
        return $this->id_departamento;
    }

    /**
     * Set the value of id_departamento
     *
     * @return  self
     */ 
    public function setId_departamento($id_departamento)
    {
        $this->id_departamento = $id_departamento;

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