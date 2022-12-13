<?php
    include_once 'vista/vistaadmin.php';
    include_once 'modelo/modelosesion.php';
   // include_once 'modelo/Modeloproducto.php';

    class controlsesion{
        //contruccion de clase
        public function __construct(){
            $this->modelosesion = new modelosesion();
            $this->vistaadmin = new vistaadmin();
           // $this->modeloproducto = new modeloproducto();
        }

        //mostrar formulario de logueo
        public function mostrarlogin(){
            $this->vistaadmin->showlogin();
        }

        //mostrar panel admin
        public function mostrarpanel(){
            if (!isset($_SESSION['USERNAME'])){
                $this->vistaadmin->showlogin();
            }else{
                $this->vistaadmin->showpanel();
            }      
        }
        
        //mostrar home
        function mostrarHome(){
            $this->vistaadmin->mostrarHome();
        }

        //busca producto por nombre
        function buscanombre(){
            if (!isset($_SESSION['USERNAME'])){
                $this->vistaadmin->showlogin();
            }else{
            $nombre = $_POST['nombre'];
            $producto = $this->modeloproducto->getproducto($nombre);
            if($producto == null){
                $this->vistaadmin->nosencontro();
            }else{
                $this->vistaadmin->showpanel($producto);
            }
            
            }
        }

        //desloguear
        public function logout(){
            AuthHelper::logout();
            header("Location: " . BASE_URL . 'home');
        }

        //generar qr por $_POST  api  QRCODE
        public function qr($id){
            $tamanio = $_POST['tamanio'];
            $calidad = $_POST['calidad'];
            $margen = $_POST['margen'];
            $qr = $this->modelosesion->generarQr($id,$tamanio,$calidad,$margen);
            $this->vistaadmin->mostrarQr($qr);
        }

        //verificacion de usuario y contraseña de logueo
        public function verify() {
            if(!empty($_POST['username']) && !empty($_POST['password'])) {

                $user = $_POST['username'];
                $pass = $_POST['password'];

                $userDb = $this->modelosesion->getUserByUsername($user);
    
                if (!empty($userDb) && password_verify($pass, $userDb->contrasena)) {
                    AuthHelper::login($userDb);
                    header('Location: ' . BASE_URL . "panel");
                } else 
                    $this->vistaadmin->showlogin("Login incorrecto, password o usuario incorrecto");
            } else {
                $this->vistaadmin->showlogin("Login incompleto");
            }
        }
    }
    
?>