<?php

namespace entidad;

class ubicacion{

        public $idUbicacion;
        public $direccion;
        public $barrio;
        public $ciudad;
        public $telefono;
        public $celular;
        public $email;
        public $municipio;
		public $departamento;

        /**
         * Get the value of idUbicacion
         */ 
        public function getIdUbicacion()
        {
                return $this->idUbicacion;
        }

        /**
         * Set the value of idUbicacion
         *
         * @return  self
         */ 
        public function setIdUbicacion($idUbicacion)
        {
                $this->idUbicacion = $idUbicacion;

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
         * Get the value of ciudad
         */ 
        public function getCiudad()
        {
                return $this->ciudad;
        }

        /**
         * Set the value of ciudad
         *
         * @return  self
         */ 
        public function setCiudad($ciudad)
        {
                $this->ciudad = $ciudad;

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
     * Get the value of departamento
     */ 
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }
    }

?>