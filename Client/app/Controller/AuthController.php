<?php

class AuthController
{
    public function index()
    {
        $user = new User();
        $data = $user->getUser();
        include 'C:\xampp\htdocs\BTL_LIEM\Client\app\Controller\AuthController.php';
    }
}
