<?php

    //Eliminamos los espacios sobrantes al frente y detras del string
    $nombre = "  Roberto  ";
    $trimed = trim($nombre, " ");
    echo $trimed;
    echo "<br>";

    //Nos indica la longitud del string
    echo strlen($trimed);
    echo "<br>";

    //Convierte a mayusculas el texto
    echo strtoupper($trimed);
    echo "<br>";

    //Convierte a minusculas el texto
    echo strtolower($trimed);
    echo "<br>";

    //Comprueba si el prefijo indicado se encuentra en el nombre
    $prefijo = "Nombre";
    if(!strpos("Nom",$prefijo)){
        echo "Si empieza.";
    }
    echo "<br>";

    //Cuenta las veces que aparece una letra en la palabra
    echo substr_count($trimed, 'o');
    echo "<br>";
    echo substr_count($trimed, strtoupper('r'));
    echo "<br>";

    //Indica la posicion de la "a" en el string (en caso de haber)
    if(strpos($prefijo,"a")){
        echo strpos($prefijo,"a");
    }else{
        echo "No esta la a";
    };
    echo "<br>";

    $reName = str_replace("o", "0", $trimed);
    echo $reName;

?>