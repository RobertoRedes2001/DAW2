<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Roberto\App\Core\Request;
use Roberto\App\Core\RouteCollection;
use Roberto\App\Core\Dispatcher;

$routeCollection = new RouteCollection();
$currentRequest = new Request();
$dispatcher = new Dispatcher($routeCollection->getRoutes(), $currentRequest);
