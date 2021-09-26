<?php
namespace entidad;

class Unidadmedida {

    public $id_unidad_medida;
    public $nombre;
    public $nomenclatura;
    public $estado;


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
