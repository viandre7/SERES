<?php
namespace entidad;

class Departamento {

public  $id_departamento;
public  $departamento;
public  $codigo_dane;
public  $id_pais;
public  $estado;



/**
 * Get the value of id_departamento
 */ 
public function getId_departamento()
{
return $this->id_departamento;
}

/**
 * Set the value of id_departamento
 *
 * @return  self
 */ 
public function setId_departamento($id_departamento)
{
$this->id_departamento = $id_departamento;

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

/**
 * Get the value of codigo_dane
 */ 
public function getCodigo_dane()
{
return $this->codigo_dane;
}

/**
 * Set the value of codigo_dane
 *
 * @return  self
 */ 
public function setCodigo_dane($codigo_dane)
{
$this->codigo_dane = $codigo_dane;

return $this;
}

/**
 * Get the value of id_pais
 */ 
public function getId_pais()
{
return $this->id_pais;
}

/**
 * Set the value of id_pais
 *
 * @return  self
 */ 
public function setId_pais($id_pais)
{
$this->id_pais = $id_pais;

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