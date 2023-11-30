<?php

namespace Roberto\App\Model;

class byeModel {
   
    private $time;
    
    public function __construct() {
        date_default_timezone_set('Europe/Madrid');
        $this->time = date("H:i:s");
    }
    
    public function getHora() {
        return $this->time;
    }
}
?>