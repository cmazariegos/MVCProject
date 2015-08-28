<?php
class sistemarecargasController extends Controller{
    
    //private $sistemarecargas;
    
    public function __construct() {
        parent::__construct();
        //$this->sitemarecargas = $this->loadModel('sistemarecargas');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}
