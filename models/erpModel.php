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
                $data = BASE_URL.'/img/erp/mod-conta.jpg';
                break;
            case "bancos":
                $data = BASE_URL.'/img/erp/mod-bancos.jpg';
                break;
            case "rrhh":
                $data = BASE_URL.'/img/erp/mod-rrhh.jpg';
                break;
        }
        return $data;  
    }
}