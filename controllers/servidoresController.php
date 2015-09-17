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
        if($this->recaptcha()){          
            if(!empty($_POST['Nombre']) && !empty($_POST['Email'])){
                if (isset($_POST['instalacion']) && $_POST['instalacion'] == '1'){
                    $instalacion = " con servicio de instalación";
                } else {
                    $instalacion = " sin servicio de instalación";
                }                
                $texto='La persona: '.$_POST['Nombre'].', ha solicitado una cotización del siguiente servidor: '.$_POST['Modelo'].', con procesador '.$_POST['Procesador'].', '.$_POST['RAM'].' de memoria RAM, '.$_POST['HD'].' de disco duro, licencia '.$_POST['Licencia'].' y'.$instalacion.'. Enviar cotización al correo: '.$_POST['Email'].' o comunicarse al teléfono: '.$_POST['Telefono'];
                if(!empty($_POST['observacion'])){
                    $texto = $texto. ' . Observación: '. $_POST['observacion'];
                }
                $this->smail->send('Solicitud de cotización', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto estaremos enviandole su cotización</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe ingresar su nombre y correo</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA</div>';                        
        }             
        $this->view->renderizar('solicitudcotizacion');
    }     
}
