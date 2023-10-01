<?php

class Celda{

     //Propiedades
    private $colorText;
    private $backgroundColor;
    private $text;

    //Metodo constructor
    public function __construct($text,$colorText,$backgroundColor){
        $this->text=$text;
        $this->colorText=$colorText;
        $this->backgroundColor=$backgroundColor;
    }

    //Metodo
    public function crearEncabezado(){
        echo "<th bgcolor='$this->backgroundColor' style='color:$this->colorText'>{$this->text}</th>";
    }

    public function crearCelda(){
        echo "<td bgcolor='$this->backgroundColor' style='color:$this->colorText'>{$this->text}</td>";
    }

    public function modCelda($txt,$col,$back){
        echo "<td bgcolor='$back' style='color:$col'>{$txt}</td>";
    }
}

class Tabla{
    //Propiedades
    private $filas;
    private $columnas;

    //Metodo constructor
    public function __construct($filas,$columnas){
        $this->filas=$filas;
        $this->columnas=$columnas;
    }

    //Metodo
    public function crearTabla($contenidos){
        echo "<Table border=1>";
        for($i=0;$i<$this->columnas;$i++){
            echo "<tr>";
            for($j=0;$j<$this->filas;$j++){
                $contenidos[$i][$j]->crearCelda();
            }
            echo "</tr>";
        }
        echo "</Table>";
    }

    public function modificarTabla($contenidos,$x,$y,$text,$color,$background){
        echo "<Table border=1>";
        for($i=0;$i<$this->columnas;$i++){
            echo "<tr>";
            for($j=0;$j<$this->filas;$j++){
                if($i==$x&&$j==$y){
                    $contenidos[$i][$j]->modCelda($text,$color,$background);
                }else{
                    $contenidos[$i][$j]->crearCelda();
                }
            }
            echo "</tr>";
        }
        echo "</Table>";
    }
};

?>