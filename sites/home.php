<?php
$noticia = new noticiaDAL();
$ultimas = $noticia->verNoticiasHome();

foreach ($ultimas as $key) {
 echo $key->getTitulo.'</br>'; 
}
?>
