<?php

require 'src/controllers/MainController.php';
require 'src/controllers/AboutController.php';
require 'src/data/DatabaseHandler.php';

$youAreHere = filter_input(INPUT_GET, "yah");

$routeMapping = [
    'main' => MainController::class,
    'about' => AboutController::class

];

foreach ($routeMapping as $routeValue => $className) {

    if ($youAreHere === $routeValue) {

        $controller = new $className;
        $controller->routeMappingManage();
        break;
    }
}

if(!isset($controller)){
    $controller = new MainController();
    $controller->routeMappingManage();
}