<html>
    <body>
        <?php
            function PruebaSinGlobal(){
                $varAlt=0;
                $varAlt++;
                echo "Prueba sin global. \$var: ".$varAlt."<br>";
            }

            function PruebaConGlobal(){
                global $var;
                $var++;
                echo "Prueba con global. \$var: ".$var."<br>";
            }

            function PruebaConGlobals(){
                $GLOBALS["var"]++;
                echo "Prueba con GLOBALS. \$var: ".$GLOBALS["var"]."<br>";
            }

            $var=20; //variable global

            PruebaSinGlobal();
            PruebaConGlobal();
            PruebaConGlobals();
        ?>
    </body>
</html>