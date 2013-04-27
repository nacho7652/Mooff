<?php

class noticia {
     private $titulo;
     private $cuerpo;
     private $imagen;
     private $fecha;
     
     function getTitulo()
     {
         return $this->titulo;
     }
     
     function setTitulo($titulo)
     {
         $this->titulo = $titulo;
     }
     
     function getCuerpo()
     {
         return $this->cuerpo;
     }
     
     function setCuerpo($cuerpo)
     {
         $this->cuerpo = $cuerpo;
     }
     
     function getImagen()
     {
         return $this->imagen;
     }
     
     function setImagen($imagen)
     {
         $this->imagen = $imagen;
     }
     
     function getFecha()
     {
         return $this->titulo;
     }
     
     function setFecha($fecha)
     {
         $this->fecha = $fecha;
     }
     
     function notica($t,$c,$i,$f)
     {
         $this->titulo = $t;
         $this->cuerpo = $c;
         $this->imagen = $i;
         $this->fecha = $f;
     }
}

?>
