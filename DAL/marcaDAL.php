<?php
    require_once 'connect.php';
    require_once 'Entidad/marca.php';

class marcaDAL {
    
        public function ingresarMarca($nombre,$imagen,$id)
        {
            $query = "insert into marcas values ('$id','$nombre','$imagen')";
            $connect = new connect();
            $connect->conectarse();
            $consulta = mysql_query($query);
            $connect->desconectarse();
            return $consulta;
        }
        
        public function maxID()
        {
            $consulta = "select max(id_marcas) from marcas" ;
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query($consulta);
            $connect->desconectarse();
            $rs = mysql_fetch_array($result);
            $id = (int)$rs[0];
            return $id;
        }
        
        public function verMarcas()
        {
            $marcas = new ArrayObject();
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query("select * from marcas");
            $connect->desconectarse();
            while($rs = mysql_fetch_array($result))
            {
                $marca = new marca();
                $marca->setId($rs[0]);
                $marca->setNombre($rs[1]);
                $marca->setImagen($rs[2]);
                
                $marcas->append($marca);
                
            }
            return $marcas;
            
        }
}

?>
