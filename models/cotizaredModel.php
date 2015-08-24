<?php
class cotizaredModel extends Model{
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
}

