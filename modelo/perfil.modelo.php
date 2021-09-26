<?php

namespace modelo;
use PDO;
use Exception;

include_once '../entidad/perfil.entidad.php';
include_once '../entorno/conexion.php';

class Perfil{
    
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
     public $recupera;
     public $pregunta;
     public $idface;

     

    // OTROS ATRIBUTOS //
    public $conexion;
    private $result;
    private $retorno;
    private $sql;

   public function __construct(\entidad\Perfil $perfilE){

     $this->id_persona = $perfilE->getId_persona();
     $this->tipo_documento = $perfilE->getTipo_documento();
     $this->identificacion = $perfilE->getIdentificacion();
     $this->primer_nombre = $perfilE->getPrimer_nombre();
     $this->otros_nombre = $perfilE->getOtros_nombre();
     $this->primer_apellido = $perfilE->getPrimer_apellido();
     $this->otros_apellido = $perfilE->getOtros_apellido();
     $this->genero = $perfilE->getGenero();
     $this->fecha_nacimiento = $perfilE->getFecha_nacimiento();
     $this->fecha_expedicion = $perfilE->getFecha_expedicion();
     $this->ubicacion = $perfilE->getUbicacion();
     $this->estado = $perfilE->getEstado();
     $this->email = $perfilE->getEmail();
     $this->password = $perfilE->getPassword();
     $this->direccion = $perfilE->getDireccion();
     $this->barrio = $perfilE->getBarrio();
     $this->municipio = $perfilE->getMunicipio();
     $this->telefono = $perfilE->getTelefono();
     $this->celular = $perfilE->getCelular();
     $this->idface = $perfilE->getIdface();
     $this->recupera = $perfilE->getRecupera();
     $this->pregunta = $perfilE->getPregunta();
     $this->des = $perfilE->getDes();
     $this->conexion = new \Conexion();
   }

   public function create()
   {

     try {
          $this->sql = "CALL create_per(1,'$this->tipo_documento',$this->identificacion,
          '$this->primer_nombre','$this->otros_nombre','$this->primer_apellido','$this->otros_apellido',
          '$this->genero','$this->fecha_nacimiento','$this->fecha_expedicion',1,'A','$this->email','$this->password',
          '$this->pregunta','$this->idface','$this->recupera', '$this->direccion','$this->barrio',
          '$this->municipio','$this->telefono','$this->celular')";
          $this->result=$this->conexion->conn->query($this->sql);
          $this->retorno =  $this->result->fetchAll(PDO::FETCH_ASSOC);
          // $this->retorno = "Exito: Usuario Creado";

     } catch (Exception $e) {
          $this->retorno = $e->getMessage(); 
     }
          return $this->retorno;
   }

   public function read()
   {

     try {
          $this->sql = "SELECT * FROM persona ";
          $this->result = $this->conexion->conn->query($this->sql);
          $this->retorno = $this->result->fetchAll(PDO::FETCH_ASSOC);
               
     } catch (Exception $e) {
          $this->retorno = $e->getMessage();
     }
          return $this->retorno;
     }

     public function update(){
          try {
              $this->sql="UPDATE persona INNER JOIN ubicacion ON (ubicacion.`id_ubicacion` = persona.`id_ubicacion`)
               SET  persona.primer_nombre='$this->primer_nombre', persona.otros_nombre='$this->otros_nombre',
               persona.primer_apellido='$this->primer_apellido', persona.otros_apellido='$this->otros_apellido', 
               ubicacion.`id_municipio`='$this->municipio' WHERE persona.id_persona='$this->id_persona'";
              $this->result=$this->conexion->conn->query($this->sql);
               $this->retorno="actualizadoooo";
  
          } catch (Exception $e) {
              $this->retorno =$e->getMessage();
          }
          return $this->retorno;
      }





}

?>