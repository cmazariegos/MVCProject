<?php

class postController extends Controller{
    
    private $post;
    private $msg="";
        
    public function __construct() {
        parent::__construct();
        $this->post = $this->loadModel('post');
    }

    public function index() {
        $this->view->posts = $this->post->getPosts();
        $this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }
    
    public function getMsg(){
        $r=1;

        if($r==1){
            $this->msg = "Hola";
        } else {
            $r=0;
            $this->msg = "Ocurrió un error al generar la búsqueda";
        } 
        echo json_encode(array('result'=>$r, 'msg'=>$this->msg));
    }
}

