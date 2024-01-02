<?php
declare(strict_types=1);
error_reporting(-1);
session_start();

function dump(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SideController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SideController::class, 'home']);
$app->router->get('/contact', [SideController::class, 'contact']);
$app->router->post('/contact', [SideController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
