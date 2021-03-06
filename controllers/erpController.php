<?php
class erpController extends Controller{
    
    private $erp;
    private $smail;    
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');        
        $this->erp = $this->loadModel('erp');
    }
    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        //$this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }    
    public function cargarContenido($content) {
        //$this->view->posts = $this->erp->getContent($content);
        $this->view->contenido = $this->erp->getContent($content);         
        $this->view->titulo = $content;
        $this->view->renderizar($content);
    }
    public function cotizar($modulo){
        if($this->recaptcha()){        
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){
                $inicio ='<p>'.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de ERP, con las siguientes características:</p>';
                $cuerpo = array(
                    'Modulo:' => $modulo,
                    'Servidor de aplicaciones:' => $_POST['Servidor'],
                    'Sistema operativo:' => $_POST['Sistema'],
                    'Cantidad de usuarios:' => $_POST['Usuarios']); 
                $fin = '<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);                  
                $this->smail->send('Solicitud de cotización de ERP', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización.</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe llenar todo el formulario.</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA.</div>';                        
        }             
        $this->view->renderizar($modulo);
    }     
}
