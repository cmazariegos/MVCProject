<?php
class elearningController extends Controller{
    
    //private $elearning;
    
    public function __construct() {
        parent::__construct();
        //$this->elearning = $this->loadModel('elearning');
    }

    public function index() {
        $this->view->renderizar('index');
    }
}