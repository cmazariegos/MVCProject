<?php
class servidoresModel extends Model{
    public function __construct() {
        parent::__construct();
    }  
    public function getContent($content){
        $data;
        switch ($content) {
            case "HPProLiantDL360Gen9":
                $data = array(
                    'modelo' => 'HP ProLiant DL360 Gen9',
                    'procesador' => 'Intel Xeon E5-2630v3 8-Core (2.40GHz 20MB)',
                    'RAM' => '16GB RAM',
                    'HD' => '80Tb'
                );
                break;
            case "bancos":
                $data = array(
                    'modelo' => '',
                    'procesador' => '',
                    'RAM' => '',
                    'HD' => ''
                );
                break;
            case "rrhh":
                $data = array(
                    'modelo' => '',
                    'procesador' => '',
                    'RAM' => '',
                    'HD' => ''
                );
                break;
        }
        return $data;  
    }
}