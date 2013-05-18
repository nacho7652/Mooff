<?php
    require_once 'connect.php';
    require_once 'Entidad/institucion.php';

class institucionDAL {
    
        public function ingresarInstitucion($nombre,$imagen,$id)
        {
            $query = "insert into instituciones values ('$id','$nombre','$imagen')";
            $connect = new connect();
            $connect->conectarse();
            $consulta = mysql_query($query);
            $connect->desconectarse();
            return $consulta;
        }
        
        public function maxID()
        {
            $consulta = "select max(id_institucion) from instituciones" ;
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query($consulta);
            $connect->desconectarse();
            $rs = mysql_fetch_array($result);
            $id = (int)$rs[0];
            return $id;
        }
        
        public function verInstitucion()
        {
            $instituciones = new ArrayObject();
            $connect = new connect();
            $connect->conectarse();
            $result = mysql_query("select * from instituciones");
            $connect->desconectarse();
            while($rs = mysql_fetch_array($result))
            {
                $institucion = new institucion($rs[0],$rs[1],$rs[2]);
//                $marca->setId();
//                $marca->setNombre();
//                $marca->setImagen($rs[2]);
                
                $instituciones->append($institucion);
                
            }
            return $instituciones;
            
        }
}

?>
