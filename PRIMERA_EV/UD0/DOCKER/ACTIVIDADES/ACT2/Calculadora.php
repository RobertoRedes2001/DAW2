<?php

class Calculadora{

    //Metodo constructor
    public function __construct(){
      
    }
    //Funcion estatica que suma dos numeros
    static function sumar($x,$y){
        echo $x+$y;
    }

    //Funcion estatica que resta dos numeros
    static function restar($x,$y){
        echo $x-$y;
    }

    //Funcion estatica que multiplica dos numeros
    static function multiplicar($x,$y){
        echo $x*$y;
    }

    //Funcion estatica que divide dos numeros
    static function dividir($x,$y){
        echo $x/$y;
    }
};

?>