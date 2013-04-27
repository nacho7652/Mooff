

<?php
$noticia = new noticiaDAL();
if(isset($_POST["enviar"]))
{   
    $name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $img_type = $_FILES['img']['type'];
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") ))
    {
        $partes = explode(".", $name);
        $ext = $partes[count($partes) - 1 ];
        $nom = $_POST['id'].rand(1,10).'.'.$ext;
        $url = 'noticias/'.$nom;
        move_uploaded_file($tmp_name,$url);
        chmod($url, 777);
        $noticia->ingresarNoticia($_POST['title'], $_POST['body_new'],$url,$_POST['id']);   
    }
    else
    {
        echo '*Igrese una imagen valida';
    }
    
}
?>

<form id="news" action="admin" method="post" enctype="multipart/form-data">
    <input type="number" name="id" id="id" placeholder="Max id <?php echo $noticia->maxID() ?>"/></br>
    <input type="text" name="title" id="title" placeholder="Titulo"/></br>
    <textarea rows="4" cols="50" name="body_new" id="body_new" placeholder="Contenido"></textarea></br>
    <input type="file" name="img" id="img"/>
    <input type="submit" name="enviar" id="enviar" value="Guardar"/>
</form>

<?php
    $noticias = $noticia->verNoticiasHome();
//    foreach ($noticias as $key) {
//        echo $key->getTitulo().'</br>'; 
//    }
?>