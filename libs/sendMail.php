<?php
class sendMail {
    
    private static $sInstance = null;
    
    public function send($subject,$txt,$from){
        mail("carlos.mazariegos@e-ssisa.com",$subject,$txt,$from);
    }
    public static function getMe(){
        if(self::$sInstance == null){
            self::$sInstance = new sendMail();
        }
        return self::$sInstance;
    }    
}
