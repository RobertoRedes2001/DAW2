<?php
    //Crea un array de numeros
    $array = array(
        1 => 25,
        2 => 5,
        3 => 62,
    );

    //Imprime el array y luego lo ordena de mayor a menor
    print_r($array);
    echo "<br>";
    rsort($array);
    print_r($array);
?>