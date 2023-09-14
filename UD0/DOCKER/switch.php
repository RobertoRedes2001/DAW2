<?php
    print "<BR>Ejemplo 2do.switch<BR>";
    // Este switch es similar a un if/elseif
    $i = 1;
    switch ($i) {
        case 0:
            print "i es igual a 0<BR>";
            break;
        case 1:
            print "i es igual a 0 o 1<BR>";
            break;
        default:
            print "Sólo un break impediría que se imprima esta línea<BR>";
    }
?>