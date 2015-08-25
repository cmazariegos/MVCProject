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
            <div class="col-md-6" col-md-6 col-lg-6 hidden-sm hidden-xs>
                <img class="logo hidden-sm hidden-xs" src="img/ssisa_logo.png"  />
                <img class="logo-md-xs hidden-lg hidden-md" src="img/ssisa_logo.png"  />
            </div>
            <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">            
                <div class="container" id="main" role="main">
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#s1">Menu 1</a>
                            <ul class="submenu">
                                <li><a href="#">Submenu a</a></li>
                                <li><a href="#">Submenu b</a></li>
                                <li><a href="#">Submenu c</a></li>
                                <li><a href="#">Submenu d</a></li>
                                <li><a href="#">Submenu e</a></li>
                                <li><a href="#">Submenu f</a></li>
                                <li><a href="#">Submenu g</a></li>
                                <li><a href="#">Submenu h</a>
                                    <ul class="submenu">
                                        <li><a href="#">Submenu a</a></li>
                                        <li><a href="#">Submenu b</a></li>
                                        <li><a href="#">Submenu c</a></li>
                                        <li><a href="#">Submenu d</a></li>
                                        <li><a href="#">Submenu e</a></li>
                                        <li><a href="#">Submenu f</a></li>
                                        <li><a href="#">Submenu g</a></li>
                                        <li><a href="#">Submenu h</a></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </li>
                        <li class="active"><a href="#s2">Menu 2</a>
                            <ul class="submenu">
                                <li><a href="#">Submenu a</a></li>
                                <li><a href="#">Submenu b</a></li>
                                <li><a href="#">Submenu c</a></li>
                                <li><a href="#">Submenu d</a></li>
                                <li><a href="#">Submenu e</a></li>
                                <li><a href="#">Submenu f</a></li>
                                <li><a href="#">Submenu g</a></li>
                                <li><a href="#">Submenu h</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu 3</a>
                            <ul class="submenu">
                                <li><a href="#">Submenu a</a></li>
                                <li><a href="#">Submenu b</a></li>
                                <li><a href="#">Submenu c</a></li>
                                <li><a href="#">Submenu d</a></li>
                                <li><a href="#">Submenu e</a></li>
                                <li><a href="#">Submenu f</a></li>
                                <li><a href="#">Submenu g</a></li>
                                <li><a href="#">Submenu h</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu 4</a></li>
                        <li><a href="http://www.script-tutorials.com/whirling-dropdown-menu/">Back to tutorial</a></li>
                    </ul>
                </div>
            </div>
        </div>

