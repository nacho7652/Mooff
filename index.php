<?php 
    session_start();
    require_once 'function/place.php';
    require_once 'DAL/connect.php';
    require_once 'DAL/noticiaDAL.php';
    require_once 'DAL/marcaDAL.php';
    require_once 'DAL/usuarioDAL.php';
    require_once 'DAL/institucionDAL.php';
    date_default_timezone_set("Chile/Continental");
    //face
        

?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon.png">
        <title><?= $page_title ?></title>
        <!--<meta name="description" content="">-->
        <link rel="stylesheet" href="css/stylebase.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-own.css">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <meta charset="utf-8">
       
    </head>
    <body>
       
        <div id="coverall">
            <div class="innercal">
                <div class="cerrar"></div>
                <div id="caloader">
                </div>
            </div>
        </div>
        <div id="covermsj">
            <div class="innermsj">
                <div id="calmsj">
                </div>
            </div>
        </div>
        <div id="top">
            <div class="inner-top">
                <div id="logmooff"></div>
                <div class="part-right-top">
                    <?php 
                    include_once ('function/facebook-response.php');
                    if(isset($user_profile) != null){//apreté el boton y se creo mi usuario
                        $_SESSION['user'] = $user_profile;
                        $usuario = new usuarioDAL();
                        $usuario->registrarUsuarioFacebook($_SESSION['user']['id'], $_SESSION['user']['email'], $_SESSION['user']['first_name'], $_SESSION['user']['last_name'], 'https://graph.facebook.com/'.$_SESSION['user']['id'].'/picture');
                    }
                    
                    if(!isset($_SESSION['user'])){?>
                        <a id="login-fb" href="<?php echo $loginUrl; ?>">
                            <div id="loginbtn-fb"></div>
                            <div class="txtfb">Ingresar con Facebook</div>
                        </a>
                    <?php }else{?>
                        <div id="partuser">
                            <div class="flecha-op"></div>
                            <div style="background-image: url('https://graph.facebook.com/<?= $user?>/picture');
                                    background-size: cover; background-repeat: no-repeat"
                                 id="fotouser"></div>
                            <a  href="/Mooff/perfil" class="emailuser specialfont2"><?php echo $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name']; ?></a>
                            <div class="divoption">
                                <a id="logout" href="/mooff/function/facebook-response.php?logout=1">Logout</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
                <div id="menu">
            
                    <div class="part1 specialfont2">
                        <a href="/mooff/home" class="link firstlink">
                            <p class="inicio">Inicio</p>
                        </a>
                        <a href="http://www.nowsup.com" class="link large">
                            <p>Potencia tu publicidad aquí con</p>  
                            <div class=" logo"></div>
                            <div class="logoper"></div>
                        </a>
                       
                        <!--<a href="/mooff/contacto" class="link"><p>Ubicación y contacto</p></a>-->
                    </div>
                </div>
            </div>
            
        </div>
        
        <div id="body" <?=$page_class ?>>
            <div class="inner">
              
                     <?php include_once('sites/'.$page_site.'.php'); ?>
            </div> 
        </div>
        
        <footer id="bottom">
            <div class="textbottom">
                <div class="bottom-lf">
<!--                    <div class="tit-bt">
                        Contáctanos
                    </div>-->
                    <div class="info-cont">
                       
                    </div>
                </div>
                <div class="bottom-rg">
<!--                    <div class="tit-bt">
                        Servicios
                    </div>-->
                    <div class="info-cont">
                       
                    </div>
                    <div class="redes-bott">
                       