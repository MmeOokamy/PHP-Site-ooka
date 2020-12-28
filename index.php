<?php

use App\Controllers\AboutController;
use App\Controllers\DevController;
use App\Controllers\MainController;
use App\Data\AbstractView;
use App\Data\AbstractModel;
use App\Views\MainView;
use App\Views\StandardView;


require_once __DIR__ . '/vendor/autoload.php';

$youAreHere = filter_input(INPUT_GET, "view");

$routeMapping = [
    'main' => MainController::class,
    'about' => AboutController::class,
    'checklist' => DevController::class

];

foreach ($routeMapping as $routeValue => $className) {

    if ($youAreHere === $routeValue) {

        $controller = new $className;
        $controller->render();
        break;
    }
}

if (!isset($controller)) {
    $controller = new MainController();
    $controller->home();
}
