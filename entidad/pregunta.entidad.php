<?php
namespace entidad;

class Pregunta{


    public $id_pregunta;
    public $nombre;
    public $estado;


    /**
     * Get the value of id_pregunta
     */ 
    public function getId_pregunta()
    {
        return $this->id_pregunta;
    }

    /**
     * Set the value of id_pregunta
     *
     * @return  self
     */ 
    public function setId_pregunta($id_pregunta)
    {
        $this->id_pregunta = $id_pregunta;

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