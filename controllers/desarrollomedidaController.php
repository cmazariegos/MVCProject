<?php
class desarrollomedidaController extends Controller{
    
    //private $servidores;
    private $smail;    
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');         
        //$this->desarrollomedida = $this->loadModel('desarrollomedida');
    }
    public function index() {
        $this->view->renderizar('index');
    }
    public function cotizar(){
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){                       
                //$texto='La persona: '.$_POST['Nombre'].', ha solicitado una cotización de desarrolo a la medida, en lenguaje '.$_POST['Lenguaje'].', con base de datos '.$_POST['DB'].', en sistema operativo '.$_POST['Sistema'].', para '.$_POST['Usuarios'].' usuarios y en tipo de aplicación: '.$_POST['Tipo'].' .Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
                $inicio ='<p>La persona: '.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de desarrollo a la medida, con las siguientes características:</p>';
                $cuerpo = array(
                    'Lenguaje:' => $_POST['Lenguaje'],
                    'Base de datos:' => $_POST['DB'],
                    'Sistema operativo:' => $_POST['Sistema'],
                    'Cantidad de usuarios:' => $_POST['Usuarios'],
                    'Tipo de aplicación:'=> $_POST['Tipo']); 
                $fin = '<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);                
                $this->smail->send('Solicitud de cotización de desarrollo a la medida', $texto, $_POST['Email']);   
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
