<html lang="en" ng-app="myApp">
    <head>
        <link href="<?php echo $layoutParams['ruta_css']; ?>estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="angular/angular.js"></script>   
        
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">        
	<!--script src="js/efectos.js"></script-->   
        
        <script src="<?php echo $layoutParams['ruta_js']; ?>controllers.js"></script>  
        
        <title>
        <?php 
            if (isset($this->titulo)) {
                echo $this->titulo;
            } 
        ?>
        </title>
    </head>
    <body ng-controller="mainCtrl">
        <div class="row">  
            <div class="example col-md-12">
                <div class="menuholder">
                        <ul class="menu slide">
                            <li><a href="<?php echo BASE_URL.'index'; ?> " class="heavenly">Inicio</a></li>
                            <li><a href="http://www.script-tutorials.com/" class="heavenly">Desarrollo Web</a>
                                <div class="subs">
                                    <dl>
                                        <dt>Links #1</dt>
                                        <dd><a href="http://www.script-tutorials.com/category/html-css/">SSISA ERP SGF</a></dd>
                                        <dd><a href="http://www.script-tutorials.com/category/jquery/">SSISA Recarga en linea</a></dd>
                                        <dd><a href="http://www.script-tutorials.com/category/php/">Desarrollo a la medida</a></dd>
                                    </dl>                     
                                </div>
                            </li>
                            <li><a href="http://www.script-tutorials.com/category/resources/" class="heavenly">Outsourcing Services</a>
                                <div class="subs">
                                    <dl>
                                        <dt>Links #2</dt>
                                        <dd><a href="http://www.script-tutorials.com/category/mysql/">Reclutamiento personal IT</a></dd>
                                    </dl>
                                </div>
                            </li>
                            <li><a href="http://www.script-tutorials.com/category/resources/" class="heavenly">Ventas</a></li>
                            <li><a href="http://www.script-tutorials.com/about/" class="heavenly">Contáctanos</a></li>
                        </ul>
                        <div class="back"></div>
                        <!--div class="shadow"></div-->
                    </div>      
                </div>
            </div>

