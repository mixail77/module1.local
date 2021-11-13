<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/init.php';
$db = include $_SERVER['DOCUMENT_ROOT'] . '/database/start.php';

//Удаляет товар
$db->delete('products', (int)$_GET['id']);

//Редирект на список товаров
header('Location: /');

?>
