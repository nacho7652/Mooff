<div class="tit-seccion"> 
<!--    <img src="/mooff/images/news4.png" class="icon-seccion"/>
    <p>Noticias</p>-->
</div>


<?php
$noticia = new noticiaDAL();
$noticias = $noticia->verNoticiasHome();

foreach ($noticias as $key) { ?>
    <div style="background: url(/mooff/<?= $key->getImagen() ?>); background-size:cover; background-repeat: no-repeat" 
         class="item-noticia">
        <div class="titulo-noticia specialfont2"><?= $key->getTitulo() ?></div>
        <div class="content-noticia"><?= 'El expresidente egipcio Hosni Mubarak ha negado hoy los cargos que se le imputan por corrupción...'//$key->getCuerpo() ?></div>
    </div>
        
<?php 
    }
    //print_r($_SESSION['user']);
    //print_r($_SESSION['user']['id'])
?>
