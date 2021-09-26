<?php

namespace entidad;

class usuario{

    public $idUsuario;
    public $Usuario;
    public $contrasena;
    public $img;
    public $recupera;
    public $usuario_persona;
    public $idrol;
    public $idface;
    

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Set the value of nombre_usuario
     *
     * @return  self
     */ 
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;

        return $this;
    }
    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

 
    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of usuario_persona
     */ 
    public function getUsuario_persona()
    {
        return $this->usuario_persona;
    }

    /**
     * Set the value of usuario_persona
     *
     * @return  self
     */ 
    public function setUsuario_persona($usuario_persona)
    {
        $this->usuario_persona = $usuario_persona;

        return $this;
    }

    /**
     * Get the value of idrol
     */ 
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set the value of idrol
     *
     * @return  self
     */ 
    public function setIdrol($idrol)
    {
        $this->idrol = $idrol;

        return $this;
    }

    

    /**
     * Get the value of recupera
     */ 
    public function getRecupera()
    {
        return $this->recupera;
    }

    /**
     * Set the value of recupera
     *
     * @return  self
     */ 
    public function setRecupera($recupera)
    {
        $this->recupera = $recupera;

        return $this;
    }

    /**
     * Get the value of idface
     */ 
    public function getIdface()
    {
        return $this->idface;
    }

    /**
     * Set the value of idface
     *
     * @return  self
     */ 
    public function setIdface($idface)
    {
        $this->idface = $idface;

        return $this;
    }
}




?>