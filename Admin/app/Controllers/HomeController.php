<?php
class HomeController{
    public function getUser(){
        $homeModel = new HomeModel();
        $data = $homeModel->getData();
        include 'app/Views/admin-ecomus/index.php';
    }
}