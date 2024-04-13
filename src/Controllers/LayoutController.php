<?php

namespace Core\Controllers;

abstract class LayoutController {
    public static function head (){
        echo '<link rel="stylesheet" type="text/css" href="css/layout.css">';
    }

    public function footer () {
        echo '<script src="js/layout.js"></script>';
    }
}