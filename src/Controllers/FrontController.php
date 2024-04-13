<?php

namespace Core\Controllers;
use Core\Controllers\Contract\ControllerInterface;
use Core\Controllers\LayoutController;
class FrontController  extends LayoutController implements ControllerInterface {
    public function init(){

    }
    public static function uriHook(string $data = ''): string {

        echo self::head(); #porque es static function

        if($_SERVER['REQUEST_URI'] == '/php-estructuras/test/') {
            return '<h1>Welcome</h1>';
        } else {
            return '<h1>Welcome Again</h1>';
        }
    }
}

# front controller -> controlar completamente las peticiones desde un solo punto (frontcontroller.php)
