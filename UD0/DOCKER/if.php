<?php
    print "<BR>Ejemplo if idéntico a sentencia switch<BR>";
    $i = 0;
    // este if/elseif es idéntico funcionalmente
    // al switch anterior
    if ($i == 0)
    {
        print "i es igual a 0<BR>";
    }
    elseif ($i == 1)
    {
        print "i es igual a 1<BR>";
    }
    else
    {
        print "Ambas expresiones fueron falsas<BR>";
    }
    print "fin del ejemplo<BR>";
?>
