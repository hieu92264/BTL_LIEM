<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


class HomeController
{
    private $homeModel;

    public function __construct()
    {
        // Không cần require_once khi dùng autoloading
        $this->homeModel = new HomeModel();
    }

    public function getUser()
    {
        // $data = $this->homeModel->getData();
        // // var_dump($data);
        // include 'app/Views/admin-ecomus/login.php';
        return "ábgfs";
    }
}
