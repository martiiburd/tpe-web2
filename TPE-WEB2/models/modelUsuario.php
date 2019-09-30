<?php
class modelUsuario{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root','');
    }

    public function obtenerCategorias(){
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerProductos($idProducto){
        $query = $this->db->prepare('SELECT * FROM `producto` WHERE `id_categoria_fk`= ?');
        $query-> execute(array($idProducto));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}