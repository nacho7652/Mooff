<?php
    require_once 'connect.php';
    require_once 'Entidad/noticia.php';

    class noticiaDAL{
        public function ingresarNoticia($titulo,$cuerpo,$imagen,$id)
        {
            $fecha = date('Y-m-d h:i:s');
            $query = "insert into noticias values ('$id','$titulo','$cuerpo','$imagen','$fecha')";
            $connect = new connect();
            $connect->conectarse();
            $consulta = mysql_query($query);
            $connect->desconectarse();
            return $consulta;
        }

        public function maxID()
        {
            $consulta = "select max(id_noticias) from noticias" ;
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query($consulta);
            $connect->desconectarse();
            $rs = mysql_fetch_array($result);
            $id = (int)$rs[0];
            return $id;
        }
        
        public function verNoticiasHome()
        {
            $noticias = array(); 
            $noticia = new noticia();
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query("select * from noticias order by(fecha_noticia)DESC limit 10");
            while($rs = mysql_fetch_array($result))
            {
                $noticia->setTitulo($rs[1]);
                $noticia->setCuerpo($rs[2]);
                $noticia->setImagen($rs[3]);
                $noticia->setFecha($rs[4]);
                
                $noticias[] = $noticia;
            }
            return $noticias;
            
        }
    }
?>
