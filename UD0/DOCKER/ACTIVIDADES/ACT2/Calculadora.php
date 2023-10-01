<?php

class Calculadora{

    //Metodo constructor
    public function __construct(){
      
    }

    static function sumar($x,$y){
        echo $x+$y;
    }

    static function restar($x,$y){
        echo $x-$y;
    }

    static function multiplicar($x,$y){
        echo $x*$y;
    }

    static function dividir($x,$y){
        echo $x/$y;
    }
};

?>