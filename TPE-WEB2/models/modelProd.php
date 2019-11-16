<?php
class modelProd{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root','');
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
    public function eliminarProd($id){
        $query=$this->db->prepare('DELETE FROM producto WHERE id_producto = ?');
        $query->execute([$id]);
    }

    public function guardarProd($producto, $graduacion, $precio, $categoria){
        $query=$this->db->prepare('INSERT INTO producto(producto, graduacion, precio, id_categoria_fk) VALUES (?,?,?,?)');
        $query->execute([$producto, $graduacion, $precio, $categoria]);
        return $this->db->lastInsertId();
    }
    
    public function descripcionProd($id_prod){
        $query = $this->db->prepare('SELECT producto.producto, producto.precio, producto.graduacion, producto.id_producto, categoria.nombre FROM producto 
        JOIN categoria ON producto.id_categoria_fk=categoria.id_categoria WHERE `id_producto`= ?');
        $query-> execute(array($id_prod));
        return $query->fetch(PDO::FETCH_OBJ);

    }

    public function modificarProd($prod,$grad,$prec,$categ,$id_prod){
        $query = $this->db->prepare('UPDATE producto SET producto=?,graduacion=?,precio=?,id_categoria_fk=? WHERE id_producto=?');
        $query-> execute(array($prod,$grad,$prec,$categ,$id_prod));
        
    }
    

}