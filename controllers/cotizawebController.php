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
                if (isset($_POST['estatica']) && $_POST['estatica'] == '1'){
                    $estatica = " Estática";
                } else {
                    $estatica = " Dinámica";
                } 
                if (isset($_POST['animada']) && $_POST['animada'] == '1'){
                    $animada = " Animada";
                } else {
                    $animada = " No animada";
                }         
                $inicio ='<p>'.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de página web, con las siguientes características:</p>';
                $cuerpo = array(
                    'Número de páginas:' => $_POST['noPaginas'],
                    '¿Responsive?' => $responsive,
                    '¿Estática o dinámica?' => $estatica,
                    '¿Animada?' => $animada); 
                $fin = '<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);                
                $this->smail->send('Solicitud de cotización de página web', $texto, $_POST['Email']);   
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
