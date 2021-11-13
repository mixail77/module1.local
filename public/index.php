<?php

//Маршрутизация
$arRoutes = [
    '/' => '/index.php',
    '/show' => '/index.php',
];

$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $arRoutes)) {

    include $_SERVER['DOCUMENT_ROOT'] . $arRoutes[$route];
    exit();

} else {

    include $_SERVER['DOCUMENT_ROOT'] . '/404.php';

}

?>