<?php
class outsourcingController extends Controller{
    
    //private $outsourcing;
    
    public function __construct() {
        parent::__construct();
        //$this->outsourcing = $this->loadModel('outsourcing');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}