<?php

use App\Controllers\AboutController;
use App\Controllers\DevController;
use App\Controllers\ErrorController;
use App\Controllers\MainController;


require_once __DIR__ . '/vendor/autoload.php';

if(isset($_REQUEST['_url'])){
    $routing = $_REQUEST['_url'];
} else {
    $routing = '/';
}

switch ($routing){
    case '/':
        $controller = new MainController();
        $view = $controller->home();
        break;
    case '/about':
        $controller = new AboutController();
        $view = $controller->about();
        break;
    case '/todolist':
        $controller = new DevController();
        $view = $controller->allDev();
        break;
    default:
        $controller = new ErrorController;
        $view = $controller->pageNotFound();

}

$view->render();


/**
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
 **/