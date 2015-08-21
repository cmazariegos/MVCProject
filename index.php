<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define('DS',DIRECTORY_SEPARATOR);
        define('ROOT', realpath(dirname(__FILE__)).DS);
        define('APP_PATH', ROOT.'aplication'.DS);
        require_once APP_PATH.'Config.php';
        require_once APP_PATH.'Request.php';
        require_once APP_PATH.'Bootstrap.php';
        require_once APP_PATH.'Controller.php';
        require_once APP_PATH.'Model.php';
        require_once APP_PATH.'View.php'; 
        require_once APP_PATH.'Registro.php';        
        
        //echo $_GET['url'];
        
        /*$r = new Request();
        echo $r->getControlador().'<br>';
        echo $r->getMetodo().'<br>';
        print_r($r->getArgs());*/
        try {
                Bootstrap::run(new Request);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

        ?>
    </body>
</html>
