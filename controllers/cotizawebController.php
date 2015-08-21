<?php

class cotizawebController extends Controller{
    
    private $cotizaweb;
    
    public function __construct() {
        parent::__construct();
        $this->cotizaweb = $this->loadModel('cotizaweb');
    }

    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        //$this->view->titulo = 'Post';
        $this->view->renderizar('index','post');
    }
}
