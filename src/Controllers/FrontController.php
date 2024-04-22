<?php

declare(strict_types=1);

namespace Core\Controllers;
use Core\Contracts\ControllerInterface;
use Core\Controllers\LayoutController;
use Core\Services\AuthMiddleware;
// use Core\Controllers\RequestController;
use MessageFormatter;
class FrontController  extends LayoutController {
    public function init(){

    }
    public static function uriHook(string $data = ''): string {
        $Uri = $_SERVER['REQUEST_URI'];
        //$RequestController = new RequestController();

        if ($Uri == '/php-estructuras/') {
            
            return (string) include './template/Pages/Home/Home.php';

        } elseif ($Uri == '/php-estructuras/login/' || $Uri == '/php-estructuras/login') {

            return (string) include './template/Pages/Login/Login.php';    

        } elseif ($Uri == '/php-estructuras/backoffice/' || $Uri == '/php-estructuras/backoffice') {
            $Middleware = new AuthMiddleware();
            $Middleware->validateSession();

            return (string) include './template/Pages/Backoffice/Backoffice.php';
            //$Middleware = new AuthMiddleware();
            //$Middleware->validateSession();
        }

        return (string) include './template/Layout/NotFound.php';
       
    }
}

# front controller -> controlar completamente las peticiones desde un solo punto (frontcontroller.php)
