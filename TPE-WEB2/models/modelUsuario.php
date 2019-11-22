<?php
class ModelUsuario{
    
    private $db;
    
    public function __construct(){
        $this->db= new PDO('mysql:host=localhost;dbname=db_bebidas;charset=utf8', 'root', '');
    }

    public function recibirNombreUsuario($nombre){
        $query=$this->db->prepare('SELECT * FROM usuario WHERE nombre=?');
        $query->execute(array($nombre));
        return $query->fetch(PDO::FETCH_OBJ);

    }
    public function guardarUsu($email, $hash, $nombre, $apellido){
        $query=$this->db->prepare('INSERT INTO usuario (nombre,contrasena,nombre_u, apellido_u) VALUES(?,?,?,?)');
        $query->execute(array($email, $hash, $nombre, $apellido));
    }
    public function traerUsuarios(){
        $query=$this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function eliminarUsu($id){
        $query=$this->db->prepare('DELETE FROM usuario WHERE id_usuario=?');
        $query->execute([$id]);
    }
    public function modificarAdmin($id){
        $query=$this->db->prepare('UPDATE usuario SET usuario_admin=?');   
    }
}
