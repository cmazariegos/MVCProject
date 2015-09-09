<?php
class indexController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->titulo = 'SSISA';
        $this->view->renderizar('index');
    }
}

