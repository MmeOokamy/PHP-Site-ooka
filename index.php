<?php

require 'src/controllers/MainController.php';
require 'src/controllers/AboutController.php';
require 'src/controllers/DevListController.php';
require 'src/controllers/AddDevListController.php';
require 'src/models/Model.php';
require 'src/data/DatabaseHandler.php';


$youAreHere = filter_input(INPUT_GET, "view");

$routeMapping = [
    'main' => MainController::class,
    'about' => AboutController::class,
    'checklist' => DevListController::class,
    'addList' => AddDevListController::class

];

foreach ($routeMapping as $routeValue => $className) {

    if ($youAreHere === $routeValue) {

        $controller = new $className;
        $controller->routeMappingManage();
        break;
    }
}

if (!isset($controller)) {
    $controller = new MainController();
    $controller->routeMappingManage();
}
