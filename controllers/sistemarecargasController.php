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
        $this->view->titulo = 'SSISA - SOFTWARE';
        $this->view->renderizar('index');
    }    
    public function cotizar(){
        if($this->recaptcha()){        
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){
                $texto=$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización del sistema de recargas en línea. Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
                $this->smail->send('Solicitud de cotización de sistema de recargas en línea', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización.</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe llenar todo el formulario.</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA.</div>';                        
        }             
        $this->view->renderizar('index');
    }   
}