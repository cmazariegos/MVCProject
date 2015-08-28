<?php
class desarrollomedidaController extends Controller{
    
    //private $servidores;
    
    public function __construct() {
        parent::__construct();
        //$this->desarrollomedida = $this->loadModel('desarrollomedida');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}
