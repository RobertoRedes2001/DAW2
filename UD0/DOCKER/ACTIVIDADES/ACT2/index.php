<html>
    <body>
            <?php
                include("./ACTIVIDADES/ACT2/Empleado.php");
                include("./ACTIVIDADES/ACT2/Menu.php");
                include("./ACTIVIDADES/ACT2/CabeceraPagina.php");
                include("./ACTIVIDADES/ACT2/Tabla.php");
                include("./ACTIVIDADES/ACT2/Persona.php");
                include("./ACTIVIDADES/ACT2/PersonaAbstracta.php");
                include("./ACTIVIDADES/ACT2/OtroEmpleado.php");
                include("./ACTIVIDADES/ACT2/Trabajador.php");
                include("./ACTIVIDADES/ACT2/EmpleadoTrabajador.php");
                include("./ACTIVIDADES/ACT2/Gerente.php");
                include("./ACTIVIDADES/ACT2/Cuadrado.php");

                $cab = new CabeceraPagina("ACTIVIDADES","center","red","blue");
                $cab->encabezado();
                $emp = new Empleado("Roberto",2000);
                $emp->taxes();
                echo "<br>";
                echo "<br>";
                $emp->taxesConSueldo();
                echo "<br>";
                echo "<br>";
                $menu = new Menu("Nueva Partida","Cargar Partida","EXTRAS","Opciones");
                $menu->mostrarMenu("horizontal");
                echo "<br>";
                echo "<br>";
                $encabezado1 = new Celda("TITULO 1","red","blue"); 
                $encabezado2 = new Celda("TITULO 2","red","blue"); 
                $encabezado3 = new Celda("TITULO 3","red","blue");
                $primeraFila1 = new Celda("Contenido 1","black","white"); 
                $primeraFila2 = new Celda("Contenido 2","black","white"); 
                $primeraFila3 = new Celda("Contenido 3","black","white");
                $segundaFila1 = new Celda("Contenido 4","black","white"); 
                $segundaFila2 = new Celda("Contenido 5","black","white"); 
                $segundaFila3 = new Celda("Contenido 6","black","white");
                $encabezados=array(
                    $encabezado1,$encabezado2,$encabezado3
                );
                $primeraCelda=array(
                    $primeraFila1,$primeraFila2,$primeraFila3
                );
                $segundaCelda=array(
                    $segundaFila1,$segundaFila2,$segundaFila3
                );
                $celdas=array(
                    $encabezados,$primeraCelda,$segundaCelda
                );
                $tabla = new Tabla(3,3);
                $tabla->crearTabla($celdas);
                echo "<br>";
                echo "<br>";
                $per = new Persona("Roberto");
                $otroEmp = new OtroEmpleado("Roberto",22,2000);
                $per->saludar();
                echo "<br>";
                $otroEmp->miSueldo();
                $otroEmp->setEdad(23); 
                echo "<br>";
                echo "<br>";
                $otroEmp->saludar();
                echo "<br>";
                echo "<br>";
                $absEmp = new EmpleadoTrabajador("Roberto",2604,480);
                echo $absEmp->calcularSueldo();
                echo "<br>";
                $ger = new Gerente("Joan",2604,480);
                echo $ger->calcularSueldo();
                echo "<br>";
                echo "<br>";
                $cuadrado = new Cuadrado(20);
                echo "Perimetro: ".$cuadrado->calcularPerimetro();
                echo "<br>";
                echo "Superfice: ". $cuadrado->calcularSuperficie();
                echo "<br>";
                echo "<br>";
                $per = new Persona("Carlos");
                $per->saludar();
            ?>
    </body>
</html>