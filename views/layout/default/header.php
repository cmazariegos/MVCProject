<html lang="en" ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php echo $layoutParams['ruta_css']; ?>estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="angular/angular.js"></script>   
        <script src="js/jquery.min.js"></script>        
        
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet"> 
        <link href="css/responsive-menu.css" rel="stylesheet" >        
	<!--script src="js/efectos.js"></script-->  
        
<!--  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>    
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>   
-->    
        <script src="js/responsive-menu.js"></script>  
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
            <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
                <img class="logo" src="img/ssisa_logo.png"  />
            </div>
            <div class="col-xs-12 col-sm-12  visible-xs visible-sm">
                <img class="logo-sm-xs" src="img/ssisa_logo.png"  />
            </div>             
            <div class="col-md-6 col-lg-6 hidden-xs">            
                <div class="container" id="main" role="main">
                    <ul class="menu">
                        <li><a href="<?php echo BASE_URL.'index'; ?> " class="heavenly">Inicio</a></li>
                        <li><a href="#">Desarrollo Web</a>
                            <ul class="submenu">
                                <li><a href="#">SSISA ERP SGF</a></li>
                                <li><a href="#">SSISA Recarga en linea</a></li>
                                <li><a href="#">Desarrollo a la medida</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#">Outsourcing Services</a>
                            <ul class="submenu">
                                <li><a href="#">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ventas</a></li>
                        <li><a href="#">Contáctanos</a></li>                        
                    </ul>
                </div>
            </div>            
            <div class="col-xs-12 visible-xs"> 
                <div id="cssmenu">
                    <ul>
                        <li><a href="#">Index</a></li>
                        <li class='active'><a href="#">Desarrollo Web</a>
                            <ul>
                                <li><a href="#">SSISA ERP SGF</a></li>
                                <li><a href="#">SSISA Recarga en linea</a></li>
                                <li><a href="#">Desarrollo a la medida</a></li>
                            </ul>
                        </li>
                        <li class='active'><a href="#">Outsourcing Services</a>
                            <ul>
                                <li><a href="#">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>                        
                        <li><a href="#">Ventas</a></li>
                        <li><a href="#">Contáctanos</a></li>
                    </ul>
                </div>
            </div>            
        </div>
        