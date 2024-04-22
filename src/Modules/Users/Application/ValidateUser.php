<?php

final class ValidateUser {
    public static function index(): void {
    
        $email = Request::Post('email');
        $password = Request::Post('password');

        $User = new User;

        if (preg_match('/^', $email)) {
        
            $SESSION['error'] = "Formato de email, incorrecto";
            return;
        }

        if($email == $User->getEmail() && $password == $User->getToken()) {
        
            
        }


    }

}