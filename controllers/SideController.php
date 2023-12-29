<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class SideController extends Controller
{
    public static function home()
    {
        $params = [
            'name' => 'kutlumbek',
        ];
        return self::render('home', $params);
    }
    public static function contact()
    {
        return self::render('contact');
    }
    public static function handleContact()
    {
        return '1Handling submitted data';
    }

}