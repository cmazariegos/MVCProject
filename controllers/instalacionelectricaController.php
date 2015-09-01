<?php
class instalacionelectricaController extends Controller{
    
    //private $instalacionelectrica;
    
    public function __construct() {
        parent::__construct();
        //$this->instalacionelectrica = $this->loadModel('instalacionelectrica');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}

