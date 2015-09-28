<?php
class cotizaredController extends Controller{
    
    //private $cotizared;
    private $smail;

    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');
        //$this->cotizared = $this->loadModel('cotizared');
    }
    public function index() {
        //$this->view->posts = $this->cotizaweb->getPosts();
        $this->view->titulo = 'SSISA - REDES';
        $this->view->renderizar('index');
    }    
    public function cotizar(){
        if($this->recaptcha()){         
            if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['noPuntos'])){            
                $tipoCable = $_POST['tipoCable'];  
                if ($tipoCable == "op1") {          
                    $tc=" Cat 5";      
                }
                if ($tipoCable == "op2") {          
                    $tc=" Cat 6";      
                }
                if ($tipoCable == "op3") {          
                    $tc=" otros";      
                }   
                /*if (isset($_POST['router']) && $_POST['router'] == '1'){
                    $router=" con router";
                } else {
                    $router=" sin router";
                }*/        
                $inicio ='<p>'.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de red, con las siguientes características:</p>';
                $cuerpo = array(
                    'Número de puntos:' => $_POST['noPuntos'],
                    'Niveles del edificio:' => $_POST['noNiveles'],
                    'Área:' => $_POST['Area'].' metros cuadrados',
                    'Cable tipo:' => $tc); 
                $fin = '<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);
                $this->smail->send('Solicitud de cotización de red', $texto, $_POST['Email']);   
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

