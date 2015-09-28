<?php
class contactoController extends Controller{

    private $smail;  
    
    public function __construct() {
        parent::__construct();
        $this->smail = $this->getLibrary('sendMail');         
    }
    public function index() {
        $this->view->titulo = 'SSISA - CONTACTANOS';
        $this->view->renderizar('index');
    }
    public function contactar(){
        if($this->recaptcha()){         
           if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['msg'])){                    
                //$texto='La persona: '.$_POST['Nombre'].', le ha enviado el siguiente mensaje: '.$_POST['msg'].'. Puede comunicarse con esta persona al correo: '.$_POST['Email'].'.';  
                $texto = '
                    <html>
                        <head>
                            <title>Contact</title>
                        </head>
                        <body> 
                            <p> '.$_POST['Nombre'].', le ha enviado un mensaje desde la pagina de SSISA.</p> 
                            <table style="border:2px solid #184667; border-collapse: collapse;">
                                <tr>
                                    <td style="color:#FFFFFF;" bgcolor="#184667" colspan="2" align=center>Contenido</td>
                                </tr>
                                <tr>
                                  <td align=right>e-mail</td><td><input type="email" value="'.$_POST['Email'].'" readonly></td>
                                </tr>
                                <tr>
                                  <td align=right>Mensaje</td><td><textarea rows="5" readonly>'.$_POST['msg'].'</textarea></td>
                                </tr>
                            </table>
                            <p><Puede responder este mensaje al correo: '.$_POST['Email'].'.</p>  
                        </body>
                    </html>';                
                $this->smail->send('Contactando desde el sitio web de SSISA', $texto, $_POST['Email']);   
                $this->view->msg = '<div class="alert alert-info" role="alert">Su mensaje ha sido enviado, pronto nos estaremos comunicando con usted.</div>';
            } else {
                $this->view->msg = '<div class="alert alert-danger" role="alert">Su mensaje no ha sido enviado, debe llenar todo el formulario.</div>';
            }
        } else {                        
            $this->view->msg = '<div class="alert alert-danger" role="alert">No se resolvió correctamente el reCAPTCHA.</div>';                        
        }             
        $this->view->renderizar('index'); 
    }     
}