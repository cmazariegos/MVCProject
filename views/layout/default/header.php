<html lang="en" ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php echo $layoutParams['ruta_css']; ?>estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="js/jquery.min.js"></script>         
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="angular/angular.js"></script> 
                
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet"> 
        <link href="css/responsive-menu.css" rel="stylesheet" >        
	<!--script src="js/efectos.js"></script-->  
    
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
                        <li><a href="<?php echo BASE_URL.'index'; ?> ">Inicio</a></li>
                        <li><a href="#">Desarrollo Web</a>
                            <ul class="submenu">
                                <li><a href="<?php echo BASE_URL.'erp'; ?>">SSISA ERP SGF</a></li>
                                <li><a href="<?php echo BASE_URL.'sistemarecargas'; ?>">SSISA Recarga en linea</a></li>
                                <li><a href="<?php echo BASE_URL.'desarrollomedida'; ?>">Desarrollo a la medida</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#">Outsourcing Services</a>
                            <ul class="submenu">
                                <li><a href="<?php echo BASE_URL.'outsourcing'; ?>">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ventas</a>
                            <ul class="submenu"> 
                                <li><a href="<?php echo BASE_URL.'servidores'; ?>">Servidores HP</a></li>                                
                                <li><a href="#">Computadora personal</a></li>                                 
                                <li><a href="#">Otros</a></li>                                 
                            </ul>      
                        </li>
                        <li><a href="#">Servicios varios</a>
                            <ul class="submenu"> 
                                <li><a href="<?php echo BASE_URL.'cotizared'; ?>">Instalaciónes de red</a></li>                                
                                <li><a href="#">Instalaciones eléctricas</a></li>                                 
                                <li><a href="#">Servicio de hosting</a></li>
                                <li><a href="#">e-learning</a></li> 
                            </ul>      
                        </li>                        
                        <li onclick="$('#contactUs').modal();"><a href="#">Contáctanos</a></li>                        
                    </ul>
                </div>
            </div>            
            <div class="col-xs-12 visible-xs"> 
                <div id="cssmenu">
                    <ul>
                        <li><a href="<?php echo BASE_URL.'index'; ?>">Index</a></li>
                        <li class='active'><a href="#">Desarrollo Web</a>
                            <ul>
                                <li><a href="<?php echo BASE_URL.'erp'; ?>">SSISA ERP SGF</a></li>
                                <li><a href="<?php echo BASE_URL.'sistemarecargas'; ?>">SSISA Recarga en linea</a></li>
                                <li><a href="<?php echo BASE_URL.'desarrollomedida'; ?>">Desarrollo a la medida</a></li>
                            </ul>
                        </li>
                        <li class='active'><a href="#">Outsourcing Services</a>
                            <ul>
                                <li><a href="<?php echo BASE_URL.'outsourcing'; ?>">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>                        
                        <li><a href="#">Ventas</a>
                            <ul> 
                                <li><a href="<?php echo BASE_URL.'servidores'; ?>">Servidores HP</a></li>                                
                                <li><a href="#">Computadora personal</a></li>                                 
                                <li><a href="#">Otros</a></li>                                 
                            </ul>                             
                        </li>
                        <li><a href="#">Servicios varios</a>
                            <ul> 
                                <li><a href="<?php echo BASE_URL.'cotizared'; ?>">Instalaciónes de red</a></li>                                
                                <li><a href="#">Instalaciones eléctricas</a></li>                                 
                                <li><a href="#">Servicio de hosting</a></li>
                                <li><a href="#">e-learning</a></li> 
                            </ul>      
                        </li>                         
                        <li onclick="$('#contactUs').modal();"><a href="#">Contáctanos</a></li>
                    </ul>
                </div>
            </div>            
        </div>
        <!--main container-->
        <div class="main-container">