<?php
    require_once 'DAL/noticiaDAL.php';
    
         if(isset($_POST['insertNew'])){
             sleep(10);
            $noticia = new noticiaDAL();
            $resultado=$noticia->ingresarNoticia($_POST['titulo'],'noticia','imagen');
            return $resultado;
//            $arr = array("re"=>$resultado);
//            return json_encode($arr);
        }
?>
