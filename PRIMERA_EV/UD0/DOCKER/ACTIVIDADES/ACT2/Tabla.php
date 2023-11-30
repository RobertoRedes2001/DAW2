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
    //Crea una celda <TH> de la tabla
    public function crearEncabezado(){
        echo "<th bgcolor='$this->backgroundColor' style='color:$this->colorText'>{$this->text}</th>";
    }

    //Crea una celda <TD> de la tabla
    public function crearCelda(){
        echo "<td bgcolor='$this->backgroundColor' style='color:$this->colorText'>{$this->text}</td>";
    }

    //En base a unos parametros, crea una celda personalizada
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
    /*Crea una tabla con la informacion de un array de celdas tomando 
    como referencia el numero de las columnas y filas*/
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

    /*Crea una tabla con la informacion de un array de celdas,
    pero modifica una celda en concreto con la informacion pasada
    por parametro*/
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