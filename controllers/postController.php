<?php

class postController extends Controller{
    
    private $post;
    
    public function __construct() {
        parent::__construct();
        $this->post = $this->loadModel('post');
    }

    public function index() {
        $this->view->posts = $this->post->getPosts();
        $this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }
}

