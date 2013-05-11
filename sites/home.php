<?php
$noticia = new noticiaDAL();
$noticias = $noticia->verNoticiasHome();

foreach ($noticias as $key) {
        echo $key->getTitulo().'</br>'; 
    }
?>
