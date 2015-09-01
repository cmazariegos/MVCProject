<?php
class sistemarecargasController extends Controller{
    
    //private $sistemarecargas;
    private $smail;
        
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');
        //$this->sitemarecargas = $this->loadModel('sistemarecargas');
    }

    public function index() {
        $this->view->renderizar('index');
    }
    
    public function cotizar(){
        $texto='La persona: '.$_POST['Nombre']. ' ,ha solicitado una cotización del sistema de recargas en linea, al correo: '.$_POST['Email'];
        $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
    }
}
