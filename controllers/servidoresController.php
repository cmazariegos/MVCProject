<?php
class servidoresController extends Controller{
    
    //private $servidores;
    private $smail;   
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');          
        //$this->servidores = $this->loadModel('servidores');
    }
    public function index() {
        $this->view->renderizar('index');
    }
    public function cotizar(){
        $servidores = "";
        if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){              
            if (isset($_POST['HP_ProLiant_DL360']) && $_POST['HP_ProLiant_DL360'] == '1'){
                $servidores = $servidores . "-*-HP ProLiant DL360 Gen9 ";
            }
            if (isset($_POST['HP_ProLiant_ML350']) && $_POST['HP_ProLiant_ML350'] == '1'){
                $servidores = $servidores . "-*-HP ProLiant ML350 Gen9 ";
            } 
            if (isset($_POST['HP_ProLiant_ML110']) && $_POST['HP_ProLiant_ML110'] == '1'){
                $servidores = $servidores . "-*-HP ProLiant ML110 Gen9 ";
            } 
            $texto='La persona: '.$_POST['Nombre']. ', ha solicitado una cotización de los siguientes servidores: '.$servidores.'. Enviar cotización al correo: '.$_POST['Email'];
            $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
            $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización</div>';
        } else {
            $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe ingresar su nombre y correo</div>';
        }
        $this->view->renderizar('index');
    }     
}
