<?php

declare(strict_types=1);

namespace Core\Services;

final class AuthMiddleware {

    const USER = 'test@test.com';
    const PASS = '1234';
    const TOKEN = '123456789';

    public function checkToken() : bool {
        return isset($_SESSION['user_token']) && $_SESSION['user_token'] != self::TOKEN;
    }
    public function validateSession() {
        if (!$this->checkToken()) {
            $_SESSION['error'] = 'Access denied';
            header('Location: http://localhost/php-estructuras/login');
        }
    
    }
}