<?php
class cotizawebController extends Controller{
    
    //private $cotizaweb;
    private $smail;
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');        
        //$this->cotizaweb = $this->loadModel('cotizaweb');     
    }
    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        $this->view->titulo = 'SSISA - SOFTWARE';
        $this->view->renderizar('index');
    }
    public function cotizar(){
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['noPaginas'])){               
                if (isset($_POST['responsive']) && $_POST['responsive'] == '1'){
                    $responsive = " responsive";
                } else {
                    $responsive = " no responsive";
                }
                if (isset($_POST['estática']) && $_POST['estatica'] == '1'){
                    $estatica = " estatica";
                } else {
                    $estatica = " dinámica";
                } 
                if (isset($_POST['animada']) && $_POST['animada'] == '1'){
                    $animada = " animada";
                } else {
                    $animada = " no animada";
                }         
                $texto='La persona: '.$_POST['Nombre']. ', ha solicitado una cotización de desarrollo web, para '.$_POST['noPaginas'].' página(s),'.$responsive.','.$estatica.' y'.$animada.'. Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
                $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
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
