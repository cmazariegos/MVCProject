<?php
class DB {
    private $dbhandle;
    public function __construct() {
        $this->dbhandle = mysql_connect(DB_HOST, DB_USER, DB_PASS) 
        or die("Unable to connect to MySQL");
        echo "Connected to MySQL<br>";
    }
    
    public function select(){
        //select a database to work with
        $selected = mysql_select_db(DB_NAME,$this->dbhandle) 
          or die("Could not select examples");

        //execute the SQL query and return records
        $result = mysql_query("SELECT ID, NOMBRE, CORREO, TELEFONO, DIRECCION FROM APP_CLIENTE");

        //fetch tha data from the database 
        /*while ($row = mysql_fetch_array($result)) {
           echo "ID:".$row{'ID'}." Nombre:".$row{'NOMBRE'}."teléfono: ". //display the results
           $row{'TELEFONO'}."<br>";
        }*/
        //close the connection
        
        return $result;
                
    }
    
    public function close(){
        mysql_close($this->dbhandle);
    }
}
