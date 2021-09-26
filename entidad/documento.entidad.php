<?php
namespace entidad;

class Documento {

    public $id_documento;
    public $nombre;
    public $nomenclatura;
    public $estado;


    /**
     * Get the value of id_documento
     */ 
    public function getId_documento()
    {
        return $this->id_documento;
    }

    /**
     * Set the value of id_documento
     *
     * @return  self
     */ 
    public function setId_documento($id_documento)
    {
        $this->id_documento = $id_documento;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of nomenclatura
     */ 
    public function getNomenclatura()
    {
        return $this->nomenclatura;
    }

    /**
     * Set the value of nomenclatura
     *
     * @return  self
     */ 
    public function setNomenclatura($nomenclatura)
    {
        $this->nomenclatura = $nomenclatura;

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
