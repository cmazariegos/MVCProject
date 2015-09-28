<?php
class erpModel  extends Model{
    public function __construct() {
        parent::__construct();
    }  
    public function getPosts(){
        $post = array(
            'id' => 1,
            'nombre' => 'holaCotizacionesWeb'
        );
        return $post;
    }
    public function getContent($content){
        $data = "";
        switch ($content) {
            case "contabilidad":
                $data = '<div id="MyCarousel" style="min-height: 360px;" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#MyCarousel" data-slide-to="1"></li>
                            <li data-target="#MyCarousel" data-slide-to="2"></li> 
                            <li data-target="#MyCarousel" data-slide-to="3"></li> 
                            <li data-target="#MyCarousel" data-slide-to="4"></li> 
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="delimitador">                                 
                                    <img src="'.BASE_URL.'img/erp/conta/Balance_General.png"  />
                                </div> 
                            </div>
                            <div class="item">
                                <div class="delimitador">                                 
                                    <img src="'.BASE_URL.'img/erp/conta/cuentas_contables.png"  />
                                </div>
                            </div>     
                            <div class="item">
                                <div class="delimitador">                                 
                                    <img src="'.BASE_URL.'img/erp/conta/Ingreso de Poliza.png"  />
                                </div>
                            </div>
                            <div class="item">
                                <div class="delimitador">                                 
                                    <img src="'.BASE_URL.'img/erp/conta/polizas.png"  />
                                </div>
                            </div>          
                            <div class="item">
                                <div class="delimitador">                                 
                                    <img src="'.BASE_URL.'img/erp/conta/Reporte_Balance_General_Saldos.png"  />
                                </div>
                            </div>                             
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control slider-control-custom" href="#MyCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left slider-control-custom" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control slider-control-custom" href="#MyCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>';
                break;
            case "bancos":
                $data = '<img src="'.BASE_URL.'img/erp/mod-bancos.jpg" />';
                break;
            case "rrhh":
                $data = '<img src="'.BASE_URL.'img/erp/mod-rrhh.jpg" />';
                break;
        }
        return $data;  
    }
}