<?php

class Menu{
    //Propiedades
    private $op1;
    private $op2;
    private $op3;
    private $op4;

    //Metodo constructor
    public function __construct($op1, $op2, $op3, $op4){
        $this->op1=$op1;
        $this->op2=$op2;
        $this->op3=$op3;
        $this->op4=$op4;
    }

    //Metodo
    //Despliega un menu de forma vertical
    public function vertical(){
        echo $this->op1;
        echo "<br>";
        echo $this->op2;
        echo "<br>";
        echo $this->op3;
        echo "<br>";
        echo $this->op4;
    }

    //Despliega un menu de forma horizontal
    public function horizontal(){
        echo $this->op1." - ".$this->op2." - ".$this->op3." - ".$this->op4;
    }

    //Despliega un menu de forma horizontal o vertical en base a un parametro
    public function mostrarMenu($mostrar){
        switch($mostrar){
            case "horizontal":
                $this->horizontal();
                break;
            case "vertical":
                $this->vertical();
                break;
            default:
                echo "Por favor añada un parametro correcto (vertical u horizontal)";
        }
    }
};

?>