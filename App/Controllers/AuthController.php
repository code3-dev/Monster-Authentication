<?php

namespace Monster\App\Controllers;

use Monster\App\Models\Auth\Auth;

class AuthController
{
    public function login()
    {
        $authModel = new Auth();

        if (isset($_COOKIE['auth_token']) && isset($_COOKIE['auth_email'])) {
            $token = $_COOKIE['auth_token'];
            $email = $_COOKIE['auth_email'];

            // Get user by email and token
            $user = $authModel->getUserByEmail($email, $token);
 
            if ($user) {
                header('Location: /');
                exit();
            }
        }

        // Render the login view if no valid token is found
        view('auth.login');
    }

    public function register()
    {
        $authModel = new Auth();

        if (isset($_COOKIE['auth_token']) && isset($_COOKIE['auth_email'])) {
            $token = $_COOKIE['auth_token'];
            $email = $_COOKIE['auth_email'];

            // Get user by email and token
            $user = $authModel->getUserByEmail($email, $token);

            if ($user) {
                header('Location: /');
                exit();
            }
        }

        // Render the registration view if no valid token is found
        view('auth.register');
    }
}
