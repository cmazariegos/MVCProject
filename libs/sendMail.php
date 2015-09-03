<?php
class sendMail {
    
    private static $sInstance = null;
    
    public function send($subject,$txt,$from){
        mail("the.master.of.the.systems@gmail.com",$subject,$txt,$from);
    }
    public static function getMe(){
        if(self::$sInstance == null){
            self::$sInstance = new sendMail();
        }
        return self::$sInstance;
    }    
}
