<?php
    require_once("./models/modelComent.php"); 
    require_once("./api/json_view.php"); 

class api_comentario_controller{
    private $model;
    private $view;
    private $data;

    public function __construct(){
        $this->model= new modelComent();
        $this->view= new JSONView();
        $this->data= file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function obtenerComentario($params = null){
        $id = $_GET['id_prod_fk'];//api/comentarios?id_prod_fk=5
        $comentarios= $this->model->traerComentarios($id);
        $this->view->response($comentarios, 200);
    }

    public function eliminarComentario($params = null){
        $id=$params[':ID'];
        $comentario=$this->model->traerComentario($id);
        
        if($comentario){
            $this->model->eliminarComent($id);
            $this->view->response("el comentario fue eliminado con exito", 200);
        }
        else{
            $this->view->response("el comentario no existe", 404);
        }
    }   
    public function agregarComentario(){
        $body=$this->getData();
        $comentario=$body->comentario;
        $puntaje=$body->puntaje;
        $id_prod_fk=$body->id_prod_fk;
        $id_usuario_fk=$body->id_usuario_fk;
        
        $id_comentario=$this->model->guardarComentario($comentario,$puntaje,$id_prod_fk,$id_usuario_fk);
        if ($id_comentario){
            $this->view->response($id_comentario, 200);
        }
        else{
            $this->view->response("El comentario no fue creado", 500);
        }
    }

}
