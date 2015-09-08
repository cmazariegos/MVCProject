<?php
class outsourcingController extends Controller{
    
    //private $outsourcing;
    private $smail;    
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');        
        //$this->outsourcing = $this->loadModel('outsourcing');
    }
    public function index() {
        $this->view->titulo = 'SSISA - OUTSOURCING';        
        $this->view->renderizar('index');
    }
    public function cotizar(){
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Puesto']) && !empty($_POST['Herramienta']) && !empty($_POST['Tiempo']) && !empty($_POST['Lugar'])){                   
                $texto='La persona: '.$_POST['Nombre']. ', ha solicitado una cotización de outsourcing, para el puesto de '.$_POST['Puesto'].', utilizando la herramienta '.$_POST['Herramienta'].', durante un tiempo de '.$_POST['Tiempo'].', en la siguiente ubivación: '.$_POST['Lugar'].'. Enviar cotización al correo: '.$_POST['Email'];
                $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe llenar todo el formulario</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA</div>';                        
        }             
        $this->view->renderizar('index');
    }      
}