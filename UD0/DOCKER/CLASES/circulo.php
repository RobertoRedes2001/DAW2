<?php

class Circulo extends Figura{
    
    private $radio;

    public function getRadio(){
        return $this->radio;
    }

    public function __construct($color, $radio){
        parent::__construct($color);
        $this->radio=$radio;
    }

    public function calcularArea(){
        echo"calculando";   
        return pi() *pow($this->radio,2);
    }
}

?>