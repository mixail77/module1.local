<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/init.php';
$db = include $_SERVER['DOCUMENT_ROOT'] . '/database/start.php';

//Добавляет новый товар
$db->create('products', [
    'TITLE' => trim(strip_tags($_POST['title'])),
]);

//Редирект на список товаров
header('Location: /');

?>
