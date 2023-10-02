<?php

class Beerus{

    //Metodo constructor
    //Instancia un objeto de una clase
    public function __construct(){
        echo "<i>Antes de la creacion...</i>";
        echo "<br>";
        echo "Clase ". __CLASS__ ." creada";
    }

    //Se deshace del objeto en memoria
    function __destruct() {
        echo "<i>...viene la destruccion</i>";
        echo "<br>";
        echo "Clase ". __CLASS__ ." destruida";
    }
};

?>