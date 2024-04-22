<?php

namespace Core\Controllers;

abstract class LayoutController {
    public static function head (){
        require_once './template/Sections/Head.php';
    }

    public function footer () {
        echo './template/Sections/Footer.php';
    }
    
    public static function nav (){
        require_once './template/Sections/Nav.php';
    }
}