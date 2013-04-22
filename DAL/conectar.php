<?php
Class conectar{
 private $conexion;

  public function conexion(){ 
    if(!isset($this->conexion)){
      $this->conexion = mysql_connect("localhost","","");
      mysql_select_db("mooff",$this->conexion);
    }
  }
}
?>
