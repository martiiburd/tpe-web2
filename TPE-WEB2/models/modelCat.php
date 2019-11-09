<?php
class modelCat{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root','');
    }

    public function obtenerCategorias(){
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function obtenerOfertas(){
        $query = $this->db->prepare('SELECT producto.producto, producto.precio, categoria.nombre FROM producto 
        JOIN categoria ON producto.id_categoria_fk=categoria.id_categoria WHERE producto.precio<500 ORDER BY precio ASC');
        $query -> execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function eliminarCat($id){
        $query=$this->db->prepare('DELETE FROM categoria WHERE id_categoria = ?');
        $query->execute([$id]);

    }

    public function guardarCat($nombre, $descripcion){
        $query=$this->db->prepare('INSERT INTO categoria(id_categoria, nombre, descripcion) VALUES (null,?,?)');
        $query->execute([$nombre, $descripcion]);
    }


    public function descripcionCat($id_cat){
        $query = $this->db->prepare('SELECT id_categoria, nombre, descripcion FROM categoria WHERE id_categoria= ?');
        $query-> execute(array($id_cat));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function modificarCat($nomb,$descri,$id_cat){
        $query = $this->db->prepare('UPDATE categoria SET nombre=?,descripcion=? WHERE id_categoria=?');
        $query-> execute(array($nomb,$descri,$id_cat));

        
    }
}