<?php
class contactoController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->titulo = 'SSISA - CONTACTANOS';
        $this->view->renderizar('index');
    }
}