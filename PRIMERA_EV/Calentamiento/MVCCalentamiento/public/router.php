<?php
require_once '../src/model/helloModel.php';
require_once '../src/controller/helloController.php';
require_once '../src/view/helloView.php';
require_once '../src/model/byeModel.php';
require_once '../src/controller/byeController.php';
require_once '../src/view/byeView.php';
require_once '../src/model/sayingModel.php';
require_once '../src/controller/sayingController.php';
require_once '../src/view/sayingView.php';

require_once('../src/controller/listController.php');
require_once('../src/model/listModel.php');
require_once('../src/view/listView.php');

require_once('../src/core/DataBase.php');

// Inicializamos los modelos, controladores y vistas
$hellomodel = new helloModel();
$helloview = new helloView();
$hellocontroller = new helloController($hellomodel,$helloview);

$byemodel = new byeModel();
$byeview = new byeView();
$byecontroller = new byeController($byemodel,$byeview);

$sayingmodel = new sayingModel();
$sayingview = new sayingView();
$sayingcontroller = new sayingController($sayingmodel,$sayingview);

$listmodel = new ListModel();
$listview = new listView();
$listcontroller = new listController($listmodel,$listview);

echo $_GET['route'];

// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

echo "<br>";

switch ($route) {
    case 'hello':
        //Conseguimos la hora y lanzamos el saludo
        $hellocontroller->saludo();
        break;
    case 'bye':
        //Conseguimos la hora y lanzamos la despedida
        $byecontroller->despedida();
        break;
    case 'saying':
        //Sacamos una lista de refranes
        $sayingcontroller->unRefran();
        break;
    case 'list':
        //Conseguimos todos los registros
        $listcontroller->getList();
        break;
    default:
        echo "Ruta no válida.";
}
