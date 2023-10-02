<?php

class Circulo implements Forma{
    
    private $radio;

    public function getRadio(){
        return $this->radio;
    }

    public function __construct($radio){
        $this->radio=$radio;
    }

    public function calcularArea(){
        echo"calculando: ";   
        return pi() *pow($this->radio,2);
    }
}

?>