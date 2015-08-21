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
        <div class="menuholder">
                <ul class="menu slide">
                    <li><a href="http://www.script-tutorials.com/" class="red">Home</a></li>
                    <li><a href="http://www.script-tutorials.com/" class="orange">Tutorials</a>
                        <div class="subs">
                            <dl>
                                <dt>Links #1</dt>
                                <dd><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/jquery/">JS / jQuery</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/php/">PHP</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #2</dt>
                                <dd><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #3</dt>
                                <dd><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/jquery/">JS / jQuery</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/php/">PHP</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #4</dt>
                                <dd><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></dd>
                            </dl>
                        </div>
                    </li>
                    <li><a href="http://www.script-tutorials.com/category/resources/" class="yellow">Resources</a>
                        <div class="subs">
                            <dl>
                                <dt>Links #5</dt>
                                <dd><a href="http://www.script-tutorials.com/category/php/">PHP</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #6</dt>
                                <dd><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #7</dt>
                                <dd><a href="http://www.script-tutorials.com/category/html-css/">HTML / CSS</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/jquery/">JS / jQuery</a></dd>
                            </dl>
                            <dl>
                                <dt>Links #8</dt>
                                <dd><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></dd>
                                <dd><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></dd>
                            </dl>
                        </div>
                    </li>
                    <li><a href="http://www.script-tutorials.com/category/resources/" class="green">Other</a></li>
                    <li><a href="http://www.script-tutorials.com/about/" class="blue">About</a></li>
                    <li><a href="http://www.script-tutorials.com/creating-css3-dropdown-menu-3/" class="violet">Back</a></li>
                </ul>
                <div class="back"></div>
                <div class="shadow"></div>
            </div>        

