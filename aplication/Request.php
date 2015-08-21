<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Request
{
    private $controlador;
    private $metodo;
    private $argumentos;
    
    public function __construct() {
        if(isset($_GET['url'])){
            $url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url =  array_filter($url);
            
            $this->controlador = strtolower(array_shift($url));
            $this->metodo = strtolower(array_shift($url));
            $this->argumentos = $url;            
        }        
        
        if(!$this->controlador){
            $this->controlador = DEFAULT_CONTROLLER;
        }
        if(!$this->metodo){
            $this->metodo = 'index';
        }        
        if(!isset($this->argumentos)){
            $this->argumentos = array();
        }        
    }
    
    public function getControlador(){
        return $this->controlador;
    }
    
    public function getMetodo(){
        return $this->metodo;
    }

    public function getArgs(){
        return $this->argumentos;
    }    
}

