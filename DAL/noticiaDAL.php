<?php
    require_once 'connect.php';

    class noticiaDAL{
        public function ingresarNoticia($titulo,$cuerpo,$imagen)
        {
            $id = devolverID();
            $query = "insert into noticias values ('$id','$titulo','$cuerpo','$imagen')";
            $connect = new connect();
            $connect->conectarse();
            $consulta = mysql_query($query);
            $connect->desconectarse();
            return $consulta;
        }

        public function devolverId()
        {
            $consulta = "select max('id_noticias') from noticias" ;
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query($consulta);
            $connect->desconectarse();
            $rs = mysql_fetch_array($result);
            $id = $rs['id_noticias']+1;
            return $id;
        }
    }
?>
