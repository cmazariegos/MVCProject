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
        //$this->view->titulo = 'Post';
        $this->view->renderizar('index');
    }    
    public function cotizar(){
        if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['noPuntos'])){            
            $tipoCable = $_POST['tipoCable'];  
            if ($tipoCable == "op1") {          
                $tc=" (Cat 5)";      
            }
            if ($tipoCable == "op2") {          
                $tc=" (Cat 6)";      
            }
            if ($tipoCable == "op3") {          
                $tc=" (otros)";      
            }   
            if (isset($_POST['router']) && $_POST['router'] == '1'){
                $router=" con router";
            } else {
                $router=" sin router";
            }        
            $texto='La persona: '.$_POST['Nombre']. ', ha solicitado una cotización de red, para '.$_POST['noPuntos'].' puntos,'.$router.' y con cable tipo:'.$tc.'. Enviar cotización al correo: '.$_POST['Email'];
            $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
            $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización</div>';
        } else {
            $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe ingresar su nombre, correo y numero de puntos de red</div>';
        }
        $this->view->renderizar('index');
    }    
}

