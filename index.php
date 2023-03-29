<?php

$request_url = $_SERVER['REQUEST_URI'];

$path = trim(parse_url($request_url, PHP_URL_PATH), '/');

$routes = [
    '' => 'products.php',
    'index.php' => 'products.php',
    'add-product' => 'add-product.php',
];

if (array_key_exists($path, $routes)) {
    include($routes[$path]);
} else {
    header('HTTP/1.0 404 Not Found');
    echo 'Page not found';
}
?>
