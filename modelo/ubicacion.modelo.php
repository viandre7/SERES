<?php

    namespace modelo;
    include_once("../entidad/ubicacion.entidad.php");
    include_once("../entorno/conexion.php");

    use FFI\Exception;
    use PDO;

    class ubicacion{

        
        public $idUbicacion;
        public $direccion;
        public $barrio;
        public $ciudad;
        public $telefono;
        public $celular;
        public $email;

        public  $result;
        public  $retorno;
        public  $conexion;
        public  $sql;

        public function __construct(\entidad\ubicacion $ubicacion){
            $this->idUbicacion= $ubicacion->getIdUbicacion();
            $this->direccion= $ubicacion->getDireccion();
            $this->barrio= $ubicacion->getBarrio();
            $this->ciudad= $ubicacion->getCiudad();
            $this->telefono =$ubicacion->getTelefono();
            $this->celular= $ubicacion->getCelular();
            $this->email= $ubicacion->getEmail();
            $this->conexion =new \conexion();

        }
        

        public function update(){
            try {
                $this->sql="UPDATE ubicacion SET direccion='$this->direccion', celular='$this->celular', email='$this->email'
                WHERE id_ubicacion='$this->idUbicacion' ";
                $this->result=$this->conexion->conn->query($this->sql);
                $this->retorno="actualizado";
    
            } catch (Exception $e) {
                $this->retorno =$e->getMessage();
            }
            return $this->retorno;
        
    }

    }


?>