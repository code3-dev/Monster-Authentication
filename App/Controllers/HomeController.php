<?php

namespace Monster\App\Controllers;

use Monster\App\Models\Auth\Auth;

class HomeController
{
    public function index()
    {
        $authModel = new Auth();
 
        if (isset($_COOKIE['auth_token']) && isset($_COOKIE['auth_email'])) {
            $token = $_COOKIE['auth_token'];
            $email = $_COOKIE['auth_email'];

            // Get user by email and token
            $user = $authModel->getUserByEmail($email, $token);

            if (!$user) {
                header('Location: /auth/login');
                exit();
            }

            $data = [
                "user" => $user,
                "token" => $token
            ];

            view("index", $data);
        }else {
            header('Location: /auth/login');
            exit();
        }
    }
}