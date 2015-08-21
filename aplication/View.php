<?php

class View{
    private $controlador;
    
    public function __construct(Request $peticion) {
        $this->controlador = $peticion->getControlador();
    }
    
    public function renderizar($vista, $item = false){
        $rutaView = ROOT .'views' . DS . $this->controlador . DS . $vista . '.phtml';
        
        $layoutParams = array(
            'ruta_js' => BASE_URL .'views/layout/' . DEFAULT_LAYOUT . '/js/' ,
            'ruta_css' => BASE_URL .'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL .'views/layout/' .  DEFAULT_LAYOUT . '/img/' 
        );
        
        if(is_readable($rutaView)){
            include_once ROOT .'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $rutaView;
            include_once ROOT .'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'foorter.php';
        } else {
            throw Exception('Error de vista');
        }        
    }
}

