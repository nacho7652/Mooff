<?php

class institucion {
     private $id;
     private $nombre;
     private $imagen;
     
     function getId()
     {
         return $this->id;
     }
     
     function setId($id)
     {
         $this->id = $id;
     }

     
     function getNombre()
     {
         return $this->nombre;
     }
     
     function setNombre($nombre)
     {
         $this->nombre = $nombre;
     }

     function getImagen()
     {
         return $this->imagen;
     }
     
     function setImagen($imagen)
     {
         $this->imagen = $imagen;
     }
     
     function institucion($id,$n,$i)
     {
         $this->id= $id;
         $this->nombre = $n;
         $this->imagen = $i;
     }
}

?>
