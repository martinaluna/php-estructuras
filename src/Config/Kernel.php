<?php
declare(strict_types=1);

namespace Core\Config;
use Core\Controllers\FrontController;
use Dotenv\Dotenv;
final class Kernel {
    public static function run() : string
    {
        return FrontController::uriHook();
    }
}

final class Kernel {
    public function run(): string {
        $this->getDoEnv();
        session_start();
        $_SESSION['error'] .= '';
        $_SESSION['PageNotFound'] = true;
        $_SESSION['usetoken'] .= '';
    }
    public function getDoEnv() : void {
        $loadCustonDefines = './env';
        if (file_exists($loadCustonDefines)) {
          //  $dotenv = Dotenv::createInmutable('./');
            //$dotenv->load();    
        }
    }
    
}
