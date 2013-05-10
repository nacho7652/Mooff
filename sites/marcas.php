<?php
$marca = new marcaDAL();
if(isset($_POST["send"]))
{   
    $name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $img_type = $_FILES['img']['type'];
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") ))
    {
        $partes = explode(".", $name);
        $ext = $partes[count($partes) - 1 ];
        $nom = $_POST['id'].rand(1,10).'.'.$ext;
        $url = 'marcas/'.$nom;
        move_uploaded_file($tmp_name,$url);
        chmod($url, 777);
        $marca->ingresarMarca($_POST['nom'],$url,$_POST['id']);   
    }
    else
    {
        echo '*Igrese una imagen valida';
    }
    
}
?>

<form id="marcas" action="#" method="post" enctype="multipart/form-data">
    <input type="number" name="id" id="id" placeholder="Max id <?php echo $marca->maxID() ?>"/></br>
    <input type="text" name="nom" id="nom" placeholder="Nombre"/></br>
    <input type="file" name="img" id="img"/>
    <input type="submit" name="send" id="send" value="Guardar"/>
</form>

<?php
    $marcas = $marca->verMarcas();
    foreach ($marcas as $key) {
        echo $key->getNombre.'</br>'; 
    }
?>
