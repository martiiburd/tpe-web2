<?php
    require_once("./models/modelComent.php"); 
    require_once("./api/json_view.php"); 

class api_comentario_controller{
    private $model;
    private $view;
    private $data;

    public function __construct(){
        $this->model= new modelComent();
        $this->view= new json_view();
        $this->data= file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function obtenerComentario($params = null){
        $id = $_GET['id_prod_fk'];
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


}
