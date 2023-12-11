<?php

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use app\controllers\Home as HomeController;
use app\controllers\ITProject as ITProjectController;
use app\controllers\OtherProject as OtherProjectController;
use app\controllers\AboutMe as AboutMeController;
try {
    if (isset($_SERVER['REQUEST_URI']) && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        $route = ($_SERVER['REQUEST_URI'] === '/') ? '/' : explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        if($route[1]==null){
            if ($_ENV['lang'] == null) {
                $_ENV['lang'] = 'en';
            }
        }else{
            $_ENV['lang'] = $route[1];
        }
        switch ($route[0]){
            case '/':
                header('Location: /home/en');
                break;
            case 'home':
                (new HomeController())->execute();
                break;
            case 'it-project':
                (new ITProjectController())->execute();
                break;
            case 'other-project':
                (new OtherProjectController())->execute();
                break;
            case 'about-me':
                (new AboutMeController())->execute();
                break;
            default:
                break;
        }
    }
}catch (Exception){

}