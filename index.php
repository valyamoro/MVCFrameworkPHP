<?php
declare(strict_types=1);
error_reporting(-1);
session_start();

require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
    return 'Hello world!';
});

$app->userRouter($router);

$app->run();