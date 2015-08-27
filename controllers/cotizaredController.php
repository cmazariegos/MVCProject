
<?php

class cotizaredController extends Controller{
    
    //private $cotizared;
    
    public function __construct() {
        parent::__construct();
        //$this->cotizared = $this->loadModel('cotizared');
    }

    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        //$this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }
}

