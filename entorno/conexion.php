<?php

class conexion

{
    public $conn=null;
    private $ultimoId=null;
    private $recordSet=null;

    public function __construct()
    {
   
    // $this->conn = new PDO('mysql:dbname=proyectoseres1;host=pseres.cz7qfgrqduma.sa-east-1.rds.amazonaws.com','admin','Qwer2021');
    // $this->conn = new PDO('mysql:dbname=proyectoseres;host=bdseres.c36r1krwyd0p.us-east-2.rds.amazonaws.com','admin','Qwer2021');

    $this->conn =new PDO('mysql:dbname=proyectoseres;host=localhost','root','');
    // $this->conn =new PDO('mysql:dbname=seresv1;host=localhost','root','');
    $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    public function ultimoId()
    {
        $sql="SELECT LAST_INSERT_ID() as lastid";
        $this->ultimoId = $this->conn->query($sql);
        $respuesta = $this->ultimoId->fetchAll(PDO::FETCH_ASSOC);
        return $respuesta[0]['lastid'];

    }

}
?>
