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
    protected function getLibrary($libreria){
        $rutaLibreria = ROOT . 'libs'. DS . $libreria . '.php';
        
        if (is_readable($rutaLibreria)) {
            require_once $rutaLibreria;
            $libreria = $libreria::getMe();
            return $libreria;
        } else {
            throw new Exception('Error de libreria');
        }
    }
    protected function recaptcha(){
        $recaptcha="";

        if($_REQUEST['g-recaptcha-response'] == null){
            return false;
        } else {                    
            $recaptcha=$_REQUEST['g-recaptcha-response'];

            if(!$recaptcha){
                return false;
                exit;
            }
            
            $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcOTgwTAAAAAMCnC33QjZnjOk6k6ZEmsplPvuHV&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR']);        
            $obj = json_decode($response,true);

            if($obj['success']==1){
                return true;
            } else { 
                return false;
            }
        }
    }    
}

