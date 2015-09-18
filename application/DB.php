<?php
class DB{
    private static $sInstance = null;
    private $dbhandle;
    public function __construct() {
        $this->dbhandle = mysql_pconnect(DB_HOST, DB_USER, DB_PASS) 
        or die("Unable to connect to MySQL");
        //select a database to work with
        $selected = mysql_select_db(DB_NAME,$this->dbhandle) 
          or die("Could not select DB");
    }
    public static function getMe(){
        if(self::$sInstance == null){
            self::$sInstance = new DB();
        }
        return self::$sInstance;
    }     
    public function select(){
        //execute the SQL query and return records
        $result = mysql_query("SELECT ID, NOMBRE, CORREO, TELEFONO, DIRECCION FROM APP_CLIENTE");
        return $result;      
    }    
    public function close(){
        mysql_close($this->dbhandle);
    }
}
