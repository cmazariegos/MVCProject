<?php
class ventasController extends Controller{
    
    //private $ventas;
    
    public function __construct() {
        parent::__construct();
        //$this->ventas = $this->loadModel('ventas');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}
