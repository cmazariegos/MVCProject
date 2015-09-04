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
        if($this->recaptcha()){        
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){
                $texto='La persona: '.$_POST['Nombre']. ' ,ha solicitado una cotización del sistema de recargas en linea, al correo: '.$_POST['Email'];
                $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe ingresar su nombre y correo</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA</div>';                        
        }             
        $this->view->renderizar('index');
    }
    public function recaptcha(){
        $recaptcha="";

        if($_REQUEST['g-recaptcha-response'] == null){
            return false;
        } else {                    
            $recaptcha=$_REQUEST['g-recaptcha-response'];

            if(!$recaptcha){
                return false;
                exit;
            }
            
            $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcOTgwTAAAAAMCnC33QjZnjOk6k6ZEmsplPvuHV&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR']);        
            $obj = json_decode($response,true);

            if($obj['success']==1){
                return true;
            } else { 
                return false;
            }
        }
    }
    
}
