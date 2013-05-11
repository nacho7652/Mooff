<?php
require_once 'connect.php';

class usuarioDAL {
    
    public function registrarUsuarioFacebook($id,$mail,$nombre,$apellidos,$imagen)
    {
            $query = "insert into usuario values ('$id',null,null,'$nombre','$apellidos','$mail',null,null,'$imagen',null)";
            $connect = new connect();
            $connect->conectarse();
            $consulta = mysql_query($query);
            $connect->desconectarse();
            return $consulta;
    }

}

?>
