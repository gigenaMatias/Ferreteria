<?php
require_once('Vista.php');
include_once('helper/auth.helper.php');

class vistaadmin extends Visor{
    //construccion de clase
    public function __construct(){
        parent::__construct();
        $authHelper = new AuthHelper();
        $username = $authHelper->getLoggedUserName();
        $this->getSmarty()->assign('username', $username);
    }

    //mostrar login
    function showlogin($error=null){
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('templates/login.tpl');
    }

    //mostrar panel de admin
    function showpanel(){
        $this->getSmarty()->display('templates/panel.tpl');
    }
    
    //mostrar index
    function mostrarHome(){
        $this->getSmarty()->display('templates/index.tpl');
    }

    //mostrar proveedores
    function mostrarProveedores(){
        $this->getSmarty()->display('templates/proveedores.tpl');
    }

    //mostrar clientes
    function mostrarClientes(){
        $this->getSmarty()->display('templates/clientes.tpl');
    }

    //error 404
    function nosencontro(){
        $this->getSmarty()->display('templates/404.tpl');
    }
}
?>