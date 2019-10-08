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
}
