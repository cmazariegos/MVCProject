<?php
class indexController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $post = $this->loadModel('post');
        $this->view->posts = $post->getPosts();
        $this->view->titulo = 'portada';
        $this->view->renderizar('index');
    }
}

