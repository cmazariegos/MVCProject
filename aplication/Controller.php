<?php

abstract class Controller{
    protected $view;
    public function __construct() {
        $this->view = new View(new Request);
    }

    abstract public function index();
    
    protected function loadModel($modelo){
        $modelo = $modelo.'Model';
        $rutaModelo = ROOT . DS . 'models' . DS . $modelo . '.php';
        
        if (is_readable($rutaModelo)) {
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        } else {
            throw new Exception('Error de modelo');
        }
    }
}

