<?php
class servidoresController extends Controller{
    
    private $servidores;
    private $smail;   
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');          
        $this->servidores = $this->loadModel('servidores');
    }
    public function index() {
        $this->view->renderizar('index');
    }
    public function cargarContenido($content) {       
        $this->view->titulo = $content;
        $this->view->renderizar($content);
    }
    public function prepararSolicitud($equipo){
        $this->view->datos = $this->servidores->getContent($equipo);

        $this->view->equipo = $this->view->datos['modelo'];
        $this->view->procesador = $this->view->datos['procesador'];   
        $this->view->ram = $this->view->datos['RAM'];   
        $this->view->hd = $this->view->datos['HD'];
        
        $this->view->renderizar('solicitudcotizacion');        
    }
    public function cotizar(){
        $texto = "";
        $fin = "";
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){
                if (isset($_POST['instalacion']) && $_POST['instalacion'] == '1'){
                    $instalacion = " Con servicio de instalación";
                } else {
                    $instalacion = " Sin servicio de instalación";
                }                                
                if(isset($_POST['observacion']) && !empty($_POST['observacion'])){
                    $fin = $fin.'<p>Observación: '. $_POST['observacion'].'.</p>';
                }
                $inicio ='<p>'.$_POST['Nombre'].', con dirección: '.$_POST['Direccion'].', ha solicitado una cotización de servidor, con las siguientes características:</p>';
                $cuerpo = array(
                    'Modelo:' => $_POST['Modelo'],
                    'Procesador:' => $_POST['Procesador'],
                    'RAM:' => $_POST['RAM'],
                    'Disco:' => $_POST['HD'],
                    'Licencia:' => $_POST['Licencia'],
                    'Instalación:' => $instalacion); 
                $fin = $fin.'<p>Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'].'.</p>';
                $texto = $this->smail->createHTML("Características",$inicio,$cuerpo,$fin);                
                $this->smail->send('Solicitud de cotización de servidor', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización.</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe ingresar su nombre y correo.</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA.</div>';                        
        }             
        $this->view->renderizar('solicitudcotizacion');
    }     
}
