<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Roberto\App\Core\Request;
use Roberto\App\Core\RouteCollection;
use Roberto\App\Core\Dispatcher;

// Crear instancias necesarias
$request = new Request();
$routeCollection = new RouteCollection();

// Despachar la solicitud
$dispatcher = new Dispatcher($routeCollection->getRoutes(), $request);
