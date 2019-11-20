<?php
class modelImg{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root','');
    }
    public function guardarImagen($productoId,$name,$img){
        $ruta = "img/".uniqid() . "." . strtolower(pathinfo($name, PATHINFO_EXTENSION));
        move_uploaded_file($img, $ruta);
        $query=$this->db->prepare('INSERT INTO  imagen(ruta_img, id_producto_fk) VALUES (?,?)');
        $query->execute(array($ruta,$productoId));
        //var_dump($query->errorInfo());
    }
    public function traerImgProd($id_prod){
        $query= $this->db->prepare('SELECT * FROM imagen WHERE id_producto_fk=?');
        $query->execute(array($id_prod));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function eliminarImg($id_img){
        $query=$this->db->prepare('DELETE FROM `imagen` WHERE id_img=?');
        $query->execute([$id_img]);
    }
    
}