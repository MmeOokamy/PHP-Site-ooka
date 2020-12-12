<?php

require 'src/controllers/MainController.php';
require 'src/data/DatabaseHandler.php';

$youAreHere = filter_input(INPUT_GET, "youAreHere");

$routeMapping = [
    'main' => MainController::class,

];

foreach ($routeMapping as $routeValue => $className) {

    if ($youAreHere === $routeValue) {

        $controller = new $className;
        $controller->routeMappingManage();
        break;
    }
}

if(empty($controller)){
    $controller = new MainController();
    $controller->routeMappingManage();
}
