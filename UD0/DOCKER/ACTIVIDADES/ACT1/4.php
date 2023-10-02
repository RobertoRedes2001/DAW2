<?php

    $nombre = "  Roberto  ";
    $trimed = trim($nombre, " ");
    echo $trimed;
    echo "<br>";

    echo strlen($trimed);
    echo "<br>";

    echo strtoupper($trimed);
    echo "<br>";

    echo strtolower($trimed);
    echo "<br>";

    $prefijo = "Nombre";
    if(!strpos("Nom",$prefijo)){
        echo "Si empieza.";
    }
    echo "<br>";

    echo substr_count($trimed, 'o');
    echo "<br>";
    echo substr_count($trimed, strtoupper('r'));
    echo "<br>";

    if(strpos($prefijo,"a")){
        echo strpos($prefijo,"a");
    }else{
        echo "No esta la a";
    };
    echo "<br>";

    $reName = str_replace("o", "0", $trimed);
    echo $reName;

?>