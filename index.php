<?php 
    require_once 'function/place.php';
    require_once 'DAL/connect.php';
    require_once 'DAL/noticiaDAL.php';
    require_once 'DAL/marcaDAL.php';
    date_default_timezone_set("Chile/Continental");
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
                    <a id="login-fb" href="#">
                        <div id="loginbtn-fb"></div>
                        <div class="txtfb">Ingresar con Facebook</div>
                    </a>
                </div>
                
                <div id="menu">
            
                    <div class="part1 specialfont2">
                        <a href="/hojalateria/home" class="link firstlink">
                            <p class="inicio">Inicio</p>
                        </a>
                        <a href="/hojalateria/quienes" class="link"><p>Quienes Somos</p></a>
                        <a href="/hojalateria/servicios" class="link"><p>Servicios</p></a>
                        <a href="/hojalateria/contacto" class="link"><p>Ubicación y contacto</p></a>
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
                    <div class="tit-bt">
                        Contáctanos
                    </div>
                    <div class="info-cont">
                       
                    </div>
                </div>
                <div class="bottom-rg">
                    <div class="tit-bt">
                        Servicios
                    </div>
                    <div class="info-cont">
                       
                    </div>
                    <div class="redes-bott">
                       
                    </div>
                </div>
                
            </div>
        </footer>
         <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
         <script type="text/javascript" src="js/script.js"></script>
         <script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
<!--          <script type="text/javascript">
            $(document).ready(function() {
                /*SLIDE-BANNER*/
                $('.slideshow-first').fadeTo(5000, 0, function(){
                   
                });
                $('.slideshow').show(); 
                   $('.slideshow').cycle({
                                   fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                           });
                   });
        /******/
        
                
        </script>-->
        <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
        <script type="text/javascript" src="highslide/highslide.config.js" charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
         <script type="text/javascript" src="js/scroll.js" charset="utf-8"></script>

        <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css" />
        <![endif]-->

        
    </body>
</html>