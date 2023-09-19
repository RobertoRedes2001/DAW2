<?php

    //Creamos un array de nombres
    $nombres = array(
        1 => "Carlos",
        2 => "Manolo",
        3 => "Jesus Cristo",
    );

    //Cuenta los elementos del array
    echo count($nombres);
    echo "<br>";

    //Muestra los elementos del array separados por un espacio
    echo implode(" ",$nombres);
    echo "<br>";

    //Ordena alfabeticamente los elementos del array
    asort($nombres);
    print_r($nombres);
    echo "<br>";

    //ordena de manera reversa los elementos del array
    $reversed = array_reverse($nombres);
    print_r($reversed);
    echo "<br>";

    //Busca por un valor la clave del elemento en el array
    $key = array_search("Manolo", $nombres);
    echo $key;
    echo "<br>"; 

    //Creamos un array de alumnos
    $alumnos = array(
        array("id" => 1, "nombre"=> "Roberto", "edad" => 22),
        array("id" => 2, "nombre"=> "Davit", "edad" => 21),
        array("id" => 3, "nombre"=> "Joan", "edad" => 22),
        array("id" => 4, "nombre"=> "Fernando", "edad" => 20),
    );
    print_r($alumnos);

    //Metemos los elementos del array en una tabla HTML
    echo "<table border=2px>";
    echo "<tr>";
    echo "<th class=>ID</th>";
    echo "<th class=>NOMBRE</th>";
    echo "<th class=>EDAD</th>";
    echo "</tr>";
    foreach($alumnos as $alumno){
        $id=$alumno["id"];
        $name=$alumno["nombre"];
        $age=$alumno["edad"];
        echo "<tr>";
        echo "<td class=>".$id."</td>";
        echo "<td class=>".$name."</td>";
        echo "<td class=>".$age."</td>";
        echo "</tr>"; 
    };
    echo "</table>";
    
    //Muestra un tipo de elemento de la lista de arrays
    $nombresAlumnos = array_column($alumnos, "nombre");
    print_r($nombresAlumnos);

    //Suma todos los numeros de un array
    $numeros=array(1,2,3,4,5,6,7,8,9,10);
    $suma=array_sum($numeros);
    echo "</br>";
    echo $suma;
?>