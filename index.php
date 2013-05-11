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
        <meta name="description" content="<?= $page_description ?>">
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
            <div id="logmooff"></div>
             
<!--            <div class="slideshow">
                <img src="images/banner/b1.png" class="trans"/>
                <img src="images/banner/b2.png" class="trans"/>
                <img src="images/banner/b3.png" class="trans"/>
                <img src="images/banner/b4.png" class="trans"/>
                <img src="images/banner/b5.png" class="trans"/>
                <img src="images/banner/b6.png" class="trans"/>
            </div>
            <div class="slideshow-first">
                
            </div>
            <div class="encabezado">
                <img class="logotop" src="images/logo_lsf.png"/>
                <p class="nombreliceo">LICEO SAN FRANCISCO</p>
                <p class="eslogan">Desde 1879 entregando una educación de
                excelencia basada en la pedagogía de Jesús.</p>
            </div>-->
<!--            <div class="rotator">
                <img class="banner1" src="images/foto1.png"/>
            </div>-->
           
        </div>
        <div id="menu">
            
            <div class="part1">
                <a href="/hojalateria/home" class="link firstlink">
                    <p class="inicio">Inicio</p>
                </a>
                <a href="/hojalateria/quienes" class="link">Quienes Somos</a>
                <a href="/hojalateria/servicios" class="link">Servicios</a>
                <a href="/hojalateria/contacto" class="link">Ubicación y contacto</a>
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
                        <?php 
                        
                        echo nl2br('Juan Esteban Veloso Palacios

                        Los Alerces 112 - Renca
                        ​
                        Celular 8 74 68 888');
                        ?>
                    </div>
                </div>
                <div class="bottom-rg">
                    <div class="tit-bt">
                        Servicios
                    </div>
                    <div class="info-cont">
                        <?php 
                        
                        echo nl2br('Todos los espesores
​
                                    Fabricación de bajadas de aguas lluvias todas las medidas
                                    ﻿
                                    Venta de techos');
                        ?>
                    </div>
                    <div class="redes-bott">
                        <a href="#">
                            <img src="images/facebook.00_wix_mp_srz"/>
                        </a>
                        <a href="#">
                            <img src="images/twitter.00_wix_mp_srz"/>
                        </a>
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