<?php
require_once './Modelo/helloModel.php';
require_once './Controlador/helloController.php';
require_once './Vista/helloView.php';
require_once './Modelo/byeModel.php';
require_once './Controlador/byeController.php';
require_once './Vista/byeView.php';
require_once './Modelo/sayingModel.php';
require_once './Controlador/sayingController.php';
require_once './Vista/sayingView.php';

// Inicializamos los modelos, controladores y vistas
$hellomodel = new helloModel();
$helloview = new helloView();
$hellocontroller = new helloController($model,$view);
$byemodel = new byeModel();
$byeview = new byeView();
$byecontroller = new byeController($model,$view);
$sayingmodel = new sayingModel();
$sayingview = new sayingView();
$sayingcontroller = new sayingController($model,$view);

echo $_GET['route'];

// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
$route = isset($_GET['route']) ? $_GET['route'] : 'hello';

echo "<br>";

switch ($route) {
    case 'hello':
        //Conseguimos la hora y lanzamos el saludo
        $hora = $hellomodel->getHora();
        $helloview->saludar($hora);
        break;
    case 'bye':
        //Conseguimos la hora y lanzamos la despedida
        $hora = $byemodel->getHora();
        $byeview->despedirse($hora);
        break;
    case 'saying':
        //Sacamos el numero del refran si es que existe, si no devolvemos 1
        $number = isset($_GET['number']) ? $_GET['number'] : 0;
        //Conseguimos el refran y lo pasamos por pantalla
        $refran = $sayingmodel->getSaying($number);
        $sayingview->readSaying($refran);
        break;
    default:
        echo "Ruta no válida.";
}
