<?php

require 'src/Controllers/MainController.php';
require 'src/Controllers/AboutController.php';
require 'src/Controllers/DevListController.php';
require 'src/Controllers/AddDevListController.php';
require 'src/Models/Model.php';
require 'src/Data/DatabaseHandler.php';


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
