<html>
    <body>
            <?php
            include("./CLASES/persona.php");
            include("./CLASES/estudiante.php");
            include("./CLASES/figura.php");
            include("./CLASES/circulo.php");

            
               /*  $roberto = new Estudiante("Roberto","22","DAW2");
                $roberto->saludar();
                echo "<h1>".$roberto->getCurso()."</h1>";
                $roberto->setCurso("DAM2");
                $roberto->estudiar(); */
            $cir = new Circulo("Azul",50);
            echo $cir->calcularArea();
            ?>
    </body>
</html>