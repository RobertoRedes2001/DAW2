<?php
// Inclusión del archivo de autoloading de Composer
require_once "../vendor/autoload.php";

// Importación de las clases necesarias
use App\Core\Dispatcher;
use App\Core\Request;
use App\Core\RouteCollection;
use Dotenv\Dotenv;

// Configuración para mostrar todos los errores
error_reporting(E_ALL);
ini_set('display_errors', '1');

$dotenv = Dotenv::createImmutable("../../../../"); 
$dotenv->load();

// Creación de una nueva colección de rutas (RouteCollection)
$routes = new RouteCollection();

// Creación de una nueva solicitud (Request)
$request = new Request();

// Creación de un nuevo despachador (Dispatcher) con la colección de rutas y la solicitud
$dispatcher = new Dispatcher($routes, $request);

