<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SideController extends Controller
{
    public static function home(): string
    {
        $params = [
            'name' => 'kutlumbek',
        ];

        return self::render('home', $params);
    }
    public static function contact(): string
    {
        return self::render('contact');
    }
    public static function handleContact(Request $request)
    {
        $body = $request->getBody();
        dump($body);
        return 'Handling submitted data';
    }

}