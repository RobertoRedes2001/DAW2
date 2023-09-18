<?php

    $nombres = array(
        1 => "Carlos",
        2 => "Manolo",
        3 => "Jesus Cristo",
    );

    echo count($nombres);
    echo "<br>";
    echo implode(" ",$nombres);
    sort($nombres);
    echo "<br>";
    print_r($nombres);
    
?>