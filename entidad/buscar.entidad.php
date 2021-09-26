<?php
namespace entidad;

class Buscar {

   public $oferta;
   public $id_categoria;
    

   /**
    * Get the value of oferta
    */ 
   public function getOferta()
   {
      return $this->oferta;
   }

   /**
    * Set the value of oferta
    *
    * @return  self
    */ 
   public function setOferta($oferta)
   {
      $this->oferta = $oferta;

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
}


?>
