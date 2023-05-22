<?php

require_once('Modelo.php');

class modeloproducto extends Modelo {
    //retorna todos los productos
    function getAll(){
        $query = $this-> getDb()->prepare('SELECT * FROM productos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //recupera el productos por id
    function get($id){
        $query = $this-> getDb()->prepare('SELECT * FROM productos WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
   
    //recupera todos los productos de misma categoria por id
    function getFiltrado($id){
        $query = $this-> getDb()->prepare('SELECT * FROM productos WHERE categoria = ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //guarda cambios en productos
    function guardar($id,$nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this-> getDb()->prepare('UPDATE productos SET nombre = ?, autor = ?, categoria = ?, descripcion = ?, imagen = ? WHERE id = ?');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen,$id]);
    }

    //borra un productos por id
    function delete($id){
        $query = $this->getDb()->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }

    //crea un nuevo producto en la base de datos
    function crearproducto($nombre,$autor,$categoria,$descripcion,$imagen){
        $query = $this->getDb()->prepare( 'INSERT INTO productos (nombre, autor, categoria, descripcion, imagen) VALUES(?,?,?,?,?)');
        $query->execute([$nombre,$autor,$categoria,$descripcion,$imagen]);
    }

}
?>