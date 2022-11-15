<?php
  define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once('controlador/Controlador.php');
  require_once('controlador/Controlasesion.php');
  
  if($_GET['action']=='')
    $_GET['action']= 'home';
  
  $urlParts = explode('/',$_GET['action']);

  $controlador = new Control();
  $controlasesion = new controlsesion();

  switch($urlParts[0]){

      case 'home':
        $controlasesion->mostrarlogin(); //muestra logueo
      break;
      
      case 'panel':
        $controlasesion->mostrarpanel();
      break;

      case 'verify':
        $controlasesion->verify();
      break;

      default:
        echo '<h1> Error 404 lobby no encontrado :c</h1>';
      break;
  }

?>