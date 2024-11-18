
<?php
$homeController = new HomeController();

// Routes cho Home
if ($_SERVER['REQUEST_URI'] === '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $homeController->getUser();
}
