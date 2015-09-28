<?php
class elearningController extends Controller{
    
    //private $elearning;
    private $smail;    
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');          
        //$this->elearning = $this->loadModel('elearning');
    }
    public function index() {
        $this->view->titulo = 'SSISA - e-Learning';        
        $this->view->renderizar('index');
    }
    public function cotizar(){
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Motivo'])){                       
                //$texto='La persona: '.$_POST['Nombre'].', ha solicitado una cotización de e-learning, para '.$_POST['Motivo'].'. Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
                $inicio ='<p>'.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de e-learning, con las siguientes características:</p>';
                $cuerpo = array(
                    'Motivo:' => $_POST['Motivo']); 
                $fin = '<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);                
                $this->smail->send('Solicitud de cotización de e-learning', $texto, $_POST['Email']);   
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