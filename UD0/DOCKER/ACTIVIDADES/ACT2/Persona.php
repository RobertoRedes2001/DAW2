<?php

class Persona{
    //Propiedades
    private $nombre;
    protected static $edad = 21;

    function setEdad($x){
        $this->edad=$x;
    }

    function getNombre(){
        return $this->nombre;
    }

    static function getEdad(){
        return self::$edad;
    }

    //Metodo constructor
    public function __construct($nombre){
        $this->nombre=$nombre;
        //Cada vez que se instancia un objeto la edad aumenta en 1
        self::$edad++;
    }

    //Metodo
    //Devuelve la informacion proporcionada por constructor
    public function saludar(){
        echo "Hola, soy {$this->nombre} y tengo {$this->getEdad()} años.";
    }
};

?>