<?php
class erpController extends Controller{
    
    private $erp;
    
    public function __construct() {
        parent::__construct();
        $this->erp = $this->loadModel('erp');
    }

    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        //$this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }
}
