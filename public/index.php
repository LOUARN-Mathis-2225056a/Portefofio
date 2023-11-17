<?php

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use app\controllers\Home as HomeController;

try {
    if (isset($_SERVER['REQUEST_URI']) && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        $route = ($_SERVER['REQUEST_URI'] === '/') ? '/' : explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        switch ($route[0]){
            case '/':
                header('Location: /home');
                break;
            case 'home':

                (new HomeController())->execute();
                break;
            default:
                break;
        }
    }
}catch (Exception){

}