<?php 

require_once('../vendor/autoload.php');

use Roberto\App\model\claseA;
use Roberto\App\pepito\claseB;

$claseA = new ClaseA();
$claseB = new ClaseB();

echo "Hola<br>";
$claseA->mostrar();
echo "<br>";
$claseB->mostrar();

?>