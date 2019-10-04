<?php
class model{
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
    public function verProductos(){
        $query = $this->db->prepare('SELECT * FROM producto');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    } 

    public function obtenerOfertas(){
        $query = $this->db->prepare('SELECT producto.producto, producto.precio, categoria.nombre FROM producto 
        JOIN categoria ON producto.id_categoria_fk=categoria.id_categoria WHERE producto.precio<500 ORDER BY precio ASC');
        $query -> execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}