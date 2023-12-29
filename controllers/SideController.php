<?php

namespace app\controllers;

use app\core\Application;

class SideController
{
    public static function home()
    {
        $params = [
            'name' => 'kutlumbek',
        ];
        return Application::$app->router->renderView('home', $params);
    }
    public static function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public static function handleContact()
    {
        return '1Handling submitted data';
    }

}