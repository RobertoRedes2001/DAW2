<?php
class sayingModel {
    # Declaración de una propiedad privada llamada "sayings" para almacenar refranes.
    private $sayings;

    # Constructor de la clase.
    public function __construct() {
        #Almacena en la variable un array de refranes
        $this->sayings = array("A quien madruga, Dios le ayuda",
        "No hay mal que por bien no venga",
        "De tal palo, tal astilla",
        "En casa del herrero cuchara de palo",
        "El que no corre, vuela",
        "A lo hecho, pecho",
        "Ojo por ojo, diente por diente",
        "A rey muerto, rey puesto");
    }
    # Método público llamado "getSaying" el cual recibe un parametro index 
    # y devuelve un refran del array
    public function getSaying($index) {
        return $this->sayings[$index];
    }
}

?>