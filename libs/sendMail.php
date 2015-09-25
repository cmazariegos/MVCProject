<?php
class sendMail {
    
    private static $sInstance = null;
    
    public function createHTML($init,$body,$end){
        $cuerpoTabla='';
        foreach ($body as $key => $val) {
            $cuerpoTabla=$cuerpoTabla.'<tr>
                                           <td align=right><label>'.$key.'</label></td><td><input type="text" value="'.$val.'" readonly></td>
                                       </tr>';            
        }
        $texto = '
                <html>
                <head>
                  <title>Contact</title>
                </head>
                <body>
                  '.$init.'
                  <table style="border:2px solid #184667;">
                        <tr>
                            <td style="border:2px solid #184667; color:#FFFFFF;" colspan="2" bgcolor="#184667">Características/td>
                        </tr>                    
                       '.$cuerpoTabla.'
                  </table>
                  '.$end.'                  
                </body>
                </html>
                ';
        return $texto;
    }
    public function send($subject,$txt,$from){
        $header = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n".'From: '.$from. "\r\n";
        mail('info@e-ssisa.com', '=?UTF-8?B?'.base64_encode($subject).'?=', $txt, $header);
        mail("cvirtual2003@hotmail.com",'=?UTF-8?B?'.base64_encode($subject).'?=',$txt);  
        mail("carlos.mazariegos@e-ssisa.com",$subject,$txt,$from);        
    }
    public static function getMe(){
        if(self::$sInstance == null){
            self::$sInstance = new sendMail();
        }
        return self::$sInstance;
    }    
}
