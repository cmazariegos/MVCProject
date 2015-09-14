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
                    'HD' => ''
                );
                break;
            case "HPProLiantML350Gen9":
                $data = array(
                    'modelo' => 'HP ProLiant ML350 Gen9',
                    'procesador' => 'Intel Xeon E5-2620v3 6-Core (2.4 GHz 15MB L3 Caché )',
                    'RAM' => '16GB RAM',
                    'HD' => ''
                );
                break;
            case "HPProLiantML110Gen9":
                $data = array(
                    'modelo' => 'HP ProLiant ML110 Gen9',
                    'procesador' => 'Intel Xeon E5-2603v3 6-Core (1.60GHz 15MB)',
                    'RAM' => '8GB RAM',
                    'HD' => ''
                );
                break;
            case "DellPowerEdgeT20":
                $data = array(
                    'modelo' => 'Dell PowerEdge T20',
                    'procesador' => 'Intel 3.2 GHz Xeon E3-1225V3',
                    'RAM' => '4GB RAM',
                    'HD' => '1 TB'
                );
                break;            
        }
        return $data;  
    }
}
