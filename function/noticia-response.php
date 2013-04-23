<?php
    require_once 'DAL/noticiaDAL.php';
    
         if(isset($_POST['insertNew'])){
            $noticia = new noticiaDAL();
            $resultado=$noticia->ingresarNoticia($_POST['titulo'],$_POST['cuerpo'],'imagen');
            $arr = array("re"=>$resultado);
            return json_encode($arr);
        }
?>
