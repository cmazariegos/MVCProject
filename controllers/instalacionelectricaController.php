<?php
class instalacionelectricaController extends Controller{
    
    //private $instalacionelectrica;
    private $smail;     
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');        
        //$this->instalacionelectrica = $this->loadModel('instalacionelectrica');
    }
    public function index() {
        $this->view->titulo = 'SSISA - INSTALACIONES';       
        $this->view->renderizar('index');
    }
    public function cotizar(){
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['noPuntos'])){                 
                $texto='La persona: '.$_POST['Nombre']. ', ha solicitado una cotización de instalación eléctrica, para '.$_POST['noPuntos'].' puntos.'.' Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
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

