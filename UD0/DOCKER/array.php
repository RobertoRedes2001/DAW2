<?php
    /* $matriz=array('lunes','martes','miércoles','jueves','viernes','sábado','domingo');
    echo array_pop($matriz);
    var_dump($matriz); */

    /* function incrementa (&$a){
        $a = $a + 1;
    }
        $a=1;
        Echo $a;
        incrementa ($a);
        echo "<br>";
        Echo $a; // Muestra un 2 */

    function Test (){
        static $a = 0;
        echo $a;
        $a++;
    }

    Test();
    echo "<br>";
    Test();
?>