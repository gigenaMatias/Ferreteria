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
        $controlasesion->mostrarHome(); // home
      break;
      
      case 'panel':
        $controlasesion->mostrarpanel();  //formulario de admin
      break;

      case 'login':
        $controlasesion->mostrarlogin(); //formulario de logueo
      break;

      case 'verify':
        $controlasesion->verify(); //verificacion de usuario y contraseña
      break;

      default:
        echo '<h1> Error 404 lobby no encontrado :c</h1>'; // error 404
      break;
  }

?>