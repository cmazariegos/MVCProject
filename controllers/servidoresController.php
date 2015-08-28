<?php
class servidoresController extends Controller{
    
    //private $servidores;
    
    public function __construct() {
        parent::__construct();
        //$this->servidores = $this->loadModel('servidores');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}
