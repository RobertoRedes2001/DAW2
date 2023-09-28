<?php

class Cuadrado{
    
    private $lado;

    public function __construct($lado){
        $this->lado=$lado;
    }

    public function calcularPerimetro(){  
        return $this->lado+$this->lado+$this->lado+$this->lado;
    }

    public function calcularSuperficie(){  
        return $this->lado*2;
    }
}

?>