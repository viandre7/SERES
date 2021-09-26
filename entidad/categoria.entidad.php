<?php
namespace entidad;

class Categoria {

    public $id_categoria;
    public $categoria;
    public $img_categoria;
    public $estado;
   

    

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
     * Get the value of img_categoria
     */ 
    public function getImg_categoria()
    {
        return $this->img_categoria;
    }

    /**
     * Set the value of img_categoria
     *
     * @return  self
     */ 
    public function setImg_categoria($img_categoria)
    {
        $this->img_categoria = $img_categoria;

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
