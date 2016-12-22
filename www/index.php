<?php

namespace SelfServe;

if (file_exists(dirname(__FILE__).'/../config.inc.php')) {
    require_once dirname(__FILE__).'/../config.inc.php';
} else {
    require dirname(__FILE__).'/../config.sample.php';
}


use RegExpRouter as RegExpRouter;
use Savvy as Savvy;

$routes = include __DIR__ . '/../data/routes.php';
$router = new RegExpRouter\Router(array('baseURL' => Controller::$url));
$router->setRoutes($routes);
if (isset($_GET['model'])) {
    // Prevent injecting a specific model through the web interface
    unset($_GET['model']);
}

$savvy = new Savvy();
$savvy->setTemplatePath(__DIR__.'/templates');

$controller = new Controller($_GET);
$savvy->addGlobal('controller', $controller);
echo $savvy->render($controller);
