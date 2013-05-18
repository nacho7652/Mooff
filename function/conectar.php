<?php
    require_once '../DAL/usuarioDAL.php';
    
    $usuario = new usuarioDAL();
    $usuario->registrarUsuarioFacebook($_SESSION['user']['id'], $_SESSION['user']['email'], $_SESSION['user']['name'], $_SESSION['user']['last_name'], 'https://graph.facebook.com/'.$_SESSION['user']['id'].'/picture');
    header("location:/mooff/home");
?>
