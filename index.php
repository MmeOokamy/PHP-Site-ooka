<?php

use App\Controllers\AboutController;
use App\Controllers\DevController;
use App\Controllers\MainController;


require_once __DIR__ . '/vendor/autoload.php';

$youAreHere = filter_input(INPUT_GET, "view");

$routeMapping = [
    'main' => MainController::class,
    'about' => AboutController::class,
<<<<<<< Updated upstream
    'checklist' => DevController::class
=======
    'checklist' => DevController::class,
    'addList' => AddDevListController::class

>>>>>>> Stashed changes
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
