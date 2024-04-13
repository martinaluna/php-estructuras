<?php
declare(strict_types=1);

namespace Core\Config;
use Core\Controllers\FrontController;
final class Kernel {
    public function run(): string {
        return  FrontController::uriHook();
    }
}

