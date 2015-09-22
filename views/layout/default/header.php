<html lang="en" ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php echo $layoutParams['ruta_css']; ?>estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>bootstrap/css/bootstrap.css">
        <script src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>         
        <script src="<?php echo BASE_URL; ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL; ?>angular/angular.js"></script> 
                
	<link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>css/mi_menu.css" rel="stylesheet"> 
        <link href="<?php echo BASE_URL; ?>css/responsive-menu.css" rel="stylesheet" >
        
	<link rel="stylesheet" href="css/slider.css" />
	<link rel="stylesheet" href="css/slider_style.css" />
    
        <script src="<?php echo BASE_URL; ?>js/responsive-menu.js"></script>  
        <script src="<?php echo $layoutParams['ruta_js']; ?>controllers.js"></script>  

        <script src="<?php echo BASE_URL; ?>js/jquery.validate.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
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
            <!--div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
                <img class="logo" src="<?php //echo BASE_URL; ?>img/ssisa_logo.png"  />
            </div>
            <div class="col-xs-12 col-sm-12  visible-xs visible-sm">
                <img class="logo-sm-xs" src="<?php //echo BASE_URL; ?>img/ssisa_logo.png"  />
            </div-->             
            <div class="col-md-12 col-lg-12 hidden-xs">            
                <div style="z-index: 1000 !important;">
                    <ul class="menu">
                        <li><a href="<?php echo BASE_URL.'index'; ?> ">Inicio</a></li>
                        <li><a href="#">Desarrollo web</a>
                            <ul class="submenu">
                                <li><a href="<?php echo BASE_URL.'erp'; ?>">SSISA ERP SGF (web)</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo BASE_URL.'erp/cargarContenido/contabilidad'; ?>">Contabilidad</a></li>
                                        <li><a href="<?php echo BASE_URL.'erp/cargarContenido/bancos'; ?>">Bancos</a></li>
                                        <!--li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Cuentas por cobrar</a></li>
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Cuentas por pagar</a></li>    
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Inventarios</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Activos fijos</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Recursos humanos</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Punto de venta</a></li-->                                        
                                    </ul>                                
                                </li>
                                <li><a href="<?php echo BASE_URL.'sistemarecargas'; ?>">SSISA Recarga en linea (web)</a></li>
                                <li><a href="<?php echo BASE_URL.'cotizaweb'; ?>">Cotizar página web</a></li>
                                <li><a href="<?php echo BASE_URL.'desarrollomedida'; ?>">Desarrollo a la medida</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#">Outsourcing Services</a>
                            <ul class="submenu">
                                <li><a href="<?php echo BASE_URL.'outsourcing'; ?>">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Venta de equipo</a>
                            <ul class="submenu"> 
                                <li><a href="<?php echo BASE_URL.'servidores/cargarContenido/hp'; ?>">Servidores HP</a></li>                                
                                <li><a href="<?php echo BASE_URL.'servidores/cargarContenido/dell'; ?>">Servidores DELL</a></li>                                                                
                            </ul>      
                        </li>
                        <li><a href="#">Servicios varios</a>
                            <ul class="submenu"> 
                                <li><a href="<?php echo BASE_URL.'elearning'; ?>">e-Learning</a></li>                                 
                                <li><a href="<?php echo BASE_URL.'hosting'; ?>">Servicio de hosting</a></li>
                                <li><a href="<?php echo BASE_URL.'cotizared'; ?>">Instalaciónes de red</a></li>                                
                                <li><a href="<?php echo BASE_URL.'instalacionelectrica'; ?>">Instalaciones eléctricas</a></li>                                
                            </ul>      
                        </li>
                        <li onclick="$('#clientes').modal();"><a href="#">Nuestros Clientes</a></li>                        
                        <li><a href="<?php echo BASE_URL.'contacto'; ?>">Contáctanos</a></li>                        
                    </ul>
                </div>
            </div>    
            <div class="col-xs-12 visible-xs"> 
                <div id="cssmenu">
                    <ul>
                        <li><a href="<?php echo BASE_URL.'index'; ?>">Inicio</a></li>
                        <li class='active'><a href="#">Desarrollo web</a>
                            <ul>
                                <li><a href="<?php echo BASE_URL.'erp'; ?>">SSISA ERP SGF (web)</a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo BASE_URL.'erp/cargarContenido/contabilidad'; ?>">Contabilidad</a></li>
                                        <li><a href="<?php echo BASE_URL.'erp/cargarContenido/bancos'; ?>">Bancos</a></li>
                                        <!--li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Cuentas por cobrar</a></li>
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Cuentas por pagar</a></li>    
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Inventarios</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Activos fijos</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Recursos humanos</a></li> 
                                        <li><a href="<?php //echo BASE_URL.'erp/cargarContenido/'; ?>">Punto de venta</a></li-->                                        
                                    </ul>                                     
                                </li>
                                <li><a href="<?php echo BASE_URL.'sistemarecargas'; ?>">SSISA Recarga en linea (web)</a></li>
                                <li><a href="<?php echo BASE_URL.'cotizaweb'; ?>">Cotizar página web</a></li>
                                <li><a href="<?php echo BASE_URL.'desarrollomedida'; ?>">Desarrollo a la medida</a></li>                                
                            </ul>
                        </li>
                        <li class='active'><a href="#">Outsourcing Services</a>
                            <ul>
                                <li><a href="<?php echo BASE_URL.'outsourcing'; ?>">Reclutamiento personal IT</a></li>
                            </ul>
                        </li>                        
                        <li><a href="#">Venta de equipo</a>
                            <ul> 
                                <li><a href="<?php echo BASE_URL.'servidores/cargarContenido/hp'; ?>">Servidores HP</a></li>                                
                                <li><a href="<?php echo BASE_URL.'servidores/cargarContenido/dell'; ?>">Servidores DELL</a></li>                                                              
                            </ul>                             
                        </li>
                        <li><a href="#">Servicios varios</a>
                            <ul>     
                                <li><a href="<?php echo BASE_URL.'elearning'; ?>">e-Learning</a></li>                                 
                                <li><a href="<?php echo BASE_URL.'hosting'; ?>">Servicio de hosting</a></li>
                                <li><a href="<?php echo BASE_URL.'cotizared'; ?>">Instalaciónes de red</a></li>                                
                                <li><a href="<?php echo BASE_URL.'instalacionelectrica'; ?>">Instalaciones eléctricas</a></li>                                
                            </ul>      
                        </li>                         
                        <li onclick="$('#clientes').modal();"><a href="#">Nuestros Clientes</a></li>                        
                        <li><a href="<?php echo BASE_URL.'contacto'; ?>">Contáctanos</a></li>                       
                    </ul>
                </div>
            </div>            
        </div>
        <!--main container-->
        <div class="main-container">