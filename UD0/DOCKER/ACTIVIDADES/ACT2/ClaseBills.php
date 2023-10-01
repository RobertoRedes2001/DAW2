<?php

class Beerus{

    //Metodo constructor
    public function __construct(){
        echo "<i>Antes de la creacion...</i>";
        echo "<br>";
        echo "Clase ". __CLASS__ ." creada";
    }

    function __destruct() {
        echo "<i>...viene la destruccion</i>";
        echo "<br>";
        echo "Clase ". __CLASS__ ." destruida";
    }
};

?>