<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/init.php';
$db = include $_SERVER['DOCUMENT_ROOT'] . '/database/start.php';

//Обновляет товар
$db->update('products', [
    'ID' => (int)$_POST['id'],
    'TITLE' => trim(strip_tags($_POST['title'])),
]);

//Редирект на список товаров
header('Location: /');

?>
