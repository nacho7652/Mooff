<div class="tit-seccion"> 
<!--    <img src="/mooff/images/news4.png" class="icon-seccion"/>
    <p>Noticias</p>-->
</div>


<?php
$noticia = new noticiaDAL();
$noticias = $noticia->verNoticiasHome();

foreach ($noticias as $key) { 
  // $im = getimagesize('http://1.bp.blogspot.com/-5ppJlmrFgLY/UMjwHl3CjUI/AAAAAAAAXLc/N6HZFIrU7JM/s1600/Descarga+Gratis+%E2%80%93+Im%C3%A1genes+Navide%C3%B1as+de+Mickey+Mouse+y+Minnie+para+Facebook.jpg');
   // $im = getimagesize("localhost/mooff/".$key->getImagen());
//    $ancho = imagesx($im);
//    $alto = imagesy($im);
   // getimagesize();
   //   echo $im;
    ?>
    <div style="background: url(/mooff/<?= $key->getImagen() ?>); background-size:cover; background-repeat: no-repeat" 
         class="item-noticia">
        <div class="titulo-noticia specialfont2"><?= $key->getTitulo() ?></div>
        <div class="content-noticia"><?= $key->getCuerpo() ?></div>
    </div>
        
<?php 
    }
    //print_r($_SESSION['user']);
    //print_r($_SESSION['user']['id'])
?>
