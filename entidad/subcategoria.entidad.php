<?php
namespace entidad;

class Subcategoria {

   public $id_subcategoria;
   public $subcategoria;
   public $id_categoria;
   public $estado;
   


   /**
    * Get the value of id_subcategoria
    */ 
   public function getId_subcategoria()
   {
      return $this->id_subcategoria;
   }

   /**
    * Set the value of id_subcategoria
    *
    * @return  self
    */ 
   public function setId_subcategoria($id_subcategoria)
   {
      $this->id_subcategoria = $id_subcategoria;

      return $this;
   }

   /**
    * Get the value of subcategoria
    */ 
   public function getSubcategoria()
   {
      return $this->subcategoria;
   }

   /**
    * Set the value of subcategoria
    *
    * @return  self
    */ 
   public function setSubcategoria($subcategoria)
   {
      $this->subcategoria = $subcategoria;

      return $this;
   }

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
