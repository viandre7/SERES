<?php
namespace entidad;

class Perfil {

    public $id_persona;
    public $tipo_documento;
    public $identificacion;
    public $primer_nombre;
    public $otros_nombre;
    public $primer_apellido;
    public $otros_apellido;
    public $genero;
    public $fecha_nacimiento;
    public $fecha_expedicion;
    public $ubicacion;
    public $estado;
    public $email;
    public $password;
    public $direccion;
    public $barrio;
    public $municipio;
    public $telefono;
    public $celular;
    public $idface;
    public $recupera;
    public $pregunta;
    public $des;



    /**
     * Get the value of id_persona
     */ 
    public function getId_persona()
    {
        return $this->id_persona;
    }

    /**
     * Set the value of id_persona
     *
     * @return  self
     */ 
    public function setId_persona($id_persona)
    {
        $this->id_persona = $id_persona;

        return $this;
    }

    /**
     * Get the value of tipo_documento
     */ 
    public function getTipo_documento()
    {
        return $this->tipo_documento;
    }

    /**
     * Set the value of tipo_documento
     *
     * @return  self
     */ 
    public function setTipo_documento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;

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
     * Get the value of primer_nombre
     */ 
    public function getPrimer_nombre()
    {
        return $this->primer_nombre;
    }

    /**
     * Set the value of primer_nombre
     *
     * @return  self
     */ 
    public function setPrimer_nombre($primer_nombre)
    {
        $this->primer_nombre = $primer_nombre;

        return $this;
    }

    /**
     * Get the value of otros_nombre
     */ 
    public function getOtros_nombre()
    {
        return $this->otros_nombre;
    }

    /**
     * Set the value of otros_nombre
     *
     * @return  self
     */ 
    public function setOtros_nombre($otros_nombre)
    {
        $this->otros_nombre = $otros_nombre;

        return $this;
    }

    /**
     * Get the value of primer_apellido
     */ 
    public function getPrimer_apellido()
    {
        return $this->primer_apellido;
    }

    /**
     * Set the value of primer_apellido
     *
     * @return  self
     */ 
    public function setPrimer_apellido($primer_apellido)
    {
        $this->primer_apellido = $primer_apellido;

        return $this;
    }

    /**
     * Get the value of otros_apellido
     */ 
    public function getOtros_apellido()
    {
        return $this->otros_apellido;
    }

    /**
     * Set the value of otros_apellido
     *
     * @return  self
     */ 
    public function setOtros_apellido($otros_apellido)
    {
        $this->otros_apellido = $otros_apellido;

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
     * Get the value of fecha_expedicion
     */ 
    public function getFecha_expedicion()
    {
        return $this->fecha_expedicion;
    }

    /**
     * Set the value of fecha_expedicion
     *
     * @return  self
     */ 
    public function setFecha_expedicion($fecha_expedicion)
    {
        $this->fecha_expedicion = $fecha_expedicion;

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

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of barrio
     */ 
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set the value of barrio
     *
     * @return  self
     */ 
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

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
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of celular
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

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
     * Get the value of pregunta
     */ 
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set the value of pregunta
     *
     * @return  self
     */ 
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

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

    /**
     * Get the value of des
     */ 
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set the value of des
     *
     * @return  self
     */ 
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }
}


?>
