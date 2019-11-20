<?php
class modelComent{
    private $db;


    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root','');
    }

    public function traerComentarios($id){
        $query=$this->db->prepare('SELECT * FROM `comentario` WHERE `id_prod_fk`=?');
        $query->execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }
    public function traerComentario($id){
        $query=$this->db->prepare('SELECT * FROM `comentario` WHERE `id_comentario`=?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ); 
    }

    public function eliminarComent($id){
        $query=$this->db->prepare('DELETE FROM comentario WHERE id_comentario=?');
        $query->execute(array($id));
    }

    public function guardarComentario($comentario,$puntaje,$id_prod,$id_usuario){
        $query=$this->db->prepare('INSERT INTO comentario(comentario, puntaje, id_prod_fk, id_usuario_fk) VALUES(?,?,?,?)');
        $query->execute([$comentario,$puntaje,$id_prod,$id_usuario]);
        return $this->db->lastInsertId();
        //
    }

}