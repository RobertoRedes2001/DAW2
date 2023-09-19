<?php
    
    //Calcula el factorial de un numero (x)
    function calcularFactorial($x){
        $factorial=1;
        for($i=$x;$i>0;$i--){
          $factorial=$factorial*$i;
        }
        return $factorial;
    }

    //Genera 1 numero aleatorio (entre el 1 y el 10) al que calcularle el factorial
    $n1 = calcularFactorial(random_int(1,10));
    $n2 = calcularFactorial(random_int(1,10));
    $n3 = calcularFactorial(random_int(1,10));
    echo $n1;
    echo "<br>";
    echo $n2;
    echo "<br>";
    echo $n3;
    echo "<br>";

    $array = array(
        1 => $n1,
        2 => $n2,
        3 => $n3,
    );

    //Selecciona el valor maximo/minimo del array
    $minVal=min($array);
    $maxVal=max($array);

    print_r($array);
    echo "<br>";
    echo "Valor minimo: ".$minVal;
    echo "<br>";
    echo "Valor maximo: ".$maxVal;
?>