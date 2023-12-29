<?php
declare(strict_types=1);
error_reporting(-1);
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SideController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SideController::class, 'home']);
$app->router->get('/contact', [SideController::class, 'contact']);
$app->router->post('/contact', [SideController::class, 'handleContact']);

$app->run();
