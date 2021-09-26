<?php


    namespace entidad;

    class ofertante{

        public $idOfertante;
        public $persona;
        public $descripcion;
        public $estado;
        



        /**
         * Get the value of idOfertante
         */ 
        public function getIdOfertante()
        {
                return $this->idOfertante;
        }

        /**
         * Set the value of idOfertante
         *
         * @return  self
         */ 
        public function setIdOfertante($idOfertante)
        {
                $this->idOfertante = $idOfertante;

                return $this;
        }

        /**
         * Get the value of persona
         */ 
        public function getPersona()
        {
                return $this->persona;
        }

        /**
         * Set the value of persona
         *
         * @return  self
         */ 
        public function setPersona($persona)
        {
                $this->persona = $persona;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

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