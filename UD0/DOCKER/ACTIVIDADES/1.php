<?php
    function calcularFactorial($x){
        $factorial=1;
        for($i=$x;$i>0;$i--){
          $factorial=$factorial*$i;
        }
        return $factorial;
    }

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

    $minVal=min($array);
    $maxVal=max($array);

    print_r($array);
    echo "<br>";
    echo "Valor minimo: ".$minVal;
    echo "<br>";
    echo "Valor maximo: ".$maxVal;
?>