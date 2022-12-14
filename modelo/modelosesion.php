<?php
require_once('libs/phpqrcode/qrlib.php');
require_once('Modelo.php');

class modelosesion extends Modelo {
    //recupera todos los usuarios por medio de la variable $username
    public function getUserByUsername($username) {
        $query = $this->getDb()->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //retorna id de un nombre de user
    public function getiduserbyusername($username){
        $query = $this->getDb()->prepare('SELECT id FROM usuarios WHERE usuario = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    //hasheo de contraseña y creacion de usuario en base de datos
    public function add() {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $passEnc = password_hash($pass, PASSWORD_DEFAULT);

        $query = $this->getDb()->prepare('INSERT INTO usuarios (contrasena, nombre) VALUES (?, ?)');
        $query->execute([$passEnc, $user]);

    }

    //generar Qr a partir de varios parametros
    public function generarQr($id,$tamanio,$calidad,$margen){
        QRcode::png("www.mondocn.com.ar/producto/".$id,false,$calidad,$tamanio,$margen);
    }
}