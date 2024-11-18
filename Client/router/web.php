<?php

$authController = new AuthController();

// Định nghĩa bảng route
$routes = [
    'GET' => [
        '/' => [$homeController, 'index'],
        '/products' => [$productController, 'index'],
        '/products/{id}' => [$productController, 'show'],
        '/login' => [$authController, 'showLoginForm'], // Hiển thị form đăng nhập
        '/register' => [$authController, 'showRegistrationForm'], // Hiển thị form đăng ký
    ],
    'POST' => [
        '/products/add' => [$productController, 'store'],
        '/products/edit/{id}' => [$productController, 'update'],
        '/products/delete/{id}' => [$productController, 'destroy'],
        '/login' => [$authController, 'login'], // Xử lý đăng nhập
        '/register' => [$authController, 'register'], // Xử lý đăng ký
        '/logout' => [$authController, 'logout'], // Xử lý đăng xuất
    ],
];

// Lấy URL và phương thức hiện tại
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Tìm và xử lý route
foreach ($routes[$requestMethod] ?? [] as $route => $action) {
    $pattern = preg_replace('/\{([a-zA-Z_]+)\}/', '(\d+)', $route); // Thay {id} bằng regex
    if (preg_match('#^' . $pattern . '$#', $requestUri, $matches)) {
        array_shift($matches); // Bỏ phần khớp đầy đủ
        call_user_func_array($action, $matches);
        exit; // Kết thúc xử lý
    }
}

// Nếu không tìm thấy route
http_response_code(404);
echo "404 - Not Found";
