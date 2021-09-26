<?php
namespace entidad;

class Pais{

public $id_pais;
public $pais;
public $codigo_dane;
public $estado;





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
 * Get the value of pais
 */ 
public function getPais()
{
return $this->pais;
}

/**
 * Set the value of pais
 *
 * @return  self
 */ 
public function setPais($pais)
{
$this->pais = $pais;

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
