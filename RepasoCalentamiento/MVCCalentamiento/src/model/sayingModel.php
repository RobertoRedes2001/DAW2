<?php

namespace Roberto\App\Model;

class sayingModel {
   
    private $sayings;

    public function __construct() {

        $this->sayings = array("A quien madruga, Dios le ayuda",
        "No hay mal que por bien no venga",
        "De tal palo, tal astilla",
        "En casa del herrero cuchara de palo",
        "El que no corre, vuela",
        "A lo hecho, pecho",
        "Ojo por ojo, diente por diente",
        "A rey muerto, rey puesto");
    }

    public function getSayings() {
        return $this->sayings;
    }
}

?>