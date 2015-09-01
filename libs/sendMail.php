<?php
class sendMail {
    
    public function send($subject,$txt,$from){
        
        mail("the.master.of.the.systems@gmail.com",$subject,$txt,$from);
        /*echo '<p>Asunto: '.$subject.'</p>';
        echo '<p>Nombre: '.$txt.'</p>';
        echo '<p>Correo: '.$from.'</p>';*/
        
    }
}
