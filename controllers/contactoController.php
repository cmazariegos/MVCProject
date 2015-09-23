<?php
class contactoController extends Controller{

    private $smail;  
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');         
    }
    public function index() {
        $this->view->titulo = 'SSISA - CONTACTANOS';
        $this->view->renderizar('index');
    }
    public function contactar(){
        if($this->recaptcha()){         
           if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['msg'])){                    
                $texto='La persona: '.$_POST['Nombre'].', le ha enviado el siguiente mensaje: '.$_POST['msg'].'. Puede comunicarse con esta persona al correo: '.$_POST['Email'].' o al teléfono: '.$_POST['Telefono'];
                $this->smail->send('Contactando desde el sitio web de SSISA', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto nos estaremos comunicando con usted.</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe llenar todo el formulario.</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA.</div>';                        
        }             
        $this->view->renderizar('index'); 
    }     
}