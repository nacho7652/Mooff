<?php
  $place = empty($_GET['place']) ? 'home' : $_GET['place'];
  
  switch ($place){
      case 'admin2': $page_title = 'Mooff - Admin';
                   $page_site = 'login-admin';
                   $page_class = 'login-admin';
                   $page_description = "";
                   break;
      case 'quienes': $page_title = 'Mooff';
                   $page_site = 'quienes';
                   $page_class = 'home';
                   $page_description = "";
                   break;
      case 'servicios': $page_title = 'Mooff';
                   $page_site = 'servicios';
                   $page_class = '';
                   $page_description = "";
                   break;
      case 'contacto': $page_title = 'Mooff';
                   $page_site = 'contacto';
                   $page_class = 'home';
                   $page_description = "";
                   break;
      case 'circulares': $page_title = 'Mooff';
                   $page_site = 'circulares';
                   $page_class = 'gallery';
                   $page_description = "";
                   break;
      case 'home': $page_title = 'Mooff';
                   $page_site = 'home';
                   $page_class = 'home';
                   $page_description = "";
                   break;
     case 'videos':
                   $page_title = 'Mooff';
                   $page_site = 'videos';
                   $page_class = 'gallery';
                   $page_description = "";
                   break;
    case 'gallery':
                   $page_title = 'Mooff';
                   $page_site = 'gallery';
                   $page_class = 'gallery';
                   $page_description = "";
                   break;
     case 'marcas':
                   $page_title = 'Administracion MOOFF';
                   $page_site = 'marcas';
                   $page_class = 'administrador';
                   $page_description = "";
                   break;
      case 'admin':
                   $page_title = 'Administracion MOOFF';
                   $page_site = 'admin';
                   $page_class = 'administrador';
                   $page_description = "";
                   break;
      case 'search': if( isset($_POST['direccion']) != '' && isset($_POST['evento'] ) != '' ){
                    $page_title = 'Search';
                    $page_site = 'search';
                    $page_class= 'search';
                    $page_description = "";
                    }else{
                        header('location: /test/');
                    }
                    break;

      default : $page_title = '404';
                $page_site = '404';
                
  }
  
  $description = empty($_GET['description']) ? 'Encuentra un quiebre a tu rutina' : $_GET['description'];
  $page_class = empty($page_class) ? '' : 'class="'.$page_class.'"';

