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
    public function eliminarCat($id){
        $query=$this->db->prepare('DELETE FROM categoria WHERE id_categoria = ?');
        $query->execute([$id]);

    }
    public function eliminarProd($id){
        $query=$this->db->prepare('DELETE FROM producto WHERE id_producto = ?');
        $query->execute([$id]);
    }

    public function guardarProd($producto, $graduacion, $precio, $categoria){
       $query=$this->db->prepare('INSERT INTO producto(id_producto, producto, graduacion, precio, id_categoria_fk) VALUES (null,?,?,?,?)');
       $query->execute([$producto, $graduacion, $precio, $categoria]);
    }

    public function guardarCat($nombre, $descripcion){
        $query=$this->db->prepare('INSERT INTO categoria(id_categoria, nombre, descripcion) VALUES (null,?,?)');
        $query->execute([$nombre, $descripcion]);
    }

    public function descripcionProd($id_prod){
        $query = $this->db->prepare('SELECT producto.producto, producto.precio, producto.graduacion, categoria.nombre FROM producto 
        JOIN categoria ON producto.id_categoria_fk=categoria.id_categoria WHERE `id_producto`= ?');
        $query-> execute(array($id_prod));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function modificarProd($prod,$grad,$prec,$categ,$id_prod){
        $query = $this->db->prepare('UPDATE producto SET producto=?,graduacion=?,precio=?,id_categoria_fk=? WHERE id_producto=?');
        $query-> execute(array($id_prod));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function descripcionCat($id_cat){
        $query = $this->db->prepare('SELECT nombre, descripcion FROM categoria WHERE id_categoria= ?');
        $query-> execute(array($id_cat));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function modificarCat($nomb,$descri,$id_cat){
        $query = $this->db->prepare('UPDATE categoria SET nombre=?,descripcion=? WHERE id_categoria=?');
        $query-> execute(array($id_cat));

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}